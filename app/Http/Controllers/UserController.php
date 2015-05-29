<?php

namespace petrie\Http\Controllers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Config;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Sentinel\FormRequests\ChangePasswordRequest;
use Sentinel\FormRequests\UserCreateRequest;
use Sentinel\FormRequests\UserUpdateRequest;
use Sentinel\Repositories\Group\SentinelGroupRepositoryInterface;
use Sentinel\Repositories\User\SentinelUserRepositoryInterface;
use Sentinel\Traits\SentinelRedirectionTrait;
use Sentinel\Traits\SentinelViewfinderTrait;
use Vinkla\Hashids\HashidsManager;

class UserController extends BaseController
{
    /**
     * Traits
     */
    use SentinelRedirectionTrait;
    use SentinelViewfinderTrait;

    /**
     * Constructor
     */
    public function __construct(
        SentinelUserRepositoryInterface $userRepository,
        SentinelGroupRepositoryInterface $groupRepository,
        HashidsManager $hashids
    ) {
        $this->userRepository  = $userRepository;
        $this->groupRepository = $groupRepository;
        $this->hashids         = $hashids;

        // You must have admin access to proceed
        $this->middleware('sentry.admin');
    }

    /**
     * Display a paginated index of all current users, with throttle data
     *
     * @return View
     */
    public function index()
    {
        // Paginate the existing users
        $users       = $this->userRepository->all();
        $perPage     = 15;
        $currentPage = Input::get('page') - 1;
        $pagedData   = array_slice($users, $currentPage * $perPage, $perPage);
        $users       = new Paginator($pagedData, $perPage, $currentPage);

        return $this->viewFinder('Sentinel::users.index', ['users' => $users]);
    }


    /**
     * Show the "Create new User" form
     *
     * @return View
     */
    public function create()
    {
        return $this->viewFinder('Sentinel::users.create');
    }

    /**
     * Create a new user account manually
     *
     * @return Redirect
     */
    public function store(UserCreateRequest $request)
    {
        // Create and store the new user
        $result = $this->userRepository->store(Input::all());

        // Determine response message based on whether or not the user was activated
        $message = ($result->getPayload()['activated'] ? trans('Sentinel::users.addedactive') : trans('Sentinel::users.added'));

        // Finished!
        return $this->redirectTo('users_store', ['success' => $message]);
    }


    /**
     * Show the profile of a specific user account
     *
     * @param $id
     *
     * @return View
     */
    public function show($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Get the user
        $user = $this->userRepository->retrieveById($id);

        return $this->viewFinder('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $hash
     *
     * @return Redirect
     */
    public function edit($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Get the user
        $user = $this->userRepository->retrieveById($id);

        // Get all available groups
        $groups = $this->groupRepository->all();

        // Pull the custom fields from config
        $isProfileUpdate = ($user->email == Sentry::getUser()->email);
        $customFields = config('sentinel.additional_user_fields');

        // Determine the form post route
        if ($isProfileUpdate) {
            $profileFormAction = route('sentinel.profile.update');
            $passwordFormAction = route('sentinel.profile.password');
        } else {
            $profileFormAction =  route('sentinel.users.update', $user->hash);
            $passwordFormAction = route('sentinel.password.change', $user->hash);
        }

        return $this->viewFinder('admin.users.edit', [
            'user' => $user,
            'groups' => $groups,
            'isProfileUpdate' => $isProfileUpdate,
            'customFields' => $customFields,
            'profileFormAction' => $profileFormAction,
            'passwordFormAction' => $passwordFormAction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string $hash
     *
     * @return Redirect
     */
    public function update(UserUpdateRequest $request, $hash)
    {
        // Gather Input
        $data = Input::all();

        // Decode the hashid
        $data['id'] = $this->hashids->decode($hash)[0];

        // Attempt to update the user
        $result = $this->userRepository->update($data);

        // Done!
        return $this->redirectViaResponse('users_update', $result);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  string $hash
     *
     * @return Redirect
     */
    public function destroy($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Remove the user from storage
        $result = $this->userRepository->destroy($id);

        return $this->redirectViaResponse('users_destroy', $result);
    }

    /**
     * Change the group memberships for a given user
     *
     * @param $hash
     *
     * @return Redirect
     */
    public function updateGroupMemberships($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Gather input
        $groups = Input::get('groups');

        // Change memberships
        $result = $this->userRepository->changeGroupMemberships($id, $groups);

        // Done
        return $this->redirectViaResponse('users_change_memberships', $result);
    }

    /**
     * Process a password change request
     *
     * @param  string $hash
     *
     * @return redirect
     */
    public function changePassword(ChangePasswordRequest $request, $hash)
    {
        // Gather input
        $data       = Input::all();
        $data['id'] = $this->hashids->decode($hash)[0];

        // Grab the current user
        $user = $this->userRepository->getUser();

        // Change the User's password
        $result = ($user->hasAccess('admin') ? $this->userRepository->changePasswordWithoutCheck($data) : $this->userRepository->changePassword($data));

        // Was the change successful?
        if (!$result->isSuccessful()) {
            Session::flash('error', $result->getMessage());

            return Redirect::back();
        }

        return $this->redirectViaResponse('users_change_password', $result);
    }

    /**
     * Process a suspend user request
     *
     * @param  string $hash
     *
     * @return Redirect
     */
    public function suspend($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Trigger the suspension
        $result = $this->userRepository->suspend($id);

        return $this->redirectViaResponse('users_suspend', $result);
    }

    /**
     * Unsuspend user
     *
     * @param  string $hash
     *
     * @return Redirect
     */
    public function unsuspend($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Trigger the unsuspension
        $result = $this->userRepository->unsuspend($id);

        return $this->redirectViaResponse('users_unsuspend', $result);
    }

    /**
     * Ban a user
     *
     * @param  string $hash
     *
     * @return Redirect
     */
    public function ban($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Ban the user
        $result = $this->userRepository->ban($id);

        return $this->redirectViaResponse('users_ban', $result);
    }

    /**
     * Unban a user
     *
     * @param string $hash
     *
     * @return Redirect
     */
    public function unban($hash)
    {
        // Decode the hashid
        $id = $this->hashids->decode($hash)[0];

        // Unban the user
        $result = $this->userRepository->unban($id);

        return $this->redirectViaResponse('users_unban', $result);
    }

}



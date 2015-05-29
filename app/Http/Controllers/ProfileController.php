<?php

namespace petrie\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Sentinel\FormRequests\ChangePasswordRequest;
use Sentinel\FormRequests\UserUpdateRequest;
use Sentinel\Repositories\Group\SentinelGroupRepositoryInterface;
use Sentinel\Repositories\User\SentinelUserRepositoryInterface;
use Sentinel\Traits\SentinelRedirectionTrait;
use Sentinel\Traits\SentinelViewfinderTrait;

class ProfileController extends BaseController
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
        SentinelGroupRepositoryInterface $groupRepository
    ) {
        // DI Member assignment
        $this->userRepository  = $userRepository;
        $this->groupRepository = $groupRepository;

        // You must have an active session to proceed
        $this->middleware('sentry.auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show()
    {
        // Get the user
        $user = $this->userRepository->retrieveById(Session::get('userId'));

        return $this->viewFinder('Sentinel::users.show', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit()
    {
        // Get the user
        $user = $this->userRepository->retrieveById(Session::get('userId'));

        // Get all available groups
        $groups = $this->groupRepository->all();

        return $this->viewFinder('Sentinel::users.edit', [
            'user' => $user,
            'groups' => $groups
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(UserUpdateRequest $request)
    {
        // Gather Input
        $data       = Input::all();
        $data['id'] = Session::get('userId');

        // Attempt to update the user
        $result = $this->userRepository->update($data);

        // Done!
        return $this->redirectViaResponse('profile_update', $result);
    }

    /**
     * Process a password change request
     *
     * @return Redirect
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        // Gather input
        $data       = Input::all();
        $data['id'] = Session::get('userId');

        // Grab the current user
        $user = $this->userRepository->getUser();

        // Change the User's password
        $result = ($user->hasAccess('admin') ? $this->userRepository->changePasswordWithoutCheck($data) : $this->userRepository->changePassword($data));

        // Was the change successful?
        if (!$result->isSuccessful()) {
            Session::flash('error', $result->getMessage());

            return Redirect::back();
        }

        return $this->redirectViaResponse('profile_change_password', $result);
    }

}

<?php

namespace petrie\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\Paginator;
use Sentinel\Repositories\Group\SentinelGroupRepositoryInterface;
use Sentinel\Repositories\User\SentinelUserRepositoryInterface;
use Vinkla\Hashids\HashidsManager;
use View, Input, Event, Redirect, Session, Config;

class AcpController extends BaseController
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
	    SentinelUserRepositoryInterface $userRepository,
	    SentinelGroupRepositoryInterface $groupRepository,
	    HashidsManager $hashids)
    {
	    $this->userRepository  = $userRepository;
	    $this->groupRepository = $groupRepository;
	    $this->hashids         = $hashids;

	    // You must have admin access to proceed
	    $this->middleware('sentry.admin');
    }

    /**
     * Display the administration dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display the user administration page.
     *
     * @return Response
     */
    public function users()
    {

        $users       = $this->userRepository->all();
        $perPage     = 15;
        $currentPage = Input::get('page') - 1;
        $pagedData   = array_slice($users, $currentPage * $perPage, $perPage);
        $users       = new Paginator($pagedData, $perPage, $currentPage);

        return view('admin.users.index')->withUsers($users);
    }

    /**
     * Display the back-end style guide.
     *
     * @return Response
     */
    public function backend()
    {
        return view('admin.guide-back');
    }

    /**
     * Display the front-end style guide.
     *
     * @return Response
     */
    public function frontend()
    {
        return view('admin.guide-front');
    }

    /*
     * Temporary pages that should be removed for any site other than Petrie
     */

    // SVG Icon Glossary
    public function svg()
    {
        return view('admin.svg');
    }

    // Morris Chart Examples
    public function morris()
    {
        return view('admin.morris');
    }

    // Easy-Pie-Chart Examples
    public function easypie()
    {
        return view('admin.easypie');
    }
}

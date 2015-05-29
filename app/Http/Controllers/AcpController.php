<?php

/**
 * AcpController.php
 *
 * PHP Version 5.6
 *
 * @category AcpController
 * @package  Petrie
 * @author   Nathan Burgess <nathanburgess@me.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/SimplyReactive/petrie
 *
 */

namespace petrie\Http\Controllers;

use Illuminate\Config;
use Illuminate\Contracts\Events;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Sentinel\Repositories\Group\SentinelGroupRepositoryInterface;
use Sentinel\Repositories\User\SentinelUserRepositoryInterface;
use Vinkla\Hashids\HashidsManager;

/**
 * AcpController
 *
 * @category Class
 * @package  Petrie
 * @author   Nathan Burgess <nathanburgess@me.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/SimplyReactive/petrie
 *
 */
class AcpController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @param SentinelUserRepositoryInterface  $userRepository  The user repo
     * @param SentinelGroupRepositoryInterface $groupRepository The group repo
     * @param HashidsManager                   $hashids         Hash IDs manager
     */
    public function __construct(SentinelUserRepositoryInterface $userRepository,
        SentinelGroupRepositoryInterface $groupRepository,
        HashidsManager $hashids
    ) {
        $this->userRepository = $userRepository;
        $this->groupRepository = $groupRepository;
        $this->hashids = $hashids;

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

        $users = $this->userRepository->all();
        $perPage = 15;
        $currentPage = Input::get('page') - 1;
        $pagedData = array_slice($users, $currentPage * $perPage, $perPage);
        $users = new Paginator($pagedData, $perPage, $currentPage);

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

    /**
     * Display the SVG Icons example
     *
     * @return Response
     */
    public function svg()
    {
        return view('admin.svg');
    }

    /**
     * Display the Morris Charts example
     *
     * @return Response
     */
    public function morris()
    {
        return view('admin.morris');
    }

    /**
     * Displaythe Easy Pie Charts example
     *
     * @return Response
     */
    public function easypie()
    {
        return view('admin.easypie');
    }
}

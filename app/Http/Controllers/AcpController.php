<?php

namespace Petrie\Http\Controllers;

class AcpController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // Uncomment to force this controller to require auth
        // $this->middleware('auth');
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
        return view('admin.users');
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

<?php namespace Petri\Http\Controllers;

class AcpController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        // Uncomment to force this controller to require auth
		// $this->middleware('auth');
	}

    /**
     * Display the adminstration index
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }

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

	// Morris Chart Examples
	public function easypie()
	{
		return view('admin.easypie');
	}
}
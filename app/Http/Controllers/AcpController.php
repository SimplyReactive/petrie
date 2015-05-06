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
     * Display the index
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }

	/**
	 * Display the theme page
	 *
	 * @return Response
	 */
	public function svg()
	{
		return view('admin.svg');
	}
}
<?php namespace L5MatProto\Http\Controllers;

class PageController extends Controller {

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
        return view('index');
    }

    /**
     * Display the about page
     *
     * @return Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the theme page
     *
     * @return Response
     */
    public function examples()
    {
        return view('examples');
    }
}
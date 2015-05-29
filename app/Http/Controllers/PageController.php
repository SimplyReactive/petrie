<?php

namespace petrie\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display the index.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the about page.
     *
     * @return Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the theme page.
     *
     * @return Response
     */
    public function examples()
    {
        return view('examples');
    }
}

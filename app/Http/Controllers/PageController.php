<?php

/**
 * PageController.php
 *
 * PHP Version 5.6
 *
 * @category Controller
 * @package  Petrie
 * @author   Nathan Burgess <nathanburgess@me.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/SimplyReactive/petrie
 *
 */

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

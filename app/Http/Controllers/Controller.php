<?php

/**
 * Controller.php
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

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use DispatchesCommands, ValidatesRequests;
}

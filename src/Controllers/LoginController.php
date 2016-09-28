<?php

namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Routing\Controller;

/**
 * Class LoginController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class LoginController extends Controller
{

    public function index(){
        return 'ss<a href="/github/auth">Login</a>' ;
    }

}

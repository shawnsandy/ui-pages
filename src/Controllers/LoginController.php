<?php

namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class LoginController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class LoginController extends Controller
{

    public function index(Request $request){
        var_dump($request->session()->all());
        return '<a href="/github/auth">Login</a>' ;
    }

}

<?php

namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite as Socialite;


/**
 * Class GithubLoginController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class GithubLoginController extends Controller
{

    public function auth(){
        return Socialite::driver('github')->scopes(['gist', 'user'])->redirect();
    }

    public function handleAuth(){
//        try{
//            $user = Socialite::with('github')->user();
//        } catch (\Exception $e){
//            return Redirect::to('/dash-login');
//        }

        $user = Socialite::driver('github')->stateless()->user();

        var_dump($user);
        return $user->user['login'];

    }

}

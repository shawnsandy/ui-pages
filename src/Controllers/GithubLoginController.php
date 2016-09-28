<?php

namespace ShawnSandy\PageKit\Controllers;
use Illuminate\Routing\Controller;
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

        $user = Socialite::with('github')->user();
        var_dump($user);
        return $user->user['login'];

    }

}

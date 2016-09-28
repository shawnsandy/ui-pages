<?php

namespace ShawnSandy\PageKit\Controllers;

use Exception;
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

    public function auth()
    {
        return Socialite::driver('github')->scopes(['gist', 'user'])->redirect();
    }

    public function handleAuth()
    {
        try {
            $user = Socialite::with('github')->stateless()->user();
        } catch (Exception $e) {
            return Redirect::to('/dash-login');
        }

//      $user = Socialite::driver('github')->stateless()->user()
        $this->loginUser($user);
        var_dump($user);
        return $user->user['login'];

    }

    protected function loginUser($user)
    {
        session([
            config('pagekit_session_key', 'pagekit_session') => [
                'github_id' => $user->id,
                'github_nickname' => $user->nickname,
                'git_hub' => $user->email
            ]
        ]);

    }


}

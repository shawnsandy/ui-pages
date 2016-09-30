<?php

namespace ShawnSandy\PageKit\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Session\Store as Session;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite as Socialite;


/**
 * Class GithubLoginController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class GithubLoginController extends Controller
{
    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session ;
    }

    public function auth()
    {
        return Socialite::driver('github')->scopes(['gist', 'user'])->redirect();
    }

    public function handleAuth(Request $request)
    {
        try {
            $user = Socialite::with('github')->stateless()->user();
        } catch (Exception $e) {
            return Redirect::to('/dash-login');
        }

//      $user = Socialite::driver('github')->stateless()->user()
        $request->session()->put(
            config('pagekit.session_key', 'pagekit_session'), [
            'github_id' => $user->id,
            'github_name' => $user->name,
            'github_email' => $user->email
        ]);
        $request->session()->save();
        var_dump($user);
        return $user->user['login'];

    }

    protected function loginUser($user)
    {
        // $request->session()->put('key', 'value');

        $this->session->put(
            config('pagekit.session_key', 'pagekit_session'), [
                'github_id' => $user->id,
                'github_name' => $user->name,
                'github_email' => $user->email
            ]);
        $this->session->save();

    }


}

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
    /**
     * @var Session
     */
    protected $session;

    /**
     * GithubLoginController constructor.
     *
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session ;
    }

    /**
     * Auth sends off the request to the provider
     * @return mixed
     */
    public function auth()
    {
        return Socialite::driver('github')->scopes(['gist', 'user'])->redirect();
    }

    /**
     * Handles the request from the provider
     *
     * @param Request $request
     * @return Redirect
     */
    public function handleAuth(Request $request)
    {
        try {
            $user = Socialite::with('github')->stateless()->user();
        } catch (Exception $e) {
            return redirect('/dash-login');
        }

        $request->session()->put(
            config('pagekit.session_key', 'pagekit_session'), [
            'github_id' => $user->id,
            'github_name' => $user->name,
            'github_email' => $user->email
            ]
        );
            $request->session()->save();
            var_dump($user);
            return $user->user['login'];

    }

    /**
     * Checks if the user credentials matches the credentials stored
     * in the config
     *
     * @param $user
     */
    protected function loginUser($user)
    {
        $this->session->put(
            config('pagekit.session_key', 'pagekit_session'), [
                'github_id' => $user->id,
                'github_name' => $user->name,
                'github_email' => $user->email
            ]
        );
            $this->session->save();

    }


}

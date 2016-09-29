<?php


namespace ShawnSandy\PageKit\Classes;

use Auth;
use App\User;


class Socializer
{

    public function __construct()
    {

    }

    /**
     * Find or register user based on socialite credentials
     * checks if a user exists with email provided in response
     * If the user is not found register a user using socailite credentials
     *
     * @param $response
     * @param bool $formatted
     * @return User object
     * @internal param $string $response
     * @internal param array $user
     */
    public function findOrRegister($response, $formatted = false)
    {
        $user = $response;

        if(!$formatted)
        $user = $this->formatSocialiteResponse($response);

        if ($userExist = User::where($user['email'])->first())
            return $userExist;

        return $newUser = User::create($user);
    }

    /**
     * Login user via socialite credentials
     *
     * @param array $response
     * @param string $redirect
     * @param bool $formatted
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param array $user
     * @internal param $redirectUrl
     */
    public function login($response, $redirect = null, $formatted = false)
    {
        $user = $response ;

        if(!$formatted)
        $user = $this->formatSocialiteResponse($user);

        Auth::login($user);
        if (isset($redirect))
            return redirect($redirect);
    }

    /**
     * Registers and login the user via socialite / oauth credentials
     *
     * @param string $response
     * @param string $redirect
     * @param bool $formatted
     * @return bool
     * @internal param array $user
     */
    public function registerAndLogin($response, $redirect, $formatted = false)
    {
        $user = $response;
        if(!$formatted)
        $user = $this->formatSocialiteResponse($response);
        $loginUser = $this->findOrRegister($user);
        $this->login($loginUser, $redirect);
        return false;
    }

    /**
     * Formats the user response to the default to match default user schema
     * adds additional fields [nickname, avatar, token, token_expiration, provider]
     *
     * @param array $response
     * @return mixed
     */
    public function formatSocialiteResponse($response)
    {
        $user_details['social_id'] = $response->getId();
        $user_details['nickname'] = $response->getNickName();
        $user_details['name'] = $response->getName();
        $user_details['email'] = $response->getEmail();
        $user_details['avatar'] = $response->getAvatar();
        $user_details['token'] = $response->token;
        $user_details['token_expiration'] = $response->expiresIn;
        $user_details['provider'] = 'linkedin';

        return $user_details;

    }

}

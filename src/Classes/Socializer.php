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
     * checks to see if the user exists
     * or create a new user from user socialite credentials
     *
     * @param  $user
     * @return User object
     */
    public function findOrRegister($user)
    {
        if ($userExist = User::where($user['email'])->first()) {
            return $userExist; 
        }

        return $newUser = User::create($user);
    }

    /**
     * Login user via socialite credentials
     *
     * @param    $user
     * @param    $redirect
     * @internal param $redirectUrl
     */
    public function login($user, $redirect)
    {
        Auth::login($user);
        redirect($redirect);
    }

    /**
     * Registers and login the user via socialite / oauth credentials
     *
     * @param  $user
     * @param  $redirect
     * @return bool
     */
    public function registerAndLogin($user, $redirect)
    {
        $loginUser = $this->findOrRegister($user);
        $this->login($loginUser, $redirect);
        return false;
    }

}

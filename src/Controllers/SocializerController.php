<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/28/16
 * Time: 1:58 PM
 */

namespace packages\ShawnSandy\PageKit\src\Controllers;

use Exception;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;


/**
 * Class SocializeController - a generic controller to handle
 * Oauth authentication using laravel socialite
 *
 * @package packages\ShawnSandy\PageKit\src\Controllers
 */
class SocializerController extends Controller
{



    public function __construct()
    {

    }


    /**
     * Start the oauth process to redirect
     * Grabs driver passed in url parameter set by the route
     * All drivers are assigned in the config/services.php file
     * Please define a new scopes parameter to service array for your specified driver
     * @param $driver
     */
    public function startAuth($driver) {

        $scopes = config('services.'.$driver.'.scopes', null);

        return Socialite::driver($driver)->scopes($scopes)->redirect();

    }

    /**
     * @param $driver
     */
    public function handleAuth($driver) {

        try {
            $user = Socialite::with($driver)->stateless()->user();
        } catch (Exception $exception) {

        }


    }

}

<?php
namespace ShawnSandy\PageKit;



use Closure;
use Illuminate\Contracts\Config\Repository as Config;

/**
 * Class GitLoginMiddleware
 *
 * @author   "Shawn Sandy <shawnsandy04@gmail.com>"
 * @category Cat
 * @package  ShawnSandy\PageKit
 * @link     "shawn sandy <http://shawnsandy.com>"*
 */
class GitLoginMiddleware
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @var
     */
    protected $session;

    /**
     * GitLoginMiddleware constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }


    /**
     * Handle function
     *
     * @param  array   $request request array
     * @param  Closure $next    colsure
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        /**
         * Grab the pagekit session array[github_name, github_email]
         * match to the pagekit.github_username and pagekit.github_email
         * redirect to login on fail
         */

        $session = session(config('pagekit.session_key'));

        if ($session['github_name'] != config('pagekit.github_username')
            && $session['github_email'] != config('pagekit.github_email')
        ) {
            return redirect('/dash-login');
        }
        return $next($request);

    }

}

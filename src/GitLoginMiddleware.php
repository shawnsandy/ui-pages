<?php
namespace ShawnSandy\PageKit;

use Closure;
use Illuminate\Contracts\Config\Repository as Config;

class GitLoginMiddleware
{
    protected $config;
    protected $session;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function handle($request, Closure $next)
    {

        /**
         * grab the pagekit session array[github_name, github_email]
         * match to the pagekit.github_username and pagekit.github_email
         * redirect to login on fail
         */

        $session = session(config('pagekit.session_key'));
        if ($session['github_name'] != config('pagekit.github_username') && $session['github_email'] != config('pagekit.github_email')) {
           return redirect('/dash-login');
        }
        return $next($request);

    }

}

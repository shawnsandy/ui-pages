<?php

namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Routing\Controller;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;

/**
 * Class PagesController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class PagesController extends Controller
{

    protected $logs;

    public function __construct(LaravelLogViewer $logViewer)
    {
        $this->logs = $logViewer;
    }

    public function index()
    {
        return view('page::index');
    }

    public function page($name)
    {

        return $this->theView($name);
    }


    public function admin($name = 'dashboard')
    {
        $collect = collect($this->logs->all());
        $logs = $collect->take(2);

        return $this->theView('admin.' . $name, compact('logs'));
    }

    /**
     * Reset Login
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resetLogin()
    {
        $token = hash_hmac('sha256', str_random(40), config('app.key'));
        return view('page::login-reset', compact('token'));
    }

    /**
     * TheView
     *
     * @param string $name
     * @param array $data
     * @return mixed
     */
    public function theView($name, $data = [])
    {
        $view = 'missing-page';

        if (view()->exists('page::' . $name)) {
            $view = $name;
        }

        return view('page::' . $view, $data);
    }


}

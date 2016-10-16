<?php

namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Routing\Controller;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;
use ShawnSandy\PageKit\Classes\Pages;

/**
 * Class PagesController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class PagesController extends Controller
{

    /**
     * @var LaravelLogViewer
     */
    protected $logs;

    /**
     * @var Pages
     */
    protected $view;

    /**
     * PagesController constructor.
     *
     * @param LaravelLogViewer $logViewer
     * @param Pages $pages
     */
    public function __construct(LaravelLogViewer $logViewer, Pages $pages)
    {
        $this->logs = $logViewer;
        $this->view = $pages;
    }

    /**
     * Index page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('page::index');
    }

    /**
     * Pages controller -- static page loading
     *
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function page($name)
    {

        return $this->view->getView($name);
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


}

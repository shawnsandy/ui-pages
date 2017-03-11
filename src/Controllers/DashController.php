<?php

namespace ShawnSandy\PageKit\Controllers;

use Brotzka\DotenvEditor\DotenvEditor;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;
use ShawnSandy\PageKit\Classes\Pages;

/**
 * Class DashController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class DashController extends Controller
{

    protected $view;

    /**
     * @var LaravelLogViewer
     */
    protected $logs;

    /**
     * @var \Illuminate\Support\Collection
     */
    protected $log_collection;

    /**
     * @var DotenvEditor
     */
    protected $env;

    /**
     * DashController constructor.
     *
     * @param LaravelLogViewer $logViewer
     * @param DotenvEditor $dotenvEditor
     */
    public function __construct(LaravelLogViewer $logViewer, DotenvEditor $dotenvEditor, Pages $pages)
    {

        $env = config('pagekit.login_env');

        if (App::environment($env))
        $this->middleware('shield');

        $this->env = $dotenvEditor;
        $this->view = $pages;
        $this->logs = $logViewer;
        $this->log_collection = collect($this->logs->all());

    }

    /**
     * Index page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $logs = $this->log_collection;
        $markdown = Storage::disk('markdown')->allFiles();
        $env = $this->env->getContent();
        return view('page::admin.index', compact('logs', 'markdown', 'env'));
    }

    /**
     * Logs page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logs()
    {
        $logs = $this->log_collection;
        return $this->view->getView('admin.logs', compact('logs'));
    }


    /**
     * Static admin pages
     *
     * @param string $name
     * @return mixed
     */
    public function admin($name = 'dashboard')
    {
        return $this->view->getView('admin.' . $name);
    }


}

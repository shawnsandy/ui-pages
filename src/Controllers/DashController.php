<?php

namespace ShawnSandy\PageKit\Controllers;

use Brotzka\DotenvEditor\DotenvEditor;
use Illuminate\Support\Facades\Storage;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;

/**
 * Class DashController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class DashController
{

    protected $logs;
    protected $log_collection;
    protected $env;

    public function __construct(LaravelLogViewer $logViewer, DotenvEditor $dotenvEditor)
    {
        $this->env = $dotenvEditor;
        $this->logs = $logViewer;
        $this->log_collection = collect($this->logs->all());
    }

    public function index()
    {
        //$collect = collect($this->logs->all());
        $logs = $this->log_collection;
        $markdown = Storage::disk('markdown')->allFiles();
        $env = $this->env->getContent();
        return view('page::admin.index', compact('logs', 'markdown', 'env'));
    }

    public function admin($name = 'dashboard')
    {
        return $this->theView('admin.' . $name, compact('logs'));
    }

    public function logs()
    {
        $logs = $this->log_collection;
        return view('page::admin.logs', compact('logs'));
    }

}

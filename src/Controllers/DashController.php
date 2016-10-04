<?php

namespace ShawnSandy\PageKit\Controllers;
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

    public function __construct(LaravelLogViewer $logViewer)
    {
        $this->logs = $logViewer;
        $this->log_collection = collect($this->logs->all());
    }

    public function index()
    {
        //$collect = collect($this->logs->all());
        $logs = $this->log_collection->take(5);
        return view('page::admin.index', compact('logs'));
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

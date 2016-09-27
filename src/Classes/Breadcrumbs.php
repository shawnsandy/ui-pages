<?php

namespace ShawnSandy\PageKit\Classes;

use Illuminate\Http\Request;

/**
 * Class Breadcrumbs
 *
 * @package \ShawnSandy\PageKit\Classes
 */
class Breadcrumbs
{

    protected $request ;

    public function __construct()
    {
        $this->request = new Request(); ;
    }

    public function breadcrumbs()
    {

        $breadcrumbs = $this->crumbs();
        return view("page::shared.breadcrumbs", [
            'breadcrumbs' => $breadcrumbs
        ]);

    }

    public function crumbs($Rsegments)
    {
        $segments = $Rsegments;
        $item = '';
        $crumbs = [];
        foreach ($segments as $segment):
            $item = $item . "/" . $segment;
            $crumbs["{$segment}"] = $item;
        endforeach;
        return $crumbs ;

    }

}

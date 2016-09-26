<?php

namespace ShawnSandy\PageKit\Classes;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class Breadcrumbs
 *
 * @package \ShawnSandy\PageKit\Classes
 */
class Breadcrumbs extends  Controller
{

    public function __construct()
    {
    }

    public function breadcrumbs(Request $request)
    {
        $breadcrumbs = $this->crumbs($request);
        return view("page::shared.breadcrumbs", [
            'breadcrumbs' => $breadcrumbs
        ]);

    }

    public function crumbs(Request $request)
    {
        $segments = $request->segments();
        $item = '';
        $crumbs = [];
        foreach ($segments as $segment):
            $item = $item . "/" . $segment;
            $crumbs["{$segment}"] = $item;
        endforeach;
        return $crumbs ;

    }

}

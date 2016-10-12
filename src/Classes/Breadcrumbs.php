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

    protected $request;

    /**
     * Breadcrumbs constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
    }


    /**
     * Breadcrumbs
     *
     * @return array
     */
    public function breadcrumbs()
    {
        $link = [];
        $breadcrumbs = $this->crumbs($this->request->segments());
        foreach ($breadcrumbs as $name => $url):
            $link[] = '<a href="' . $url . '" class="breadcrumb">' . ucwords($name) . '</a>';
        endforeach;
    }


    /**
     * Crumbs
     *
     * @param array $segments dedd
     * @return array
     */
    public function crumbs($segments)
    {

        $item = '';
        $crumbs = [];
        foreach ($segments as $segment):
            $item = $item . "/" . $segment;
            $crumbs["{$segment}"] = $item;
        endforeach;
        return $crumbs;
    }

}

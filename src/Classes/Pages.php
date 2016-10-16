<?php

namespace ShawnSandy\PageKit\Classes;

/**
 * Class Pages
 *
 * @package \ShawnSandy\PageKit\Classes
 */
class Pages
{

    /**
     * Search and Load the view or fallbacks to specific view
     *
     * @param  string $name The name of the view
     * @param  array  $data View data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getView($name, $data = [])
    {
        $view = 'missing-page';

        if (view()->exists('page::' . $name)) {
            $view = $name;
        }

        return view('page::' . $view, $data);
    }

}

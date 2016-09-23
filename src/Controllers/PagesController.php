<?php

namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Routing\Controller;

/**
 * Class PagesController
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class PagesController extends Controller
{

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

        return $this->theView('admin.'.$name);
    }

    public function resetLogin()
    {
        $token = hash_hmac('sha256', str_random(40), config('app.key'));
        return view('page::login-reset', compact('token'));

    }

    /**
     * @param $name
     * @param array $data
     * @return mixed
     */
    public function theView($name, $data = [])
    {
        if (view()->exists('page::' . $name)):
            $view = $name;
        else :
            $view = 'missing-page';
        endif;

        return view('page::' . $view, $data);
    }


}
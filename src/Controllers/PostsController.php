<?php namespace ShawnSandy\PageKit\Controllers;


use Illuminate\Routing\Controller;

/**
 * Class EditsController
 * A file based markdown editor for pages
 *
 * @package \ShawnSandy\PageKit\Controllers
 */
class PostsController extends Controller
{

    /**
     * Display a list of saved post
     * Create or edit post
     */
    public function index()
    {
        return view('page::post.post');
    }

}

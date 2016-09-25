<?php namespace ShawnSandy\PageKit\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use ShawnSandy\PageKit\Classes\PageKit;


/**
 * Class MarkdownController
 *
 * @package \packages\ShawnSandy\PageKit\src\Controllers
 */
class MarkdownController extends Controller
{

    protected $pagekit;

    /**
     * MarkdownController constructor.
     * @param PageKit $pageKit
     * @internal param PageKit $kit
     */
    public function __construct(PageKit $pageKit)
    {
        $this->pagekit = $pageKit;
    }

    public function index(){

        return view('page::markdown.index');
    }

    /**
     * @return string
     */
    public function show($posts){

        $file = $posts;
        $markdown = $this->pagekit->markdown($file);
        return view('page::markdown.show', compact('markdown'));

    }

}

<?php namespace ShawnSandy\PageKit\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use ShawnSandy\PageKit\Classes\Markdown;


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
     *
     * @param    Markdown $pageKit
     * @internal param PageKit $kit
     */
    public function __construct(Markdown $pageKit)
    {
        $this->pagekit = $pageKit;
    }

    public function index()
    {
        $files = Storage::disk('markdown')->directories();
        $arr = [];
        foreach ($files as $file):
            $arr = trim($file, '.md');
        endforeach;

        return $arr;
    }

    /**
     * @param $posts
     * @param Request $request
     * @return string
     */
    public function show($posts, Request $request)
    {

        $file = $posts;
        $markdown = $this->pagekit->markdown($file);

        $view = "page::missing-page";

        if ($request->has('page')) :
            $markdown = $this->pagekit->markdown($request->page, $posts);
        endif;

        if(!empty($markdown)) {
            $view = 'page::markdown.show'; 
        }

        return view($view, compact('markdown'));

    }

}

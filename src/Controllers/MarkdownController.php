<?php namespace ShawnSandy\PageKit\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Michelf\MarkdownExtra;



/**
 * Class MarkdownController
 *
 * @package \packages\ShawnSandy\PageKit\src\Controllers
 */
class MarkdownController extends Controller
{

    protected $parsedown;

    /**
     * MarkdownController constructor.
     */
    public function __construct(MarkdownExtra $parsedown)
    {
        $this->parsedown = $parsedown;
    }

    public function index(){

        return view('page::markdown.index');
    }

    /**
     * @return string
     */
    public function show($markdown){

        $file = $markdown.'.md';

        if(!Storage::disk('posts')->exists($file))
            return redirect('/page/missing-page') ;

        $file = Storage::disk('posts')->get($file);
        $markdown = $this->parsedown->transform($file);

        return view('page::markdown.show', compact('markdown'));

    }

}

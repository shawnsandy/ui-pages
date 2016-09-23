<?php namespace ShawnSandy\PageKit\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Parsedown;


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
    public function __construct(Parsedown $parsedown)
    {
        $this->parsedown = $parsedown;
    }

    public function index(){

        return view('page::markdown.index');
    }

    /**
     * @return string
     */
    public function show(){
        $file = Storage::disk('posts')->get('Test.md');
        $markdown = $this->parsedown->text($file);
        return view('page::markdown.show', compact('markdown'));
    }

}
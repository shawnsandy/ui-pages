<?php

namespace ShawnSandy\PageKit\Classes;

use Michelf\MarkdownExtra;
use Illuminate\Support\Facades\Storage;


/**
 * Class DefaultClass
 *
 * @package \ShawnSandy\PageKit\Classes
 */
class PageKit
{

    protected $markdown;

    /**
     * Create a new Skeleton Instance
     * @param MarkdownExtra $markdown
     */
    public function __construct(MarkdownExtra $markdown)
    {
        $this->markdown = $markdown;
    }


    /**
     * @param $markdown
     *
     * @return string
     */
    public function markdown($markdown)
    {

        $file = $markdown . '.md';

        if (!Storage::disk('posts')->exists($file))
            return false;

        $file = Storage::disk('posts')->get($file);
        return $this->markdown->transform($file);
    }

}

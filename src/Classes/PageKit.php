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
     * @param null $page
     * @return string
     */
    public function markdown($markdown, $page = null)
    {

        $file = $markdown . '.md';

        if (isset($page))
            $file = $page . '/' . $markdown . '.md';

        if (!Storage::disk('markdown')->exists($file))
            return false;

        $file = Storage::disk('markdown')->get($file);
        return $this->markdown->transform($file);

    }

    public function markdownFiles($dir = null)
    {
        return Storage::disk('markdown')->allFiles($dir);
    }

    /**
     * @param $file_path
     * @return mixed
     */
    public function markdownLink($file_path)
    {
        /**
         *
         * split the $file_path into an array
         * parse the segments of the $array into the data array
         * if the $array count is > 0 link should contain url params
         *
         */
        
        $array = explode('/', $file_path);
        $data['dir'] = $array[0];
        $data['name'] = trim($array[1], '.md');
        $data['url'] = '/' . $data['dir'] . '?page=' . $data['name'];
        $data['display_name'] = ucwords(str_replace_array('_', ' ', $data['name']));
        $data['link'] = '<a href="' . $data["url"] . '" class="markdown-link">' . $data['display_name'] . '</a>';
        return $data;

    }

}

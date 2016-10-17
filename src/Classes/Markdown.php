<?php

namespace ShawnSandy\PageKit\Classes;

use Michelf\MarkdownExtra;
use Illuminate\Support\Facades\Storage;


/**
 * Class Markdown
 * Methods to generate links from markdown files
 *
 * @package \ShawnSandy\PageKit\Classes
 */
class Markdown
{

    /**
     * @var MarkdownExtra
     */
    protected $markdown;

    protected $type = 'link';

    /**
     * Create a new Skeleton Instance
     *
     * @internal param MarkdownExtra $markdown
     */
    public function __construct()
    {
        $this->markdown = new MarkdownExtra();
    }


    /**
     * Parse a output a markdown file
     *
     * @param  string $markdown File name
     * @param  null   $page     File directory
     * @return string
     */
    public function markdown($markdown, $page = null)
    {

        $file = $markdown . '.md';

        if (isset($page)) {
            $file = $page . '/' . $markdown . '.md'; 
        }

        if (!Storage::disk('markdown')->exists($file)) {
            return false; 
        }

        $file = Storage::disk('markdown')->get($file);
        return $this->markdown->transform($file);

    }

    /**
     * Returns a list of file from a dir
     *
     * @param  null $dir directory
     * @return mixed
     */
    public function markdownFiles($dir = null)
    {
        return Storage::disk('markdown')->allFiles($dir);
    }

    /**
     * Converts a give md file path to a link
     *
     * @param  string $file_path file path
     * @param  string $type      url/link
     * @return mixed
     */
    public function markdownLink($file_path, $type = '')
    {
        /**
         * split the $file_path into an array
         * parse the segments of the $array into the data array
         * if the $array count is > 0 link should contain url params
         */
        
        $array = explode('/', $file_path);
        $dir = $array[0];

        $replace = array('-', '_');

        $url = '/' . trim($dir,'.md');
        $display_name = str_replace($replace, ' ', $dir);

        if (count($array) > 1) {
            $name = trim($array[1], '.md');
            $url = '/' . $dir . '?page=' . $name;
            $display_name = str_replace($replace, ' ', $name);
        }

        $link =  ($type == 'url') ? '/md'.$url :
            '<a href="/md' . $url . '" class="markdown-link">' . $display_name .
            '</a>';
        return $link;

    }


    /**
     * Returns an list or directory of array of markdown files
     * 
     * @param  string $dir file dir
     * @return array
     */
    public function markdownMenu($dir = null)
    {

        $md_files = $this->markdownFiles($dir);
        $links = [];

        foreach ($md_files as  $file) {
            $links[] = $this->markdownLink($file, $this->type);
        }
        return $links ;

    }

    /**
     * Return the type of links
     *
     * @param  string $type return type of markDown() link
     * @return string
     */
    public function type($type )
    {
        $this->type = $type;
        return $this;
    }


}

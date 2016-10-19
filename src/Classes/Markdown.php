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
     * Parses and output a markdown file
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
     * Convert a md file outside the markdown disk to html
     *
     * @param  $file
     * @return string
     */
    public function markdownRead($file)
    {

        $contents = file_get_contents($file);
        return $this->markdown->transform($contents);

    }

    /**
     * Returns a list of file from a dir
     *
     * @param  string $dir directory
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

        $array = explode('/', $file_path);
        $dir = $array[0];

        $replace = array('-', '_');

        $url = trim($dir, '.md');
        $display_name = str_replace($replace, ' ', trim($dir, '.md'));

        if (count($array) > 1) {
            $name = trim($array[1], '.md');
            $url = $dir . '?page=' . $name;
            $display_name = str_replace($replace, ' ', $name);
        }

        $link = ($type == 'url') ? '/md/' . $url :
            '<a href="/md/' . $url . '" class="markdown-link">' . $display_name .
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

        foreach ($md_files as $file) {
            $links[] = $this->markdownLink($file, $this->type);
        }
        return $links;

    }

    /**
     * Return the type of links
     *
     * @param  string $type return type of markDown() link
     * @return string
     */
    public function type($type)
    {
        $this->type = $type;
        return $this;
    }


    /**
     * Return and array of markdown
     *
     * @param  string $dir location of md directory
     * @return array
     */
    public function markdownPosts($dir = null)
    {

        $source = collect($this->markdownFiles($dir));

        if (empty($source)) {
            return false;
        }

        //map files
        $files = $source->map(
            function ($file) {

                $markdown = $this->markdown->transform(
                    Storage::disk('markdown')
                        ->get($file)
                );

                $contentArray = explode("\n", $markdown);

                $arr['url'] = $this->markdownLink($file, 'url');
                $arr['last_modified'] = date(
                    'Y-m-d H:i:s',
                    Storage::disk('markdown')->lastModified($file)
                );
                $arr['link'] = $this->markdownLink($file);
                $arr['title'] = $contentArray[0];
                $arr['excerpt'] = $contentArray[2];
                $arr['markdown'] = str_replace($arr['title'], '', $markdown);
                return $arr;

            }
        );

        return $files;

    }

    public function testView()
    {
        return view('page::shared.no-content')->render();
    }


}

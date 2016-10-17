<?php

namespace ShawnSandy\PageKit\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Class MarkdownFacade
 *
 * @package \ShawnSandy\PageKit\Facades
 */
class MarkdownFacade extends Facade
{

    /**
     *
     */
    public static function getFacadeAccessor(){
        return 'MKD';
    }

}

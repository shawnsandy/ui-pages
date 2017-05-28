<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 5/28/2017
     * Time: 4:11 PM
     */

    namespace ShawnSandy\PageKit\Facades;

    use Illuminate\Support\Facades\Facade;

    class PageFacade extends Facade
    {

       protected static function getFacadeAccessor() {  return "Pages";   }

    }

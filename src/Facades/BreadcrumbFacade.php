<?php

namespace ShawnSandy\PageKit\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Class BreadcrumbFacade
 *
 * @package \ShawnSandy\PageKit\Facades
 */
class BreadcrumbFacade extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'Breadcrumbs';
    }

}

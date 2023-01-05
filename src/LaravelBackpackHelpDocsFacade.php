<?php

namespace Pentangle\LaravelBackpackHelpDocs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pentangle\LaravelBackpackHelpDocs\LaravelBackpackHelpDocs
 */
class LaravelBackpackHelpDocsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-backpack-help-docs';
    }
}

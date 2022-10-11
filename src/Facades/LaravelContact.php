<?php

namespace Wikeo\LaravelContact\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wikeo\LaravelContact\LaravelContact
 */
class LaravelContact extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wikeo\LaravelContact\LaravelContact::class;
    }
}

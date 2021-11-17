<?php

namespace Shuhrat26\ArtisanForm\Facades;

use Illuminate\Support\Facades\Facade;

class ArtisanForm extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'artisan-form';
    }
}

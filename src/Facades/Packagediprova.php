<?php

namespace Alessioprete\Packagediprova\Facades;

use Illuminate\Support\Facades\Facade;

class Packagediprova extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'packagediprova';
    }
}

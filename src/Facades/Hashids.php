<?php

namespace Junity\Hashids\Facades;

use Illuminate\Support\Facades\Facade;
use Junity\Hashids\Hashids as BaseHashids;

/**
 * @see \Junity\Hashids\Hashids
 */
class Hashids extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseHashids::class;
    }
}

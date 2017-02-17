<?php

namespace Junity\Hashids\Facades;

use Hashids\Hashids;

/**
 * @see \Hashids\Hashids
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
        return Hashids::class;
    }
}

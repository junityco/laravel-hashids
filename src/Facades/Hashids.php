<?php

namespace Junity\Hashids\Facades;

use Hashids\Hashids as HashidsBase;

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
        return HashidsBase::class;
    }
}

<?php

namespace Yhapps\YhappsAccounting\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yhapps\YhappsAccounting\YhappsAccounting
 */
class YhappsAccounting extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Yhapps\YhappsAccounting\YhappsAccounting::class;
    }
}

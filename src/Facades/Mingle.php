<?php

namespace Ariful\LivewireMingle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ariful\LivewireMingle\Mingle
 */
class Mingle extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ariful\LivewireMingle\Mingle::class;
    }
}

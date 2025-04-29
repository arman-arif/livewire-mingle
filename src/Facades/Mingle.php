<?php

namespace Aarif\MingleJs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aarif\MingleJs\Mingle
 */
class Mingle extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Aarif\MingleJs\Mingle::class;
    }
}

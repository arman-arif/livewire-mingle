<?php

namespace Aarif\MingleJs\Contracts;

interface HasMingles
{
    public function component(): string;

    public function mingleData(): array;
}

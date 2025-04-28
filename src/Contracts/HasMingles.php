<?php

namespace Ariful\LivewireMingle\Contracts;

interface HasMingles
{
    public function component(): string;

    public function mingleData(): array;
}

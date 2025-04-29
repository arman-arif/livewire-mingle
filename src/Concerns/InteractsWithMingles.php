<?php

namespace Aarif\MingleJs\Concerns;

use Illuminate\Support\Str;

trait InteractsWithMingles
{
    public $mingleId;

    public function mingleData(): array
    {
        return [
            //
        ];
    }

    public function mountInteractsWithMingles()
    {
        $this->mingleId = 'minglejs-' . Str::random();
    }

    public function render(): mixed
    {
        return view('minglejs::mingle');
    }
}

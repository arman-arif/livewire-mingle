<?php

namespace Ariful\LivewireMingle\Concerns;

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
        $this->mingleId = 'livewire-mingle-' . Str::random();
    }

    public function render(): mixed
    {
        return view('livewire-mingle::mingle');
    }
}

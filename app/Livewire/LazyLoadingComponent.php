<?php

namespace App\Livewire;

use Livewire\Component;

use function Termwind\render;

class LazyLoadingComponent extends Component
{
    // same as "__constructor"
    public function mount() {
        sleep(3); // delay for 3secs
    }

    // loading function
    public function placeholder()
    {
        return <<<'HTML'
            <div class="w-full h-[100vh] flex justify-center items-center">
                <p class="text-4xl">Loading please wait...</p>
            </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.lazy-loading-component');
    }
}

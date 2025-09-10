<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 10;
    public int $number = 0;

    public function incrementCount ($number) {
        return $this->count = $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

<?php

namespace App\Livewire;

use App\Models\BirdCount;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BirdCounter extends Component
{
    // this validation  means to validate the variable
    // #[Validate('require|integer')]
    public int $counts;

    // #[Validate('require|string')]
    public string $birds;

    public function create () {
        // validation for this method only
        $this->validate([
            'counts' => 'required|integer',
            'birds' => 'required|string'
        ]);

        BirdCount::create([
            'bird' => $this->birds,
            'count' => $this->counts
        ]);

        // reset the form
        return $this->reset();
    }

    // use to initialize data just like "class __constructor"
    // public function mount ($counts) {
    //     return $this->counts =$counts;
    // }

    public function findById ($id) {
        return BirdCount::findOrFail($id);
    }

    public function update ($id) {
        $update = $this->findById($id);

        return $update->update([
            'bird' => $this->counts,
            'count' => $this->birds
        ]);
    }

    public function delete (BirdCount $birdCount) {
        return $birdCount->delete();
    }

    public function render()
    {
        return view('livewire.bird-counter', [
            'datas' => BirdCount::latest()->get()
        ]);
    }
}

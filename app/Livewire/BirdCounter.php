<?php

namespace App\Livewire;

use App\Models\BirdCount;
use Livewire\Component;

class BirdCounter extends Component
{
    public int $counts;
    public string $birds;

    public function create () {
        BirdCount::create([
            'bird' => $this->birds,
            'count' => $this->counts
        ]);

        // reset the form
        return $this->reset();
    }

    // use to initialize data just like "class __constructor"
    public function mount () {
        return;
    }

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

    public function delete ($id) {
        $delete = $this->findById($id);

        return $delete->delete();
    }


    public function render()
    {
        return view('livewire.bird-counter', [
            'datas' => BirdCount::all()
        ]);
    }
}

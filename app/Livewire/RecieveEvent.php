<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class RecieveEvent extends Component
{
    public string $message = "No message received!";

    #[On('messageSent')]
    public function displayMessage ($newMessage) {
        $this->message = $newMessage;
    }

    #[On('resetMessage')]
    public function resetMessage () {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.recieve-event');
    }
}

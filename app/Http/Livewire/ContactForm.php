<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{

    // Contact property
    public $name;
    public $email;
    public $message;

    public function sendMessage() {

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

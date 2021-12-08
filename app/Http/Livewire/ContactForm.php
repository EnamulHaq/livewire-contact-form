<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Mail\ContactForm as ContactFormMail;

class ContactForm extends Component
{

    // Contact property
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function removeAlert() {
        $this->message = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function sendMessage() {
        $this->validate();
        $contact_form = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];
        Mail::to($this->email)->send(new ContactFormMail($contact_form));



        session()->flash('success_message', 'Your mail sent succesfully we contact with you soon.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

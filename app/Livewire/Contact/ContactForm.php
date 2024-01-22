<?php

namespace App\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    protected $rules = [
        'name' => 'required|min:1|max:100',
        'email' => 'required|email|min:1|max:150',
        'message' => 'required|min:5',
    ];

    public function submitForm()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact.contact-form');
    }
}

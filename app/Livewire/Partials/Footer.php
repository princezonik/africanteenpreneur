<?php

namespace App\Livewire\Partials;

use App\Models\Email;
use Livewire\Component;

class Footer extends Component
{
    public $email;

    public function saveEmail()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        Email::create([
            'email' => $this->email,
        ]);

        session()->flash('success', 'Email saved successfully!');
        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.partials.footer');
    }
}

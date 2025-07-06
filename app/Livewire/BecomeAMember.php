<?php

namespace App\Livewire;

use Livewire\Component;

class BecomeAMember extends Component
{
    public function render()
    {
        return view('livewire.become-a-member')->layout('layouts.app');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class ProvideFoodWater extends Component
{
    public function render()
    {
        return view('livewire.provide-food-water')->layout('layouts.app');
    }
}

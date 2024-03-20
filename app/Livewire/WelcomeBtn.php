<?php

namespace App\Livewire;

use Livewire\Component;

class WelcomeBtn extends Component
{
    public function enable_form()
    {
        $this->dispatch('enable_form');
    }

    public function render()
    {
        return view('livewire.welcome-btn');
    }
}

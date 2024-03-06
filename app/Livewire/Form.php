<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $feedback_type='email';
    public $number=1;
    public function initializeItems($num)
    {
        $this->number=$num;
    }

    public function render()
    {
        $number=$this->number;
        $feedback_type=$this->feedback_type;
        return view('livewire.form', compact(['feedback_type', 'number']));
    }
}

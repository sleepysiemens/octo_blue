<?php

namespace App\Livewire;

use Livewire\Component;

class OverlayForm extends Component
{
    public $display='d-none';

    public function display_()
    {
        if($this->display=='d-none')
        {
            $this->display='d-flex';
        }
        else
            $this->display='d-none';
    }

    public function render()
    {
        return view('livewire.overlay-form');
    }
}

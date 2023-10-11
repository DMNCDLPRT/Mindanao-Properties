<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $properties;

    public function mount($propertieslivewirecontroller)
    {
        $this->properties = $propertieslivewirecontroller;
    }


    public function render()
    {
        return view('livewire.home');
    }
}

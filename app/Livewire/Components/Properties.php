<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Properties extends Component
{
    public $properties;
 

    public function mount($propertieslivewirecontroller)
    {
        $this->properties = $propertieslivewirecontroller;
    }

    public function render()
    {
        return view('livewire.components.properties');
    }
}

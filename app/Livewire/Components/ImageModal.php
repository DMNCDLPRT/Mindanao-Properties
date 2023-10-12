<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Property;

class ImageModal extends Component
{

    public $property;

    public function mount(Property $property)
    {
       
        $this->property = $property;
    }

    public function render()
    {
        return view('livewire.components.image-modal');
    }
}

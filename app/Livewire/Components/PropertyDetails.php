<?php

namespace App\Livewire\Components;

use App\Models\Property;
use Livewire\Component;

class PropertyDetails extends Component
{

    public $property;

    public function mount(Property $property)
    {
       
        $this->property = $property;
    }

    public function render()
    {
        return view('livewire.components.property-details');
    }

    public function showProperty()
    {
        // Redirect to the controller function with the property ID
        return redirect()->to("/property/{$this->id}");
    }

}

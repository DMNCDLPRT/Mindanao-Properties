<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PropertyOffer extends Component
{

    public $offer_type;
    public $property_type;
    public $property_type_id;

    public function mount ($offer_type, $property_type, $property_type_id) {
        $this->offer_type = $offer_type;
        $this->property_type = $property_type;
        $this->property_type_id = $property_type_id;
    }

    public function render()
    {
        return view('livewire.components.property-offer');
    }
}

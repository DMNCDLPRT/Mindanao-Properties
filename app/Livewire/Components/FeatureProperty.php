<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Property;

class FeatureProperty extends Component
{
    public function render()
    {
        $properties = Property::all();
        return view('livewire.components.feature-property', compact('properties'));
    }
}

<?php

namespace App\Livewire\Components;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;


class Properties extends Component
{
    public $properties;
    use WithPagination;

    public function mount($propertieslivewirecontroller)
    {
        $this->properties = $propertieslivewirecontroller;
    }

    public function render()
    {
        return view('livewire.components.properties', [
            'properties' => Property::paginate(10),
        ]);
    }
}

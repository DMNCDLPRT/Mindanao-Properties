<?php

namespace App\Livewire\Components;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;


class Properties extends Component
{

    use WithPagination;
    
    public function render()
    {

        $properties = Property::paginate(10);
        return view('livewire.components.properties', [
            'properties' => $properties,
          
        ]);
    }
}

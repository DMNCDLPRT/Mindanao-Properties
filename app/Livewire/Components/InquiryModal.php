<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Property;

class InquiryModal extends Component
{

    public $property;

    public function mount(Property $property)
    {
       
        $this->property = $property;
    }

    public function render()
    {
        return view('livewire.components.inquiry-modal');
    }
}

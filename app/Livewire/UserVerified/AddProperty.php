<?php

namespace App\Livewire\UserVerified;

use App\Http\Requests\StorePropertyRequest;
use App\Models\SubTypes;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Livewire\WithFileUploads;

class AddProperty extends Component
{
    use AuthorizesRequests;

    use WithFileUploads;

    /**
     * Report Type
     *
     * @var unsignedInteger
     */
    public $offer_type_id;

    public $report_id;
    public $property_type_id;
    public $subtype_id;
    public $title;

    public $region;
    public $province;
    public $city;
    public $barangay;
    public $address;

    public $latitude = 52.5;
    public $longitude = 13.4;


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'offer_type_id' => 'required' ,
            'property_type_id' => '',
            'subtype_id' => '',
            'title' => '',
        ];
    }

    public function addProperty()
    {
        $validatedData = $this->validate();
        dd($validatedData);
    }

    public $offer_type;
    public $property_type;
    public $subtypes;

    public function mount($offer_type, $property_type, $subtypes)
    {
        $this->offer_type = $offer_type;
        $this->property_type = $property_type;
        $this->subtypes = $subtypes;
    }

    public function wirePropertyClick($id)
    {
        $this->reset('subtype_id'); 
        $subtypes = SubTypes::where('property_type_id', $id)->get();

        foreach ($subtypes as $subType) {
            $subtypesArray[] = $subType;
        }

        $this->subtypes = $subtypesArray;
    }

    public function render()
    {
        return view('livewire.user-verified.add-property');
    }
}

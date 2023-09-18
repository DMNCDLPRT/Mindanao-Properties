<?php

namespace App\Livewire\UserVerified;

use App\Http\Requests\StorePropertyRequest;
use App\Models\Features;
use App\Models\PropertyType;
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
    public $property_type_id;
    public $subtype_id;
    public $title;
    public $description;
    public $show_price_online;
    public $price_php;
    public $price_usd;
    public $available_from;
    public $object_id;
    public $region;
    public $province;
    public $city;
    public $barangay;
    public $address;

    public $youtube;
    public $virtual_tour;

    public $images;
    public $media;

    

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
            'offer_type_id'     => 'required',
            'property_type_id'  => 'required',
            'subtype_id'        => 'required',
            'title'             => 'required',
            'description'       => 'required',
            'show_price_online' => '',
            'price_php'         => '',
            'price_usd'         => '',
            'available_from'    => '',
            'object_id'         => '',
            'region'            => '',
            'province'          => '',
            'city'              => '',
            'barangay'          => '',
            'address'           => '',
            'latitude'          => '',           
            'longitude'         => '', 
            
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
    public $features;

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

        $type = PropertyType::where('id', $id)->get(); // get property type where id is $id

        $featuresArray = [];
        $featuresArray = Features::where('property_type', $type[0]->name)->get();


        $this->features = $featuresArray;
        $this->subtypes = $subtypesArray;
    }

    public function render()
    {
        return view('livewire.user-verified.add-property');
    }
}

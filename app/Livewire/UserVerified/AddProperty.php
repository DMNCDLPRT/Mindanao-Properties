<?php

namespace App\Livewire\UserVerified;

use App\Http\Requests\StorePropertyRequest;
use App\Livewire\Components\PropertyOffer;
use App\Models\Features;
use App\Models\Property;
use App\Models\PropertyClassification;
use App\Models\PropertyLocation;
use App\Models\PropertyType;
use App\Models\SubTypes;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Livewire\WithFileUploads;
use Ramsey\Uuid\Uuid;

class AddProperty extends Component
{
    use AuthorizesRequests;

    use WithFileUploads;

    /* Property */
    public $offer_type_id;
    public $property_type_id;
    public $subtype_id;
    public $title;
    public $description;

    /* Key Infmation */
    public $bedrooms;
    public $bathrooms;
    public $floor_area;
    public $unit_floor_number;
    public $condominium_name;
    public $show_price_online;
    public $price_php;
    public $price_usd;
    public $available_from;
    public $object_id;
    public $land_size;
    public $building_name;
    public $block_lot_unit_floor;
    public $subdivision_name;
    public $fully_furnished;
    public $rooms_total;
    public $car_spaces;
    public $sqm_range;
    public $price_conditions;
    public $build_year;
    public $deposit_bond;
    public $price_range;

    /* Multimedia */
    public $img_file_name;
    public $docs_file_name;
    public $yt_link;
    public $vt_link;

    /* Location */
    public $region;
    public $province;
    public $city;
    public $barangay;
    public $address;
    public $latitude = 52.5;
    public $longitude = 13.4;

    public $features_id = [];


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            /* Property */
            'title'             => 'required | string',
            'description'       => 'required',
            'offer_type_id'     => 'required',
            'property_type_id'  => 'required',
            'subtype_id'        => 'required',

            /* Key Information */
            'bedrooms'          => 'nullable|integer',
            'bathrooms'         => 'nullable|integer',
            'floor_area'        => 'nullable|numeric',
            'unit_floor_number' => 'nullable|string',
            'condominium_name'  => '',
            'show_price_online' => '',
            'price_php'         => '',
            'price_usd'         => '',
            'available_from'    => '',
            'object_id'         => '',
            'land_size'         => '',
            'building_name'     => '',
            'block_lot_unit_floor' => '',
            'subdivision_name'  => '',
            'fully_furnished'   => '',
            'rooms_total'       => '',
            'car_spaces'        => '',
            'sqm_range'         => '',
            'price_conditions'  => '',
            'build_year'        => '',
            'deposit_bond'      => '',
            'price_range'       => '',

            /* Multiedia */
            /* 'img_file_name'     => '',
            'docs_file_name'    => '', */
            'yt_link'           => '',
            'vt_link'           => '',

            /* Location */
            'region'            => '',
            'province'          => '',
            'city'              => '',
            'barangay'          => '',
            'address'           => '',
            'latitude'          => '',           
            'longitude'         => '', 

            /* Amenities */
            'features_id'       => '',
        ];
    }

    public function addProperty()
    {
        $validatedData = $this->validate();

        // create property classification for a property
        $classification = PropertyClassification::create([
            'id' => Uuid::uuid4(),
            'property_type_id'  => $validatedData['property_type_id'],
            'property_sub_type_id'        => $validatedData['subtype_id'],
        ]);

        $location = PropertyLocation::create([
            'id'            => Uuid::uuid4(),
            'region'        => $validatedData['region'],
            'province'      => $validatedData['province'],
            'city'          => $validatedData['city'],
            'barangay'      => $validatedData['barangay'],
            'address'       => $validatedData['address'],
            'longitude'     => $validatedData['latitude'],
            'latitude'      => $validatedData['longitude'],
        ]);

        dd($classification->id, $location->id);

        Property::create([
            'title'         => $validatedData['title'],
            'description'   => $validatedData['description'],

            'offer_type_id'     => $validatedData['offer_type_id'],
            'property_classification_id'=> $classification->id,
            'property_location_id' => $location->id,
        ]);





    }

    public $offer_type;
    public $property_type;
    

    public function mount($offer_type, $property_type, $subtypes)
    {
        $this->offer_type = $offer_type;
        $this->property_type = $property_type;
        $this->subtypes = $subtypes;
    }


    public $hasIndoorOrOutdoorFeature;
    public $hasOutdoor;
    public $hasIndoor;

    public $subtypes;
    public $features;

    public function wirePropertyClick($id)
    {
        $hasIndoorOrOutdoorFeature = false;
        $hasIndoor = false;
        $hasOutdoor = false;

        $this->reset('subtype_id'); 

        $subtypes = SubTypes::where('property_type_id', $id)->get();

        foreach ($subtypes as $subType) {
            $subtypesArray[] = $subType;
        }

        $type = PropertyType::where('id', $id)->get(); // get property type where id is $id

        $featuresArray = [];
        $featuresArray = Features::where('property_type', $type[0]->name)->get();
        
        // dd($featuresArray);
        
        foreach ($featuresArray as $feature){
            if ($feature->type === 'outdoor') {
                $hasOutdoor = true;
            } 
            if ($feature->type === 'indoor') {
                $hasIndoor = true;
            }
        }
        if ($hasOutdoor = true || $hasIndoor = true) {
            $hasIndoorOrOutdoorFeature = true;
        }

        $this->hasIndoor = $hasIndoor;
        $this->hasOutdoor = $hasOutdoor;
        $this->hasIndoorOrOutdoorFeature = $hasIndoorOrOutdoorFeature;

        $this->features = $featuresArray;
        $this->subtypes = $subtypesArray;
    }

    public function render()
    {
        return view('livewire.user-verified.add-property');
    }
}

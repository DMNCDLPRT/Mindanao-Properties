<?php

namespace App\Livewire\UserVerified;


use App\Models\Features;
use App\Models\MultimediaAssets;
use App\Models\Property;
use App\Models\PropertyClassification;
use App\Models\PropertyDocuments;
use App\Models\PropertyFeature;
use App\Models\PropertyImages;
use App\Models\PropertyInfo;
use App\Models\PropertyLocation;
use App\Models\PropertyType;
use App\Models\SubTypes;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithFileUploads;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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

    /* Multimedia */
    public $img_file_name = [];
    public $docs_file_name = [];
    public $yt_link;
    public $vt_link;

    /* Key Infmation */
    public $bedrooms;
    public $bathrooms;
    public $floor_area;
    public $unit_floor_number;
    public $condominium_name;
    public $floor;
    public $tower_name_number;
    public $car_spaces;
    public $classification;
    public $fully_furnished;
    public $sqm_range;
    public $rooms_total;
    public $total_floors;
    public $price_range;
    public $price_conditions;
    public $build_year;
    public $deposit_bond;
    public $land_size;
    public $building_name;
    public $block_lot_unit_floor;
    public $size;
    public $subdivision_name;
    public $show_price_online = false;
    public $price_php;
    public $price_usd;
    public $available_from;
    public $object_id;

    /* Location */
    public $province;
    public $city;
    public $barangay;
    public $display_name;
    public $address;
    public $latitude;
    public $longitude;

    /* Features */
    public $features = [];


    protected $listeners = ['updateImgFileName' => 'setImageFileName', 'updateDocsFileName' => 'setDocsFileName'];
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            /* Property */
            'title'             => 'required|string',
            'description'       => 'required|string',
            'offer_type_id'     => 'required',
            'property_type_id'  => 'required',
            'subtype_id'        => 'required',

            /* Multiedia */
            'img_file_name'     => 'nullable|sometimes|array',
            'img_file_name.*'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'docs_file_name'    => 'nullable|',
            'yt_link'           => 'nullable|string',
            'vt_link'           => 'nullable|string',

            /* Key Information */

            'bedrooms'          => 'nullable|integer',
            'bathrooms'         => 'nullable|integer',
            'floor_area'        => 'nullable|numeric',
            'unit_floor_number' => 'nullable|string',
            'condominium_name'  => 'nullable|string',
            'floor'             => 'nullable|string',
            'tower_name_number' => 'nullable|string',
            'car_spaces'        => 'nullable|integer',
            'classification'    => 'nullable',
            'fully_furnished'   => 'nullable|string',
            'sqm_range'         => 'nullable|string',
            'rooms_total'       => 'nullable|integer',
            'total_floors'      => 'nullable|integer',
            'price_range'       => 'nullable|string',
            'price_conditions'  => 'nullable|string',
            'build_year'        => 'nullable',
            'deposit_bond'      => 'nullable|numeric',
            'land_size'         => 'nullable|numeric',
            'building_name'     => 'nullable|string',
            'block_lot_unit_floor' => 'nullable|string',
            'size'              => 'nullable|numeric',
            'subdivision_name'  => 'nullable|string',
            'show_price_online' => 'boolean',
            'price_php'         => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'price_usd'         => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'available_from'    => 'nullable',
            'object_id'         => 'nullable',

            /* Location */
            'province'          => 'nullable',
            'city'              => 'nullable',
            'display_name'      => 'nullable',
            'latitude'          => 'nullable|numeric|between:-90,90',
            'longitude'         => 'nullable|numeric|between:-180,180',
            'barangay'          => 'nullable',
            'address'           => 'nullable',

            /* Amenities */
            'features'       => '',
        ];
    }

    public function addProperty()
    {
        $validatedData = $this->validate();

        $classification = PropertyClassification::create([
            'id' => Uuid::uuid4(),
            'property_type_id'  => $validatedData['property_type_id'],
            'property_sub_type_id'        => $validatedData['subtype_id'],
        ]);

        
        $thisPropertyId = Uuid::uuid4();

        $images = [];
        $uploadImagesPath = 'public/uploads/properties/' . $thisPropertyId . '/' . 'images/';

        foreach($validatedData['img_file_name'] as $image){
            $filename = time() . '-' . Str::random(8) . '-' . $image->getClientOriginalName();
            $image->storeAs($uploadImagesPath, $filename, 'public');
            $finalImagePathName = $uploadImagesPath . $filename;
            $images[] = $finalImagePathName;
        }

        $image =  PropertyImages::create([
            'id'            => Uuid::uuid4(),
            'img_file_name' => json_encode($images),
        ]);

        $documents = [];
        $uploadDocsPath = 'public/uploads/properties/' . $thisPropertyId . '/' . 'docs';

        foreach($validatedData['docs_file_name'] as $docs) {
            $filename = time() . '-' . Str::random(8) . '-' . $docs->getClientOriginalName();
            $docs->storeAs($uploadDocsPath,$filename, 'public');
            $finalDocPathName = $uploadDocsPath . $filename;
            $documents[] = $finalDocPathName;
        }

        $document = PropertyDocuments::create([
            'id'                => Uuid::uuid4(),
            'docs_file_name'    =>  json_encode($documents),
        ]);

        $assets = MultimediaAssets::create([
            'id'                    => Uuid::uuid4(),
            'property_images_id'    => $image->id,
            'property_documents_id' => $document->id,
            'yt_link'               => $validatedData['yt_link'],
            'vt_link'               => $validatedData['vt_link'],
        ]);

        $location = PropertyLocation::create([
            'id'            => Uuid::uuid4(),
            'display_name'  => $validatedData['display_name'],
            'province'      => $validatedData['province'],
            'city'          => $validatedData['city'],
            'barangay'      => $validatedData['barangay'],
            'address'       => $validatedData['address'],
            'longitude'     => $validatedData['latitude'],
            'latitude'      => $validatedData['longitude'],
        ]);

        $PropertyKeyInfo = PropertyInfo::create([
            'id'                => Uuid::uuid4(),
            'bathrooms'         => $validatedData['bathrooms'],
            'bedrooms'          => $validatedData['bedrooms'],
            'floor_area'        => $validatedData['floor_area'],
            'unit_floor_number' => $validatedData['unit_floor_number'],
            'condominium_name'  => $validatedData['condominium_name'],
            'floor'             => $validatedData['floor'],
            'tower_name_number' => $validatedData['tower_name_number'],
            'car_spaces'        => $validatedData['car_spaces'],
            'classification'    => $validatedData['classification'],
            'fully_furnished'   => $validatedData['fully_furnished'],
            'sqm_range'         => $validatedData['sqm_range'],
            'rooms_total'       => $validatedData['rooms_total'],
            'total_floors'      => $validatedData['total_floors'],
            'price_range'       => $validatedData['price_range'],
            'price_conditions'  => $validatedData['price_conditions'],
            'build_year'        => $validatedData['build_year'],
            'deposit_bond'      => $validatedData['deposit_bond'],
            'land_size'         => $validatedData['land_size'],
            'building_name'     => $validatedData['building_name'],
            'block_lot_unit_floor' =>  $validatedData['block_lot_unit_floor'],
            'size'              => $validatedData['size'],
            'subdivision_name'  => $validatedData['subdivision_name'],
            'show_price_online' =>  $validatedData['show_price_online'],
            'price_php'         =>  $validatedData['price_php'],
            'price_usd'         =>  $validatedData['price_usd'],
            'available_from'    =>  $validatedData['available_from'],
            'object_id'         =>  $validatedData['object_id'],
        ]);

        
        PropertyFeature::create([
            'id' => Uuid::uuid4(),
            'features' => json_encode($validatedData['features']),
        ]);

        Property::create([
            'id'                            => $thisPropertyId,
            'title'                         => $validatedData['title'],
            'description'                   => $validatedData['description'],
            'user_id'                       => Auth::user()->id,
            'offer_type_id'                 => $validatedData['offer_type_id'],
            'property_classification_id'    => $classification->id,
            'property_location_id'          => $location->id,
            'property_info_id'              => $PropertyKeyInfo->id,
            'property_multimedia_assets_id' => $assets->id,
        ]);


        
        $this->reset($validatedData);
        session()->flash('message', 'Congratulations! Your property listing has been successfully posted on our website. 🏡 Thank you for choosing us to showcase your property. It\'s now visible to potential buyers or renters. Good luck with your property sale or rental journey! If you have any updates or need assistance, feel free to reach out to our support team.');
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
    public $feature;
    public $propertyType;

    public function wirePropertyClick($id)
    {
        $hasIndoorOrOutdoorFeature = false;
        $hasIndoor = false;
        $hasOutdoor = false;

        $this->reset('subtype_id'); 
        $this->reset('features');

        $subtypes = SubTypes::where('property_type_id', $id)->get();

        foreach ($subtypes as $subType) {
            $subtypesArray[] = $subType;
        }

        $type = PropertyType::where('id', $id)->get(); // get property type where id is $id
        $propertyType = $type[0]->name;

        $featuresArray = [];
        $featuresArray = Features::where('property_type', $type[0]->name)->get();
        
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

        $this->propertyType = $propertyType;
        $this->subtypes = $subtypesArray;
        $this->feature = $featuresArray;
    }

    public function removeImage ($image) {
       
        $this->img_file_name = array_filter($this->img_file_name, function ($fileName) use ($image) {
            $fileName !== $image;
        });
    }

    public function removeDoc ($docFileName) {
        $this->docs_file_name = array_filter($this->docs_file_name, function ($fileName) use ($docFileName) {
            $fileName !== $docFileName;
        });
    }

    public function render()
    {
        return view('livewire.user-verified.add-property');
    }
}

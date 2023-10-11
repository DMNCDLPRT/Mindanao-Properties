<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OfferType;
use App\Models\PropertyType;
use App\Models\SubTypes;

class UserVerifiedController extends Controller
{

    public function addproperty () {
        $offer_types    = OfferType::all();
        $property_types = PropertyType::all();
        $subtypes       = SubTypes::all();

        // dd($offer_types,  $property_types, $subtypes);
    
        return view('user-verified.add-property', [
            'offer_type'    => $offer_types,
            'property_type' => $property_types,
            'subtypes'      => $subtypes,
        ]);
    }
}

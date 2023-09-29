<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Property;


class Properties extends Controller
{
    public function properties()
    {
        // Retrieve all properties with their associated data
        $allProperties = Property::with([
            'user',
            'offerType',
            'propertyClassification',
            'propertyLocation',
            'propertyInfo',
            // 'multimediaA ssets.image',
        ])->get();

      
        return view('properties', [
            'allProperties' => $allProperties,
            // 'properitesImg' => $allPropertiesImg,
        ]);
    }

    public function propertyById($id) 
    {
        // Retrieve all properties with their associated data
        $propertyById = Property::with([
            'user',
            'offerType',
            'propertyClassification',
            'propertyLocation',
            'propertyInfo',
            
            // 'features',          
            //NOTE: GET THE FEATURES OF PROPERTY, unable to have relationship with property_features table

            // 'multimediaAssets.image',
        ])->where('id', $id)->first();

        dd($propertyById);


    
        return view('property-details', [
            'property' => $propertyById,
        ]);
        
    }
   
    
}

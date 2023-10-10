<?php

namespace Database\Seeders;

use Ramsey\Uuid\Uuid;
use App\Models\PropertySubType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $propertySubTypes = [
            'Condominium' => ['condotel', 'other', 'penthouse', 'studio', 'loft'],
            'Commercial' => ['warehouse', 'building', 'offices', 'retail', 'coworking Space'],
            'Apartment' => ['Room', 'Apartments', 'Loft', 'Penthouse', 'Bedpace'],
            'House' => ['Townhouse', 'Beach House', 'Villas', 'Single-Family-House'],
            'Land' => ['Agricultural Lot', 'Residential Lot', 'Memorial', 'Commercial Lot', 'Beach Lot', 'Parking Lot'],
        ];

        foreach ($propertySubTypes as $propertyType => $subTypes) {
            $propertyTypeId = DB::table('property_types')->where('name', $propertyType)->value('id');

            foreach ($subTypes as $subType) {
                DB::table('subtype')->insert([
                    'id' => Uuid::uuid4(),
                    'property_type_id' => $propertyTypeId,
                    'subtype' => $subType,
                ]);
            }
        }
    }
}

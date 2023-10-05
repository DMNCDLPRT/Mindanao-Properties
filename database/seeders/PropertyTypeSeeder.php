<?php

namespace Database\Seeders;

use Ramsey\Uuid\Uuid;
use App\Models\PropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $property_types = [
            ['name' => 'Condominium'],
            ['name' => 'Commercial'],
            ['name' => 'Apartment'],
            ['name' => 'House'],
            ['name' => 'Land'],
        ];

        foreach($property_types as $prooperty_typeData) {
            PropertyType::create([
                'id' => Uuid::uuid4(),
                'name' => $prooperty_typeData['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

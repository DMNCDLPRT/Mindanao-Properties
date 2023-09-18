<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $additionalFeatures = [
            ['name' => 'Fireplace', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Fenced Yard', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Swimming Pool', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Wooden Deck', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Patio', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Garage', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Carport', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Garden', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Dining Room', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Home Office', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Laundry Room', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Walk-in Closet', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Central Heating', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Air Conditioning', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Solar Panels', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Pet Park', 'type' => 'outdoor', 'property_type' => 'Apartment'],
            ['name' => 'Tennis Court', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Movie Theater', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Art Studio', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Wine Cellar', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Community Garden', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Security System', 'type' => 'indoor', 'property_type' => 'House'],

            ['name' => 'Balcony', 'type' => 'outdoor', 'property_type' => 'Apartment'],
            ['name' => 'High-Speed Internet', 'type' => 'indoor', 'property_type' => 'Apartment'],
            ['name' => 'Elevator', 'type' => 'indoor', 'property_type' => 'Apartment'],
            ['name' => 'Dishwasher', 'type' => 'indoor', 'property_type' => 'Apartment'],
            ['name' => 'Washer/Dryer Hookup', 'type' => 'indoor', 'property_type' => 'Apartment'],
            ['name' => 'Fitness Center', 'type' => 'indoor', 'property_type' => 'Apartment'],
            ['name' => 'Rooftop Garden', 'type' => 'outdoor', 'property_type' => 'Apartment'],
            ['name' => 'Bike Storage', 'type' => 'indoor', 'property_type' => 'Apartment'],

            ['name' => 'Gym', 'type' => 'indoor', 'property_type' => 'Condominium'],
            ['name' => 'Office Space', 'type' => 'indoor', 'property_type' => 'Commercial'],
            ['name' => 'Conference Room', 'type' => 'indoor', 'property_type' => 'Commercial'],
            ['name' => 'Parking Lot', 'type' => 'outdoor', 'property_type' => 'Commercial'],
            ['name' => 'Reception Area', 'type' => 'indoor', 'property_type' => 'Commercial'],
            ['name' => 'Break Room', 'type' => 'indoor', 'property_type' => 'Commercial'],
            ['name' => 'Central Courtyard', 'type' => 'outdoor', 'property_type' => 'Commercial'],
            ['name' => 'Guest Parking', 'type' => 'outdoor', 'property_type' => 'Commercial'],
            ['name' => 'Conference Room', 'type' => 'indoor', 'property_type' => 'Commercial'],
            ['name' => 'Outdoor Seating', 'type' => 'outdoor', 'property_type' => 'Commercial'],
            ['name' => 'Covered Patio', 'type' => 'outdoor', 'property_type' => 'Commercial'],
            ['name' => 'Roof Deck', 'type' => 'outdoor', 'property_type' => 'Commercial'],
            ['name' => 'Kitchenette', 'type' => 'indoor', 'property_type' => 'Commercial'],

            ['name' => 'Swimming Pool', 'property_type' => 'Condominium'],
            ['name' => 'Tennis Court', 'property_type' => 'Condominium'],
            ['name' => 'Playground', 'property_type' => 'Condominium'],
            ['name' => 'BBQ Area', 'property_type' => 'Condominium'],
            ['name' => 'Picnic Area', 'property_type' => 'Condominium'],
            
            ['name' => 'Parking Lot', 'property_type' => 'Commercial'],
            ['name' => 'Outdoor Seating', 'property_type' => 'Commercial'],
            ['name' => 'Covered Patio', 'property_type' => 'Commercial'],
            ['name' => 'Roof Deck', 'property_type' => 'Commercial'],
            ['name' => 'Central Courtyard', 'property_type' => 'Commercial'],
            
            ['name' => 'Balcony', 'property_type' => 'Apartment'],
            ['name' => 'Rooftop Garden', 'property_type' => 'Apartment'],
            ['name' => 'Pet Park', 'property_type' => 'Apartment'],
            ['name' => 'Bike Storage', 'property_type' => 'Apartment'],
            ['name' => 'Outdoor Kitchen', 'property_type' => 'Apartment'],
            
            ['name' => 'Swimming Pool', 'property_type' => 'House'],
            ['name' => 'Fenced Yard', 'property_type' => 'House'],
            ['name' => 'Wooden Deck', 'property_type' => 'House'],
            ['name' => 'Patio', 'property_type' => 'House'],
            ['name' => 'Garden', 'property_type' => 'House'],
            
            ['name' => 'Landscaped Grounds', 'property_type' => 'Land'],
            ['name' => 'Nature Trails', 'property_type' => 'Land'],
            ['name' => 'Fishing Pond', 'property_type' => 'Land'],
            ['name' => 'Horse Stables', 'property_type' => 'Land'],
            ['name' => 'Golf Course', 'property_type' => 'Land'],
        ];
        
        DB::table('features')->insert($additionalFeatures);
    }
}

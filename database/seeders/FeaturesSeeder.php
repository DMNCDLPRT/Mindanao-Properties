<?php

namespace Database\Seeders;

use App\Models\Amenities;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

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
            ['name' => 'Tennis Court', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Movie Theater', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Art Studio', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Wine Cellar', 'type' => 'indoor', 'property_type' => 'House'],
            ['name' => 'Community Garden', 'type' => 'outdoor', 'property_type' => 'House'],
            ['name' => 'Security System', 'type' => 'indoor', 'property_type' => 'House'],
            
            ['name' => 'Pet Park', 'type' => 'outdoor', 'property_type' => 'Apartment'],
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

           
        ];
        foreach ($additionalFeatures as $features) {
            Amenities::create([
                'id' => Uuid::uuid4(),
                'name' => $features['name'],
                'type' => $features['type'],
                'property_type' => $features['property_type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}

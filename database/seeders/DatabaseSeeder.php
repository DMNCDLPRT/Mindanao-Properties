<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PropertyType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(OfferTypeSeeder::class);
        $this->call(PropertyTypeSeeder::class);
        $this->call(SubTypeSeeder::class);
        $this->call(FeaturesSeeder::class);
        // $this->call(PropertyInfoSeeder::class);
        // $this->call(PropertyLocationSeeder::class);
        // $this->call(PropertyImagesSeeder::class);
    }
}

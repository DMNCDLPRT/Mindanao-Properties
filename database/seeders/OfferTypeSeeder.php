<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OfferType;

class OfferTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offerTypes = [
            ['name' => 'sell'],
            ['name' => 'rent'],
        ];

        foreach ($offerTypes as $offerTypeData) {
            OfferType::create([
                'name' => $offerTypeData['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}

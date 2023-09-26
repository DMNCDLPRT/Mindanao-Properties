<?php

namespace Database\Seeders;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OfferType;
use Database\Factories\OfferTypeFactory;

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
                'id' => Uuid::uuid4(),
                'name' => $offerTypeData['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}

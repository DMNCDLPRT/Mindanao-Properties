<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PropertyInfo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyInfo>
 */
class PropertyInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'floor_area' => $this->faker->numberBetween(500, 2000),
            'unit_floor_number' => $this->faker->numberBetween(1, 20),
            'condominium_name' => $this->faker->word,
            'show_price_online' => $this->faker->boolean,
            'price_php' => $this->faker->numberBetween(100000, 1000000),
            'price_usd' => $this->faker->numberBetween(1000, 10000),
            'available_from' => $this->faker->date(),
            'object_id' => $this->faker->uuid,
            'land_size' => $this->faker->numberBetween(100, 1000),
            'building_name' => $this->faker->word,
            'block_lot_unit_floor' => $this->faker->word,
            'subdivision_name' => $this->faker->word,
            'fully_furnished' => $this->faker->boolean,
            'rooms_total' => $this->faker->numberBetween(1, 10),
            'car_spaces' => $this->faker->numberBetween(0, 5),
            'sqm_range' => $this->faker->word,
            'price_conditions' => $this->faker->sentence,
            'build_year' => $this->faker->year,
            'deposit_bond' => $this->faker->numberBetween(1000, 5000),
            'price_range' => $this->faker->sentence,
        ];
    }
}

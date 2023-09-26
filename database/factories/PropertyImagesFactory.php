<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PropertyImages;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = PropertyImages::class;

    public function definition(): array
    {
        return [
            'img_file_name' => $this->faker->image('public/storage/images', 640, 480, null, false),
        ];
    }
}

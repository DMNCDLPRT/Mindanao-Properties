<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyImages;
use Illuminate\Support\Facades\Storage;

class PropertyImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $imagesDirectory = storage_path('app/public/property-img/');

        // Iterate through the files in the directory
        foreach (scandir($imagesDirectory) as $file) {
            if ($file !== '.' && $file !== '..') {
                // Copy the image to the public directory
                $path = 'public/property-img/' . $file;
                Storage::copy("property-img/{$file}", $path);

                // Create a record in the database
                PropertyImages::create([
                    'img_file_name' => $file,
                    'img_file_path' => $path,
                ]);
            }
        }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_location', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();

            $table->string('display_name', 255);
            $table->string('province', 30);        
            $table->string('city', 40);            
            $table->string('barangay', 60);   
            $table->string('address', 255);       
            $table->decimal('longitude', 3, 14);
            $table->decimal('latitude', 4, 14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_location');
    }
};

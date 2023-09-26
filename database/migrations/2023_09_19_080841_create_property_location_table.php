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

            $table->string('region', 30)->nullable();
            $table->string('province', 30)->nullable();        
            $table->string('city', 40)->nullable();            
            $table->string('barangay', 60)->nullable();   
            $table->string('address', 255)->nullable();       
            $table->decimal('longitude', 9, 6)->nullable();
            $table->decimal('latitude', 9, 6)->nullable();
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

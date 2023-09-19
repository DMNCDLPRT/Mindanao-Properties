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
            $table->uuid('id')->default(DB::raw('(UUID())'))->primary();

            $table->string('region', 30)->nullable(false);
            $table->string('province', 30)->nullable(false);        
            $table->string('city', 40)->nullable(false);            
            $table->string('barangay', 60)->nullable(false);   
            $table->string('address', 255)->nullable(false);       
            
            $table->decimal('longitude', 9, 6)->nullable(false);
            $table->decimal('latitude', 9, 6)->nullable(false);

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

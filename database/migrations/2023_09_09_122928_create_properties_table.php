<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->boolean('show_price_online');
            $table->decimal('price_php', 10, 2);
            $table->decimal('price_usd', 10, 2);
            $table->date('available_from');
            $table->string('object_id');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('address');
            $table->double('latitude', 10, 6);
            $table->double('longitude', 10, 6);
            
            // Add foreign keys for OfferType and PropertyType
            $table->foreignId('offer_type_id')->constrained('offer_type');
            $table->foreignId('property_type_id')->constrained('property_types');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

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
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('(UUID())'))->primary();

            $table->string('title');
            $table->text('description');

            // Add foreign keys for OfferType and PropertyType

            // $table->foreignId('user_id')->constrained('users');
            $table->uuid('user_id', 36);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->foreignId('offer_type_id')->constrained('offer_type');
            $table->uuid('offer_type_id', 36);
            $table->foreign('offer_type_id')->references('id')->on('offer_type')->onDelete('cascade');

            // $table->foreign('property_classification_id')->constrained('property_classification');
            $table->uuid('property_classification_id', 36);
            $table->foreign('property_classification_id')->references('id')->on('property_classification')->onDelete('cascade');

            // $table->foreignId('property_location_id')->constrained('property_location');
            $table->uuid('property_location_id', 36);
            $table->foreign('property_location_id')->references('id')->on('property_location')->onDelete('cascade');

            //$table->foreignId('property_info_id')->constrained('property_location');
            $table->uuid('property_info_id', 36);
            $table->foreign('property_info_id')->references('id')->on('property_info')->onDelete('cascade');

            //$table->foreignId('property_multimedia_assets_id')->constrained('property_location');
            $table->uuid('property_multimedia_assets_id', 36);
            $table->foreign('property_multimedia_assets_id')->references('id')->on('multimedia_assets')->onDelete('cascade');
            
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

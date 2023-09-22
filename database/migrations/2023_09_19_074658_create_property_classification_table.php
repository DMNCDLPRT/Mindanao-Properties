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
        Schema::create('property_classification', function (Blueprint $table) {
            
            $table->uuid('id')->primary()->unique();

            //$table->foreignId('property_type_id')->constrained('property_types');
            $table->uuid('property_type_id', 36);
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');

            //$table->foreignId('property_sub_type_id')->constrained('property_sub_type');
            $table->uuid('property_sub_type_id', 36);
            $table->foreign('property_sub_type_id')->references('id')->on('subtype')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_classification');
    }
};

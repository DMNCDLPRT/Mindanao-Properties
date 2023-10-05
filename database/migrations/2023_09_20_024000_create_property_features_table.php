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
        Schema::create('property_features', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();

            $table->uuid('properties_id', 36);
            $table->foreign('properties_id')->references('id')->on('properties')->onDelete('cascade');

            $table->uuid('feature_id', 36);
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_features');
    }
};

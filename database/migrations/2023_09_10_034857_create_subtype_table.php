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
        Schema::create('subtype', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();

            $table->string('subtype');

            $table->uuid('property_type_id');
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subtype');
    }
};

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
        Schema::create('multimedia_assets', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();

            $table->uuid('property_images_id', 36);
            $table->foreign('property_images_id')->references('id')->on('property_images')->onDelete('cascade');

            $table->uuid('property_documents_id', 36);
            $table->foreign('property_documents_id')->references('id')->on('property_documents')->onDelete('cascade');

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multimedia_assets');
    }
};

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
        Schema::create('property_info', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->decimal('floor_area', 10, 2)->nullable();
            $table->string('unit_floor_number')->nullable();
            $table->string('condominium_name')->nullable();
            $table->string('floor')->nullable();
            $table->string('tower_name_number')->nullable();
            $table->integer('car_spaces')->nullable();
            $table->string('classification')->nullable();
            $table->string('fully_furnished')->nullable();
            $table->string('sqm_range')->nullable();
            $table->integer('rooms_total')->nullable();
            $table->integer('total_floors')->nullable();
            $table->string('price_range')->nullable();
            $table->string('price_conditions')->nullable();
            $table->date('build_year')->nullable();
            $table->decimal('deposit_bond', 10, 2)->nullable();
            $table->decimal('land_size', 10, 2)->nullable();
            $table->string('building_name')->nullable();
            $table->string('block_lot_unit_floor')->nullable();
            $table->decimal('size', 10, 2)->nullable();
            $table->string('subdivision_name')->nullable();

            $table->boolean('show_price_online')->default(false);
            $table->decimal('price_php', 10, 2)->nullable();
            $table->decimal('price_usd', 10, 2)->nullable();
            $table->date('available_from')->nullable();
            $table->string('object_id')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_info');
    }
};

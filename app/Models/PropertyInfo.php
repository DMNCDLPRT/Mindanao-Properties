<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyInfo extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = "property_info";
    protected $primaryKey = "id";
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.

    protected $fillable = [
        'bedrooms',
        'bathrooms',
        'floor_area',
        'unit_floor_number',
        'condominium_name',
        'show_price_online',
        'price_php',
        'price_usd',
        'available_from',
        'object_id',
        'land_size',
        'building_name',
        'block_lot_unit_floor',
        'subdivision_name',
        'fully_furnished',
        'rooms_total',
        'car_spaces',
        'sqm_range',
        'price_conditions',
        'build_year',
        'deposit_bond',
        'price_range',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}

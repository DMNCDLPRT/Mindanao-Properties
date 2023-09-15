<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SubType;
use App\Models\OfferType;
use App\Models\PropertyType;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'show_price_online',
        'price_php',
        'price_usd',
        'available_from',
        'object_id',
        'province',
        'city',
        'barangay',
        'address',
        'latitude',
        'longitude',
        'offer_type_id',
        'property_type_id',
    ];

    public function offerType() {
        return $this->belongsTo(OfferType::class);
    }

    public function propertyType() {
        return $this->belongsTo(PropertyType::class);
    }

    public function propertySubTypes()
    {
        return $this->hasMany(PropertySubType::class);
    }

    public function propertySubtype()
    {
        return $this->belongsTo(PropertySubType::class, 'property_subtype_id');
    }

}

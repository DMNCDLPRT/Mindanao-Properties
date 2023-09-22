<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLocation extends Model
{
    use HasFactory;

    protected $table = 'property_location';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.
    
    protected $fillable = [
        'id',
        'region',
        'province',
        'city',
        'barangay',
        'address',
        'longitude',
        'latitude',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}

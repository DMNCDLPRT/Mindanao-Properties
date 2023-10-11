<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyClassification extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'property_classification';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.

    protected $fillable = [
        'property_type_id',
        'property_sub_type_id',
    ];

    public function property () {
        return $this->belongsTo(Property::class);
    }

    public function type () {
        return $this->hasOne(PropertyType::class, 'id', 'property_type_id');
    }

    public function subtype () {
        return $this->hasOne(PropertySubType::class, 'property_sub_type_id');
    }
}

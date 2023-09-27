<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTypes extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'subtype';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.

    protected $fillable = [
        'subtype',
        'property_type',
    ];

    public function propertyType () {
        return $this->hasOne(PropertyType::class, 'property_type_id');
    }

    public function type () {
        return $this->belongsTo(PropertyType::class);
    }

}

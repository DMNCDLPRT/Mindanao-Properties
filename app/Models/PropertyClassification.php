<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyClassification extends Model
{
    use HasFactory;

    protected $table = 'property_classification';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.

    public function type () {
        return $this->hasOne(PropertyType::class, 'property_type_id');
    }

    public function subtype () {
        return $this->hasOne(PropertySubType::class, 'property_sub_type_id');
    }
}

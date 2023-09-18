<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;
    protected $table = 'features';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_feature', 'feature_id', 'property_id');
    }
}
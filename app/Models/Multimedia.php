<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;

    protected $table = 'multimedia';
    protected $primaryKey = 'id';

    protected $fillable = [
        'property_id',
        'images', 
        'media',
        'youtube',
        'virtual_tour',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

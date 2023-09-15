<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Property;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image_path'
    ];

    public function image ()
    {
        return $this->belongsTo(Property::class);
    }
}

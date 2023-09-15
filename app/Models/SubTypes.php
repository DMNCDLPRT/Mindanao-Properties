<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTypes extends Model
{
    use HasFactory;

    protected $table = 'subtype';
    protected $primaryKey = 'id';

    protected $fillable = [
        'subtype',
        'property_type',
    ];

}

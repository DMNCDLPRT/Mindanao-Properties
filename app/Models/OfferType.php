<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferType extends Model
{
    use HasFactory;

    protected $table = 'offer_type';
    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public function offerType ()
    {
        return $this->belongsTo(Property::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferType extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'offer_type';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.

    protected $fillable = ['name'];

    public function offerType ()
    {
        return $this->belongsTo(Property::class);
    }
}

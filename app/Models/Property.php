<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OfferType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Property extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'properties';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.
    
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'offer_type_id',
        'property_classification_id',
        'property_location_id',
        'property_info_id',
        'property_multimedia_assets_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function offerType()
    {
        return $this->belongsTo(OfferType::class, 'offer_type_id', 'id');
    }

    public function propertyClassification()
    {
        return $this->belongsTo(PropertyClassification::class, 'property_classification_id', 'id');
    }

    public function propertyLocation()
    {
        return $this->belongsTo(PropertyLocation::class, 'property_location_id', 'id');
    }

    public function propertyInfo()
    {
        return $this->belongsTo(PropertyInfo::class, 'property_info_id', 'id');
    }

    public function multimediaAssets()
{
    return $this->belongsTo(MultimediaAssets::class, 'property_multimedia_assets_id', 'id');
}

    public function features () {
        return $this->hasMany(PropertyFeature::class);
    }

}

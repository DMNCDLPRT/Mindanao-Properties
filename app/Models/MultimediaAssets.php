<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultimediaAssets extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'multimedia_assets';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.

    protected $fillable = [
        'property_images_id',
        'property_documents_id',
        'yt_link', // youtube link
        'vt_link', // vitual tour link
    ];

    public function images () {
        return $this->hasMany(PropertyImages::class, 'id', 'property_images_id');
    }

    public function documents () {
        return $this->hasMany(PropertyDocuments::class, 'property_documents_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

}

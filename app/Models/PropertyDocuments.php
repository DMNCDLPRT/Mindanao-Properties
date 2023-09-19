<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDocuments extends Model
{
    use HasFactory;

    protected $table = 'property_documents';
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // This specifies the data type of the primary key.
    public $incrementing = false; // This tells Laravel that the primary key is not auto-incrementing.

    protected $fillable = [
        'docs_file_name',
    ];

    public function multimedia_assets () {
        return $this->belongsTo(MultimediaAssets::class, 'property_documents_id');
    }
}

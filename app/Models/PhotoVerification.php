<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhotoVerification extends Model
{
    use HasFactory;

    protected $connection = 'userDB';
    protected $fillable = [
        'v_id',
        'webcam_image',
        'webcam_image_status',
    ];

    //Relationship (inverse)
    public function userVerification(): BelongsTo
    {
        return $this->belongsTo(UserVerification::class);
    }
}

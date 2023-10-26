<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserVerification extends Model
{
    use HasFactory;

    protected $connection = 'userDB';

    protected $fillable = [
        'user_id',
        'status',
    ];

    //Relationship (inverse)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function nicVerification(): HasOne
    {
        return $this->hasOne(NicVerification::class);
    }

    public function photoVerification(): HasOne
    {
        return $this->hasOne(PhotoVerification::class);
    }

    public function addressVerification(): HasOne
    {
        return $this->hasOne(AddressVerification::class);
    }
}

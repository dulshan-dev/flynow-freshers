<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AddressVerification extends Model
{
    use HasFactory;

    protected $connection = 'userDB';
    protected $fillable = [
        'v_id',
        'unit_no',
        'street_name',
        'city',
        'province',
        'country',
        'address_proof',
        'address_status',
    ];

    //Relationship (inverse)
    public function userVerification(): BelongsTo
    {
        return $this->belongsTo(UserVerification::class);
    }
}

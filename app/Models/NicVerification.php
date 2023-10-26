<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NicVerification extends Model
{
    use HasFactory;

    protected $connection = 'userDB';
    protected $fillable = [
        'v_id',
        'nic_no',
        'nic_proof_front',
        'nic_proof_back',
        'nic_status',
    ];

    //Relationship (inverse)
    public function userVerification(): BelongsTo
    {
        return $this->belongsTo(UserVerification::class);
    }
}

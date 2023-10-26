<?php

namespace App\Models;

use App\Models\Topup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionRecord extends Model
{
    protected $connection = 'userDB';

    use HasFactory;
    public $timestamps = true;
    protected $guarded = [
        'payment_proof_status',
        'transfer_status',
    ];

    public function topup()
    {
        return $this->BelongsTo(Topup::class);
    }

}
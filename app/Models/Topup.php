<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topup extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $guarded = [
        'topup_status',
        'topup_status_description',
    ];

    protected $connection = 'userDB';

    //Relationship
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transactionRecord()
    {
        return $this->hasMany('App\Models\TransactionRecord');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentWallet extends Model
{
    use HasFactory;

    protected $table = 'agent_wallet'; // Specify the table name if it's different from the model's name.
    protected $fillable = [
        'type',
        'update_reason',
        'user_id',
        'credit_limit',
        'exist_credit_limit',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflineReqPayment extends Model
{
    use HasFactory;

    protected $connection = 'userDB';
    protected $fillable = [
        'user_id',
        'ref_no',
        'amount',
        'agency_email',
        'admin_email',
        'remarks',
        'document'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

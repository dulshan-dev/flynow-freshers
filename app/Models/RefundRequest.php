<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefundRequest extends Model
{
    use HasFactory;
    protected $table = 'refund_requests';
    protected $fillable = [
        'pnr',
        'airline',
        'total_fare',
        'airline_pnr',
        'pax_name',
        'sector',
        'agency_email',
        'admin_email',
        'remarks',
        'no_show',
    ];

    protected $casts = [
        'no_show' => 'boolean', 
    ]; 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReIssue extends Model
{
    use HasFactory;

    protected $table = 're_issues';
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
        'purged_pnr',
        'status'
    ];

    protected $casts = [
        'no_show' => 'boolean', 
        'purged_pnr' => 'boolean',
    ]; 
}

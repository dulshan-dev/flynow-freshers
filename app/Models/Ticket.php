<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'PCC',
        'existing_booking_pnr',
        'tickets_to_be_reissued',
        'new_booking_pnr',
        'is_no_show',
        'reissue_type',
        'service_type',
        'details',
        'attachment',
    ];

    public function setTicketsToBeReissuedAttribute($value)
    {
        $this->attributes['tickets_to_be_reissued'] = json_encode($value);
    }

    // Eloquent Accessor to deserialize the field when retrieving from the database.
    public function getTicketsToBeReissuedAttribute($value)
    {
        return json_decode($value, true);
    }
}

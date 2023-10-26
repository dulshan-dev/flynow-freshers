<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAgencies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['user_id' , 'agency_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

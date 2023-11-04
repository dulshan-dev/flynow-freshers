<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    protected $table = 'announcements'; 
    protected $fillable = [
        'admin_id',
        'title',
        'cover_img',
        'description'
    ];
}
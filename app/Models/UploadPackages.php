<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UploadPackages extends Model
{
    use HasFactory;
    public $timestamps = true;
    //protected $guarded = ['']
    protected $fillable = ['admin_id', 'package_name', 'description', 'title', 'upload_image', 'upload_url'];

    protected $connection = 'userDB';

    //Relationship
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function UplaodPackages()
    {
        return $this->hasMany(UploadPackages::class);
    }
}

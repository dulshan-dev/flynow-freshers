<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UploadBankDetails extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = ['admin_id', 'existing_bank_details', 'bank_name', 'acc_number', 'IFSC_code', 'address'];

    protected $connection = 'userDB';

    //Relationships
    
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function UploadBankDetails()
    {
        return $this->hasMany(UploadBankDetails::class);
    }
}



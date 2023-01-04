<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function company(){
        // In singular because will return only one record by user
        // Eloquent can get the keyname for foreign key
        return $this->belongsTo(Company::class);
    }
}

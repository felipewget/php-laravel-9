<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // protected $table = "app_companies";
    // protected $primaryKet = "_id";
    protected $guarded = [];

    protected $fillable = [
        'email',
        'address',
        'website'
    ];
}

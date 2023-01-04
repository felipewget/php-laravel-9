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

    public function contacts()
    {
        // contact::class, and foreign key is company_id but we an put company_id 
        // in the second argument, I'm using company_id, so will be foreign_key in this table
        // we need connect with the other model
        return $this->hasMany(Contact::class, "company_id");
    }

}

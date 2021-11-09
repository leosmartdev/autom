<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "user_address";

    protected $fillable = [
        'full_name',
        'contact_number',
        'address',
        'latitude',
        'longitude',
        'city',
        'zip_code',
        'address_type',
    ];
}

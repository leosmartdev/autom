<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "shipping_method";
    protected $fillable = [
        'id',
        'name',
        'status',

    ];
}

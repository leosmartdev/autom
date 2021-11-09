<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "shipping";
    protected $fillable = [
        'order_id',
        'user_address_id',
        'shipping_method_id',
        'delivery_fee',
        'status_id',
    ];
}

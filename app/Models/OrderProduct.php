<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "order_product";
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];
}

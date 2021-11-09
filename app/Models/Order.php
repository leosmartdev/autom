<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "orders";
    protected $fillable = [
        "user_id",
        "order_product_id",
        "payment_id",
        "order_status_id",
        "retailer_id",
        "shipping_id",
        "voucher_id",
    ];

}

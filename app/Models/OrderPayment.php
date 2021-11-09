<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "order_payment";
    protected $fillable = [
        'user_id',
        'payment_method_id',
        'order_id',
        'payment_status',
    ];
}

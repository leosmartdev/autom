<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderVoucher extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "order_voucher";
    protected $fillable = [
        'remark',
        'user_id',
    ];
}

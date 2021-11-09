<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "voucher";
    protected $fillable = [
        'user_id',
        'title',
        'promo_code_type',
        'discount',
        'usage_setting',
        'minimum_consumption',
        'exp_date',
        'quantity',
        'rule',
    ];
}

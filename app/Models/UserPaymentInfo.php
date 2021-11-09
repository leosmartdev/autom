<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaymentInfo extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "user_payment_info";
    protected $fillable = [
        'user_id',
        'payment_method',
        'card_type',
        'card_number',
        'valid_date',
        'cvv',
    ];
}

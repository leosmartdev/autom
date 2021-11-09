<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceCentre extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "finance_centre";
    protected $fillable = [
        'user_id',
        'order_id',
        'earning',
        'withdraw_status_id',
        'account_receivable',
    ];
}

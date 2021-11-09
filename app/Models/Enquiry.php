<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "enquiry";
    protected $fillable = [
        'user_type',
        'user_id',
        'product_name',
        'remark',
        'status_id',
        'result',
        'handler_id',
    ];
}

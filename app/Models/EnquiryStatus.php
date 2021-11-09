<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryStatus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "enquiry_status";
    protected $fillable = [
        'id',
        'name',
    ];
}

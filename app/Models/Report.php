<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "report";
    protected $fillable = [
        'user_id',
        'type_id',
        'description',
        'remark',
        'status_id',
    ];
}

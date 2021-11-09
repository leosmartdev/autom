<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawnStatus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "withdraw_status";
    protected $fillable = [
        'id',
        'name',
    ];
}

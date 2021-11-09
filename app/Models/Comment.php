<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "comment";
    protected $fillable = [
        'user_id',
        'comment',
        'rate_number',
    ];
}

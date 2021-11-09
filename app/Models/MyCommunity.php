<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCommunity extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "my_community";
    protected $fillable = [
        'user_id',
        'images',
        'description',
        'url',
        'comment_id',
    ];
}

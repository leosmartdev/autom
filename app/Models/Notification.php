<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "notification";
    protected $fillable = [
        'title',
        'content',
        'scope_id',
        'user_id'
    ];
}

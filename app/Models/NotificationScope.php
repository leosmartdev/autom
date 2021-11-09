<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationScope extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "notification_scope";
    protected $fillable = [
        'id',
        'name',
    ];
}

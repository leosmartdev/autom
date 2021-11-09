<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppBanner extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "app_banner";
    protected $fillable = [
        'id',
        'image',
        'link_url'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "setting";
    protected $fillable = [
        'version',
        'app_type',
    ];
}

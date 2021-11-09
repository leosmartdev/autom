<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "products";

    public $fillable = [
        'user_id',
        'name',
        'category_id',
        'product_type_id',
        'price',
        'currency_id',
        'brand',
        'stock',
        'shop_id',
        'service',
        'drawing_number',
        'detail',
        'description',
        'images',
        'specification',

    ];
}

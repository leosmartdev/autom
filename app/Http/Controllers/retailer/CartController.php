<?php

namespace App\Http\Controllers\retailer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.retailer.cart');
    }
}

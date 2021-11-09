<?php

namespace App\Http\Controllers\wholesaler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.wholesaler.shop_management.shop');
    }

    public function create()
    {
        return view( 'pages.wholesaler.shop_management.add_shop');
    }

    public function store(Request $request)
    {
        return redirect()->route('shop');
    }

    public function edit()
    {
        return view( 'pages.wholesaler.shop_management');
    }

    public function update(Request $request)
    {
        return view( 'pages.wholesaler.shop_management');
    }

    public function destroy()
    {
        return view( 'pages.wholesaler.shop_management');
    }
}

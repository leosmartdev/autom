<?php

namespace App\Http\Controllers\wholesaler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductMallController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.wholesaler.product_mall.product_mall_popular');
    }

    public function create()
    {
        return view( 'pages.wholesaler.product_mall.product_mall_popular');
    }

    public function show($id)
    {
        return view( 'pages.wholesaler.product_mall.product_mall_detail');
    }

    public function store(Request $request)
    {
        return view( 'pages.wholesaler.product_mall.product_mall_popular');
    }

    public function edit($id)
    {
        return view( 'pages.wholesaler.product_mall.product_mall_detail');
    }

    public function update(Request $request)
    {
        return view( 'pages.wholesaler.product_mall.product_mall_popular');
    }

    public function destroy()
    {
        return view( 'pages.wholesaler.product_mall.product_mall_popular');
    }
}

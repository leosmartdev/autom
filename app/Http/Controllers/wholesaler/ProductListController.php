<?php

namespace App\Http\Controllers\wholesaler;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductListController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.wholesaler.product_management.product_list');
    }

    public function create()
    {
        return view( 'pages.wholesaler.product_management.product_add');
    }

    public function store(Request $request)
    {
        return view( 'pages.wholesaler.product_management.product_list');
    }

    public function show()
    {
        return view( 'pages.wholesaler.product_management.product_detail');
    }

    public function edit()
    {
        return view( 'pages.wholesaler.product_management.product_list');
    }

    public function update(Request $request)
    {
        return view( 'pages.wholesaler.product_management.product_list');
    }

    public function destroy()
    {
        return view( 'pages.wholesaler.product_management.product_list');
    }
}

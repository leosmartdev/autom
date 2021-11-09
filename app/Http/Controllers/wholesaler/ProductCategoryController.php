<?php

namespace App\Http\Controllers\wholesaler;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    //

    public function index()
    {
        return view( 'pages.wholesaler.product_management.product_category');
    }

    public function create()
    {
        return view( 'pages.wholesaler.product_management.product_list');
    }

    public function store(Request $request)
    {
        return view( 'pages.wholesaler.product_management.product_list');
    }

    public function show()
    {
        return view( 'pages.wholesaler.product_management.auto_body_parts');
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

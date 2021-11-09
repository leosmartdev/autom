<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view( 'pages.admin.product_management.products', ['products' => $products]);
    }

    public function create()
    {
        return view( 'pages.dashboard');
    }

    public function store(Request $request)
    {
        return redirect()->to('admin/product');
    }

    public function edit()
    {
        return view( 'pages.dashboard');
    }

    public function update(Request $request)
    {
        return view( 'pages.dashboard');
    }

    public function destroy()
    {
        return view( 'pages.dashboard');
    }

    public function order_cancellation()
    {
        return view( 'pages.admin.order_management.order_cancellation');
    }
}

<?php

namespace App\Http\Controllers\retailer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.retailer.order_management.pending_order');
    }

    public function create()
    {
        return view( 'pages.retailer.order_management.new_order');
    }

    public function store(Request $request)
    {
        return redirect()->route('orders');
    }

    public function show($id)
    {
        return view( 'pages.retailer.order_management.order_detail');
    }

    public function edit()
    {
        return view( 'pages.retailer.order_list');
    }

    public function update(Request $request)
    {
        return view( 'pages.order_list');
    }

    public function destroy()
    {
        return view( 'pages.order_list');
    }
}

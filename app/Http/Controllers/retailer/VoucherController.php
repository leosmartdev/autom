<?php

namespace App\Http\Controllers\retailer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.retailer.voucher_management.voucher_list');
    }

    public function create()
    {
        return view( 'pages.retailer.voucher_management.voucher_create');
    }

    public function store(Request $request)
    {
        return redirect()->route('voucher');
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
        return view( 'pages.retailer.order_list');
    }

    public function destroy()
    {
        return view( 'pages.retailer.order_list');
    }
}

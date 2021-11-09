<?php

namespace App\Http\Controllers\wholesaler;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.wholesaler.enquiry_management.user_enquiry');
    }

    public function create()
    {
        return view( 'pages.wholesaler.enquiry_management.my_enquiry');
    }

    public function store(Request $request)
    {
        return redirect()->route('voucher');
    }

    public function show($id)
    {
        return view( 'pages.wholesaler.enquiry_management.my_enquiry');
    }

    public function edit()
    {
        return view( 'pages.wholesaler.order_list');
    }

    public function update(Request $request)
    {
        return view( 'pages.wholesaler.order_list');
    }

    public function destroy()
    {
        return view( 'pages.wholesaler.order_list');
    }
}

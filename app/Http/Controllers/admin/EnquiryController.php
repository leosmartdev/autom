<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    //
    public function index()
    {
        $enquiries = Enquiry::all();
        return view( 'pages.admin.enquiry_management.list', ['enquiries'=> $enquiries]);
    }

    public function create()
    {
        return view( 'pages.dashboard');
    }

    public function store(Request $request)
    {
        return redirect()->route('dashboard');
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


}

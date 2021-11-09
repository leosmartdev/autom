<?php

namespace App\Http\Controllers\retailer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.retailer.dashboard');
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

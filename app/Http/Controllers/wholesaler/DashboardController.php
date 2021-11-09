<?php

namespace App\Http\Controllers\wholesaler;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.wholesaler.dashboard');
    }

    public function create()
    {
        return view( 'pages.wholesaler.dashboard');
    }

    public function store(Request $request)
    {
        return redirect()->route('dashboard');
    }

    public function edit()
    {
        return view( 'pages.wholesaler.dashboard');
    }

    public function update(Request $request)
    {
        return view( 'pages.wholesaler.dashboard');
    }

    public function destroy()
    {
        return view( 'pages.wholesaler.dashboard');
    }
}

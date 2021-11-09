<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function index()
    {
        $reports = Report::all();
        return view( 'pages.admin.report_management.list', ['reports' => $reports]);
    }

    public function create()
    {
        return view( 'pages.dashboard');
    }

    public function store(Request $request)
    {
        return redirect()->to('admin/report');
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

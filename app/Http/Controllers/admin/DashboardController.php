<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Encore\Admin\Widgets\Box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Encore\Chartjs\Chartjs;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $result['users_number'] = User::all()->count();
        $result['wholesalers_number'] = User::where('role_id', 2)->get()->count();
        $result['retailers_number'] = User::where('role_id', 3)->get()->count();
        $result['orders_number'] = Order::all()->count();
        return view( 'pages.admin.dashboard',compact('result'));
//        return $result
//            ->header('Chartjs')
//            ->body(new Box('Bar chart', view('pages.admin.dashboard')));
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

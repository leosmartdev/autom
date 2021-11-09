<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view( 'pages.admin.user_management.list', ['users' => $users]);
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

    public function user_basic_information_view($id) {
        $user = User::find($id);
        $user['address'] = "Tomsk";
        return view('pages.admin.user_management.basic_information', ['user' => $user]);
    }

    public function user_order_view($id) {
        $user = User::find($id);
        $user['address'] = "Tomsk";
        return view('pages.admin.user_management.order', ['user' => $user]);
    }

    public function user_rate_review($id) {
        $user = User::find($id);
        $user['address'] = "Tomsk";
        return view('pages.admin.user_management.rate_review', ['user' => $user]);
    }
}

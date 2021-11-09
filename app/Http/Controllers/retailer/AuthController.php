<?php

namespace App\Http\Controllers\retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request) {
        return view( 'pages.retailer.login');
    }

    public function register(Request $request) {
        return view( 'pages.retailer.register');
    }

    public function loginHandle(Request $request) {
        return redirect()->to('retailer/dashboard');
    }

    public function registerHandle(Request $request) {
        return redirect()->to('retailer/dashboard');
    }
}

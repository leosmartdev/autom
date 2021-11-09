<?php

namespace App\Http\Controllers\wholesaler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request) {
        return view( 'pages.wholesaler.login');
    }

    public function register(Request $request) {
        return view( 'pages.wholesaler.register');
    }

    public function loginHandle(Request $request) {
        return redirect()->to('wholesaler/dashboard');
    }

    public function registerHandle(Request $request) {
        return redirect()->to('wholesaler/dashboard');
    }
}

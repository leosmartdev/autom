<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function login(Request $request) {
        if(Auth::check()){
            return redirect()->to('admin/dashboard');
        }

        return view( 'pages.admin.login');
    }

    public function register(Request $request) {
        return view( 'pages.admin.register');
    }

    public function loginHandle(Request $request) {
        $validatedData = $this->validate($request, [
            'email' => 'required',
            'password' => 'min:6',
        ]);
        if ( Auth::attempt ( $validatedData, 0 ) ) {
            return redirect()->to('admin/dashboard');
        }
        Auth::logout();

        return redirect()->to('admin')->with( ['message' => "Username and password don't match.!" ] );
    }

    public function registerHandle(Request $request) {
        return redirect()->to('dashboard');
    }

    public function logOutHandle(Request $request) {
        Auth::logout();
        return redirect()->to('admin/');
    }
}

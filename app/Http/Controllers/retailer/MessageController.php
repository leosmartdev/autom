<?php

namespace App\Http\Controllers\retailer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index()
    {
        return view( 'pages.retailer.messages');
    }
}

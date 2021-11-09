<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WholesalerController extends Controller
{
    //
    public function index()
    {
        $wholesalers = User::where('role_id' , 2)->get();
        return view( 'pages.admin.wholesaler_management.list' ,['wholesalers' => $wholesalers]);
    }

    public function create()
    {
        return view( 'pages.admin.wholesaler_management.add');
    }

    public function store(Request $request)
    {
        return redirect()->to('admin/wholesalers');
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

    public function application_view()
    {
        return view( 'pages.admin.wholesaler_management.application');
    }

    public function shop_view()
    {
        return view( 'pages.admin.wholesaler_management.shop');
    }

    public function shop_basic_view()
    {
        return view( 'pages.admin.wholesaler_management.shop_basic');
    }

    public function shop_order_view()
    {
        return view( 'pages.admin.wholesaler_management.shop_order');
    }

    public function shop_product_view()
    {
        return view( 'pages.admin.wholesaler_management.shop_product');
    }

    public function shop_reviews_view()
    {
        return view( 'pages.admin.wholesaler_management.shop_reviews');
    }


}

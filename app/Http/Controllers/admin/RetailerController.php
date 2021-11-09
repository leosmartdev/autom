<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RetailerController extends Controller
{
    //
    public function index()
    {
        $retailers = User::where('role_id' , 3)->get();
        return view( 'pages.admin.retailer_management.list', ['retailers' => $retailers]);
    }

    public function create()
    {
        return view( 'pages.admin.retailer_management.add');
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

    public function order_create()
    {
        return view( 'pages.admin.retailer_management.order_add');
    }

    public function reviews()
    {
        return view( 'pages.admin.retailer_management.rate_and_reviews');
    }

    public function application_view()
    {
        return view( 'pages.admin.retailer_management.application');
    }

    public function shop_view()
    {
        return view( 'pages.admin.retailer_management.shop');
    }

    public function shop_basic_view()
    {
        return view( 'pages.admin.retailer_management.shop_basic');
    }

    public function shop_order_view()
    {
        return view( 'pages.admin.retailer_management.shop_order');
    }

    public function shop_product_view()
    {
        return view( 'pages.admin.retailer_management.shop_product');
    }

    public function shop_reviews_view()
    {
        return view( 'pages.admin.retailer_management.shop_reviews');
    }

    public function shop_community_view()
    {
        return view( 'pages.admin.retailer_management.shop_community');
    }
}

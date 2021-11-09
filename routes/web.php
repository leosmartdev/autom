<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('admin/', 'App\Http\Controllers\admin\AuthController@login' );
Route::post('admin/loginHandle', 'App\Http\Controllers\admin\AuthController@loginHandle' )->name('adminLogin');
Route::group(['middleware' => ['roleType']], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/logOut', 'App\Http\Controllers\admin\AuthController@logOutHandle' )->name('adminLogOut');
        Route::get('/messages', 'App\Http\Controllers\admin\MessageController@index' );
        Route::get('/cart', 'App\Http\Controllers\admin\CartController@index' );

        Route::resource('/dashboard', 'App\Http\Controllers\admin\DashboardController')->except(['show']);
        Route::resource('/order', 'App\Http\Controllers\admin\OrderController')->except(['']);
        Route::get('/order_cancellation', 'App\Http\Controllers\admin\OrderController@order_cancellation');
        Route::resource('/category', 'App\Http\Controllers\admin\CategoryController')->except(['show']);
        Route::resource('/product', 'App\Http\Controllers\admin\ProductController')->except(['show']);
        Route::resource('/shipping', 'App\Http\Controllers\admin\ShippingController')->except(['show']);
        Route::resource('/retailer', 'App\Http\Controllers\admin\RetailerController')->except(['show']);
        Route::get('/retailer_order', 'App\Http\Controllers\admin\RetailerController@order_create');
        Route::get('/retailer_reviews', 'App\Http\Controllers\admin\RetailerController@reviews');
        Route::get('/retailer_application', 'App\Http\Controllers\admin\RetailerController@application_view');
        Route::get('/retailer_shop', 'App\Http\Controllers\admin\RetailerController@shop_view');
        Route::get('/retailer_shop_basic', 'App\Http\Controllers\admin\RetailerController@shop_basic_view');
        Route::get('/retailer_shop_order', 'App\Http\Controllers\admin\RetailerController@shop_order_view');
        Route::get('/retailer_shop_product', 'App\Http\Controllers\admin\RetailerController@shop_product_view');
        Route::get('/retailer_shop_reviews', 'App\Http\Controllers\admin\RetailerController@shop_reviews_view');
        Route::get('/retailer_shop_community', 'App\Http\Controllers\admin\RetailerController@shop_community_view');
        Route::resource('/wholesaler', 'App\Http\Controllers\admin\WholesalerController')->except(['show']);
        Route::get('/wholesaler_application', 'App\Http\Controllers\admin\WholesalerController@application_view');
        Route::get('/wholesaler_shop', 'App\Http\Controllers\admin\WholesalerController@shop_view');
        Route::get('/wholesaler_shop_basic', 'App\Http\Controllers\admin\WholesalerController@shop_basic_view');
        Route::get('/wholesaler_shop_order', 'App\Http\Controllers\admin\WholesalerController@shop_order_view');
        Route::get('/wholesaler_shop_product', 'App\Http\Controllers\admin\WholesalerController@shop_product_view');
        Route::get('/wholesaler_shop_reviews', 'App\Http\Controllers\admin\WholesalerController@shop_reviews_view');
        Route::resource('/users', 'App\Http\Controllers\admin\UserController')->except(['show']);
        Route::get('/user_information/{id}', 'App\Http\Controllers\admin\UserController@user_basic_information_view');
        Route::get('/user_order/{id}', 'App\Http\Controllers\admin\UserController@user_order_view');
        Route::get('/user_rate/{id}', 'App\Http\Controllers\admin\UserController@user_rate_review');
        Route::resource('/notifications', 'App\Http\Controllers\admin\NotificationController')->except(['show']);
        Route::resource('/enquiry', 'App\Http\Controllers\admin\EnquiryController')->except(['show']);
        Route::resource('/voucher', 'App\Http\Controllers\admin\VoucherController')->except(['show']);
        Route::resource('/report', 'App\Http\Controllers\admin\ReportController')->except(['show']);
        Route::resource('/community', 'App\Http\Controllers\admin\MyCommunityController')->except(['show']);

        Route::post('/categorySearch', 'App\Http\Controllers\admin\CategoryController@searchCategory')->name('adminCategory');
    });
});

Route::get('retailer/', 'App\Http\Controllers\retailer\AuthController@login' );
Route::post('retailer/loginHandle', 'App\Http\Controllers\retailer\AuthController@loginHandle' )->name('retailerLogin');
Route::group([], function () {
    Route::prefix('retailer')->group(function () {
        Route::get('/register', 'App\Http\Controllers\retailer\AuthController@register' );
        Route::post('/registerHandle', 'App\Http\Controllers\retailer\AuthController@registerHandle' )->name('retailerRegister');

        Route::get('/messages', 'App\Http\Controllers\retailer\MessageController@index' );
        Route::get('/cart', 'App\Http\Controllers\retailer\CartController@index' );

        Route::resource('/dashboard', 'App\Http\Controllers\retailer\DashboardController')->except(['show']);
        Route::resource('/mall', 'App\Http\Controllers\retailer\ProductMallController')->except(['']);
        Route::resource('/productList', 'App\Http\Controllers\retailer\ProductListController')->except(['']);
        Route::resource('/productCategory', 'App\Http\Controllers\retailer\ProductCategoryController')->except(['']);
        Route::resource('/order', 'App\Http\Controllers\retailer\OrderController')->except(['']);
        Route::resource('/shop', 'App\Http\Controllers\retailer\ShopController')->except(['show']);
        Route::resource('/finance', 'App\Http\Controllers\retailer\FinanceCentreController')->except(['show']);
        Route::resource('/voucher', 'App\Http\Controllers\retailer\VoucherController')->except(['show']);
        Route::resource('/enquiry', 'App\Http\Controllers\retailer\EnquiryController')->except(['show']);
        Route::resource('/community', 'App\Http\Controllers\retailer\MyCommunityController')->except(['show']);
    });
});

Route::get('wholesaler/', 'App\Http\Controllers\wholesaler\AuthController@login' );
Route::post('wholesaler/loginHandle', 'App\Http\Controllers\wholesaler\AuthController@loginHandle' )->name('wholesalerLogin');

Route::group([], function () {
    Route::prefix('wholesaler')->group(function () {

        Route::get('/register', 'App\Http\Controllers\wholesaler\AuthController@register' );
        Route::post('/registerHandle', 'App\Http\Controllers\wholesaler\AuthController@registerHandle' )->name('wholesalerRegister');

        Route::get('/messages', 'App\Http\Controllers\wholesaler\MessageController@index' );
        Route::get('/cart', 'App\Http\Controllers\wholesaler\CartController@index' );

        Route::resource('/dashboard', 'App\Http\Controllers\wholesaler\DashboardController')->except(['show']);
        Route::resource('/mall', 'App\Http\Controllers\wholesaler\ProductMallController')->except(['']);
        Route::resource('/productList', 'App\Http\Controllers\wholesaler\ProductListController')->except(['']);
        Route::resource('/productCategory', 'App\Http\Controllers\wholesaler\ProductCategoryController')->except(['']);
        Route::resource('/order', 'App\Http\Controllers\wholesaler\OrderController')->except(['']);
        Route::resource('/shop', 'App\Http\Controllers\wholesaler\ShopController')->except(['show']);
        Route::resource('/finance', 'App\Http\Controllers\wholesaler\FinanceCentreController')->except(['show']);
        Route::resource('/voucher', 'App\Http\Controllers\wholesaler\VoucherController')->except(['show']);
        Route::resource('/enquiry', 'App\Http\Controllers\wholesaler\EnquiryController')->except(['show']);
        Route::resource('/community', 'App\Http\Controllers\wholesaler\MyCommunityController')->except(['show']);

    });
});




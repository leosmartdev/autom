@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class=" m-3 My_cart">
        <h5>My cart</h5>
        <!-- cart box start -->
        <div class="cart_box">
            <div class="d-flex align-items-center">
                <div class="cart_box_radio">
                    <label class="radiobtn">
                        <input type="radio" name="Agree2">
                        <span class="checmark"></span>
                    </label>
                </div>
                <div>
                    <div class="bg-white py-3 px-2 px-md-3 px-lg-4  px-xl-5 cart_box_product">
                        <!-- cart box heder start-->
                        <div class="px-4 cart_box_heder">
                            <div class="d-flex justify-content-between align-content-center">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="profile_img">
                                            <img src="" alt="">
                                        </div>
                                        <h6 class="mb-0">FE AUTO PARTS SDN BHD</h6>
                                    </div>
                                </div>
                                <div>
                                    <div class="w-100 h-100 delete_icon">
                                        <img src="img/icons/Group_87.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- cart box heder end-->
                        <div class="cart_box_tabel">
                            <div class="row">
                                <div class="col-4 col-md-3 col-lg-12">
                                    <div class="my-3 cart_box_tabel_header">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <h6 class="text-center">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Unit Price</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6>Total Price</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-12">
                                    <div class="cart_box_tabel_tr">
                                        <div class="row ">
                                            <div class="col-12 col-lg-2 d-flex align-content-center">
                                                <div class="product_img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-xxl-3 col-lg-4">
                                                <div class="product_titel">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                    <a href="#">red</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="d-flex input">
                                                    <i class="fa fa-minus"></i>
                                                    <input class="text-center form-control" type="text"
                                                           value="1">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price">
                                                    <p class="text-center">MYR 34.00</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price_total">
                                                    <p>MYR 34.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-3 d-lg-none">
                                    <div class="my-3 cart_box_tabel_header">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <h6 class="text-center">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Unit Price</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6>Total Price</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-12 mt-3">
                                    <div class="cart_box_tabel_tr">
                                        <div class="row ">
                                            <div class="col-12 col-lg-2 d-flex align-content-center">
                                                <div class="product_img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-xxl-3 col-lg-4">
                                                <div class="product_titel">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                    <a href="#">red</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="d-flex input">
                                                    <i class="fa fa-minus"></i>
                                                    <input class="text-center form-control" type="text"
                                                           value="1">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price">
                                                    <p class="text-center">MYR 34.00</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price_total">
                                                    <p>MYR 34.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="cart_box_footer ">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-7 col-xxl-5">
                                                <div class="d-flex row">
                                                    <div class="col-4 col-lg-3">
                                                        <small>Delivery Fee</small>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-1">MYR 4.66</p>
                                                    </div>

                                                </div>
                                                <div class="d-flex row">
                                                    <div class="col-4 col-lg-3">
                                                        <small>Order Amout</small>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="fw-bold">MYR 136.00</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 col-xxl-7">
                                                <div class="d-flex justify-content-end w-100">
                                                    <button type="button" class="btn_black px-3 px-md-5" style="padding: 0.5rem 2rem !important; height: auto">Check
                                                        Out (MYR 136.00)</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- cart box end -->
        <!-- cart box start -->
        <div class="cart_box mt-4">
            <div class="d-flex align-items-center">
                <div class="cart_box_radio">
                    <label class="radiobtn">
                        <input type="radio" name="Agree">
                        <span class="checmark"></span>
                    </label>
                </div>
                <div>
                    <div class="bg-white py-3 px-2 px-md-3 px-lg-4  px-xl-5 cart_box_product">
                        <!-- cart box heder start-->
                        <div class="px-4 cart_box_heder">
                            <div class="d-flex justify-content-between align-content-center">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="profile_img">
                                            <img src="" alt="">
                                        </div>
                                        <h6 class="mb-0">FE AUTO PARTS SDN BHD</h6>
                                    </div>
                                </div>
                                <div>
                                    <div class="w-100 h-100 delete_icon">
                                        <img src="img/icons/Group_87.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- cart box heder end-->
                        <div class="cart_box_tabel">
                            <div class="row">
                                <div class="col-4 col-md-3 col-lg-12">
                                    <div class="my-3 cart_box_tabel_header">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <h6 class="text-center">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Unit Price</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6>Total Price</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-12">
                                    <div class="cart_box_tabel_tr">
                                        <div class="row ">
                                            <div class="col-12 col-lg-2 d-flex align-content-center">
                                                <div class="product_img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-xxl-3 col-lg-4">
                                                <div class="product_titel">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                    <a href="#">red</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="d-flex input">
                                                    <i class="fa fa-minus"></i>
                                                    <input class="text-center form-control" type="text"
                                                           value="1">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price">
                                                    <p class="text-center">MYR 34.00</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price_total">
                                                    <p>MYR 34.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-3 d-lg-none">
                                    <div class="my-3 cart_box_tabel_header">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <h6 class="text-center">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6 class="text-center">Unit Price</h6>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <h6>Total Price</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-12 mt-3">
                                    <div class="cart_box_tabel_tr">
                                        <div class="row ">
                                            <div class="col-12 col-lg-2 d-flex align-content-center">
                                                <div class="product_img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-xxl-3 col-lg-4">
                                                <div class="product_titel">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                    <a href="#">red</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="d-flex input">
                                                    <i class="fa fa-minus"></i>
                                                    <input class="text-center form-control" type="text"
                                                           value="1">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price">
                                                    <p class="text-center">MYR 34.00</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <div class="price_total">
                                                    <p>MYR 34.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="cart_box_footer ">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-7 col-xxl-5">
                                                <div class="d-flex row">
                                                    <div class="col-4 col-lg-3">
                                                        <small>Delivery Fee</small>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-1">MYR 4.66</p>
                                                    </div>

                                                </div>
                                                <div class="d-flex row">
                                                    <div class="col-4 col-lg-3">
                                                        <small>Order Amout</small>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="fw-bold">MYR 136.00</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 col-xxl-7">
                                                <div class="d-flex justify-content-end w-100">
                                                    <button type="button" class="btn_black px-3 px-md-5" style="padding: 0.5rem 2rem !important; height: auto">Check
                                                        Out (MYR 136.00)</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- cart box end -->
        <!-- My cart footer start -->
        <div class="My_cart_footer mt-5">
            <div class="row gy-3 gy-lg-0 align-content-center justify-content-end">
                <div class="remove_selectall col-12 col-lg-4 col-xxl-3">
                    <a href="#" class="text-dark"> <img src="img/icons/Group_90.png" class="img-fluid" alt=""> Remove Selected (12)</a>
                </div>
                <div class="col-12 col-lg-8 col-xxl-9"> <button class="btn_black px-5" style="padding: 0.5rem 2rem !important; height: auto"><a href="#">Check Out All (MYR 136.00)</a></button></div>
            </div>
        </div>
        <!-- My cart footer end -->
    </div>
@endsection

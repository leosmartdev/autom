@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class=" p-3 px-md-5 PM_nav">
        <div class="row gy-3 gy-md-0">
            <div class="col-6 col-md-3 col-xl-2">
                <div class="item Back">
                    <a href="{{url('order/create')}}" class="item_link">
                        <img src="{{url('assets/img/icons/Group_119.png')}}" alt=""><small>Back</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="Preparing m-3 mx-md-4">
        <div class=" m-md-3 bg-white p-3 Preparing_body">
            <div class="order_N">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="d-flex Order_id">
                            <p class="mb-0">#4665558763</p>
                            <span>Preparing</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="d-flex order_time">
                            <p>Order Time: <span>2018-08-01 </span> <time> 16:39:00</time></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Product_packaged">
                <div class="row gy-3 gy-xl-0 justify-content-between">
                    <div class="col-12 col-xl-4">
                        <div class="d-flex align-items-center left">
                            <span>Now Status</span>
                            <p class="mb-0 mx-3 fw-normal">Preparing</p>
                        </div>
                    </div>
                    <div class="col-12  col-xl-7 col-xxl-5">
                        <div class=" right">
                            <div class="row gy-3 gy-lg-0 justify-content-between">
                                <div class="col-12 col-lg-3 col-xxl-5">
                                    <div class="d-flex align-items-end h-100 Update_Status">
                                        <span>Update Status</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-end">
                                        <button class="py-2 px-3">
                                            Product have been packaged
                                        </button>
                                        <div class="dorte fw-bolder">
                                            <strong>. . .</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="first_order">
                <p class="mb-0 py-1 px-3 px-lg-5 mx-lg-5 fw-normal"><i class="fa fa-exclamation-circle"></i> Ordering
                    for the first time</p>
            </div>
            <div class="row">
                <div class="col-12 col-xxl-8">
                    <div class="profile">
                        <div class="row align-items-center justify-content-center align-items-xxl-baseline">
                            <div class="col-12 col-lg-2">
                                <div class="profie_img">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 col-xxl-2">
                                <div class="name">
                                    <span> Client Name</span>
                                    <p>Ms Yang</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 col-xxl-2">
                                <div class="contact">
                                    <span>Contact Number</span>
                                    <p>+60 12 564 3334</p>
                                </div>
                            </div>
                            <div class="col-12  col-xxl-6">
                                <div class="address">
                                    <div class="row">
                                        <div class="col-12 col-xxl-4">
                                            <div class="row justify-content-xl-end">
                                                <div class="col-6">
                                                    <span>Addresss</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xxl-8">
                                            <p class=" fw-bold"><strong>Home</strong></p>
                                            <p>56, jalan austin 24/7, Taman austin, 81100 johor bahru, johor
                                                malaysia</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table start -->
            <div class="table">
                <div class="row">
                    <div class="col-4 col-xl-12 my-2 h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Unit Price</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">Remarks</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h6>
                                                    <div class="red_more">
                                                        <span>Type A</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <p class="mb-0 fw-normal">MYR 12.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>1</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <span class="fw-normal">MYR 12.00</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>-</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-xl-none my-2 h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Product_02">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Unit Price</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">Remarks</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Product 02</h6>
                                                    <div class="red_more">
                                                        <span>Red</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <p class="mb-0 fw-normal">MYR 12.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>1</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <span class="fw-normal">MYR 12.00</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>-</span>
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
            <div class="Total_Payment">
                <div class="row px-3">
                    <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                        <div class="d-flex my-2 justify-content-between">
                            <span>Total</span>
                            <p class="mb-0">MYR 24.00</p>
                        </div>
                        <div class="d-flex my-2 justify-content-between">
                            <span>Shipping Fee</span>
                            <p class="mb-0">MYR 4.00</p>
                        </div>
                        <div class="d-flex my-2 justify-content-between">
                            <span>Vouchure</span>
                            <p class="mb-0">- MYR 2.00</p>
                        </div>
                    </div>
                </div>
                <div class="total">
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                            <div class="d-flex justify-content-between ">
                                <span>Total Payment</span>
                                <p class="mb-0">MYR 26.00</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- table end -->
        </div>
    </div>
@endsection

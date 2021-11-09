@extends('layouts.nav')
@section('content')
    <div class="dashborad_page_center mt-0 mt-lg-5">
        <div class="row g-3">
            <!-- Status box start -->
            <div class="col-12 col-lg-6 col-xxl-4">
                <div class="bg-white Status h-100">
                    <div
                        class="row d-flex align-items-center justify-content-between py-3 px-4 Status_header">
                        <div class="col-4">
                            <h5>Status</h5>
                        </div>
                        <div class="col-8">
                            <div class=" text-center Status_header_right">
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10">
                                        <p class="my-0 py-2">06/02/2021 - 06/02/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="d-flex justify-content-center align-items-center text-center p-5 total_Orders">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-0">562</h2>
                                <small>Total Orders</small>
                            </div>
                        </div>
                    </div>
                    <div class=" py-4 px-5 Status_footer">
                        <div class=" d-flex  justify-content-between new_orders">
                            <li>New Order</li>
                            <span>352</span>
                        </div>
                        <div class=" d-flex justify-content-between Pending_orders">
                            <li>Pending Order</li>
                            <span>250</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Status box end -->
            <div class="col-12 col-lg-6  col-xxl-4">
                <div class="bg-white Sales_Analytics">
                    <div class="Sales_Analytics_body">
                        <div class="d-flex">
                            <div class="Sales_Analytics_body_left">
                                <div class="row d-flex align-items-center py-3 px-4 Status_header">
                                    <div class="col-5">
                                        <h5 >Sales Analytics</h5>
                                    </div>
                                    <div class="col-7">
                                        <div class=" text-center Status_header_right">
                                            <div class="row">
                                                <div class="col-2">

                                                </div>
                                                <div class="col-10">
                                                    <p class="my-0 py-2">06/02/2021 - 06/02/2021</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="Sales_Analytics_Progress">
                                    <div class=" p-3 all_progress-boxs">
                                        <div class="prgress-box">
                                            <div class=" d-flex justify-content-between label_box">
                                                <label for="" class="form-label">GAIDO TIMING BELT KIT
                                                    PROTON...</label>
                                                <span>4,534 sold</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: 70%" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="prgress-box">
                                            <div class=" d-flex justify-content-between label_box">
                                                <label for="" class="form-label">Product 02</label>
                                                <span>4,034 sold</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: 50%" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="prgress-box">
                                            <div class=" d-flex justify-content-between label_box">
                                                <label for="" class="form-label">Product 03</label>
                                                <span>2,434 sold</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: 70%" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="prgress-box">
                                            <div class=" d-flex justify-content-between label_box">
                                                <label for="" class="form-label">Product 04</label>
                                                <span>234 sold</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: 50%" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="scrollbar">
                                <div class="scrollbar_body">
                                    <div class="progress">
                                        <div class="progress_bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xxl-4">
                <div class=" bg-white p-3 Product_Type h-100">
                    <h5>Product Type</h5>
                    <div class="Product_Type_body">
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-12">
                                <div
                                    class=" d-flex justify-content-between align-items-center my-2 Product_Type_persent">
                                    <div class=" d-flex align-items-center">
                                        <a class="fw-bold" href="#">85%</a> <span>Interior</span>
                                    </div>
                                    <div>
                                        <span>4,534 sold</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xxl-12">
                                <div
                                    class=" d-flex justify-content-between align-items-center my-2 Product_Type_persent">
                                    <div class=" d-flex align-items-center">
                                        <a class="fw-bold" href="#">85%</a> <span>Interior</span>
                                    </div>
                                    <div>
                                        <span>4,534 sold</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xxl-12">
                                <div
                                    class=" d-flex justify-content-between align-items-center my-2 Product_Type_persent">
                                    <div class=" d-flex align-items-center">
                                        <a class="fw-bold" href="#">85%</a> <span>Interior</span>
                                    </div>
                                    <div>
                                        <span>4,534 sold</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xxl-12">
                                <div
                                    class=" d-flex justify-content-between align-items-center my-2 Product_Type_persent">
                                    <div class=" d-flex align-items-center">
                                        <a class="fw-bold" href="#">85%</a> <span>Interior</span>
                                    </div>
                                    <div>
                                        <span>4,534 sold</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dashborad page center end -->
    <!-- dashborad footer start -->
    <div class=" my-3 bg-white p-3 dashborad_footer">
        <div class="d-flex mt-md-3 justify-content-between order_title">
            <h4>New Order (12)</h4> <a href="#"><small>show more</small></a>
        </div>
        <div class="oreder-table">
            <div class="row">
                <div class="col-6 col-md-4 col-xl-12">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Preparing</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Preparing</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Product have been packaged</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Product will be shipped within 24 hours</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr border-bottom-0 h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Product will be shipped within 24 hours</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

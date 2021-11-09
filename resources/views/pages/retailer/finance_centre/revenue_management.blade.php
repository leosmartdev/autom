@extends('layouts.nav')
@section('content')
    <div class="Revenue_Management">
        <!-- Revenue Management nav start -->
        <div class="pf_title d-flex m-3 mx-lg-5">
            <a href="{{url('finance')}}" class="first">
                <h5 class="active">Revenue Management</h5>
            </a><a href="{{url('finance/create')}}">
                <h5 >Withdraw History</h5>
            </a>
        </div>
        <!-- Revenue Management nav end -->
        <div class="m-md-3">
            <div class="table_box bg-white p-3">
                <div class="RM_details p-3">
                    <div class="row gy-3 gy-xl-0">
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="d-flex">
                                <span>My Earnings</span><p class=" fw-normal mb-0">MYR 23,830.00</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="d-flex">
                                <span>Withdrawn</span><p class=" fw-normal mb-0">MYR 20,000.00</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="d-flex">
                                <span>Remaining</span><p class=" fw-normal mb-0">MYR 3,830.00</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="d-flex justify-content-end">
                                <button class="btn_black" style="padding: 0.5rem !important; height: auto">
                                    Withdraw
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table start -->
                <div class="table px-3">
                    <div class="row">
                        <div class="col-6 col-md-5 col-xl-12">
                            <div class="table_header py-xl-2 s_bg">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class=" mt-5 mt-md-2 mt-lg-0">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <h6 class=" mt-md-3 mt-xl-0">Quantity</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <h6>Earnings</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Withdraw Status</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-7 col-xl-12">

                            <div class="table_tr py-xl-3">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <p>- GAIDO TIMING BELT KIT PROTON... <br>- Product 02</p>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <div class="d-flex d-xl-block">
                                                    <p>1</p>
                                                    <p>2</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p class=" fw-normal text-dark">Not Withdraw</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-5 d-xl-none">
                            <div class="table_header py-xl-2 s_bg">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class=" mt-5 mt-md-2 mt-lg-0">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <h6 class=" mt-md-3 mt-xl-0">Quantity</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <h6>Earnings</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Withdraw Status</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-7 col-xl-12">

                            <div class="table_tr py-xl-3">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <p>- GAIDO TIMING BELT KIT PROTON... <br>- Product 02</p>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <div class="d-flex d-xl-block">
                                                    <p>1</p>
                                                    <p>2</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p class=" fw-normal text-dark">Not Withdraw</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-5 d-xl-none">
                            <div class="table_header py-xl-2 s_bg">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class=" mt-5 mt-md-2 mt-lg-0">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <h6 class=" mt-md-3 mt-xl-0">Quantity</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <h6>Earnings</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Withdraw Status</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-7 col-xl-12">

                            <div class="table_tr py-xl-3">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <p>- GAIDO TIMING BELT KIT PROTON... <br>- Product 02</p>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <div class="d-flex d-xl-block">
                                                    <p>1</p>
                                                    <p>2</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p class=" fw-normal text-dark">Not Withdraw</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-5 d-xl-none">
                            <div class="table_header py-xl-2 s_bg">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class=" mt-5 mt-md-2 mt-lg-0">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <h6 class=" mt-md-3 mt-xl-0">Quantity</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <h6>Earnings</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Withdraw Status</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-7 col-xl-12">

                            <div class="table_tr py-xl-3">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <p>- GAIDO TIMING BELT KIT PROTON... <br>- Product 02</p>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <div class="d-flex d-xl-block">
                                                    <p>1</p>
                                                    <p>2</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p class=" fw-normal text-dark">Not Withdraw</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-5 d-xl-none">
                            <div class="table_header py-xl-2 s_bg">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class=" mt-5 mt-md-2 mt-lg-0">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <h6 class=" mt-md-3 mt-xl-0">Quantity</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <h6>Earnings</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Withdraw Status</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-7 col-xl-12">

                            <div class="table_tr py-xl-3">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <p>- GAIDO TIMING BELT KIT PROTON... <br>- Product 02</p>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <div class="d-flex d-xl-block">
                                                    <p>1</p>
                                                    <p>2</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p class=" fw-normal text-dark">Not Withdraw</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-5 d-xl-none">
                            <div class="table_header py-xl-2 s_bg">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class=" mt-5 mt-md-2 mt-lg-0">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <h6 class=" mt-md-3 mt-xl-0">Quantity</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <h6>Earnings</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Withdraw Status</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-7 col-xl-12">

                            <div class="table_tr py-xl-3">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <p>- GAIDO TIMING BELT KIT PROTON... <br>- Product 02</p>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <div class="d-flex d-xl-block">
                                                    <p>1</p>
                                                    <p>2</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p class=" fw-normal text-dark">Not Withdraw</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-5 d-xl-none">
                            <div class="table_header py-xl-2 s_bg">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class=" mt-5 mt-md-2 mt-lg-0">Order Product</h6>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <h6 class=" mt-md-3 mt-xl-0">Quantity</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <h6>Earnings</h6>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <h6>Withdraw Status</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-7 col-xl-12">

                            <div class="table_tr py-xl-3">
                                <div class="row gy-3 gy-xl-0">
                                    <div class="col-12 col-xl-7">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-3">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <p>- GAIDO TIMING BELT KIT PROTON... <br>- Product 02</p>
                                            </div>
                                            <div class="col-12 col-xl-2">
                                                <div class="d-flex d-xl-block">
                                                    <p>1</p>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-12 col-xl-4">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-5">
                                                <p class=" fw-normal text-dark">MYR 56.50</p>
                                            </div>
                                            <div class="col-12 col-xl-3">
                                                <p class=" fw-normal text-dark">Not Withdraw</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table end -->
            </div>
        </div>
    </div>
@endsection

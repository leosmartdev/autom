@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class="Revenue_Management">
        <div class="pf_title d-flex m-3 mx-lg-5">
            <a href="" class="first">
                <h5 class="active">All Voucher(1,827)</h5>
            </a>
            <a href="" class="first">
                <h5>Valid Period(682)</h5>
            </a>
            <a href="">
                <h5>History(1,192)</h5>
            </a>
        </div>
    </div>
{{--    <div class="voucher_list m-3 mx-lg-4">--}}
{{--        <div class="two_btn">--}}
{{--            <a href="Voucher_List.html" class=" btn rounded-pill active"> Voucher List</a>--}}
{{--            <a href="User_Redeem.html" class=" btn rounded-pill "> User Redeem</a>--}}
{{--        </div>--}}
{{--    </div>--}}


    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap" >
        <li class="nav-item">
            <a class="nav-link btn rounded-pill active" style="background: #353535; color: white; margin-right: 30px ; margin-left: 20px;" data-toggle="tab" href="#voucher_list_id" role="tab" aria-controls="voucher list" aria-selected="false">Voucher List</a>
        </li>

        <li class="nav-item">
            <a class="nav-link btn rounded-pill " style="background: #353535; color: white;" data-toggle="tab" href="#user_redeem_id" role="tab" aria-controls="user redeem" aria-selected="true">User Redeem</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="voucher_list_id" role="tabpanel">
            <div class="voucher_list">
                <div class="order_list bg-white m-md-3 ">
                    <!-- filter box start -->
                    <div class="filter_box py-3 px-4">
                        <div class="row gy-3 gy-md-0">
                            <div class="col-12 col-md-6 col-xl-3 col-xxl-2">
                                <div class="price">
                                    <div class="form-group">
                                        <label for="" class="form-label">EXP Date</label>
                                        <div class="d-flex position-relative">
                                            <select class="form-select rounded-0" name="" id="">
                                                <option value="1">New to Old</option>
                                                <option value="2">Old to New </option>
                                            </select>
                                            <div class="select_down position-absolute">
                                                <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  col-xl-3 col-xxl-2">
                                <div class="Category">
                                    <div class="search_filter">
                                        <div class="form-group">
                                            <label for="" class="form-label">Search Voucher Title</label>
                                            <input type="text" name="" id="" class="form-control"
                                                   placeholder="search" aria-describedby="helpId">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- filter box end -->
                    <!-- table start -->
                    <div class="table px-3">
                        <div class="row">
                            <div class="d-block d-xl-none col-12">
                                <a href="{{url('wholesaler/voucher/create')}}" class="text-dark">
                                    <div class="table_tr align-items-center d-flex pb-3 px-xl-5">
                                        <i class="fa fa-plus"></i> <span class="mx-3">Create Voucher</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-5 col-xl-12">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <h6>Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2 col-xxl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-xl-block col-12">
                                <a href="{{url('wholesaler/voucher/create')}}" class="text-dark">
                                    <div class="table_tr d-flex align-items-center pb-3 px-xl-5">
                                        <i class="fa fa-plus"></i><span class="mx-3">Create Voucher</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>30% Discount</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p class=" fw-normal text-dark">(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href=""> <img class=" img-fluid"
                                                                         src="{{asset('assets/img/icons/Group_90.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <h6 class="mt-3 mt-md-0">Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2 col-xxl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row  px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>50% discount on specific products</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p class="text-dark fw-normal">-</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p class=" fw-normal text-dark">(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href=""> <img class=" img-fluid"
                                                                         src="{{asset('assets/img/icons/Group_90.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <h6 class="mt-3 mt-md-0">Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2 col-xxl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row  px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>50% discount on specific products</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p class=" fw-normal text-dark">(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href=""> <img class=" img-fluid"
                                                                         src="{{asset('assets/img/icons/Group_90.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <h6 class="mt-3 mt-md-0">Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2 col-xxl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row  px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>50% discount on specific products</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p class="text-dark fw-normal">-</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p class=" fw-normal text-dark">(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href=""> <img class=" img-fluid"
                                                                         src="{{asset('assets/img/icons/Group_90.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <h6 class="mt-3 mt-md-0">Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2 col-xxl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row  px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>50% discount on specific products</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p class=" fw-normal text-dark">(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href=""> <img class=" img-fluid"
                                                                         src="{{asset('assets/img/icons/Group_90.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <h6 class="mt-3 mt-md-0">Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2 col-xxl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row  px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>50% discount on specific products</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p class="text-dark fw-normal">-</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p class=" fw-normal text-dark">(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href=""> <img class=" img-fluid"
                                                                         src="{{asset('assets/img/icons/Group_90.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <h6 class="mt-3 mt-md-0">Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2 col-xxl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row  px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>50% discount on specific products</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p class=" fw-normal text-dark">(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href=""> <img class=" img-fluid"
                                                                         src="{{asset('assets/img/icons/Group_90.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3">
                                            <h6 class="mt-3 mt-md-0">Order Name</h6>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <h6>Received</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-2 col-xxl-3">
                                            <p>50% discount on specific products</p>
                                        </div>
                                        <div class="col-12 col-xl-6 col-xxl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>-</p>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4 col-xxl-3">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3">
                                                    <p>(12/500)</p>
                                                </div>
                                                <div class="col-12 col-xl-3 col-xxl-4">
                                                    <div
                                                        class="d-flex justify-content-end justify-content-xl-center">
                                                        <a href="">
                                                            <img class=" img-fluid"
                                                                 src="{{asset('assets/img/icons/Group_1134.png')}}" alt="">
                                                        </a>
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
        </div>
        <div class="tab-pane active" id="user_redeem_id" role="tabpanel">
            <div class="voucher_list">

                <div class="order_list bg-white m-md-3 ">
                    <!-- filter box start -->
                    <div class="filter_box py-3 px-4">
                        <div class="row gy-3 gy-md-0">
                            <div class="col-12 col-md-6 col-xl-3 col-xxl-2">
                                <div class="price">
                                    <div class="form-group">
                                        <label for="" class="form-label">EXP Date</label>
                                        <div class="d-flex position-relative">
                                            <select class="form-select rounded-0" name="" id="">
                                                <option value="1">New to Old</option>
                                                <option value="2">Old to New </option>
                                            </select>
                                            <div class="select_down position-absolute">
                                                <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  col-xl-3 col-xxl-2">
                                <div class="Category">
                                    <div class="search_filter">
                                        <div class="form-group">
                                            <label for="" class="form-label">Search Voucher Title</label>
                                            <input type="text" name="" id="" class="form-control"
                                                   placeholder="search" aria-describedby="helpId">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- filter box end -->
                    <!-- table start -->
                    <div class="table px-3">
                        <div class="row">

                            <div class="col-6 col-md-5 col-xl-12">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>30% Discount</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a  class="message" data-toggle="modal"  data-target-id="enquiry" data-target="#rule_id">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a href="" class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6 class="mt-3 mt-sm-0">Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6 class="mt-4 mt-sm-0">Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>50% discount on specific products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">-</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message" data-toggle="modal"  data-target-id="enquiry" data-target="#rule_id">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>30% Discount</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message" data-toggle="modal"  data-target-id="enquiry" data-target="#rule_id">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a href="" class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6 class="mt-3 mt-sm-0">Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6 class="mt-4 mt-sm-0">Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>50% discount on specific products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">-</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a  class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>30% Discount</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a href="" class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6 class="mt-3 mt-sm-0">Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6 class="mt-4 mt-sm-0">Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>50% discount on specific products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">-</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a href="" class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>30% Discount</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a href="" class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6 class="mt-3 mt-sm-0">Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6 class="mt-4 mt-sm-0">Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>50% discount on specific products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">-</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p><a class="text-decoration-underline" href="">GAIDO TIMING
                                                            BELT KIT...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a href="" class="btn_black fw-normal">
                                                            Complete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-5 d-xl-none">
                                <div class="table_header py-xl-3 px-xxl-3 s_bg">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-3 col-xl-4">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <h6>User</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6>Order Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <h6>Discount</h6>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>Min Consumption</h6>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <h6>Specific Product</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <h6>EXP Date</h6>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <h6>Rule</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-7 col-xl-12">
                                <div class="table_tr py-xl-3">
                                    <div class="row px-xxl-3">
                                        <div class="col-12 col-xl-3 col-xl-4">

                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <p>Jack Leong</p>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p>30% Discount</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-3 col-xxl-2">
                                                    <p>30%</p>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p class="text-dark fw-normal">MYR 50.00</p>
                                                </div>
                                                <div class="col-12 col-xl-4 col-xxl-6">
                                                    <p>-</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-3">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <p>06/06/2021</p>
                                                </div>
                                                <div class="col-12 col-xl-2">
                                                    <div class="d-flex">
                                                        <a class="message">
                                                            <img class="img-fluid" src="{{asset('assets/img/icons/Group_1104.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-6">
                                                    <div
                                                        class="d-flex align-items-baseline justify-content-end justify-content-xl-center">
                                                        <a href="" class="btn_black fw-normal">
                                                            Complete
                                                        </a>
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
        </div>
    </div>

    <div class="Product_Category">
        <div class="paginationn_box d-flex justify-content-center my-5">
            <div class="page_position d-flex align-items-center mx-0 mx-md-5">
                <p class="mb-0"> <span class="pages_of"></span> of 4</p>
            </div>
            <nav class="pagination">
                <!-- total Pages number inter this input value -->
                <input type="hidden" value="4" class="totalPages">
                <!-- active page number inter this input value -->
                <input type="hidden" value="2" class="active_page">
                <ul></ul>
            </nav>
            <hr>
        </div>
    </div>

    <div class="modal fade" id="rule_id" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog mw-100 w-25 " >
            <!-- Modal content-->
            <div class="modal-content load_modal" >
                <div class="modal-body "  >
                    <div class="p-4 p-lg-5 bg-white Modal">
                        <div class="modal_header">
                            <div class="row align-items-center">
                                <div class="col-9 col-lg-11">

                                    <h4 class="fw-bold">10% off up to MYR 8</h4>
                                    <p class="s_text">EXP Date: 06/06/2021</p>
                                </div>
                                <div class="col-3 col-lg-1">
                                    <p class=" text-end">
                                        <a href="" class=" img-fluid "><img src="{{asset('assets/img/icons/Group_87.png')}}" alt=""></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal_content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            </p>
                            <p>lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
                        </div>
                        <div class="modal_close_btn d-flex justify-content-center">
                            <button type="button" class="btn btn-dark  modalbtn" data-dismiss="modal"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

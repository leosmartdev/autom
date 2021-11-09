@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class=" my-3 bg-white p-3 dashborad_footer">
        <div class="d-flex mt-md-3 justify-content-between order_title">
            <h4>New Order (12)</h4> <a href="#"></a>
        </div>
        <div class="order_list">
            <div class="filter_box py-3 px-4">
                <div class="row gy-3 gy-xl-0 justify-content-between">
                    <div class="col-12 col-xl-6 col-xxl-4">

                        <div class="row">
                            <div class="col-6">
                                <div class="price">
                                    <div class="form-group">
                                        <label for="" class="form-label"> Date</label>
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
                            <div class="col-6">
                                <div class="price">
                                    <div class="form-group">
                                        <label for="" class="form-label"> Status</label>
                                        <div class="d-flex position-relative">
                                            <select class="form-select rounded-0" name="" id="">
                                                <option value="1">All</option>
                                                <option value="2">New</option>
                                                <option value="2">Old</option>
                                            </select>
                                            <div class="select_down position-absolute">
                                                <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12   col-xl-3 col-xxl-2">
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
                        <a href="{{url('order/1')}}" style="color: #7A7A7A">
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
                                            <div class="d-flex">
                                                <div class="Preparing ">Preparing</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

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
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <div class="Preparing">Preparing</div>
                                            </div>
                                        </div>

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
                                        <div class="d-flex">
                                            <div class="Preparing">Product have been packaged</div>
                                        </div>
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
                                        <div class="d-flex">
                                            <div class="Preparing">Product will be shipped within 24
                                                hours</div>
                                        </div>
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
                                        <div class="d-flex">
                                            <div class="Preparing">Product will be shipped within 24
                                                hours</div>
                                        </div>
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
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <div class="Preparing">Preparing</div>
                                            </div>
                                        </div>

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
                                        <div class="d-flex">
                                            <div class="Preparing">Preparing</div>
                                        </div>
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
                                        <div class="d-flex">
                                            <div class="Preparing">Preparing</div>
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
    <div class="order_list Product_Category">
        <div class="paginationn_box justify-content-center d-flex my-5">
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
@endsection

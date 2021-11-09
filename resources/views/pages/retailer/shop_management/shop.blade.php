@extends('layouts.nav')
@section('content')
    <div class="m-3 mx-md-5 Shop_Management">
        <div class="row">
            <div class="col-12 col-lg-10 col-xxl-9">
                <div class="d-flex justify-content-between mb-3 Eidit_bar">
                    <p class=" mb-0">Shop Management</p>
                    <a href="{{url('shop/create')}}">
                        <img class=" img-fluid"
                             src="{{'assets/img/icons/Group_637.png'}}" alt="">
                    </a>
                </div>
                <div class=" bg-white p-3  Shop_Cover">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex align-items-center h-100">
                                        <p class=" mb-0">Shop Cover</p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <img class=" img-fluid" src="{{'assets/img/Group_632.png'}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white  my-3 p-3 prifile_person">
                    <div class="row mt-xl-4">
                        <div class="col-12 col-md-4 col-xxl-3">
                            <div class="logo mb-2 mb-md-0 d-md-flex justify-content-md-center">
                                <img src="{{'assets/img/Group_635.png'}}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-xxl-9">
                            <div class="">
                                <h5>FE AUTO PARTS SDN BHD</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="Products_Followers">
                                            <small>1,541 Products</small>
                                            <small> 23,852 Followers </small>
                                        </div>
                                        <div class="col-12 col-lg-10 col-xxl-6">
                                            <p class=" mb-0 py-3 px-3"><strong>98% Praise</strong></p>
                                            <div class="rating_star">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p class=" mb-0">Rating</p>
                                                        <div class="review">
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                (12 review)
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class=" mb-0">Product</p>
                                                        <p class=" mb-0">356</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-3">
                        <div class="Description pb-5">
                            <h6>Description</h6>
                            <p class=" fw-normal">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

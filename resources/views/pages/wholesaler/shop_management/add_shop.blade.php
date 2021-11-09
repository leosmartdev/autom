@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class=" p-3 px-md-5 PM_nav">
        <div class="row gy-3 gy-md-0">
            <div class="col-6 col-md-3 col-xl-2">
                <div class="item Back">
                    <a href="{{url('wholesaler/shop')}}" class="item_link">
                        <img src="{{asset('assets/img/icons/Group_119.png')}}" alt=""><small>Back</small>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <div class="item ">
                    <a  href="{{url('wholesaler/shop')}}" class="item_link">
                        Edit Shop Details
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="m-3 mx-md-4">
        <div class="Edit_Shop_Details">
            <!-- form start -->
            <form action="#">
                <div class="bg-white p-3 p-md-4 form_body">
                    <div class="row m-md-3">
                        <div class="col-8 col-md-6 col-lg-4 col-xxl-3">
                            <div class="Shop_Cover">
                                <p class=" s_text fw-normal">Shop Cover</p>
                                <div class="d-flex">
                                    <div class="img d-flex justify-content-center align-items-center">
                                        <a href="" class=" text-dark"> <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="Shop_logo">
                                <p class=" s_text fw-normal">Shop logo</p>
                                <div class="d-flex">
                                    <div class="img d-flex justify-content-center align-items-center">
                                        <a href="" class=" text-dark"> <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3">
                        <div class="col-12 col-lg-8 col-xxl-6">
                            <div class="URL">
                                <div class=" align-items-center px-3 p-3">
                                    <label for="" class=" s_text fw-normal form-label">Shop Name*</label>
                                    <input type="text" class="form-control rounded-0 s_bg shop_name" value="FE AUTO PARTS SDN BHD">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3">
                        <div class="col-12 col-lg-10 col-xxl-9">
                            <div class="description m-md-3">
                                <p class=" firstp fw-normal s_text">Desctiption</p>
                                <div class="dess_text p-3 s_bg">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl augue duis dolore te feugait nulla facilisi. <br> Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut lao</p>
                                    <div class="text-end">
                                        <span>(150/300)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- form end -->

        </div>
    </div>
    <div class="d-flex mt-4 justify-content-center d-flex">
        <a href="{{url('wholesaler/shop')}}">
            <input type="submit" class="btn btn-outline-dark px-5 py-2 m-3 cancelbtn" value="Cancel" style="padding: 0.5rem !important; height: auto">
        </a>
        <a href="{{url('wholesaler/shop')}}">
            <input type="submit" class="btn btn-dark px-5 py-2 m-3 submitbtn"
                   value="Save" style="padding: 0.5rem !important; height: auto">
        </a>

    </div>
@endsection

@extends('layouts.nav')
@section('content')
    <div class="m-3 Open_product">
        <div class="back_div mx-3 mb-4">
            <div class="row">
                <div class="col-12">
                    <a href="{{url('mall')}}">
                        <img src="{{asset('assets/img/icons/Group_119.png')}}" alt=""><small>Back</small></a>
                </div>
            </div>
        </div>
        <div class="product_about">
            <div class="row bg-white rounded-3 p-3 m-3">
                <div class="col-12 col-lg-4">
                    <div class="product_img text-center">
                        <img class="img-fluid h-100" src="{{asset('assets/img/product_img.png')}}" alt="">
                    </div>
                    <div class=" mt-3 product_img_s">
                        <div class="row">
                            <div class="col-4">
                                <div class="Img_s">
                                    <img class="img-fluid" src="{{asset('assets/img/product_img-s.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="Img_s">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="Img_s">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="product_about_content">
                        <h4>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA SATRIA NEO GEN2 PERSONA WAJA
                            CAMPRO (144MY25)</h4>
                        <div class="people_reciew">
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <div class="row ">
                                        <div class="col-12 col-xl-6">
                                            <p>Auto Body Parts & Mirrors</p>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <span class="Bumpers">Bumpers & Components</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-5 mt-3 mt-xl-0">
                                    <div class="row justify-content-end">
                                        <div class="col-12 col-xl-9">
                                            <div class="review">
                                                <div
                                                    class="d-flex align-items-center justify-content-xl-end">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <small>(12 review)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="pleft">Brand</p>
                                    </div>
                                    <div class="col-8">
                                        <p>Gaido</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p class="pleft">Location</p>
                                    </div>
                                    <div class="col-8">
                                        <p>Klang, 40470 Selangor</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="pleft">Drawing No</p>
                                    </div>
                                    <div class="col-8">
                                        <p>20210546248</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="pleft">Stock</p>
                                    </div>
                                    <div class="col-8">
                                        <p>304</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p class="pleft">Service</p>
                                    </div>
                                    <div class="col-8">
                                        <p>3 years warranty</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Specification p-3">
                            <p>Specification</p>
                            <div class="row justify-content-start">
                                <div class="col-12 col-xxl-6">
                                    <div class="row g-2">
                                        <div class="col-12 col-md-4">
                                            <div class="item item_one rounded-1">
                                                <div class="row g-1 g-xl-0 p-1">
                                                    <div class="col-4">
                                                        <img class="img-fluid"
                                                             src="{{asset('assets/img/Specification_one.png')}}" alt="">
                                                    </div>
                                                    <div class="col-8 d-flex align-items-center">
                                                        <p>olor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="item rounded-1">
                                                <div class="row g-1 g-xl-0 p-1">
                                                    <div class="col-4">
                                                        <img class="img-fluid"
                                                             src="{{asset('assets/img/Specification_tow.png')}}" alt="">
                                                    </div>
                                                    <div class="col-8 d-flex align-items-center">
                                                        <p>olor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="item rounded-1">
                                                <div class="row g-1 g-xl-0 p-1">
                                                    <div class="col-4">
                                                        <img class="img-fluid"
                                                             src="{{asset('assets/img/Specification_tow.png')}}" alt="">
                                                    </div>
                                                    <div class="col-8 d-flex align-items-center">
                                                        <p>olor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="price mt-3">
                            <div class="d-flex">
                                <p class="marginr">Price #1</p>
                                <p>MYR 34 / 1pcs</p>
                            </div>
                            <div class="d-flex">
                                <p class="marginr">Price #2</p>
                                <p>MYR 2,200 / 100pcs</p>
                            </div>
                            <div class="more_price">
                                <h6>Show more price <i class="fa fa-chevron-down"></i></h6>
                            </div>
                            <div class="more_price_box">
                                <div class="d-flex">
                                    <p class="marginr">Price #1</p>
                                    <p>MYR 34 / 1pcs</p>
                                </div>
                                <div class="d-flex">
                                    <p class="marginr">Price #2</p>
                                    <p>MYR 2,200 / 100pcs</p>
                                </div>
                            </div>
                        </div>
                        <div class="Quantity">
                            <div class="row h-100 px-md-3 gy-lg-3">
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="d-flex h-100 w-100 align-items-center">
                                                <p class="mb-0 mt-2 w-100">Quantity</p>
                                            </div>
                                        </div>
                                        <div class="col-7 col-xxl-5" >
                                            <div class="d-flex input">
                                                <i class="fa fa-minus" ></i>
                                                <input class="text-center form-control" type="text" style="padding: 1.2rem 0rem;" disabled
                                                       value="1">
                                                <i class="fa fa-plus"  ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex h-100 justify-content-end w-100 align-items-center">
                                        <h6 class="text-end mt-2">MYR 1,563.50</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buy_div">
                            <div class="row  gy-3">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex">
                                        <div class="Send_Enquiry_box rounded-3" style="cursor: pointer" data-toggle="modal"  data-target-id="enquiry" data-target="#enquiry_id">
                                            <img src="{{asset('assets/img/icons/Group_1065.png')}}" alt="">
                                            <strong>Send Enquiry</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn py-2 w-100 btn-dark  message2 " style="padding: 0.5rem !important; height: auto" >Buy Now</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn py-2 w-100 btnshop message2" style="padding: 0.5rem !important; height: auto"><i
                                                    class="fa fa-shopping-cart"></i> Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-white m-3 p-3 justify-content-xl-between FE_AUTO">
                <div class="col-12 col-lg-6">
                    <div class="d-flex align-items-center">
                        <div class="profile_img">
                            <img src="" alt="">
                        </div>
                        <div>
                            <h6>FE AUTO PARTS SDN BHD</h6>
                            <div class="row">
                                <div class="col-6">
                                    <small> 134 Product</small>
                                </div>
                                <div class="col-6">
                                    <small>23 Follower</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row h-100 mt-3 mt-lg-0 d-flex align-items-center justify-content-xl-end">
                        <div class="col-2" data-toggle="modal"  data-target-id="enquiry" data-target="#chat_id" >
                            <img class="img-fluid message" src="{{asset('assets/img/icons/Group_1007.png')}}" alt="">
                        </div>
                        <div class="col-4">
                            <button class="btn w-100 btn-dark"  style="padding: 0.5rem !important; height: auto">Follow</button>
                        </div>
                        <div class="col-6 col-xl-4 col-xxl-3" >
                            <button class="btn shopvbtn" style="padding: 0.5rem !important; height: auto"><a class=" text-dark fw-normal" href="Product_Mall.html">View Shop</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-3 Open_poduct_review Product_description">
                <div class="nav-tabs-boxed nav-tabs-boxed-top-right">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap" >
                        <li class="nav-item">
                            <a class="nav-link py-2  me-2 " data-toggle="tab" href="#product_detail_tab_id" role="tab" aria-controls="detail" aria-selected="false">Product Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 me-2 active " data-toggle="tab" href="#review_tab_id" role="tab" aria-controls="review" aria-selected="true">Review ( 12 )</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane" id="product_detail_tab_id" role="tabpanel">
                            <div class=" bg-white p-3 rounded-3 description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
                                    at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                                    delenit augue duis dolore te feugait nulla facilisi.</p>
                                <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="tab-pane active" id="review_tab_id" role="tabpanel">
                            <form action="" class="mb-3">
                                <div class="d-flex">
                                    <div>
                                        <div class="profile_img">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                    <input type="text" class="rounded-pill px-3 w-100 form-control"
                                           placeholder="Comment">
                                    <button type="button" class="btn px-3 px-lg-5 btn-dark rounded-pill">Send</button>
                                </div>
                            </form>
                            <div class="p-3 rounded-3 Review">
                                <div class="rounded-3 bg-white  py-3 px-2 px-lg-5 Review_box">
                                    <div class="person">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="d-flex">
                                                        <div class="profile_img">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name_star">
                                                            <h6>James Wilson</h6>
                                                            <div class="review">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-xl-end">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-12">
                                                        <div class="time text-end">
                                                            <small>06/04/2021</small>
                                                            <br>
                                                            <span>specification 01</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                    </div>
                                </div>

                                <div class="rounded-3 bg-white  my-3 py-3 px-2 px-lg-5 Review_box">
                                    <div class="person">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="d-flex">
                                                        <div class="profile_img">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name_star">
                                                            <h6>James Wilson</h6>
                                                            <div class="review">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-xl-end">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-12">
                                                        <div class="time text-end">
                                                            <small>06/04/2021</small>
                                                            <br>
                                                            <span>specification 01</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <div class="modal fade" id="enquiry_id" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog mw-100 w-50 " >

            <!-- Modal content-->
            <div class="modal-content load_modal" >
                <div class="modal-body "  >
                    <div class="Product_Category product_about_content">
                        <!-- Product Category box start -->
                        <div class=" mt-md-4 Product_Category_box bg-white position-relative">
                            <!-- filter box start -->
                            <div class="filter_box pb-0 py-3 px-4 ">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-xxl-3 p-xl-3">
                                        <div class="product_img text-center">
                                            <img src="{{asset('assets/img/product_img.png')}}" alt="" class=" img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 col-xxl-9 p-xl-3 ">
                                        <div class="product_title">
                                            <h5 class="my-2">GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA SATRIA NEO GEN2 PERSONA
                                                WAJA CAMPRO (144MY25)</h5>
                                            <div class="row mt-4">
                                                <div class="col-12 col-lg-9">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <p>Auto Body Parts & Mirrors</p>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <span class="Bumpers">Bumpers & Components</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!-- filter box end -->
                            <!-- products box start -->

                            <div class="p-3 px-5">
                                <div class="Quantity border-0 p-0">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-xxl-5">
                                            <div class="row px-md-3 gy-lg-3">
                                                <div class="col-12 col-md-6">
                                                    <div class="row">
                                                        <p class=" w-100 form-label">Quantity</p>
                                                        <div class="d-flex input">
                                                            <i class="fa fa-minus"></i>
                                                            <input class="text-center form-control" type="text" style="padding: 1.2rem 0.5rem " readonly
                                                                   value="1">
                                                            <i class="fa fa-plus"></i>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class=" form-label">Price</label>
                                                    <div class="d-flex w-100 align-items-center">

                                                        <h6 class="text-end mt-2">MYR 1,563.50</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="py-3 my-3">
                                    <div class="row">
                                        <div class="col-12 col-md-10 col-xxl-8">
                                            <p class="s_text">Unit Price</p>
                                            <p class="mb-0 py-2 px-3 s_bg">MYR</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- products box end -->
                            <div class="d-flex justify-content-center align-items-center pb-2">
                                <div class="m-3">
                                    <button type="button" class="btn border border-dark px-4 modalbtn2 " data-dismiss="modal">Cancel</button>
                                </div>
                                <div class="m-3">
                                    <button type="button" class="btn btn-dark px-4   modalbtn2" data-dismiss="modal">Send</button>
                                </div>
                            </div>
                        </div>
                        <!-- Product Category box end -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="chat_id" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog mw-100 w-50 " >
            <!-- Modal content-->
            <div class="modal-content load_modal" >
                <div class="modal-body "  >
                    <div class=" bg-white rounded-3 mt-5 py-2 chat_form" style="margin-top: 0px !important;">
                        <div class=" px-4 py-2 chat_people_name">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="people_img_s"><a href="#"><img src="#" alt=""></a></div>
                                    <div><a href="#">Admon</a></div>
                                </div>
                                <button type="button" class="btn btn-dark px-4 modalbtn" data-dismiss="modal"
                                        data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <div class=" px-4 mb-3 message_box">
                            <div class=" py-3 date">
                                <p class="text-center">06/06/2021 5:22 PM</p>
                            </div>
                            <div class=" d-flex message_left">
                                <div>
                                    <div class="people_img">
                                        <img src="" alt="">
                                    </div>
                                </div>
                                <div class="message">
                                    Lorem ipsum dolor
                                </div>
                            </div>
                            <div class=" mx-5 my-3  d-flex message_left">
                                <div class="message">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet, consectetuer adipiscing
                                    elit

                                </div>
                            </div>
                            <div class=" py-3 mt-xl-5 date">
                                <p class="text-center">06/06/2021 5:22 PM</p>
                            </div>
                            <div class=" d-flex justify-content-end message_right">
                                <div class=" d-flex justify-content-end">
                                    <div class="message w-75">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod Lorem ipsum dolor sit amet
                                    </div>
                                    <div class="h-100">
                                        <div class="people_img">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" d-flex justify-content-end my-3 message_right">
                                <div class=" d-flex ">
                                    <div class="message p-5 mb-5">
                                        Lorem ipsum dolor
                                    </div>
                                    <div class="h-100">
                                        <div class="people_img">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" message_form">
                            <div class="d-flex w-100 justify-content-center align-items-center">
                                <i class="far fa-grin-alt"> </i>
                                <div class="w-100"><input type="text" class="w-100 h-100  form-control" name=""
                                                          placeholder="Type a message">
                                    <i class="fa fa-paperclip"></i>
                                </div>
                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

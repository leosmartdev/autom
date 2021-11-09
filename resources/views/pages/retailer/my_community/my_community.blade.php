@extends('layouts.nav')
@section('content')
    <div class="My_Community">
        <div class="m-md-3 mx-md-4 top_p">
            <p>My Community</p>
            <hr class="mb-0">
        </div>
        <!-- filter box start -->
        <div class=" order_list">
            <div class="filter_box py-3 px-4">
                <div class="row justify-content-between">
                    <div class="col-6 col-xl-3 col-xxl-2">
                        <div class="price">
                            <div class="form-group">
                                <label for="" class="form-label">Date</label>
                                <div class="d-flex position-relative">
                                    <select class="form-select" name="" id="">
                                        <option value="1">All Order</option>
                                        <option value="2">New Order </option>
                                        <option value="2">New Order </option>
                                        <option value="2">past Order </option>
                                    </select>
                                    <div class="select_down position-absolute">
                                        <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6  col-xl-3 col-xxl-2">
                        <div class="Category">
                            <div class="search_filter">
                                <div class="form-group">
                                    <label for="" class="form-label">Search Post</label>
                                    <input type="text" name="" id="" class="form-control"
                                           placeholder="search" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- filter box end -->
        <a href="{{url('community/create')}}" class=" text-dark fw-normal">
            <div class="add_post mb-3 m-md-3 mx-md-4 bg-white">

                <i class="fa fa-plus"></i> Add Post
            </div>
        </a>

        <!-- post start -->
        <div class="post ">
            <div class="m-md-3 mx-md-4 bg-white p-3 px-md-5 pos_body">
                <p class="text-end delete_post"> <a href="#">
                        <img src="{{url('assets/img/icons/Group_87.png')}}" alt="">
                    </a></p>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="post_img">
                            <img class=" img-fluid" src="{{url('assets/img/post_img/Group_850.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-xxl-10">

                                <div class="Communitys mb-3 mb-xxl-4">
                                    <div class="about_post">
                                        <p class="fw-normal"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                    <div class="LCD">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- like comment count start -->
                                            <div class="d-flex like_comment">
                                                <div class="like">
                                                    <div class="d-flex align-items-end ">
                                                        <a href="#"> <img class="img-fluid" src="{{url('assets/img/icons/Group_852.png')}}" alt=""></a>
                                                        <span class=" h-100 like_count mx-2 mt-2 text-dark fw-normal">169</span>
                                                    </div>
                                                </div>

                                                <div class="comment">
                                                    <div class="d-flex align-items-end ">
                                                        <a href="#"> <img class="img-fluid" src="{{url('assets/img/icons/Group_853.png')}}" alt=""></a>
                                                        <span class=" h-100 mx-2 mt-2 text-dark fw-normal comment_count">118</span>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- like comment count end -->
                                            <div class="date">
                                                <p class="mb-0 fw-normal">06/06/2021 <span>10:30</span></p>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="total_comment">
                                        <p class="fw-bold">view 118 comments</p>
                                    </div>
                                    <div class="comment_box p-3">
                                        <div class="d-flex">
                                            <div class="profile_img">
                                                <img src="{{url('assets/img/post_img/Group_856.png')}}" alt="">
                                            </div>
                                            <div class="comment_details w-100">
                                                <div class="d-flex justify-content-between name_like w-100">
                                                    <h6 class="fw-bold name">Yeng</h6>
                                                    <div class="like">
                                                        <div class="d-flex align-items-end ">
                                                            <a href="#"> <i class="far fa-thumbs-up"></i></a>
                                                            <span class=" h-100 like_count mx-2 mt-2 text-dark fw-normal">169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-xl-10">
                                                        <p class="comment">Know the difference between delegating styles and which one is appropriate for each situ</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="" class=" text-dark fw-normal">Reply</a>
                                                    <div class="date_time">
                                                        <p class="pb-0 fw-normal">06/06/2021 <span>10:30</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_from mt-3">
                                        <form action="#">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="profile_img">
                                                        <img src="" alt="">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control mx-2 rounded-pill" placeholder="Commment">
                                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- post end -->
        <!-- post start -->
        <div class="post ">
            <div class="m-md-3 mx-md-4 bg-white p-3 px-md-5 pos_body">
                <p class="text-end delete_post"> <a href="#">
                        <img src="{{url('assets/img/icons/Group_87.png')}}" alt="">
                    </a></p>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="post_img">
                            <img class=" img-fluid" src="{{url('assets/img/post_img/Group_850.png')}}" alt="">
                        </div>
                        <div class="post_img_s mt-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-xxl-10">

                                <div class="Communitys mb-3 mb-xxl-4">
                                    <div class="about_post">
                                        <p class="fw-normal"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <p class="fw-normal"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="link"><a href="" class=" text-decoration-underline fw-normal">www.urllink.com</a></div>
                                    </div>
                                    <div class="LCD">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- like comment count start -->
                                            <div class="d-flex like_comment">
                                                <div class="like">
                                                    <div class="d-flex align-items-end ">
                                                        <a href="#"> <img class="img-fluid" src="{{url('assets/img/icons/Group_852.png')}}" alt=""></a>
                                                        <span class=" h-100 like_count mx-2 mt-2 text-dark fw-normal">169</span>
                                                    </div>
                                                </div>

                                                <div class="comment">
                                                    <div class="d-flex align-items-end ">
                                                        <a href="#"> <img class="img-fluid" src="{{url('assets/img/icons/Group_853.png')}}" alt=""></a>
                                                        <span class=" h-100 mx-2 mt-2 text-dark fw-normal comment_count">118</span>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- like comment count end -->
                                            <div class="date">
                                                <p class="mb-0 fw-normal">06/06/2021 <span>10:30</span></p>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="total_comment">
                                        <p class="fw-bold">view 118 comments</p>
                                    </div>
                                    <div class="comment_box p-3">
                                        <div class="d-flex">
                                            <div class="profile_img">
                                                <img src="{{url('assets/img/post_img/Group_856.png')}}" alt="">
                                            </div>
                                            <div class="comment_details w-100">
                                                <div class="d-flex justify-content-between name_like w-100">
                                                    <h6 class="fw-bold name">Yeng</h6>
                                                    <div class="like">
                                                        <div class="d-flex align-items-end ">
                                                            <a href="#"> <i class="far fa-thumbs-up"></i></a>
                                                            <span class=" h-100 like_count mx-2 mt-2 text-dark fw-normal">169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-xl-10">
                                                        <p class="comment">Know the difference between delegating styles and which one is appropriate for each situ</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="" class=" text-dark fw-normal">Reply</a>
                                                    <div class="date_time">
                                                        <p class="pb-0 fw-normal">06/06/2021 <span>10:30</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_from mt-3">
                                        <form action="#">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="profile_img">
                                                        <img src="" alt="">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control mx-2 rounded-pill" placeholder="Commment">
                                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- post end -->
    </div>
@endsection

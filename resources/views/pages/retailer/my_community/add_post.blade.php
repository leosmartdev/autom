@extends('layouts.nav')
@section('content')
    <div class=" p-3 px-md-5 PM_nav">
        <div class="row gy-3 gy-md-0">
            <div class="col-6 col-md-3 col-xl-2 col-xxl-1">
                <div class="item Back">
                    <a href="{{url('community')}}" class="item_link">
                        <img src="{{url('assets/img/icons/Group_119.png')}}" alt=""><small class="text-dark">Back</small>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl-2 ">
                <div class="item ">
                    <a href="{{url('community/create')}}" class="item_link text-dark">
                        Add Post
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="m-3 mx-md-4">
        <div class="add_post">
            <!-- form start -->
            <form action="{{url('community')}}">
                <div class="bg-white p-3 p-md-4 form_body">
                    <div class="add_photo ">
                        <p class=" fw-normal s_text mx-2">Add Picture</p>
                        <div class="d-flex mx-3">
                            <div class="img">
                                <img src="" alt="">
                            </div>
                            <div class="img">
                                <img src="" alt="">
                            </div>
                            <div class="img d-flex justify-content-center align-items-center">
                                <a href="" class=" text-dark"> <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xxl-9">
                            <div class="description m-md-3">
                                <p class=" firstp fw-normal">Desctiption</p>
                                <div class="dess_text p-3">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl augue duis dolore te feugait nulla facilisi. <br> Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut lao</p>
                                    <div class="text-end">
                                        <span>(150/300)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-xl-5">
                        <div class="col-12 col-lg-8 col-xxl-6">
                            <div class="URL">
                                <div class="d-flex align-items-center px-3 p-3">
                                    <label class="checkbox">
                                        <input type="checkbox" class="bg-dark">
                                        <span class="checkmark"></span>
                                    </label> <p class=" fw-normal">URL</p> <input type="url" class="form-control s_bg rounded-0" placeholder="URL Link">
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
        <input type="submit" class="btn btn-outline-dark px-4 m-3 cancelbtn" value="Cancel">
        <input type="submit" class="btn btn-dark px-4 m-3 submitbtn"
               value="post">
    </div>
@endsection

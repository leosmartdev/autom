@extends('layouts.nav')
@section('content')
    <div class="p-3 mx-2">
        <div class="row">
            <div class="col-12">
                <div class="back_div">
                    <a href="{{url('voucher')}}" class="text-dark">
                        <img class=" img-fluid" src="{{url('assets/img/icons/Group_119.png')}}" alt=""><small
                            class="mx-4 h6 fw-light">Back</small>
                    </a>
                    <span class="h6">Create Voucher</span>
                </div>
            </div>
        </div>
    </div>
    <div class="create_voucher">
        <div class="create_voucher_body">
            <form class="form"  action="{{url('voucher')}}" method="post">
                @csrf
                <div class="bg-white m-3 p-3 px-xl-5 round_bg">
                    <div class="row">
                        <div class="col-12 col-lg-11 col-xl-10">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">Voucher Title*</label>
                                        <input type="text" name="" id="" class="form-control" value="50% discount on specific products"
                                               aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Please Enter Voucher Title</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">Promo Code Type*</label>
                                        <div class="d-flex position-relative">
                                            <select class="form-select" name="" id="">
                                                <option value="1">Percentage</option>
                                                <option value="2">Percentage </option>
                                            </select>
                                            <div class="select_down position-absolute">
                                                <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                        <small id="helpId" class="text-muted">Please Enter Promo Code Type</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">Discount*</label>
                                        <input type="text" name="" id="" class="form-control" value="9%"
                                               aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Please Enter Voucher Title</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">Usage Setting</label>
                                        <div class="align-items-center radio_two">
                                            <div class="d-flex">
                                                <label class="radiobtn">
                                                    <input type="radio" name="Agree">
                                                    <span class="checmark"></span>
                                                </label> <span>Limit number of times this promo code can be used in total</span>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <label class="radiobtn radiobtn_tow">
                                                    <input type="radio" name="Agree">
                                                    <span class="checmark"></span>
                                                </label><span>Limit to one use per user</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">Minumum Consumption*</label>
                                        <input type="text" name="" id="" class="form-control" value="MYR 50"
                                               aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Please Enter Voucher Title</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">EXP Date*</label>
                                        <input type="text" name="" id="" class="form-control" value="06/06/2021">
                                        <small id="helpId" class="text-muted">Please Enter Voucher Title</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">Quantity*</label>
                                        <input type="text" name="" id="" class="form-control" value="500">
                                        <small id="helpId" class="text-muted">Please Enter Voucher Title</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class=" form-label s_text">Rule*</label>
                                        <div class="Rule">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut lao</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-lg-5">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-outline-dark px-4 m-3 cancelbtn" value="Cancel">
                            <input type="submit" class="btn btn-outline-dark  px-4 active m-3 submitbtn nextbtn"
                                   value="Save">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

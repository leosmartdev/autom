@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class="p-3 px-md-5 PM_nav">
        <div class="row gy-3 gy-md-0">
            <div class="col-6 col-md-3 col-xl-2">
                <div class="item Back">
                    <a
                        href="{{url('productList')}}"
                        class="item_link"
                    >
                        <img
                            src="{{url('assets/img/icons/Group_119.png')}}"
                            alt=""
                        /><small>Back</small>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl-8">
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap" >
                    <li class="nav-item">
                        <a class="nav-link py-2  me-2 active" data-toggle="tab" href="#product_detail_modal_id" role="tab" aria-controls="detail" aria-selected="false">Product Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 me-2 " data-toggle="tab" href="#order_list_modal_id" role="tab" aria-controls="review" aria-selected="true">Order List (12)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 me-2 " data-toggle="tab" href="#review_modal_id" role="tab" aria-controls="review" aria-selected="true">Review (12)</a>
                    </li>
                </ul>
            </div>

{{--            <div class="col-6 col-md-3 col-xl-2">--}}
{{--                <div class="item active">--}}
{{--                    <a--}}
{{--                        href="Product_Details.html"--}}
{{--                        class="item_link"--}}
{{--                    >--}}
{{--                        Product Details--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-md-3 col-xl-2">--}}
{{--                <div class="item">--}}
{{--                    <a href="Order_List.html" class="item_link">--}}
{{--                        Order List (12)--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-md-3 col-xl-6">--}}
{{--                <div--}}
{{--                    class="--}}
{{--                                        d-flex--}}
{{--                                        justify-content-between--}}
{{--                                        align-items-center--}}
{{--                                    "--}}
{{--                >--}}
{{--                    <div class="item">--}}
{{--                        <a href="Review.html" class="item_link">--}}
{{--                            Review (12)--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="dotdot"><a href="#"><span></span><span></span><span></span></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="product_detail_modal_id" role="tabpanel">
            <div class="product_details_page">
                <div
                    class="
                                m-md-3
                                mx-md-5
                                bg-white
                                p-3 p-lg-5
                                product_details_page_body
                            "
                >
                    <div class="row">
                        <div class="col-12 ">
                            <div class="Product_Cover">
                                <div class="row">
                                    <div class="col-6 col-lg-3">
                                        <p>Product Cover</p>
                                        <div class="prodcut_img">
                                            <img src="" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="Now_Shelf">
                                            <p>Now Shelf</p>
                                            <div
                                                class="form_switch_input">
                                                <input
                                                    class="left_right"
                                                    type="checkbox"
                                                    checked
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-10">
                            <div class="product_title">
                                <p>Product Name</p>
                                <h5>
                                    GAIDO TIMING BELT KIT PROTON SAGA
                                    BLM FL EXORA SATRIA NEO GEN2 PERSONA
                                    WAJA CAMPRO (144MY25)
                                </h5>
                            </div>
                            <div class="tr">
                                <div class="row gy-3 gy-md-0">
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Category
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">
                                                    Interior
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Stock
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">304</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tr">
                                <div class="row gy-3 gy-lg-0">
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Location
                                                </p>
                                            </div>
                                            <div class="col-8 ">
                                                <p class="mb-0">
                                                    Klang, 40470
                                                    Selangor
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Service
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">
                                                    3 years warranty
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tr">
                                <div class="row gy-3 gy-lg-0">
                                    <div class="col-12 col-lg-5">
                                        <div class="row">
                                            <div class="col-5 col-md-4 col-xxl-5">
                                                <p class="mb-0 leftp">
                                                    Drawing No
                                                </p>
                                            </div>
                                            <div class="col-7 col-md-8 col-xxl-4">
                                                <p class="mb-0">
                                                    546897267877
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Price #1
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">
                                                    MYR 34 / 1pcs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tr">
                                <div class="row gy-3 gy-lg-0">
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Price #1
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">
                                                    MYR 34.00 / 1pcs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Price #2
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">
                                                    MYR 2,800.00 /
                                                    100pcs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-0 leftp">
                                                    Price #3
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">
                                                    MYR 25,000.00 /
                                                    1,000pcs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tr">
                                <div class="row">
                                    <div class="Add_Picture">
                                        <p>Add More Picture</p>
                                        <div class="d-flex">
                                            <div class="img">
                                                <img src="" alt="" />
                                            </div>
                                            <div class="img">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-10">
                            <div class="desscription">
                                <p><strong>Desctiption</strong></p>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt
                                    ut laoreet dolore magna aliquam erat
                                    volutpat. Ut wisi enim ad minim
                                    veniam, quis nostrud exerci tation
                                    ullamcorper suscipit lobortis nisl
                                    augue duis dolore te feugait nulla
                                    facilisi. Lorem ipsum dolor sit
                                    amet, cons ectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod
                                    tincidunt ut lao
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="Specification">
                                <p>Specification</p>
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="d-flex s_box"
                                                >
                                                    <div
                                                        class="
                                                                    Specification_img
                                                                "
                                                    >
                                                        <img
                                                            src=""
                                                            alt=""
                                                        />
                                                    </div>
                                                    <a href="#">Red</a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div
                                                    class="d-flex s_box"
                                                >
                                                    <div
                                                        class="
                                                                    Specification_img
                                                                "
                                                    >
                                                        <img
                                                            src=""
                                                            alt=""
                                                        />
                                                    </div>
                                                    <a href="#">Red</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="d-flex s_box"
                                                >
                                                    <div
                                                        class="
                                                                    Specification_img
                                                                "
                                                    >
                                                        <img
                                                            src=""
                                                            alt=""
                                                        />
                                                    </div>
                                                    <a href="#">Red</a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div
                                                    class="d-flex s_box"
                                                >
                                                    <div
                                                        class="
                                                                    Specification_img
                                                                "
                                                    >
                                                        <img
                                                            src=""
                                                            alt=""
                                                        />
                                                    </div>
                                                    <a href="#">Red</a>
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
        </div>
        <div class="tab-pane" id="order_list_modal_id" role="tabpanel">
            <div class="order_list Product_Category">
                <div class="bg-white m-md-3 mx-md-5 p-3 order_list_body">
                    <!-- filter box start -->
                    <div class="filter_box py-3 px-4">
                        <div class="row justify-content-between">
                            <div class="col-6 col-xl-3 col-xxl-2">
                                <div class="price">
                                    <div class="form-group">
                                        <label for="" class="form-label">Order Status</label>
                                        <div class="
                                                        d-flex
                                                        position-relative
                                                    ">
                                            <select class="form-select" name="" id="">
                                                <option value="1">
                                                    All Order
                                                </option>
                                                <option value="2">
                                                    New Order
                                                </option>
                                                <option value="2">
                                                    New Order
                                                </option>
                                                <option value="2">
                                                    past Order
                                                </option>
                                            </select>
                                            <div class="
                                                            select_down
                                                            position-absolute
                                                        ">
                                                <i class="
                                                                fa
                                                                fa-caret-down
                                                            "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3 col-xxl-2">
                                <div class="Category">
                                    <div class="search_filter">
                                        <div class="form-group">
                                            <label for="" class="form-label">Order Number</label>
                                            <input type="text" name="" id="" class="form-control"
                                                   placeholder="search" aria-describedby="helpId" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- filter box end -->
                    <!-- dashborad footer start -->
                    <div class="my-3 p-3 dashborad_footer">
                        <div class="oreder-table">
                            <div class="row">
                                <div class="col-4 col-lg-12">
                                    <div class="oreder-table-header
                                                    h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Client Name</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Contact Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Specification</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Status</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12">
                                    <div class="tr h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>Jacky Yang</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>+6012 565 4862</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Red</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>1</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>3</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p class="MYR">
                                                    MYR 56.50
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <small class="Preparing">Preparing</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 d-lg-none">
                                    <div class="
                                                    oreder-table-header
                                                    h-100
                                                ">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Client Name</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Contact Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Specification</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Status</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12">
                                    <div class="tr h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>Jacky Yang</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>+6012 565 4862</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Red</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>1</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>3</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p class="MYR">
                                                    MYR 56.50
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <small class="Preparing">Preparing</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-lg-none">
                                    <div class="
                                                    oreder-table-header
                                                    h-100
                                                ">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Client Name</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Contact Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Specification</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Status</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12">
                                    <div class="tr h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>Jacky Yang</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>+6012 565 4862</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Red</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>1</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>3</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p class="MYR">
                                                    MYR 56.50
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <small class="Preparing">Preparing</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-lg-none">
                                    <div class="
                                                    oreder-table-header
                                                    h-100
                                                ">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Client Name</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Contact Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Specification</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Status</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12">
                                    <div class="tr h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>Jacky Yang</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>+6012 565 4862</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Red</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>1</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>3</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p class="MYR">
                                                    MYR 56.50
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <small class="Preparing">Preparing</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-lg-none">
                                    <div class="
                                                    oreder-table-header
                                                    h-100
                                                ">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Client Name</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Contact Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Specification</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Status</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12">
                                    <div class="tr h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>Jacky Yang</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>+6012 565 4862</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Red</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>1</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>3</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p class="MYR">
                                                    MYR 56.50
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <small class="Preparing">Preparing</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-lg-none">
                                    <div class="
                                                    oreder-table-header
                                                    h-100
                                                ">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Client Name</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Contact Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Specification</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Status</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12">
                                    <div class="tr h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>Jacky Yang</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>+6012 565 4862</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Red</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>1</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>3</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p class="MYR">
                                                    MYR 56.50
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <small class="Preparing">Preparing</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-lg-none">
                                    <div class="
                                                    oreder-table-header
                                                    h-100
                                                ">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <h6>Date</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Order Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Client Name</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Contact Number</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Specification</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Quantity</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Total Amount</h6>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <h6>Status</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12">
                                    <div class="tr border-bottom-0 h-100">
                                        <div class="row h-100">
                                            <div class="col-12 col-lg">
                                                <p>06/02/2021</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>#2564667666</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>Jacky Yang</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p>+6012 565 4862</p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Red</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>- Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="row">
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>1</p>
                                                    </div>
                                                    <div class="
                                                                    col-6
                                                                    col-lg-12
                                                                ">
                                                        <p>3</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <p class="MYR">
                                                    MYR 56.50
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <small class="Preparing">Preparing</small>
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
        <div class="tab-pane" id="review_modal_id" role="tabpanel">
            <div class="Review Product_Category Open_product">
                <div class=" m-md-3  Review_body">
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
                                                    <div class="d-flex align-items-center justify-content-xl-end">
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
                            <hr>
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
                                                    <div class="d-flex align-items-center justify-content-xl-end">
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
                            <hr>
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
                                                    <div class="d-flex align-items-center justify-content-xl-end">
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
                            <hr>
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
                                                    <div class="d-flex align-items-center justify-content-xl-end">
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
                            <hr>
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
                                                    <div class="d-flex align-items-center justify-content-xl-end">
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
                            <hr>
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
                                                    <div class="d-flex align-items-center justify-content-xl-end">
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
                            <hr>
                        </div>
                        <div class="comment">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
                <div class="paginationn_box d-flex my-5">
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
        </div>
    </div>

@endsection

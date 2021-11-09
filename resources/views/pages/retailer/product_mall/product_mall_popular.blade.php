@extends('layouts.nav')
@section('content')
    <div class="p-3 Product_Mall_page">
        <div class="pf_poduct">
            <div class="d-flex mx-4 mb-3 pf_title">
                <h4>Popular</h4>
                <h4>My Following</h4>
            </div>
        </div>
        <!-- filter box start -->
        <div class="filter_box pb-4 mx-4 ">
            <div class="row gy-3">

                <div class="col-6 col-lg-3">
                    <div class="price">
                        <div class="form-group">
                            <label for="" class="form-label">Price</label>
                            <div class="d-flex position-relative">
                                <select class="form-select" name="" id="">
                                    <option value="1">Low to High</option>
                                    <option value="2">High to Low </option>
                                </select>
                                <div class="select_down position-absolute">
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6  col-lg-3">
                    <div class="Category">
                        <div class="form-group">
                            <label for="" class="form-label">Category</label>
                            <div class="d-flex position-relative">
                                <select class="form-select" name="" id="">
                                    <option selected value="1">Automotive</option>
                                    <option value="1">Car Oils & Fluids</option>
                                    <option value="2">Car Care</option>
                                    <option value="3">Motorcycles & Parts</option>
                                    <option value="4">Motor Accessories</option>
                                    <option value="5">Car Accessories</option>
                                    <option value="6">Car Replacement Parts</option>
                                    <option value="7">Car Electronics</option>
                                    <option value="8">Service & Installation</option>
                                    <option value="9">Automotive Merchandise</option>
                                    <option value="10">Others</option>
                                </select>
                                <div class="select_down position-absolute">
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class=" h-100 d-flex align-items-end justify-content-end filter_items_box">
                        <div class="span"> <small>Interior </small> <i class="fa fa-times"></i></div>
                        <div class="span"><small>Water Tank</small> <i class="fa fa-times"></i></div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="search_filter">
                        <div class="form-group">
                            <label for="" class="form-label">Add Product Type</label>
                            <input type="text" name="" id="" class="form-control" placeholder="search"
                                   aria-describedby="helpId">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- filter box end -->
        <!-- produc section start -->
        <div class="porduct mt-4 my-3">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="Category_nav">
                        <li class="Category_item active">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i>
                                Automotive</a>
                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Car Oils &
                                Fluids</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Car Care</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Motorcycles
                                & Parts</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Motor
                                Accessories</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Car
                                Accessories</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Car
                                Replacement Parts</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Car
                                Electronics</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Service &
                                Installation</a>

                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Automotive
                                Merchandise</a>
                        </li>
                        <li class="Category_item">
                            <a href="" class="Category_link"><i class="fa fa-angle-right"></i> Others</a>
                        </li>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-xl-9">
                    <div class="row gy-3">
                        <div class="col-12 col-xl-6">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <div class="porduct_box">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="h-100 porduct_img">

                                                    <a href="{{url('retailer/mall/1')}}">
                                                        <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                             alt="">
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class=" py-3 product_details">
                                                    <p>
                                                        GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                        GEN2 WAJA CAMPRO (144MY25)
                                                    </p>
                                                    <span>Bumpers & Components</span>

                                                    <div class=" d-flex product_prices">
                                                        <h6>MYR 136</h6><small>MYR 156</small>
                                                    </div>
                                                    <div class="buy_box">
                                                        <form action="#" class="row g-1 g-md-2">
                                                            <div class="col-5 ">
                                                                <div class="d-flex input" >
                                                                    <i class="fa fa-minus" style="cursor: pointer;"></i>
                                                                    <input
                                                                        class="text-center w-100 form-control"
                                                                        type="text" value="1">
                                                                    <i class="fa fa-plus" style="cursor: pointer;"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <button
                                                                    class="btn btn-dark px-lg-3">Buy</button>
                                                                <button
                                                                    class="btn btn-outline-dark active"><i
                                                                        class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="porduct_box">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="h-100 porduct_img">
                                                    <a href="">
                                                        <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                             alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class=" py-3 product_details">
                                                    <p>
                                                        GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                        GEN2 WAJA CAMPRO (144MY25)
                                                    </p>
                                                    <span>Bumpers & Components</span>

                                                    <div class=" d-flex product_prices">
                                                        <h6>MYR 136</h6><small>MYR 156</small>
                                                    </div>
                                                    <div class="buy_box">
                                                        <form action="#" class="row g-1 g-md-2">
                                                            <div class="col-5 ">
                                                                <div class="d-flex input">
                                                                    <i class="fa fa-minus"></i>
                                                                    <input
                                                                        class="text-center w-100 form-control"
                                                                        type="text" value="1">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <button
                                                                    class="btn btn-dark px-lg-3">Buy</button>
                                                                <button
                                                                    class="btn btn-outline-dark active"><i
                                                                        class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="porduct_box">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="h-100 porduct_img">
                                                    <a href="">
                                                        <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                             alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class=" py-3 product_details">
                                                    <p>
                                                        GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                        GEN2 WAJA CAMPRO (144MY25)
                                                    </p>
                                                    <span>Bumpers & Components</span>

                                                    <div class=" d-flex product_prices">
                                                        <h6>MYR 136</h6><small>MYR 156</small>
                                                    </div>
                                                    <div class="buy_box">
                                                        <form action="#" class="row g-1 g-md-2">
                                                            <div class="col-5 ">
                                                                <div class="d-flex input">
                                                                    <i class="fa fa-minus"></i>
                                                                    <input
                                                                        class="text-center w-100 form-control"
                                                                        type="text" value="1">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <button
                                                                    class="btn btn-dark px-lg-3">Buy</button>
                                                                <button
                                                                    class="btn btn-outline-dark active"><i
                                                                        class="fa fa-shopping-cart"></i></button>
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
                        <div class="col-12 col-xl-6">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <div class="porduct_box">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="h-100 porduct_img">
                                                    <a href="">
                                                        <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                             alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class=" py-3 product_details">
                                                    <p>
                                                        GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                        GEN2 WAJA CAMPRO (144MY25)
                                                    </p>
                                                    <span>Bumpers & Components</span>

                                                    <div class=" d-flex product_prices">
                                                        <h6>MYR 136</h6><small>MYR 156</small>
                                                    </div>
                                                    <div class="buy_box">
                                                        <form action="#" class="row g-1 g-md-2">
                                                            <div class="col-5 ">
                                                                <div class="d-flex input">
                                                                    <i class="fa fa-minus"></i>
                                                                    <input
                                                                        class="text-center w-100 form-control"
                                                                        type="text" value="1">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <button
                                                                    class="btn btn-dark px-lg-3">Buy</button>
                                                                <button
                                                                    class="btn btn-outline-dark active"><i
                                                                        class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="porduct_box">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="h-100 porduct_img">
                                                    <a href="">
                                                        <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                             alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class=" py-3 product_details">
                                                    <p>
                                                        GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                        GEN2 WAJA CAMPRO (144MY25)
                                                    </p>
                                                    <span>Bumpers & Components</span>

                                                    <div class=" d-flex product_prices">
                                                        <h6>MYR 136</h6><small>MYR 156</small>
                                                    </div>
                                                    <div class="buy_box">
                                                        <form action="#" class="row g-1 g-md-2">
                                                            <div class="col-5 ">
                                                                <div class="d-flex input">
                                                                    <i class="fa fa-minus"></i>
                                                                    <input
                                                                        class="text-center w-100 form-control"
                                                                        type="text" value="1">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <button
                                                                    class="btn btn-dark px-lg-3">Buy</button>
                                                                <button
                                                                    class="btn btn-outline-dark active"><i
                                                                        class="fa fa-shopping-cart"></i></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="porduct_box">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="h-100 porduct_img">
                                                    <a href="">
                                                        <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                             alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class=" py-3 product_details">
                                                    <p>
                                                        GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                        GEN2 WAJA CAMPRO (144MY25)
                                                    </p>
                                                    <span>Bumpers & Components</span>

                                                    <div class=" d-flex product_prices">
                                                        <h6>MYR 136</h6><small>MYR 156</small>
                                                    </div>
                                                    <div class="buy_box">
                                                        <form action="#" class="row g-1 g-md-2">
                                                            <div class="col-5 ">
                                                                <div class="d-flex input">
                                                                    <i class="fa fa-minus"></i>
                                                                    <input
                                                                        class="text-center w-100 form-control"
                                                                        type="text" value="1">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <button
                                                                    class="btn btn-dark px-lg-3">Buy</button>
                                                                <button
                                                                    class="btn btn-outline-dark active"><i
                                                                        class="fa fa-shopping-cart"></i></button>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- produc section end -->
    </div>
@endsection

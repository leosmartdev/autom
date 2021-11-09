@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class="Product_List Product_Category">
        <div class="pf_title m-3 mx-lg-6">
            <a href="{{url('wholesaler/productList')}}">
                <h4>Product List</h4>
            </a>
            <a href="{{url('wholesaler/productCategory')}}">
                <h4 class="active">Product Category</h4>
            </a>
        </div>
        <!-- Product Category box start -->
        <div class=" m-3 mt-md-4 Product_Category_box">
            <!-- filter box start -->
            <div class="filter_box py-3 px-4">
                <div class="row align-items-end gy-3">
                    <div class="col-12 col-md-6 col-xl-3 col-xxl-2">
                        <div class="price">
                            <div class="form-group">
                                <label for="" class="form-label">Sort by</label>
                                <div class="d-flex position-relative">
                                    <select class="form-select" name="" id="">
                                        <option value="1">A to Z</option>
                                        <option value="2">Z to A </option>
                                        <option value="2">Normal</option>
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
                                    <label for="" class="form-label">Search Name</label>
                                    <input type="text" name="" id="" class="form-control bg-white"
                                           placeholder="search" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- filter box end -->

            <!-- products min box start -->
            <div class=" mx-md-3 mx-lg-5 products_min_box">
                <hr>
                <h4 class="produc_title my-4">Auto Body Parts & Mirrors</h4>
                <div class="row gy-3">
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <a href="{{url('productCategory/1')}}" style="color: #353535">
                            <div class=" bg-white px-3 py-4 product" >
                                <div class="product_img text-center">
                                    <img src="{{asset('assets/img/Product/Group_296.png')}}" class="img-fluid"
                                         alt="product image">
                                </div>
                                <div class="product_name mt-3">
                                    <h5 class="mb-0 text-center">Bumpers & Components</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group+298.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_299.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_302.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>

                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_303.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_306.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_316.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_317.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_308.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_310.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>

                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_312.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_314.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
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
                <hr>
                <h4 class="produc_title my-4">Headlights & Lighting</h4>
                <div class="row gy-3">
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_296.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group+298.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_299.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_302.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>

                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_303.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-md-4 col-xxl-2">
                        <div class=" bg-white px-3 py-4 product">
                            <div class="product_img text-center">
                                <img src="{{asset('assets/img/Product/Group_306.png')}}" class="img-fluid"
                                     alt="product image">
                            </div>
                            <div class="product_name mt-3">
                                <h5 class="mb-0 text-center">Bumpers & Components</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- products min box end -->
        </div>
        <!-- Product Category box end -->
    </div>
@endsection

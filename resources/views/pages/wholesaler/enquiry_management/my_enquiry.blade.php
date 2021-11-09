@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class="Product_List Product_Category">
        <div class="pf_title m-3 mx-lg-5">
            <a href="{{url('enquiry')}}">
                <h4>User Enquiry</h4>
            </a><a href="{{url('enquiry/create')}}">
                <h4 class="active">My Enquiry</h4>
            </a>
        </div>
    </div>
    <div class="order_list Product_Category Product_List Enquiry_Management">
        <div class="bg-white m-md-3 p-3 order_list_body Product_List_box">
            <!-- filter box start -->
            <div class="filter_box py-3 px-4">
                <div class="row justify-content-between">
                    <div class="col-6 col-xl-3 col-xxl-2">
                        <div class="price">
                            <div class="form-group">
                                <label for="" class="form-label">Order Status</label>
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
                                    <label for="" class="form-label">Order Number</label>
                                    <input type="text" name="" id="" class="form-control"
                                           placeholder="search" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- filter box end -->
            <!-- table start -->
            <div class="px-md-4 Product_List_tabel">
                <div class="row">
                    <div class="col-4 col-xl-12 h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col--xl4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col--xl4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col--xl4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col--xl4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col--xl4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col--xl4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col--xl4">
                                                    <h6 class="mb-0 Wholesaler">Wholesaler</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0 Order_Product">Order Product</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Original Price</h6>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">Enquiry Price</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr border-bottom-0 pb-3 pb-xl-0">
                            <div class="row gy-3 gy-xl-0">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-6">
                                                    <div
                                                        class="d-xl-flex  justify-content-center">
                                                        <span class="span">FE AUTO PAR ...</span>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <h6>GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO GEN2 WAJA CAMPRO (144MY25)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="text-dark">Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-12 col-xl-8">
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-12 col-xl-4">
                                                    <span>2,000</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <span>MYR 5,600.00</span>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <p>MYR 5,000.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="row">
                                                <div class="d-flex justify-content-end align-items-baseline">
                                                    <button class="btn_black one">Buy</button>
                                                    <button class="btn_black">Remove</button>
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
            <!-- table end -->

        </div>
        <!-- order list page end-->
        <!-- paginationn start -->
        <div class="paginationn_box d-flex justify-content-center my-5">
            <div class="page_position d-flex align-items-center  mx-0 mx-md-5">
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
        <!-- paginationn end -->
    </div>
@endsection

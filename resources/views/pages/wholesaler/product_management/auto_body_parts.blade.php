@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class="Product_List">
        <div class="p-3 px-md-5 PM_nav">
            <div class="row gy-3 gy-md-0">
                <div class="col-6 col-md-3 col-xl-1">
                    <div class="item Back">
                        <a href="{{url('productCategory')}}" class="item_link">
                            <img src="{{url('assets/img/icons/Group_119.png')}}" alt="" /><small>Back</small>
                        </a>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="item " style="display: flex; align-content: center">
                        <p class=" text-dark fw-normal" style="font-size: large">Auto Body Parts & Mirrors</p>
                        <div class="mb-0 p" style="background: #C6C6C6; height: 30px; margin-left: 50px; padding: 0.2rem 0.3rem">Bumpers & Components</div>
                    </div>

                </div>


            </div>
        </div>
        <!-- Product List box start -->
        <div class="bg-white m-3 mt-md-4 Product_List_box">

            <!-- filter box start -->
            <div class="filter_box py-3 px-4">
                <div class="row align-items-end gy-3">
                    <div class="col-12 col-md-6 col-xl-3 col-xxl-2">
                        <div class="price">
                            <div class="form-group">
                                <label for="" class="form-label">Status</label>
                                <div class="d-flex position-relative">
                                    <select class="form-select" name="" id="">
                                        <option value="1">Now shelf</option>
                                        <option value="2">Now shelf </option>
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
                                    <label for="" class="form-label">Search product</label>
                                    <input type="text" name="" id="" class="form-control"
                                           placeholder="search" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 col-xxl-5">
                        <div class=" h-100 d-flex align-items-end  filter_items_box">
                            <div class="span "> <small>Interior </small> <i class="fa fa-times"></i></div>
                            <div class="span"><small>Water Tank</small> <i class="fa fa-times"></i></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
                        <div class="d-flex justify-content-end move_delete">
                            <div class="btn_black py-2  px-3 px-lg-4 d-flex align-items-center Move_btn message" data-toggle="modal"  data-target-id="enquiry" data-target="#move_modal_id" >
                                <img src="{{url('assets/img/icons/Path_280.png')}}" class="img-fluid mx-1" alt="">
                                <span>Move(3)</span>
                            </div>
                            <div class="btn_black py-2 px-3 px-lg-4 d-flex align-items-center">

                                <img src="{{url('assets/img/icons/Path_280.png')}}" class="img-fluid mx-1" alt="">
                                <span>Delete(3)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- filter box end -->
            <!-- table start -->
            <div class="px-4 Product_List_tabel">
                <div class="row">
                    <div class="col-12 d-xl-none my-2 h-100">
                        <div class="Product_List_tr pb-3">
                            <div class="row">
                                <a  class="text-dark" > <h5 class="px-3 px-lg-5"><i
                                            class="fa fa-plus"></i> Add Product</h5></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-xl-12 h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">in Stock</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">T.Month Sold</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-none d-xl-block my-2 h-100">
                        <div class="Product_List_tr pb-3">
                            <div class="row">
                                <a href="{{url('productList/create')}}" style="color: #232323">
                                    <h5  class="px-3 px-lg-5" ><i class="fa fa-plus"></i> Add Product</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <label class="radiobtn">
                                                            <input type="radio" name="Agree1">
                                                            <span class="checmark"></span>
                                                        </label>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6>Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>9,999</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p class="mb-0">MYR34.00 /1pcs MYR2,800.00 / 100pcs</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>148</span>
                                                </div>
                                                <div class="col-12 col-xl-7">

                                                    <div class="row align-items-baseline">
                                                        <div class="col-8 col-xl-8">
                                                            <li>Now shelf</li>
                                                        </div>
                                                        <div class="col-4 col-xl-4">
                                                            <a href="{{url('productList/1')}}" class="text-dark h4 mb-0">...</a>
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

                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">in Stock</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">T.Month Sold</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <label class="radiobtn">
                                                            <input type="radio" name="Agree2">
                                                            <span class="checmark"></span>
                                                        </label>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6>Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>9,999</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p class="mb-0">MYR34.00 /1pcs MYR2,800.00 / 100pcs</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>148</span>
                                                </div>
                                                <div class="col-12 col-xl-7">

                                                    <div class="row align-items-baseline">
                                                        <div class="col-8 col-xl-8">
                                                            <li>Now shelf</li>
                                                        </div>
                                                        <div class="col-4 col-xl-4">
                                                            <a href="#" class="text-dark h4 mb-0">...</a>
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
                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">in Stock</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">T.Month Sold</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <label class="radiobtn">
                                                            <input type="radio" name="Agree3">
                                                            <span class="checmark"></span>
                                                        </label>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6>Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>9,999</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p class="mb-0">MYR34.00 /1pcs MYR2,800.00 / 100pcs</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>148</span>
                                                </div>
                                                <div class="col-12 col-xl-7">

                                                    <div class="row align-items-baseline">
                                                        <div class="col-8 col-xl-8">
                                                            <li>Now shelf</li>
                                                        </div>
                                                        <div class="col-4 col-xl-4">
                                                            <a href="#" class="text-dark h4 mb-0">...</a>
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
                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">in Stock</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">T.Month Sold</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <label class="radiobtn">
                                                            <input type="radio" name="Agree4">
                                                            <span class="checmark"></span>
                                                        </label>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6>Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>9,999</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p class="mb-0">MYR34.00 /1pcs MYR2,800.00 / 100pcs</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>148</span>
                                                </div>
                                                <div class="col-12 col-xl-7">

                                                    <div class="row align-items-baseline">
                                                        <div class="col-8 col-xl-8">
                                                            <li>Now shelf</li>
                                                        </div>
                                                        <div class="col-4 col-xl-4">
                                                            <a href="#" class="text-dark h4 mb-0">...</a>
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
                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">in Stock</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">T.Month Sold</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <label class="radiobtn">
                                                            <input type="radio" name="Agree5">
                                                            <span class="checmark"></span>
                                                        </label>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6>Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>9,999</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p class="mb-0">MYR34.00 /1pcs MYR2,800.00 / 100pcs</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>148</span>
                                                </div>
                                                <div class="col-12 col-xl-7">

                                                    <div class="row align-items-baseline">
                                                        <div class="col-8 col-xl-8">
                                                            <li>Now shelf</li>
                                                        </div>
                                                        <div class="col-4 col-xl-4">
                                                            <a href="#" class="text-dark h4 mb-0">...</a>
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
                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">in Stock</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">T.Month Sold</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <label class="radiobtn">
                                                            <input type="radio" name="Agree6">
                                                            <span class="checmark"></span>
                                                        </label>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6>Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>9,999</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p class="mb-0">MYR34.00 /1pcs MYR2,800.00 / 100pcs</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>148</span>
                                                </div>
                                                <div class="col-12 col-xl-7">

                                                    <div class="row align-items-baseline">
                                                        <div class="col-8 col-xl-8">
                                                            <li>Now shelf</li>
                                                        </div>
                                                        <div class="col-4 col-xl-4">
                                                            <a href="#" class="text-dark h4 mb-0">...</a>
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
                    <div class="col-4 col-xl-12 my-2 d-xl-none h-100">
                        <div class="Product_List_header">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <h6 class="mb-0 text-center Order_Product">Order Product</h6>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6 class="mb-0 Type">Type</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <h6 class="mb-0">in Stock</h6>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h6 class="mb-0">Price</h6>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <h6 class="mb-0">T.Month Sold</h6>
                                                </div>
                                                <div class="col-12 col-xl-7">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-12 my-2  h-100">
                        <div class="Product_List_tr">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <label class="radiobtn">
                                                            <input type="radio" name="Agree7">
                                                            <span class="checmark"></span>
                                                        </label>
                                                        <div class="product_img">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <h5>GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA
                                                        SATRIA NEO GEN2 PERSONA WAJA CAMPRO (144MY25)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <h6>Auto Body Parts...</h6>
                                            <div class="mb-0 p">Bumpers & Components</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-4">
                                                    <span>9,999</span>
                                                </div>
                                                <div class="col-12 col-xl-8">
                                                    <p class="mb-0">MYR34.00 /1pcs MYR2,800.00 / 100pcs</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-12 col-xl-5">
                                                    <span>148</span>
                                                </div>
                                                <div class="col-12 col-xl-7">

                                                    <div class="row align-items-baseline">
                                                        <div class="col-8 col-xl-8">
                                                            <li>Now shelf</li>
                                                        </div>
                                                        <div class="col-4 col-xl-4">
                                                            <a href="#" class="text-dark h4 mb-0">...</a>
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
            <!-- table end -->
        </div>
        <!-- Product List box end -->
    </div>
@endsection

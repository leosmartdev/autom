@extends('layouts.nav')
@section('content')
    <div class="p-3 px-md-5 PM_nav">
        <div class="row gy-3 gy-md-0">
            <div class="col-6 col-md-3 col-xl-2">
                <div class="item Back">
                    <a href="{{url('productList')}}" class="item_link">
                        <img src="{{url('assets/img/icons/Group_119.png')}}" alt="" /><small>Back</small>
                    </a>
                </div>
            </div>
            <div class="col-6 ">
                <div class="item ">
                    <p class=" text-dark fw-normal" style="font-size: large">Create Product Details</p>
                </div>
            </div>

        </div>
    </div>
    <div class="Create_product_details">
        <div class=" m-md-3 ">
            <form action="">
                <div class="bg-white p-3 px-lg-5 pb-lg-5 form_body">
                    <div class="Product_Cover my-3 mb-4">
                        <p class=" s_text fw-normal">Product Cover</p>
                        <div class="img">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 col-lg-10 col-xxl-9">
                            <div class="row gy-3 gy-md-0">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Product Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="" id="" class="form-control"
                                                   value="GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA">
                                            <div class=" position-absolute top-0 end-0">
                                                <span class=" input-group-text">(9/10)</span>
                                            </div>
                                        </div>
                                        <small id="helpId" class="text-muted">Enter product name</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Category</label>
                                        <div class="row gy-3 gy-md-0">
                                            <div class="col-12 col-md-6">
                                                <div class="d-flex position-relative">
                                                    <select class="form-select" name="" id="">
                                                        <option value="1">Auto Body Parts & Mirrors</option>
                                                        <option value="2">Auto Body Parts & Mirrors</option>
                                                    </select>
                                                    <div class="select_down position-absolute">
                                                        <i class="fa fa-caret-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="d-flex position-relative">
                                                    <select class="form-select" name="" id="">
                                                        <option value="1">Bumpers & Components</option>
                                                        <option value="2">Bumpers & Components</option>
                                                    </select>
                                                    <div class="select_down position-absolute">
                                                        <i class="fa fa-caret-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small id="helpId" class="text-muted"> Select Category</small>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label">Brand</label>
                                        <div class="d-flex align-items-center">
                                            <div class="mx-3">
                                                <label class="checkbox ">
                                                    <input type="checkbox" class="bg-dark">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <input type="text" name="" id="" class="form-control"
                                                   value="Gaido">
                                        </div>
                                        <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label">Stock</label>
                                        <div class="d-flex align-items-center">
                                            <div class="mx-3">
                                                <label class="checkbox ">
                                                    <input type="checkbox" class="bg-dark">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <input type="text" name="" id="" class="form-control"
                                                   value="304">
                                        </div>
                                        <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label">Location</label>
                                        <div class="d-flex align-items-center">
                                            <div class="mx-3">
                                                <label class="checkbox ">
                                                    <input type="checkbox" class="bg-dark">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <input type="text" name="" id="" class="form-control s_text"
                                                   value="Location">
                                        </div>
                                        <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label">Service</label>
                                        <div class="d-flex align-items-center">
                                            <div class="mx-3">
                                                <label class="checkbox ">
                                                    <input type="checkbox" class="bg-dark">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <input type="text" name="" id="" class="form-control s_text"
                                                   value="Service">
                                        </div>
                                        <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gy-3 gy-md-0">

                                        <label for="" class=" form-label">Drawing No</label>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">

                                                <div class="d-flex align-items-center">
                                                    <div class="mx-3">
                                                        <label class="checkbox ">
                                                            <input type="checkbox" class="bg-dark">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <input type="text" name="" id="" class="form-control s_text"
                                                           value="Drawing No">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <div class="d-flex align-items-center">
                                                    <div class="mx-3">
                                                        <label class="checkbox ">
                                                            <input type="checkbox" class="bg-dark">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <input type="text" name="" id="" class="form-control"
                                                           value="Add Detail">
                                                </div>
                                            </div>
                                        </div>
                                        <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label">Price #1</label>
                                        <div class="d-flex justify-content-between">
                                            <div class="width73">
                                                <div class="position-relative">
                                                    <span class=" input-group-text position-absolute top-0 start-0">MYR</span>
                                                    <input type="text" name="" id=""
                                                           class="form-control pl" value="34">
                                                </div>
                                            </div>
                                            <div class="width23">
                                                <div class="position-relative">

                                                    <input type="text" name="" id="" class="form-control pr"
                                                           value="1">
                                                    <span class=" input-group-text position-absolute top-0 end-0">/pcs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class=" form-label">Price #2</label>
                                        <div class="d-flex justify-content-between">
                                            <div class="width73">
                                                <div class="position-relative">
                                                    <span class=" input-group-text position-absolute top-0 start-0">MYR</span>
                                                    <input type="text" name="" id=""
                                                           class="form-control pl" value="2,800">
                                                </div>
                                            </div>
                                            <div class="width23">
                                                <div class="position-relative">

                                                    <input type="text" name="" id="" class="form-control pr"
                                                           value="100">
                                                    <span class=" input-group-text position-absolute top-0 end-0">/pcs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class=" form-label">Price #3</label>

                                        <div class="row gy-3 gy-md-0">
                                            <div class="col-12 col-md-6">
                                                <div class="d-flex justify-content-between">
                                                    <div class="width73">
                                                        <div class="position-relative">
                                                            <span class=" input-group-text position-absolute top-0 ">MYR</span>
                                                            <input type="text" name="" id=""
                                                                   class="form-control pl" value="25,000">
                                                        </div>
                                                    </div>
                                                    <div class="width23">
                                                        <div class="position-relative">
                                                            <input type="text" name="" id="" class="form-control pr"
                                                                   value="1,000">
                                                            <span class=" input-group-text position-absolute top-0 end-0">/pcs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" name="" id="" class="form-control" value="Add Price">
                                                    <small id="helpId" class="text-muted">Help text</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group ">
                                        <label class="form-label">Add More Picture</label>
                                        <div class="add_more_img">
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                            <div class="img d-flex justify-content-center align-items-center">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="description mt-4">
                                        <p class="s_text fw-normal">Desctiption</p>
                                        <div class=" paragraph p-3">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl augue duis dolore te feugait nulla facilisi.</p>
                                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut lao</p>

                                            <p class=" text-end mb-0">(150/300)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="Specification mt-3 mt-xl-5 ">
                                        <div class="row gy-3 gy-lg-0 align-items-center">
                                            <div class="col-12 col-lg-4 col-xl-3 col-xxl-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="mx-3">
                                                        <label class="checkbox ">
                                                            <input type="checkbox" class="bg-dark">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <span class=" fw-normal">Specification</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8 col-xl-9 col-xxl-10">
                                                <div class="Specification_box pb-md-5">
                                                    <p class="text-end mb-0">
                                                        <a href="#" class="text-dark h4"><i class="fa fa-minus-circle"></i></a>
                                                    </p>
                                                    <div class="row gy-3 gy-lg-0 justify-content-center">
                                                        <div class="col-12 col-md-4">
                                                            <p class=" fw-normal s_text">Specification Picture</p>
                                                            <div class="img d-flex align-items-center justify-content-center">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-8 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="" class=" form-label s_text">Specification Name</label>
                                                                <input type="text" name="" id="" class="form-control s_text" value="Specification name"  aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"> Enter your Specification name</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="New_Specification_input mt-4">
                                                    <input type="text" value="Create New Specification" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="d-flex mt-4 justify-content-center d-flex">
                    <input type="submit" class="btn btn-outline-dark px-4 m-3 cancelbtn" value="Cancel">
                    <input type="submit" class="btn bg-dark text-white px-4 m-3 Nextbtn"
                           value="Next">
                </div>
            </form>
        </div>
    </div>
@endsection

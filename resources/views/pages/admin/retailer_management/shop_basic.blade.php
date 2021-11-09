@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Retail Management</p>
        </div>
        <h3>
            Retail Management > Retail Shop > <strong> Shop Details</strong>
        </h3>
        <div class="retailer-shop-bottom-right">
            <div class="retailer-shop-bottom-top">
                <div class="retailer-shop-top-left">
                    <div class="retailer-shop-left-top">
                        <img src="{{asset('assets/img/admin/shop_basic.png')}}" alt="" />
                        <div class="retailer-shop-info">
                            <h3>F&L Car Parts sdn.bhd.</h3>
                            <div class="retailer-shop-follow">
                                <p>1,541 Products</p>
                                <p>23,852 Followers</p>
                            </div>
                            <div class="retailer-shop-image-shop">
                                <img src="./Group 725.png" alt="" />
                                <p style="text-decoration: underline">retailer name01</p>
                            </div>
                        </div>
                    </div>
                    <div class="retailer-shop-left-bottom">
                        <a href="{{url('admin/retailer_shop_basic')}}" class="retailer-shop-underline">Basic Information</a>
                        <a href="{{url('admin/retailer_shop_order')}}">Order</a>
                        <a href="{{url('admin/retailer_shop_product')}}">Product</a>
                        <a href="{{url('admin/retailer_shop_reviews')}}">Ratings and Reviews</a>
                        <a href="{{url('admin/retailer_shop_community')}}">Community Post</a>
                    </div>
                </div>
                <div class="toggle-button-cover" style="margin-right: 17px">
                    <div class="button-cover">
                        <div class="button r" id="button-1">
                            <input type="checkbox" class="checkbox" />
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="retailer-shop-bottom-bottom">
            <div class="retailer-shop-input-div-bottom">
                <label for="shop-name">Shop Name</label>
                <input
                    placeholder="Enter Shop Name"
                    type="text"
                    name="shop-name"
                    id="shop-name"
                />
            </div>
            <p class="retailer-shop-de">Images and Videos</p>
            <div class="retailer-shop-desc-img">
                <p>
                    Description images will be displayed in your shop profile page.
                </p>
                <p>0/5 images</p>
            </div>
            <div class="retailer-shop-image-box">
                <p>Upload Image</p>
                <p>Add Youtube Video</p>
            </div>
            <div class="retailer-shop-input-div-bottom">
                <label for="shop-name">Shop Address</label>
                <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                    style="width: 693px; height: 141px"
                ></textarea>
            </div>
            <div class="retailer-shop-input-div-bottom">
                <label for="shop-name">Shop Description</label>
                <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                    style="width: 693px; height: 223px"
                ></textarea>
            </div>
            <a href="#" class="retailer-shop-save">Save</a>
        </div>
    </div>
@endsection


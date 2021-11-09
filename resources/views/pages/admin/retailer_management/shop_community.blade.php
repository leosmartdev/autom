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
                        <a href="{{url('admin/retailer_shop_basic')}}" >Basic Information</a>
                        <a href="{{url('admin/retailer_shop_order')}}">Order</a>
                        <a href="{{url('admin/retailer_shop_product')}}">Product</a>
                        <a href="{{url('admin/retailer_shop_reviews')}}">Ratings and Reviews</a>
                        <a href="{{url('admin/retailer_shop_community')}}" class="retailer-shop-underline">Community Post</a>
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
            <div class="retailer-community-row-bottom">
                <div class="retailer-community-row-left"><img src="{{asset('assets/img/admin/product4.png')}}" alt="" /></div>
                <div class="retailer-community-row-right">
                    <p class="retailer-community-comment">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat.
                    </p>
                    <div class="retailer-community-btns-div">
                        <div class="retailer-community-cta">
                            <p><i class="far fa-thumbs-up"></i> 169</p>
                            <p><i class="far fa-comment-dots"></i> 118</p>
                        </div>
                        <p>06/06/2021 10:30</p>
                    </div>
                    <p style="color: #b2b2b2; margin: 10px 0px">view 118 comments</p>
                    <div class="retailer-community-bottom-comment">
                        <div class="retailer-community-top-comment">
                            <div style="display: flex; align-items: center">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="margin-left: 10px">Yeng</p>
                            </div>
                            <p><i class="far fa-thumbs-up"></i> 169 likes</p>
                        </div>
                        <p>
                            Know the difference between delegating styles and which one is
                            appropriate for each situ
                        </p>
                        <div class="retailer-community-bottom-comment-2">
                            <p>Reply</p>
                            <p>06/06/2021 10:30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="retailer-community-row-bottom">
                <div class="retailer-community-row-left"><img src="{{asset('assets/img/admin/product4.png')}}" alt="" /></div>
                <div class="retailer-community-row-right">
                    <p class="retailer-community-comment">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat.
                    </p>
                    <div class="retailer-community-btns-div">
                        <div class="retailer-community-cta">
                            <p><i class="far fa-thumbs-up"></i> 169</p>
                            <p><i class="far fa-comment-dots"></i> 118</p>
                        </div>
                        <p>06/06/2021 10:30</p>
                    </div>
                    <p style="color: #b2b2b2; margin: 10px 0px">view 118 comments</p>
                    <div class="retailer-community-bottom-comment">
                        <div class="retailer-community-top-comment">
                            <div style="display: flex; align-items: center">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="margin-left: 10px">Yeng</p>
                            </div>
                            <p><i class="far fa-thumbs-up"></i> 169 likes</p>
                        </div>
                        <p>
                            Know the difference between delegating styles and which one is
                            appropriate for each situ
                        </p>
                        <div class="retailer-community-bottom-comment-2">
                            <p>Reply</p>
                            <p>06/06/2021 10:30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="retailer-community-row-bottom">
                <div class="retailer-community-row-left"><img src="{{asset('assets/img/admin/product4.png')}}" alt="" /></div>
                <div class="retailer-community-row-right">
                    <p class="retailer-community-comment">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat.
                    </p>
                    <div class="retailer-community-btns-div">
                        <div class="retailer-community-cta">
                            <p><i class="far fa-thumbs-up"></i> 169</p>
                            <p><i class="far fa-comment-dots"></i> 118</p>
                        </div>
                        <p>06/06/2021 10:30</p>
                    </div>
                    <p style="color: #b2b2b2; margin: 10px 0px">view 118 comments</p>
                    <div class="retailer-community-bottom-comment">
                        <div class="retailer-community-top-comment">
                            <div style="display: flex; align-items: center">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="margin-left: 10px">Yeng</p>
                            </div>
                            <p><i class="far fa-thumbs-up"></i> 169 likes</p>
                        </div>
                        <p>
                            Know the difference between delegating styles and which one is
                            appropriate for each situ
                        </p>
                        <div class="retailer-community-bottom-comment-2">
                            <p>Reply</p>
                            <p>06/06/2021 10:30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="retailer-community-row-bottom">
                <div class="retailer-community-row-left"><img src="{{asset('assets/img/admin/product4.png')}}" alt="" /></div>
                <div class="retailer-community-row-right">
                    <p class="retailer-community-comment">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat.
                    </p>
                    <div class="retailer-community-btns-div">
                        <div class="retailer-community-cta">
                            <p><i class="far fa-thumbs-up"></i> 169</p>
                            <p><i class="far fa-comment-dots"></i> 118</p>
                        </div>
                        <p>06/06/2021 10:30</p>
                    </div>
                    <p style="color: #b2b2b2; margin: 10px 0px">view 118 comments</p>
                    <div class="retailer-community-bottom-comment">
                        <div class="retailer-community-top-comment">
                            <div style="display: flex; align-items: center">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="margin-left: 10px">Yeng</p>
                            </div>
                            <p><i class="far fa-thumbs-up"></i> 169 likes</p>
                        </div>
                        <p>
                            Know the difference between delegating styles and which one is
                            appropriate for each situ
                        </p>
                        <div class="retailer-community-bottom-comment-2">
                            <p>Reply</p>
                            <p>06/06/2021 10:30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="retailer-community-row-bottom">
                <div class="retailer-community-row-left"><img src="{{asset('assets/img/admin/product4.png')}}" alt="" /></div>
                <div class="retailer-community-row-right">
                    <p class="retailer-community-comment">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat.
                    </p>
                    <div class="retailer-community-btns-div">
                        <div class="retailer-community-cta">
                            <p><i class="far fa-thumbs-up"></i> 169</p>
                            <p><i class="far fa-comment-dots"></i> 118</p>
                        </div>
                        <p>06/06/2021 10:30</p>
                    </div>
                    <p style="color: #b2b2b2; margin: 10px 0px">view 118 comments</p>
                    <div class="retailer-community-bottom-comment">
                        <div class="retailer-community-top-comment">
                            <div style="display: flex; align-items: center">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="margin-left: 10px">Yeng</p>
                            </div>
                            <p><i class="far fa-thumbs-up"></i> 169 likes</p>
                        </div>
                        <p>
                            Know the difference between delegating styles and which one is
                            appropriate for each situ
                        </p>
                        <div class="retailer-community-bottom-comment-2">
                            <p>Reply</p>
                            <p>06/06/2021 10:30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


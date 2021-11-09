@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>User Management</p>
        </div>
        <h3>User Management </h3>
        <div class="retailer-add-bottom-right">
            <div class="retailer-add-bottom-top">
                <div class="retailer-add-top-left">
                    <div class="retailer-add-left-top">
                        <img class="profile-img" src="{{asset('assets/').$user->avatar}}" alt="" />
                        <div class="retailer-add-info">
                            <h3>{{$user->nickname}}</h3>
                            <p>13 following</p>
                        </div>
                    </div>
                    <div class="retailer-add-left-bottom">
                        <a href="{{url('admin/user_information',[$user->id])}}" >Basic Information</a>
                        <a href="{{url('admin/user_order',[$user->id])}}" >Order</a>
                        <a href="{{url('admin/user_rate',[$user->id])}}" class="retailer-add-underline">Ratings and Reviews</a>
                    </div>
                </div>
                <div class="toggle-button-cover" style="margin-right: 17px">
                    <div class="button-cover">
                        <div class="button r" id="button-1">
                            <input type="checkbox" class="checkbox" {{$user->status == 0 ? 'checked' : 'unchecked'}}/>
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="retailer-reviews-bottom-bottom">
            <div class="retailer-reviews-rating">
                <div class="retailer-reviews-left-rating">
                    <p>4.5/5</p>
                    <div class="retailer-reviews-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="retailer-reviews-right-rating">
                    <p class="retailer-reviews-selected">All Reviews(1856)</p>
                    <p>5 star(234)</p>
                    <p>4 Star (631)</p>
                    <p>3 Star (892)</p>
                    <p>2 Star (12)</p>
                    <p>1 Star (1)</p>
                </div>
            </div>
            <div class="retailer-reviews-review-person">
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


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
                        <a href="{{url('admin/user_information',[$user->id])}}" class="retailer-add-underline">Basic Information</a>
                        <a href="{{url('admin/user_order',[$user->id])}}">Order</a>
                        <a href="{{url('admin/user_rate',[$user->id])}}">Ratings and Reviews</a>
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
        <div class="bottom-bottom" style="justify-content: flex-start;">
            <div class="left-box">
                <div class="row-box">
                    <p>Email Address</p>
                    <p>{{$user->email}}</p>
                </div>
                <div class="row-box">
                    <p>Id Number</p>
                    <p>9675383-94-9443</p>
                </div>
                <div class="row-box">
                    <p>Phone Number</p>
                    <p>{{$user->phone}}</p>
                </div>
                <div class="row-box">
                    <p>Recommendation Code</p>
                    <p>{{$user->recommendation_code}}</p>
                </div>
                <div class="row-box">
                    <p>Address</p>
                    <p>{{$user->address}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection


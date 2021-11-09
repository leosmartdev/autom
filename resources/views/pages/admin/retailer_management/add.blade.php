@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Retail Management</p>
        </div>
        <h3>Retail Management > <strong> Retail List</strong></h3>
        <div class="retailer-add-bottom-right">
            <div class="retailer-add-bottom-top">
                <div class="retailer-add-top-left">
                    <div class="retailer-add-left-top">
                        <img src="{{asset('assets/img/admin/profile.png')}}" alt="" />
                        <div class="retailer-add-info">
                            <h3>Retailer Name</h3>
                            <p>13 following</p>
                            <p style="text-decoration: underline">Shop Name125</p>
                        </div>
                    </div>
                    <div class="retailer-add-left-bottom">
                        <a  class="retailer-add-underline" href="{{url('admin/retailer/create')}}">Basic Information</a>
                        <a  href="{{url('admin/retailer_order')}}">Order</a>
                        <a  href="{{url('admin/retailer_reviews')}}">Ratings and Reviews</a>
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
        <div class="bottom-bottom">
            <div class="left-box">
                <div class="row-box">
                    <p>Shop Name</p>
                    <p>F&L Car Parts sdn.bhd.</p>
                </div>
                <div class="row-box">
                    <p>Email Address</p>
                    <p>useremail5255@gmail.com</p>
                </div>
                <div class="row-box">
                    <p>Id Number</p>
                    <p>9675383-94-9443</p>
                </div>
                <div class="row-box">
                    <p>Phone Number</p>
                    <p>+60 125 626 5652</p>
                </div>
                <div class="row-box">
                    <p>Recommendation Code</p>
                    <p>9797898 (Andrew Tay)</p>
                </div>
                <div class="last-row">
                    <p>Address</p>
                    <p>useremail5255@gmail.com</p>
                </div>
            </div>
            <div class="right-box">
                <div class="row-box">
                    <p>Bank Account</p>
                    <div class="details-bank">
                        <p>JACK YANG</p>
                        <p>5-5821 620-64</p>
                        <p>PUBLIC BANK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


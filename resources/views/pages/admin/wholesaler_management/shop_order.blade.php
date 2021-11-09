@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Wholesaler Management</p>
        </div>
        <h3>
            Wholesaler Management > Wholesale Shop > <strong> Shop Details</strong>
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
                        <a href="{{url('admin/wholesaler_shop_basic')}}" >Basic Information</a>
                        <a href="{{url('admin/wholesaler_shop_order')}}" class="retailer-shop-underline">Order</a>
                        <a href="{{url('admin/wholesaler_shop_product')}}">Product</a>
                        <a href="{{url('admin/wholesaler_shop_reviews')}}">Ratings and Reviews</a>
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
            <div class="retailer-shop-order-bottom-filter">
                <p class="retailer-shop-order-filter-bottom hover">All</p>
                <p class="retailer-shop-order-filter-bottom">New</p>
                <p class="retailer-shop-order-filter-bottom">Processing</p>
                <p class="retailer-shop-order-filter-bottom">Completed</p>
                <p class="retailer-shop-order-filter-bottom">Refund/Return</p>
            </div>
            <div class="retailer-shop-order-bottom-search">
                <div class="retailer-shop-order-search-div">
                    <label for="number">Search Product Name</label>
                    <div class="retailer-shop-order-input-div">
                        <i class="fas fa-search"></i>
                        <input
                            id="number"
                            type="text"
                            placeholder="Search Product Name"
                        />
                    </div>
                </div>
                <div class="retailer-shop-order-search-div">
                    <label for="ship">Product Category</label>
                    <div class="retailer-shop-order-drop">
                        <p class="retailer-shop-order-shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="retailer-shop-order-search-div">
                    <label for="ship">Product Type</label>
                    <div class="retailer-shop-order-drop">
                        <p class="retailer-shop-order-shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <a href="#" class="retailer-shop-order-search-btn">Search</a>
            </div>
            <div class="retailer-shop-order-bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="bg">
                        <th>Date</th>
                        <th>
                            <p>Order Number</p>
                        </th>
                        <th>Client Name</th>
                        <th>Contact Number</th>
                        <th>
                            <p>Order Product</p>
                        </th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <p style="text-decoration: underline">Jack Yang</p>
                        </td>
                        <td>+6012 565 4862</td>
                        <td class="col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="retailer-shop-order-flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <p style="text-decoration: underline">Jack Yang</p>
                        </td>
                        <td>+6012 565 4862</td>
                        <td class="col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="retailer-shop-order-flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <p style="text-decoration: underline">Jack Yang</p>
                        </td>
                        <td>+6012 565 4862</td>
                        <td class="col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="retailer-shop-order-flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <p style="text-decoration: underline">Jack Yang</p>
                        </td>
                        <td>+6012 565 4862</td>
                        <td class="col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="retailer-shop-order-flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <p style="text-decoration: underline">Jack Yang</p>
                        </td>
                        <td>+6012 565 4862</td>
                        <td class="col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="retailer-shop-order-flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="orange">Preparing</p></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="pagination">
            <div class="small-box">
                <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="small-box">
                <p>Prev</p>
            </div>
            <div class="small-box">
                <p>1</p>
            </div>
            <div class="small-box page-black">
                <p>2</p>
            </div>
            <div class="small-box">
                <p>3</p>
            </div>
            <div class="small-box">
                <p>4</p>
            </div>
            <div class="small-box">
                <p>Next</p>
            </div>
            <div class="small-box">
                <i class="fas fa-angle-double-right"></i>
            </div>
        </div>
    </div>
@endsection


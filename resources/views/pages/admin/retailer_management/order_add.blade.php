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
                        <a  href="{{url('admin/retailer/create')}}">Basic Information</a>
                        <a class="retailer-add-underline" href="{{url('admin/retailer_order')}}">Order</a>
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
        <div class="retailer-order-bottom-bottom">
            <div class="retailer-order-bottom-filter">
                <p class="retailer-order-filter-bottom hover">All</p>
                <p class="retailer-order-filter-bottom">New</p>
                <p class="retailer-order-filter-bottom">Processing</p>
                <p class="retailer-order-filter-bottom">Completed</p>
                <p class="retailer-order-filter-bottom">Refund/Return</p>
            </div>
            <div class="retailer-order-bottom-search">
                <div class="retailer-order-search-div">
                    <label for="number">Search Product Name</label>
                    <div class="retailer-order-input-div">
                        <i class="fas fa-search"></i>
                        <input
                            id="number"
                            type="text"
                            placeholder="Search Product Name"
                        />
                    </div>
                </div>
                <div class="retailer-order-search-div">
                    <label for="ship">Product Category</label>
                    <div class="retailer-order-drop">
                        <p class="retailer-order-shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="retailer-order-search-div">
                    <label for="ship">Product Type</label>
                    <div class="retailer-order-drop">
                        <p class="retailer-order-shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <a href="#" class="retailer-order-search-btn">Search</a>
            </div>
            <div class="retailer-order-bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="retailer-order-bg">
                        <th>Date</th>
                        <th>
                            <p>Order Number</p>
                        </th>
                        <th>Shop</th>
                        <th>Order Product</th>
                        <th>
                            <p>Total Amount</p>
                        </th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <div class="retailer-order-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td class="retailer-order-col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="retailer-order-flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="retailer-order-orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <div class="retailer-order-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td class="retailer-order-col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="retailer-order-orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <div class="retailer-order-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td class="retailer-order-col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="retailer-order-orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <div class="retailer-order-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td class="retailer-order-col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="retailer-order-orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <div class="retailer-order-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td class="retailer-order-col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="retailer-order-orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <div class="retailer-order-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td class="retailer-order-col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="retailer-order-orange">Preparing</p></td>
                    </tr>
                    <tr>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td>
                            <div class="retailer-order-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td class="retailer-order-col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td>
                            <p>MYR 56.50</p>
                        </td>
                        <td><p class="retailer-order-orange">Preparing</p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection


@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-box-open"></i>
            <p>Order Management</p>
        </div>
        <h3>Order Management > <strong>Order Cancellation</strong></h3>
        <div class="bottom-right">
            <div class="bottom-top">
                <p class="filter bold">All (5,524)</p>
                <p class="filter">Processing (1,523)</p>
                <p class="filter">Cancelled (452)</p>
            </div>
            <div class="bottom-search">
                <div class="search-div">
                    <label for="number">Search Order Number</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input
                            id="number"
                            type="text"
                            placeholder="Search Order Number"
                        />
                    </div>
                </div>
                <div class="search-div">
                    <label for="shop">Search Shop Name</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input id="shop" type="text" placeholder="Search Shop Name" />
                    </div>
                </div>
                <div class="search-div">
                    <label for="ship">Shipping Method</label>
                    <div class="drop">
                        <p class="shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <a href="#" class="search-btn">Search</a>
            </div>
            <div class="bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="bg">
                        <th><input type="checkbox" name="#" id="" /></th>
                        <th>Date</th>
                        <th>Order ID</th>
                        <th>Order Product</th>
                        <th
                            style="
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                  "
                        >
                            <p>Shop</p>

                            <div class="arrows">
                                <i class="fas fa-sort-up"></i
                                ><i class="fas fa-sort-down"></i>
                            </div>
                        </th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th
                            style="
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                  "
                        >
                            <p>Cancel Reason</p>

                            <div class="arrows">
                                <i class="fas fa-sort-up"></i
                                ><i class="fas fa-sort-down"></i>
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td class="order_col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td style="width: 14%">
                            <div class="row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>MYR 56.50</td>
                        <td>
                            <p class="orange">Cancelled</p>
                            <p class="lol">Buyer’s cancellation request accepted</p>
                        </td>
                        <td>Other / Change of mind</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td class="order_col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td style="width: 14%">
                            <div class="row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>MYR 56.50</td>
                        <td>
                            <p class="orange">Cancelled</p>
                            <p class="lol">Buyer’s cancellation request accepted</p>
                        </td>
                        <td>Other / Change of mind</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td class="order_col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td style="width: 14%">
                            <div class="row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>MYR 56.50</td>
                        <td>
                            <p class="orange">Cancelled</p>
                            <p class="lol">Buyer’s cancellation request accepted</p>
                        </td>
                        <td>Other / Change of mind</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td class="order_col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td style="width: 14%">
                            <div class="row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>MYR 56.50</td>
                        <td>
                            <p class="orange">Cancelled</p>
                            <p class="lol">Buyer’s cancellation request accepted</p>
                        </td>
                        <td>Other / Change of mind</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td class="order_col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td style="width: 14%">
                            <div class="row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>MYR 56.50</td>
                        <td>
                            <p class="orange">Cancelled</p>
                            <p class="lol">Buyer’s cancellation request accepted</p>
                        </td>
                        <td>Other / Change of mind</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td class="order_col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td style="width: 14%">
                            <div class="row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>MYR 56.50</td>
                        <td>
                            <p class="orange">Cancelled</p>
                            <p class="lol">Buyer’s cancellation request accepted</p>
                        </td>
                        <td>Other / Change of mind</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>06/02/2021</td>
                        <td>#2564667666</td>
                        <td class="order_col">
                            <p>- GAIDO TIMING BELT KIT PROTON.. x1</p>
                            <p class="flex">
                                Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                            </p>
                        </td>
                        <td style="width: 14%">
                            <div class="row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>MYR 56.50</td>
                        <td>
                            <p class="orange">Cancelled</p>
                            <p class="lol">Buyer’s cancellation request accepted</p>
                        </td>
                        <td>Other / Change of mind</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection


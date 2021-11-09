@extends('pages.admin.layouts.nav')
@section('content')
    <div class="order_right">
        <div class="right">
            <div class="first">
                <i class="fas fa-box-open"></i>
                <p>Order Management</p>
            </div>
            <h3>Order Management > <strong>Order Processing</strong></h3>
            <div class="bottom-right">
                <div class="bottom-top">
                    <p class="filter">All (1)</p>
                    <p class="filter bold">To ship (1)</p>
                    <p class="filter">Shipping (0)</p>
                    <p class="filter">Completed (0)</p>
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
                                style="display: flex; justify-content: space-evenly; align-items: center;">
                                <p>Shop</p>
                                <div class="arrows">
                                    <i class="fas fa-sort-up"></i
                                    ><i class="fas fa-sort-down"></i>
                                </div>
                            </th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Shipping Method</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="#" id="" /></td>
                            <td>28/09/2021</td>
                            <td>
                                <a href="../order manage-2/order 2.html">#1</a>
                            </td>
                            <td class="order_col">
                                <p>- product 1</p>
                                <p class="flex">
                                    Show more product ( 5 ) <i class="fas fa-chevron-down"></i>
                                </p>
                            </td>
                            <td style="width: 14%">
                                <div class="retailer-row-flex">
                                    <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                    <p style="text-decoration: underline; font-weight: medium">
                                        F&L Car Parts...
                                    </p>
                                </div>
                            </td>
                            <td>MYR 56.50</td>
                            <td><p class="orange">Preparing</p></td>
                            <td>DHL eCommerce</td>
                            <td>
                                <div class="retailer-row-flex">
                                    <i class="fas fa-truck"></i>
                                    <p style="text-decoration: underline; font-weight: bold">
                                        Product been pac...
                                    </p>
                                </div>
                            </td>
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


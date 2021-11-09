@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-ticket-alt"></i>
            <p>Voucher Management</p>
        </div>
        <h3 style="color: black; font-weight: bold">Voucher Management</h3>
        <div class="bottom-right">
            <div class="filter-top">
                <p class="top-p black-underline">All Voucher (3213)</p>
                <p class="top-p black-underline">Valid Voucher (1231)</p>
                <p class="top-p">History (1231)</p>
            </div>
            <div class="bottom-search">
                <div class="search-div">
                    <label for="number">Search Voucher Title</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input
                            id="number"
                            type="text"
                            placeholder="Search Voucher Title"
                        />
                    </div>
                </div>
                <div class="search-div">
                    <label for="number">Search Creator Name</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input
                            id="number"
                            type="text"
                            placeholder="Search Creator Name"
                        />
                    </div>
                </div>
                <a href="#" class="search-btn">Search</a>
                <div class="voucher-filter-btns">
                    <p class="voucher-filter-v black">Voucher List</p>
                    <p class="voucher-filter-v">User Redeem</p>
                </div>
            </div>
            <div class="bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="bg">
                        <th><input type="checkbox" name="#" id="" /></th>
                        <th>
                            <p>Voucher Title</p>
                        </th>
                        <th>Discount</th>
                        <th>Min Consumption</th>
                        <th>
                            <p>Discount</p>
                        </th>
                        <th>EXP Date</th>
                        <th>Create Voucher By</th>
                        <th>Rule</th>
                        <th>Recieve</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="create">
                            <i class="fas fa-plus"></i> Create Notification
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>30% Discount</p>
                        </td>
                        <td>
                            <p>30%</p>
                        </td>
                        <td>
                            <p>MYR 50</p>
                        </td>
                        <td>
                            <p>GAIDO TIMING BELT KIT...</p>
                        </td>
                        <td>06/06/2021</td>
                        <td>
                            <div class="voucher-row">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        <td>(12/500)</td>
                        <td><i class="fas fa-trash"></i></td>
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
            <div class="small-box black">
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


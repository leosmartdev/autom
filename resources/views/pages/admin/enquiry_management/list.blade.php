@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-bell"></i>
            <p>Enquiry Management</p>
        </div>
        <h3 style="color: black; font-weight: bold">Enquiry Management</h3>
        <div class="bottom-right">
            <div class="filter-top">
                <p class="top-p">User Enquiry (2542)</p>
                <p class="top-p black-underline">Retailer Enquiry (2456)</p>
            </div>
            <div class="bottom-search">
                <div class="search-div">
                    <label for="ship">Status</label>
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
                        <th>
                            <p>Date</p>
                        </th>
                        <th>Retailer Name</th>
                        <th>Product Name</th>
                        <th>
                            <p>Remark</p>
                        </th>
                        <th>Status</th>
                    </tr>

                    @foreach($enquiries as $enquiry)
                        <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>31/12/2020</p>
                        </td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td style="padding: 0">
                            <p>GAIDO TIMING BELT KIT PROTON</p>
                        </td>
                        <td style="width: 46%">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad mini
                            </p>
                        </td>
                        <td>Pending</td>
                    </tr>
                    @endforeach


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


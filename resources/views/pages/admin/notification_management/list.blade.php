@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-bell"></i>
            <p>Banner & Notification</p>
        </div>
        <h3 style="color: black; font-weight: bold">Banner & Notification</h3>
        <div class="bottom-right">
            <h1 class="notification-header-bottom">APP BANNER</h1>
            <div class="notification-bottom-search">
                <div class="notification-search-div">
                    <label for="number">Search Name</label>
                    <div class="notification-input-div">
                        <i class="fas fa-search"></i>
                        <input id="number" type="text" placeholder="Search Name" />
                    </div>
                </div>

                <a href="#" class="notification-search-btn">Search</a>
            </div>
            <div class="notification-bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="bg">
                        <th><input type="checkbox" name="#" id="" /></th>
                        <th>Publish Date</th>
                        <th>Banner</th>
                        <th>
                            <p>Link To</p>
                        </th>
                        <th>Operate</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="create">
                            <i class="fas fa-plus"></i> Create Banner
                        </td>
                    </tr>
                    @foreach($notifications  as $notification)
                        <tr>
                            <td><input type="checkbox" name="#" id="" /></td>
                            <td>
                                <p>31/12/2020 12:25:04</p>
                            </td>
                            <td>
                                <img src="{{asset('assets/img/admin/banner.png')}}" alt="" />
                            </td>
                            <td>
                                <p>www.link.com</p>
                            </td>
                            <td>
                                <div class="td-row">
                                    <i class="fas fa-sync-alt"></i>
                                    <i class="fas fa-trash"></i>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        <div class="notification-second-bottom-right">
            <h1 class="notification-header-bottom">Notification</h1>
            <div class="notification-bottom-search evenly">
                <div class="notification-search-div">
                    <label for="number">Search Title</label>
                    <div class="notification-input-div">
                        <i class="fas fa-search"></i>
                        <input id="number" type="text" placeholder="Search Title" />
                    </div>
                </div>

                <a href="#" class="notification-search-btn">Search</a>
                <div class="notification-filter-btns">
                    <p class="notification-all black">For All</p>
                    <p class="notification-all">User Only</p>
                    <p class="notification-all">Retailer Only</p>
                    <p class="notification-all">Wholersaler Only</p>
                </div>
            </div>
            <div class="notification-bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="notification-bg">
                        <th><input type="checkbox" name="#" id="" /></th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>
                            <p>Content</p>
                        </th>
                        <th>Release Scope</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="create">
                            <i class="fas fa-plus"></i> Create Notification
                        </td>
                    </tr>
                    @foreach($notifications as $notification)
                        <tr>
                            <td><input type="checkbox" name="#" id="" /></td>
                            <td>
                                <p>31/12/2020 12:25:04</p>
                            </td>
                            <td style="width: 25%; text-align: left">
                                <p class="title">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonu
                                </p>
                            </td>
                            <td style="width: 38%; text-align: left">
                                <p class="content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam n onummy nibh euismod tincidunt ut laoreet dolore
                                    magna aliquam erat volutpat. Ut wisi enim ad mini
                                </p>
                            </td>
                            <td>
                                <div class="td-row">
                                    <p>For All</p>
                                </div>
                            </td>
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


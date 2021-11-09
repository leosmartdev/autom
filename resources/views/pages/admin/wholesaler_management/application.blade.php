@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Wholesaler Management</p>
        </div>
        <h3>Wholesaler Management > <strong> Wholesale Application</strong></h3>
        <div class="bottom-right">
            <div class="bottom-search">
                <div class="search-div">
                    <label for="number">Search Name</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input id="number" type="text" placeholder="Search Name" />
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>
                            <p>Phone Number</p>
                        </th>
                        <th>Recommendation code</th>
                        <th>
                            <p>Active</p>
                        </th>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <p>06/06/2021</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>retaileremail@gmail.com</p>
                        </td>
                        <td>
                            <p>+60 125 626 5652</p>
                        </td>
                        <td>
                            <p>5622</p>
                        </td>
                        <td>
                            <div class="retailer-application-row-flex">
                                <p class="retailer-application-green"><i class="fas fa-check"></i> Accept</p>
                                <p class="retailer-application-red"><i class="fas fa-times"></i> Remove</p>
                            </div>
                        </td>
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


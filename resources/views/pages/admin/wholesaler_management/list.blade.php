@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Wholesaler Management</p>
        </div>
        <h3>Wholesaler Management > <strong> Wholesale List</strong></h3>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>
                            <p>Shop Name</p>
                        </th>
                        <th>Join Date</th>
                        <th>Edit</th>
                        <th>
                            <p>Active</p>
                        </th>
                    </tr>
                    @foreach($wholesalers as $user)
                        <tr>
                            <td><input type="checkbox" name="#" id="" /></td>
                            <td>
                                <div class="retailer-row-flex">
                                    <img  class="avatar-img" src="{{asset('assets/'.$user->avatar)}}" alt="" />
                                    <p style="text-decoration: underline; margin-left: 20px">
                                        {{$user->nickname}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <p>{{$user->email}}</p>
                            </td>
                            <td>
                                <div class="retailer-row-flex">
                                    <img src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                    <p style="text-decoration: underline; margin-left: 20px">
                                        F&L Car Parts sdn.bhd.
                                    </p>
                                </div>
                            </td>
                            <td>
                                <p>{{$user->created_at->toDateString()}}</p>
                            </td>
                            <td>
                                <i class="far fa-edit"></i>
                            </td>
                            <td>
                                <div class="toggle-button-cover" style="margin-right: 17px">
                                    <div class="button-cover">
                                        <div class="button r" id="button-1">
                                            <input type="checkbox" class="checkbox"  {{$user->status == 0 ? 'checked' : 'unchecked'}} />
                                            <div class="knobs"></div>
                                            <div class="layer"></div>
                                        </div>
                                    </div>
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
            <div class="small-box page-black">
                <p>1</p>
            </div>
            <div class="small-box ">
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


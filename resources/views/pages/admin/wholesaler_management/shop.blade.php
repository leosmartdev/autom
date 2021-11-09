@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Wholesaler Management</p>
        </div>
        <h3>Wholesaler Management > <strong> Wholesale Shop</strong></h3>
        <div class="bottom-right">
            <div class="bottom-search">
                <div class="search-div">
                    <label for="number">Search Shop Name</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input id="number" type="text" placeholder="Search Shop Name" />
                    </div>
                </div>

                <a href="#" class="search-btn">Search</a>
            </div>
            <div class="bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="bg">
                        <th><input type="checkbox" name="#" id="" /></th>
                        <th>Shop Name</th>
                        <th>Rating</th>
                        <th>
                            <p>Product</p>
                        </th>
                        <th>Followers</th>
                        <th>Retailer Name</th>
                        <th>
                            <p>Edit</p>
                        </th>
                        <th>Active</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="create">
                            <a href="{{url('admin/wholesaler_shop_basic')}}"><i class="fas fa-plus"></i> Create Wholesaler Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    F&L Car Parts sdn.bhd.
                                </p>
                            </div>
                        </td>
                        <td>
                            <p><i class="fas fa-star"></i> 4.5</p>
                        </td>
                        <td>
                            <p>576</p>
                        </td>
                        <td>
                            <p>2854</p>
                        </td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <i class="far fa-edit"></i>
                        </td>
                        <td
                            style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                        >
                            <div class="toggle-button-cover">
                                <div class="button-cover">
                                    <div class="button r" id="button-1">
                                        <input type="checkbox" class="checkbox" />
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    F&L Car Parts sdn.bhd.
                                </p>
                            </div>
                        </td>
                        <td>
                            <p><i class="fas fa-star"></i> 4.5</p>
                        </td>
                        <td>
                            <p>576</p>
                        </td>
                        <td>
                            <p>2854</p>
                        </td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <i class="far fa-edit"></i>
                        </td>
                        <td
                            style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                        >
                            <div class="toggle-button-cover">
                                <div class="button-cover">
                                    <div class="button r" id="button-1">
                                        <input type="checkbox" class="checkbox" />
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    F&L Car Parts sdn.bhd.
                                </p>
                            </div>
                        </td>
                        <td>
                            <p><i class="fas fa-star"></i> 4.5</p>
                        </td>
                        <td>
                            <p>576</p>
                        </td>
                        <td>
                            <p>2854</p>
                        </td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <i class="far fa-edit"></i>
                        </td>
                        <td
                            style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                        >
                            <div class="toggle-button-cover">
                                <div class="button-cover">
                                    <div class="button r" id="button-1">
                                        <input type="checkbox" class="checkbox" />
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    F&L Car Parts sdn.bhd.
                                </p>
                            </div>
                        </td>
                        <td>
                            <p><i class="fas fa-star"></i> 4.5</p>
                        </td>
                        <td>
                            <p>576</p>
                        </td>
                        <td>
                            <p>2854</p>
                        </td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <i class="far fa-edit"></i>
                        </td>
                        <td
                            style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                        >
                            <div class="toggle-button-cover">
                                <div class="button-cover">
                                    <div class="button r" id="button-1">
                                        <input type="checkbox" class="checkbox" />
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    F&L Car Parts sdn.bhd.
                                </p>
                            </div>
                        </td>
                        <td>
                            <p><i class="fas fa-star"></i> 4.5</p>
                        </td>
                        <td>
                            <p>576</p>
                        </td>
                        <td>
                            <p>2854</p>
                        </td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <i class="far fa-edit"></i>
                        </td>
                        <td
                            style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                        >
                            <div class="toggle-button-cover">
                                <div class="button-cover">
                                    <div class="button r" id="button-1">
                                        <input type="checkbox" class="checkbox" />
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    F&L Car Parts sdn.bhd.
                                </p>
                            </div>
                        </td>
                        <td>
                            <p><i class="fas fa-star"></i> 4.5</p>
                        </td>
                        <td>
                            <p>576</p>
                        </td>
                        <td>
                            <p>2854</p>
                        </td>
                        <td>
                            <div class="retailer-row-flex">
                                <img src="{{asset('assets/img/admin/avatar1.png')}}" alt="" />
                                <p style="text-decoration: underline; margin-left: 20px">
                                    retailer name01
                                </p>
                            </div>
                        </td>
                        <td>
                            <i class="far fa-edit"></i>
                        </td>
                        <td
                            style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                        >
                            <div class="toggle-button-cover">
                                <div class="button-cover">
                                    <div class="button r" id="button-1">
                                        <input type="checkbox" class="checkbox" />
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
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


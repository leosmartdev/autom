@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Retail Management</p>
        </div>
        <h3>
            Retail Management > Retail Shop > <strong> Shop Details</strong>
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
                        <a href="{{url('admin/retailer_shop_basic')}}" >Basic Information</a>
                        <a href="{{url('admin/retailer_shop_order')}}">Order</a>
                        <a href="{{url('admin/retailer_shop_product')}}" class="retailer-shop-underline">Product</a>
                        <a href="{{url('admin/retailer_shop_reviews')}}">Ratings and Reviews</a>
                        <a href="{{url('admin/retailer_shop_community')}}">Community Post</a>
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
            <div class="retailer-product-bottom-search">
                <div class="retailer-product-search-div">
                    <label for="number">Search Product Name</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input
                            id="number"
                            type="text"
                            placeholder="Search Product Name"
                        />
                    </div>
                </div>
                <div class="retailer-product-search-div">
                    <label for="ship">Product Category</label>
                    <div class="drop">
                        <p class="shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="retailer-product-search-div">
                    <label for="ship">Product Type</label>
                    <div class="retailer-product-drop">
                        <p class="retailer-product-shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <a href="#" class="retailer-product-search-btn">Search</a>
            </div>
            <div class="retailer-product-bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="bg">
                        <th>
                            <p>Product Name</p>
                        </th>
                        <th>Category</th>
                        <th>In Stock</th>
                        <th>
                            <p>Price</p>
                        </th>
                        <th>Month Sold</th>
                        <th>
                            <p>Shop</p>
                        </th>
                        <th>
                            <p>Active</p>
                        </th>
                    </tr>

                    <tr>
                        <td class="retailer-order-flex-box">
                            <div class="retailer-order-img">
                                <img src="{{asset('assets/img/admin/product2.png')}}" alt="" />
                            </div>
                            <p>
                                GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA SATRIA NEO
                                GEN2 PERSONA WAJA CAMPRO (144MY25)
                            </p>
                        </td>
                        <td>
                            <p>Auto Body Parts</p>
                            <p class="grey">Bumpers & Components</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">9,999</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">MYR34.00 /1pcs MYR2,</p>
                            <p style="margin-right: 17px">800.00 / 100pcs</p>
                        </td>
                        <td>561</td>
                        <td>
                            <div class="retailer-shop-order-row" style="margin-right: 17px">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="toggle-button-cover" style="margin-right: 17px">
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
                        <td class="retailer-order-flex-box">
                            <div class="retailer-order-img">
                                <img src="{{asset('assets/img/admin/product2.png')}}" alt="" />
                            </div>
                            <p>
                                GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA SATRIA NEO
                                GEN2 PERSONA WAJA CAMPRO (144MY25)
                            </p>
                        </td>
                        <td>
                            <p>Auto Body Parts</p>
                            <p class="grey">Bumpers & Components</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">9,999</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">MYR34.00 /1pcs MYR2,</p>
                            <p style="margin-right: 17px">800.00 / 100pcs</p>
                        </td>
                        <td>561</td>
                        <td>
                            <div class="retailer-shop-order-row" style="margin-right: 17px">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="toggle-button-cover" style="margin-right: 17px">
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
                        <td class="retailer-order-flex-box">
                            <div class="retailer-order-img">
                                <img src="{{asset('assets/img/admin/product2.png')}}" alt="" />
                            </div>
                            <p>
                                GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA SATRIA NEO
                                GEN2 PERSONA WAJA CAMPRO (144MY25)
                            </p>
                        </td>
                        <td>
                            <p>Auto Body Parts</p>
                            <p class="grey">Bumpers & Components</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">9,999</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">MYR34.00 /1pcs MYR2,</p>
                            <p style="margin-right: 17px">800.00 / 100pcs</p>
                        </td>
                        <td>561</td>
                        <td>
                            <div class="retailer-shop-order-row" style="margin-right: 17px">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="toggle-button-cover" style="margin-right: 17px">
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
                        <td class="retailer-order-flex-box">
                            <div class="retailer-order-img">
                                <img src="{{asset('assets/img/admin/product2.png')}}" alt="" />
                            </div>
                            <p>
                                GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA SATRIA NEO
                                GEN2 PERSONA WAJA CAMPRO (144MY25)
                            </p>
                        </td>
                        <td>
                            <p>Auto Body Parts</p>
                            <p class="grey">Bumpers & Components</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">9,999</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">MYR34.00 /1pcs MYR2,</p>
                            <p style="margin-right: 17px">800.00 / 100pcs</p>
                        </td>
                        <td>561</td>
                        <td>
                            <div class="retailer-shop-order-row" style="margin-right: 17px">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="toggle-button-cover" style="margin-right: 17px">
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
                        <td class="retailer-order-flex-box">
                            <div class="retailer-order-img">
                                <img src="{{asset('assets/img/admin/product2.png')}}" alt="" />
                            </div>
                            <p>
                                GAIDO TIMING BELT KIT PROTON SAGA BLM FL EXORA SATRIA NEO
                                GEN2 PERSONA WAJA CAMPRO (144MY25)
                            </p>
                        </td>
                        <td>
                            <p>Auto Body Parts</p>
                            <p class="grey">Bumpers & Components</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">9,999</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">MYR34.00 /1pcs MYR2,</p>
                            <p style="margin-right: 17px">800.00 / 100pcs</p>
                        </td>
                        <td>561</td>
                        <td>
                            <div class="retailer-shop-order-row" style="margin-right: 17px">
                                <img style="display: inline" src="{{asset('assets/img/admin/order_brand1.png')}}" alt="" />
                                <p style="text-decoration: underline; font-weight: medium">
                                    F&L Car Parts...
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="toggle-button-cover" style="margin-right: 17px">
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


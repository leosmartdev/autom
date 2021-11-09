@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-boxes"></i>
            <p>Product Management</p>
        </div>
        <div class="product-bottom-right">
            <div class="product-bottom-search">
                <div class="product-search-div">
                    <label for="number">Search Product Name</label>
                    <div class="product-input-div">
                        <i class="fas fa-search"></i>
                        <input
                            id="number"
                            type="text"
                            placeholder="Search Product Name"
                        />
                    </div>
                </div>
                <div class="product-search-div">
                    <label for="ship">Product Category</label>
                    <div class="product-drop">
                        <p class="shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="product-search-div">
                    <label for="ship">Product Type</label>
                    <div class="product-drop">
                        <p class="shipping">All</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <a href="#" class="product-search-btn">Search</a>
            </div>
            <div class="product-bottom-table">
                <table style="width: 100%; border-collapse: collapse">
                    <tr class="product-bg">
                        <th><input type="checkbox" name="#" id="" /></th>
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
                    @foreach($products as $product)
                        <tr>
                        <td><input type="checkbox" name="#" id="" /></td>
                        <td class="product-flex-box">
                            <div class="product-img">
                                <img src="{{asset('assets/'.$product->brand)}}" alt="" />
                            </div>
                            <p>
                               {{$product->name}}
                            </p>
                        </td>
                        <td>
                            <p>{{\App\Models\Category::find($product->category_id)->name}}</p>
                            <p class="product-grey">Bumpers & Components</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">9,999</p>
                        </td>
                        <td>
                            <p style="margin-right: 17px">{{$product->price}} MYR</p>
{{--                            <p style="margin-right: 17px">800.00 / 100pcs</p>--}}
                        </td>
                        <td>561</td>
                        <td>
                            <div class="row" style="margin-right: 17px">
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


<div class="sitebar">
    <div class="sitebar_body">
        <div class="d-block d-lg-none text-end colsed">
            <i class="fa fa-times"></i>
        </div>
        <div class="dash_logo w-100 text-center">
            <img class=" img-fluid" src="{{asset('assets/img/logo.png')}}" alt="">
        </div>
        <nav class="navigation">
            <li class="item  {{  Request::path() == 'retailer/dashboard'  ? 'active' : '' }}">
                <a href="{{url('retailer/dashboard')}}" class="item-link">Dashboard</a>
            </li>
            <li class="item {{  Request::is('retailer/mall*') ? 'active' : '' }}">
                <a href="{{url('retailer/mall')}}" class="item-link">Product Mall</a>
            </li>
            <li class="item PM_sub_item {{  Request::is('retailer/productList*') || Request::is('retailer/productCategory*')  ? 'active' : '' }}">
                <a href="{{url('retailer/productList')}}" class="item-link">Product Management</a>
            </li>
{{--            <ul class="my-0 PM_sub_menu ul_sub " style="{{  Request::is('productList*')  ? 'display:block !important;' : '' }} ">--}}
{{--                <li class="sub-item">--}}
{{--                    <a href="{{url('productList')}}" class="sub-item-link">- Product List</a>--}}
{{--                </li>--}}
{{--                <li class="sub-item">--}}
{{--                    <a href="../Product-Management/Product_category.html" class="sub-item-link">- Product category</a>--}}
{{--                </li>--}}
{{--                <li class="sub-item">--}}
{{--                    <a href="../Product-Management/Product_Details.html" class="sub-item-link">- Product Details</a>--}}
{{--                </li>--}}
{{--                <li class="sub-item">--}}
{{--                    <a href="../Product-Management/Order_List.html" class="sub-item-link">- Order List</a>--}}
{{--                </li>--}}
{{--                <li class="sub-item">--}}
{{--                    <a href="../Product-Management/Review.html" class="sub-item-link">- Review</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
            <li class="item sub_item {{  Request::is('retailer/order*') ? 'active' : '' }}">
                <a href="#" class="item-link" data-bs-toggle="dropdown"
                   aria-expanded="false">Order Management</a>
            </li>
            <ul class="mt-2 sub_menu">
                <li class="sub-item ">
                    <a href="{{url('retailer/order/create')}}" class="sub-item-link" style="{{Request::path() == 'order/create' ? 'color:white' : '' }}">- New Order</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('retailer/order')}}" class="sub-item-link" style="{{Request::path() == 'order' ? 'color:white' : '' }}">- Pending Order</a>
                </li>
                <li class="sub-item">
                    <a href="#" class="sub-item-link">- Order History</a>
                </li>
                <li class="sub-item">
                    <a href="#" class="sub-item-link">- Rating</a>
                </li>
                <li class="sub-item">
                    <a href="#" class="sub-item-link">- Refund/Return</a>
                </li>
                <li class="sub-item">
                    <a href="" class="sub-item-link">- Order Cancelled</a>
                </li>
            </ul>
            <li class="item {{  Request::is('retailer/shop*') ? 'active' : '' }}">
                <a href="{{url('retailer/shop')}}" class="item-link">Shop Management</a>
            </li>
            <li class="item F_sub_item {{  Request::is('retailer/finance*') ? 'active' : '' }}">
                <a  class="item-link">Finance Centre</a>
            </li>
            <ul class="my-0 F_sub_menu ul_sub">
                <li class="sub-item">
                    <a href="{{url('retailer/finance')}}" class="sub-item-link" style="{{Request::path() == 'finance' ? 'color:white' : '' }}">- Revenue Management</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('retailer/finance/create')}}" class="sub-item-link" style="{{Request::path() == 'finance/create' ? 'color:white' : '' }}">- Withdraw History</a>
                </li>
            </ul>
            <li class="item V_sub_item {{Request::is('retailer/voucher*') ? 'active' : '' }}">
                <a href="#" class="item-link">Voucher Management</a>
            </li>
            <ul class="my-0 V_sub_menu ul_sub">
                <li class="sub-item">
                    <a href="{{url('retailer/voucher/create')}}" class="sub-item-link" style="{{Request::path() == 'voucher/create' ? 'color:white' : '' }}">- Create Voucher</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('retailer/voucher')}}" class="sub-item-link" style="{{Request::path() == 'voucher' ? 'color:white' : '' }}">- Voucher list</a>
                </li>
            </ul>
            <li class="item  E_sub_item {{  Request::is('retailer/enquiry*') ? 'active' : '' }}">
                <a href="#" class="item-link">Enquiry Management</a>
            </li>
            <ul class="my-0 E_sub_menu ul_sub">
                <li class="sub-item">
                    <a href="{{url('retailer/enquiry')}}" class="sub-item-link" style="{{Request::path() == 'enquiry' ? 'color:white' : '' }}">- User Enquiry</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('retailer/enquiry/create')}}" class="sub-item-link" style="{{Request::path() == 'enquiry/create' ? 'color:white' : '' }}">- My Enquiry</a>
                </li>
            </ul>
            <li class="item C_sub_item {{  Request::is('retailer/community*') ? 'active' : '' }}">
                <a href="#" class="item-link">My Community</a>
            </li>
            <ul class="my-0 C_sub_menu ul_sub">
                <li class="sub-item">
                    <a href="{{url('retailer/community/create')}}" class="sub-item-link" style="{{Request::path() == 'community/create' ? 'color:white' : '' }}">- Add post</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('retailer/community')}}" class="sub-item-link" style="{{Request::path() == 'community' ? 'color:white' : '' }}">- My Community</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

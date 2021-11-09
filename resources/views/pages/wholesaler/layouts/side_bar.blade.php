<div class="sitebar">
    <div class="sitebar_body">
        <div class="d-block d-lg-none text-end colsed">
            <i class="fa fa-times"></i>
        </div>
        <div class="dash_logo w-100 text-center">
            <img class=" img-fluid" src="{{asset('assets/img/logo.png')}}" alt="">
        </div>
        <nav class="navigation">
            <li class="item  {{  Request::is('wholesaler/dashboard*')  ? 'active' : '' }}">
                <a href="{{url('wholesaler/dashboard')}}" class="item-link">Dashboard</a>
            </li>
            <li class="item PM_sub_item {{  Request::is('wholesaler/productList*') || Request::is('wholesaler/productCategory*')  ? 'active' : '' }}">
                <a href="{{url('wholesaler/productList')}}" class="item-link">Product Management</a>
            </li>
            <li class="item sub_item {{  Request::is('wholesaler/order*') ? 'active' : '' }}">
                <a href="#" class="item-link" data-bs-toggle="dropdown"
                   aria-expanded="false">Order Management</a>
            </li>
            <ul class="mt-2 sub_menu">
                <li class="sub-item ">
                    <a href="{{url('wholesaler/order/create')}}" class="sub-item-link" style="{{Request::path() == 'order/create' ? 'color:white' : '' }}">- New Order</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('wholesaler/order')}}" class="sub-item-link" style="{{Request::path() == 'order' ? 'color:white' : '' }}">- Pending Order</a>
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
            <li class="item {{  Request::is('wholesaler/shop*') ? 'active' : '' }}">
                <a href="{{url('wholesaler/shop')}}" class="item-link">Shop Management</a>
            </li>
            <li class="item F_sub_item {{  Request::is('wholesaler/finance*') ? 'active' : '' }}">
                <a  class="item-link">Finance Centre</a>
            </li>
            <ul class="my-0 F_sub_menu ul_sub">
                <li class="sub-item">
                    <a href="{{url('wholesaler/finance')}}" class="sub-item-link" style="{{Request::path() == 'finance' ? 'color:white' : '' }}">- Revenue Management</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('wholesaler/finance/create')}}" class="sub-item-link" style="{{Request::path() == 'finance/create' ? 'color:white' : '' }}">- Withdraw History</a>
                </li>
            </ul>
            <li class="item V_sub_item {{Request::is('wholesaler/voucher*') ? 'active' : '' }}">
                <a href="#" class="item-link">Voucher Management</a>
            </li>
            <ul class="my-0 V_sub_menu ul_sub">
                <li class="sub-item">
                    <a href="{{url('wholesaler/voucher/create')}}" class="sub-item-link" style="{{Request::path() == 'voucher/create' ? 'color:white' : '' }}">- Create Voucher</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('wholesaler/voucher')}}" class="sub-item-link" style="{{Request::path() == 'voucher' ? 'color:white' : '' }}">- Voucher list</a>
                </li>
            </ul>
            <li class="item  E_sub_item {{  Request::is('wholesaler/enquiry*') ? 'active' : '' }}">
                <a href="#" class="item-link">Enquiry Management</a>
            </li>
            <ul class="my-0 E_sub_menu ul_sub">
                <li class="sub-item">
                    <a href="{{url('wholesaler/enquiry')}}" class="sub-item-link" style="{{Request::path() == 'enquiry' ? 'color:white' : '' }}">- User Enquiry</a>
                </li>
                <li class="sub-item">
                    <a href="{{url('wholesaler/enquiry/create')}}" class="sub-item-link" style="{{Request::path() == 'enquiry/create' ? 'color:white' : '' }}">- My Enquiry</a>
                </li>
            </ul>

        </nav>
    </div>
</div>

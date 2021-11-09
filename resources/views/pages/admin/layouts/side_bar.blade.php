<nav>
    <div class="top {{  Request::path() == 'admin/dashboard'  ? 'dash' : '' }}">
        <i class="fas fa-chart-line"></i>
        <a href="{{url('admin/dashboard')}}" class="nav-link">Dashboard</a>
    </div>
    <div class="collapse">
        <div class="top {{Request::is('admin/order*') || Request::path() == 'admin/order_cancellation' ? 'dash' : '' }}">
            <i class="fas fa-box-open"></i>
            <a href="{{url('admin/order')}}" class="nav-link">Order Management</a>
        </div>
        <div class="bottom">
            <a href="{{url('admin/order')}}" class="bottom-tags {{  Request::path() == 'admin/order'  ? 'border-left-active' : '' }}">Order Processing</a>
            <a href="" class="bottom-tags">Order History</a>
            <a href="{{url('admin/order_cancellation')}}" class="bottom-tags {{ Request::path() == 'admin/order_cancellation'  ? 'border-left-active' : '' }}">Cancellation</a>
            <a href="#" class="bottom-tags">Refund/Return</a>
        </div>
    </div>
    <div class="top {{  Request::is('admin/category*')  ? 'dash' : '' }}">
        <i class="fas fa-tasks"></i>
        <a href="{{url('admin/category')}}" class="nav-link"
        >Category Management</a>
    </div>
    <div class="top {{  Request::is('admin/product*') ? 'dash' : '' }}">
        <i class="fas fa-boxes"></i>
        <a href="{{url('admin/product')}}" class="nav-link">Product Management</a>
    </div>
    <div class="top {{  Request::is('admin/shipping*') ? 'dash' : '' }}">
        <i class="fas fa-truck"></i>
        <a href="{{url('admin/shipping')}}" class="nav-link">Shipping Management</a>
    </div>
    <div class="collapse">
        <div class="top {{Request::is('admin/retailer*') || Request::path() == 'admin/retailer_order'
            || Request::path() == 'admin/rate_and_reviews'|| Request::path() == 'admin/retailer_shop' ? 'dash' : '' }}">
            <i class="fas fa-user-clock"></i>
            <a href="{{url('admin/retailer')}}" class="nav-link">Retail Management</a>
        </div>
        <div class="bottom">
            <a href="{{url('admin/retailer')}}" class="bottom-tags {{ Request::path() == 'admin/retailer'  ? 'border-left-active' : '' }}">Retailer List</a>
            <a href="{{url('admin/retailer_application')}}" class="bottom-tags {{ Request::path() == 'admin/retailer_application'  ? 'border-left-active' : '' }}">Retailer Application</a>
            <a href="{{url('admin/retailer_shop')}}" class="bottom-tags {{ Request::path() == 'admin/retailer_shop'  ? 'border-left-active' : '' }}">Retailer Shop</a>
        </div>
    </div>
    <div class="collapse">
        <div class="top {{Request::is('admin/wholesaler*') || Request::path() == 'admin/wholesaler_application' || Request::path() == 'admin/wholesaler_shop' ? 'dash' : ''  }}">
            <i class="fas fa-dolly"></i>
            <a href="{{url('admin/wholesaler')}}" class="nav-link">Wholesale Management</a>
        </div>
        <div class="bottom">
            <a href="{{url('admin/wholesaler')}}" class="bottom-tags {{ Request::path() == 'admin/wholesaler'  ? 'border-left-active' : '' }}">Wholesale List</a>
            <a href="{{url('admin/wholesaler_application')}}" class="bottom-tags {{ Request::path() == 'admin/wholesaler_application'  ? 'border-left-active' : '' }}">Wholesale Application</a>
            <a href="{{url('admin/wholesaler_shop')}}" class="bottom-tags {{ Request::path() == 'admin/wholesaler_shop'  ? 'border-left-active' : '' }}">Wholesale Shop</a>
        </div>
    </div>
    <div class="top {{Request::is('admin/users*') ||  Request::is('admin/user_information*') || Request::is('admin/user_order*') || Request::is('admin/user_rate*') ? 'dash' : ''}}">
        <i class="far fa-user"></i>
        <a href="{{url('admin/users')}}" class="nav-link"
        >User Management</a
        >
    </div>
    <div class="top">
        <i class="fas fa-clipboard"></i>
        <a href="#" class="nav-link">Finance Center</a>
    </div>
    <div class="top {{Request::is('admin/notifications*')  ? 'dash' : ''}}">
        <i class="fas fa-bell"></i>
        <a href="{{url('admin/notifications')}}" class="nav-link"
        >Banner and Notification</a
        >
    </div>
    <div class="top {{Request::is('admin/enquiry*')  ? 'dash' : ''}}">
        <i class="fas fa-bell"></i>
        <a href="{{url('admin/enquiry')}}" class="nav-link"
        >Enquiry Management</a
        >
    </div>
    <div class="top {{Request::is('admin/voucher*')  ? 'dash' : ''}}">
        <i class="fas fa-ticket-alt"></i>
        <a href="{{url('admin/voucher')}}" class="nav-link"
        >Voucher Management</a
        >
    </div>
    <div class="top">
        <i class="fas fa-users"></i>
        <a href="#" class="nav-link">Community Management</a>
    </div>
    <div class="top {{Request::is('admin/report*')  ? 'dash' : ''}}">
        <i class="fas fa-clipboard-check"></i>
        <a href="{{url('admin/report')}}" class="nav-link">Report</a>
    </div>
    <div class="top">
        <i class="fas fa-redo-alt"></i>
        <a href="#" class="nav-link">Vision update</a>
    </div>
    <div class="top">
        <i class="fas fa-cog"></i>
        <a href="#" class="nav-link">Setting</a>
    </div>
    <div class="top">
        <i class="fas fa-long-arrow-alt-down"></i>
        <a href="{{route('adminLogOut')}}" class="nav-link">Log Out</a>
    </div>
</nav>

@include('pages.wholesaler.layouts.app')
<section class="dashborad" style="background: #E5E5E5">
    <div class="d-flex dashborad_body">
        @include('pages.wholesaler.layouts.side_bar')
        <div class=" w-100 dashborad_page">
            <div class="p-2 p-md-3 w-100 dashborad_page_body">
                @include('pages.wholesaler.layouts.header')
                @yield('content')

            </div>
        </div>
    </div>
</section>


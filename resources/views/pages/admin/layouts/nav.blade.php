@include('pages.admin.layouts.app')
<section >
    <header>
        @include('pages.admin.layouts.header')
    </header>
    <div class="container">
        @include('pages.admin.layouts.side_bar')
        @yield('content')
    </div>
</section>


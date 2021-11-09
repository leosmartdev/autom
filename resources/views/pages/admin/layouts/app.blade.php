<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ URL::asset('assets/img/logos/logo_icon.png')}}" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="{{asset('assets/css/admin/admin_app.css')}}">
        <!--end::Fonts-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link
            rel="stylesheet"
            href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"
        />
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/JQuery3.6.0.js') }}" defer></script>
        <script src="{{ asset('assets/js/min_jquery.js') }}" defer></script>
        <script src="{{ asset('assets/js/min_javascript.js') }}" defer></script>
        <script src="{{ asset('assets/js/pagibation.js') }}" defer></script>
        <script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/admin/admin.js') }}" defer></script>


    </head>
    <body>
    </body>
</html>

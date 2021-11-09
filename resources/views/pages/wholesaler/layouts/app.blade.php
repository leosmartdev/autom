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
        <link rel="stylesheet" href="{{ URL::asset('assets/font/KeepCalm-light.ttf') }}" />
        <link rel="stylesheet" href="{{ URL::asset('assets/font/KeepCalm-Medium.ttf') }}" />
        <!--end::Fonts-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.css')}}">
        <link href="{{ URL::asset('assets/css/demo.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/intlTelInput.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/scss/_var.scss') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/scss/_vernder.scss') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/scss/main.css') }}" rel="stylesheet" type="text/css" />

{{--        <link href="{{ URL::asset('assets/scss/main.scss') }}" rel="stylesheet" type="text/css" />--}}
        <link rel="stylesheet" href="{{asset('assets/scss/main.css')}}">
        <!--end::Global Theme Styles-->
        <!-- Scripts -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/JQuery3.6.0.js') }}" defer></script>
        <script src="{{ asset('assets/js/min_jquery.js') }}" defer></script>
        <script src="{{ asset('assets/js/min_javascript.js') }}" defer></script>
        <script src="{{ asset('assets/js/pagibation.js') }}" defer></script>
        <script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/register.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>

    </head>
    <body>
    </body>
</html>

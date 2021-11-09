<html lang="en">
<!--begin::Head-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/logos/logo_icon.png')}}" />
    <!-- Bootstrap css start -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.css')}}">
    <!-- Bootstrap css end -->
    <!-- font awesome start -->
    <script src="https://kit.fontawesome.com/02184d1027.js" crossorigin="anonymous"></script>
    <!-- font awesome end -->
    <!-- style css start -->
    <link rel="stylesheet" href="{{asset('assets/scss/main.css')}}">
    <!-- style css end-->
    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/JQuery3.6.0.js') }}" defer></script>
    <script src="{{ asset('assets/js/min_jquery.js') }}" defer></script>
    <script src="{{ asset('assets/js/min_javascript.js') }}" defer></script>
    <script src="{{ asset('assets/js/pagibation.js') }}" defer></script>
    <script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/register.js') }}" defer></script>
    <!-- Scripts end-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body >
<section id="login_page">
    <div class="container">
        <div class="form_div">
            <form class="form" action="{{route('wholesalerLogin')}}"  method = "post" >
                @csrf
                <div class="w-100 mt-md-5 text-center logo">
                    <img style="width: 40%" src="{{asset('assets/img/logos/logo_black.png')}}" alt="">
                </div>
                <div class="my-3 my-md-5 login_and_reg">
                    <a class="text-uppercase">login</a>
                    <a href="{{url('register')}}" class="text-uppercase">register</a>
                </div>
                <div class="form-group my-md-3">
                    <label for="Merchant_ype" class="form-label">Merchant Type*</label>
                    <div class="d-flex position-relative">
                        <select class="form-select Merchant_ype" name="" id="">
                            <option value="0">WholeSaler</option>
                            <option value="1">Retailer</option>
                        </select>
                        <div class="select_down position-absolute">
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <small id="helpId" class="text-muted"> plase select Merchant Type</small>
                </div>

                <div class="form-group my-md-3">
                    <label for="Email/Phone" class="form-label">Email / Phone Number</label>
                    <input type="text" name="Email/Phone" id="" class="form-control Email_Phone"
                           aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Please inter your Email / Phone Number</small>
                </div>
                <div class="form-group mb-5">
                    <label for="Password" class="form-label">Password</label>
                    <input type="Password" name="Password" id="" class="form-control password"
                           aria-describedby="helpId">

                </div>
                <a class="text-muted float-end mb-md-5" href="#">forgot Password</a>
                <div class="form-group my-4 my-md-5">
                    <input type="submit" name="" id="" value="Login"
                           class=" bg-dark text-white w-100 border-0 login">
                </div>
                <div class=" mt-0 mt-md-3 d-flex privacy_agreement">
                    <label class="radiobtn">
                        <input type="radio" class="radio" name="Agree">
                        <span class="checmark"></span>
                    </label>
                    <p><span>Sign in and agree to the </span><a href="#">user agreement and privacy agreement.</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

</section>
</body>
</html>

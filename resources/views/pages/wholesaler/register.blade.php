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
<div class="register">
    <div class="container">
        <form action="{{route('register')}}"   class="form"  method = "post" >
            @csrf
            <div class="logo w-100 text-center">
                <img style="width: 40%; margin: 30px" src="{{asset('assets/img/logos/logo_black.png')}}" alt="">
            </div>
            <div class="login_and_reg">
                <a class="text-uppercase" href="{{url('/')}}">Login</a>
                <a class="text-uppercase">REGSTER</a>
            </div>
            <div class="form-group mt-3">
                <label for="Merchant_type" class="form-label">Merchant type*</label>
                <div class="d-flex position-relative">
                    <select class="form-select Merchant_type" name="" id="">
                        <option value="0">Wholesaler</option>
                        <option value="1">Retailer</option>
                    </select>
                    <div class="select_down position-absolute">
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <small id="helpId" class="text-muted">Please selcet one</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Name*</label>
                <input class="form-control name" type="text" name="name" id="" class="form-control" placeholder=""
                       required>
                <small id="helpId" class="text-muted">Please Enter your name</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">ID Number*</label>
                <input class="form-control Id_Number" type="text" name="Id_Number" id="" class="form-control"
                       placeholder="" required>
                <small id="helpId" class="text-muted">Please Enter your Id Number</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Call - Phone Number*</label>
                <div class="row">
                    <div class="col-4 col-sm-3 col-md-2">
                        <div class="d-flex position-relative">
                            <select class="form-select" name="" id="">
                                <option value="1">+60</option>
                                <option value="4">+666</option>
                                <option value="2">+880</option>
                                <option value="3">+8</option>
                                <option value="4">+971</option>
                            </select>
                            <div class="select_down position-absolute">
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-sm-9 col-md-10">
                        <input id="phone" class="form-control Phone_number" name="phone" type="text" required>
                        <small id="helpId" class="text-muted">Please Enter your Phone Number</small>
                    </div>
                </div>
                <small id="helpId" class="text-muted">Please Enter your Phone Number</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email Address*</label>
                <input class="form-control Email_address" type="Email" name="Email_address" id=""
                       class="form-control" placeholder="" required>
                <small id="helpId" class="text-muted">Please Enter your Email address</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Address*</label>
                <input class="form-control Address" type="text" name="Address" id="" class="form-control"
                       placeholder="" required>
                <small id="helpId" class="text-muted">Please Enter your address</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Reconmmendation Code</label>
                <input class="form-control R_code" type="Text" name="R_code" id="" class="form-control"
                       placeholder="" required>
                <small id="helpId" class="text-muted">Please Enter yourReconmmendation Code</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">password*</label>
                <input class="form-control password" type="password" name="Email_address" id="" class="form-control"
                       placeholder="" required>
                <small id="helpId" class="text-muted">Please Enter your password</small>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Confirrm password*</label>
                <input class="form-control C_password" type="password" name="C_password" id="" class="form-control"
                       placeholder="" required>
                <small id="helpId" class="text-muted">Please Enter your Confirrm password</small>
            </div>

            <input type="submit" value="Register" class="btn w-100 text-center submitbtn Registerbtn">
            <div class="form-group my-3 privacy_agreement">
                <label class="radiobtn" onclick="one_radio()">
                    <input type="radio" name="Agree">
                    <span class="checmark"></span>
                </label>
                <span>Agree to the </span> <a href="#" class="text-dark fw-bold text-decoration-underline mx-2"> User
                    agreement and privacy agreement.</a>
            </div>
        </form>

    </div>

</div>
</body>
</html>

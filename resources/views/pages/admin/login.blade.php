<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="{{asset('assets/css/admin/login.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap"
        rel="stylesheet"
    />

</head>
<body>
    <div class="left">
        <div class="left__top">
            <img src="{{asset('assets/img/admin/logo.png')}}" alt="" class="logo" />
            <a class="admin" >Admin Panel</a>
        </div>
        <div class="left__bottom">
            <p class="text first-para">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                volutpat.
            </p>
            <p class="text second-para">
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>
    <div class="right">
        <div class="login-form">
            <div class="login-form">
                <h1>LOGIN</h1>
                @if (session('message'))
                    <div style="color: orangered">{{ session('message') }}</div>
                @endif
                <form  action="{{route('adminLogin')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div>Username:</div>
                        <input type="text" id="username" name="email" class="input" />
                        @error('email')
                        <div  style="color: orangered">{{
                        $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <div>Password :</div>
                        <input type="password" id="password" name="password" class="input" />
                        @error('password')
                        <div  style="color: orangered">{{
                        $message }}</div>
                        @enderror
                    </div>
                    <div style="margin-top: 50px"></div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>

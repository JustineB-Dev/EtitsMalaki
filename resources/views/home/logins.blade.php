<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="public/css/txt.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        body, html{
            height: 100%;
        }
        body {
            background-image: url('home/assets/images/20240923_100323.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            /*backdrop-filter: blur(2px); */
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px; 
        }


    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center ">
                <a href="/"><img src="home/assets/images/logo.png" alt="logo" style="width: 200px"></a><span
                    class="splash-description">Please enter your user information.</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('loginspost') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" name="email" :value="old('email')"
                            type="email" placeholder="Email" required autofocus autocomplete="username" />
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password"
                            placeholder="Password" required autofocus autocomplete="current-password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span
                                class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block "
                        id="signin-btn">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                
                <div class="card-footer-item card-footer-item-bordered">
                    <!--<a href="/signup" class="footer-link">Create An Account</a>-->
                    <!--<a href="https://www.facebook.com/Fareastcafe2022" target="_blank" class="item"><i
                            class="fab fa-facebook-f mr-4" style="font-size: 150%"></i></a>
                    <a href="#" class="item"><i class="fab fa-twitter mr-4"
                            style="font-size: 150%"></i></a>
                    <a href="https://www.instagram.com/far_eastcafe?igsh=MXRlcjNiODIyOGRwMA=="
                        target="_blank" class="item"><i class="fab fa-instagram "
                            style="font-size: 150%"></i></a>-->
                            <a href="{{route('signupview')}}" class="footer-link">Create An Account</a>
                </div>
                

                <div class="card-footer-item card-footer-item-bordered">
                    
                        <a href="/forgot-passwords" class="footer-link"->{{ __('Forgot Password') }}</a>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ URL::asset('assets/images/logo_icai.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo_icai.png') }}" type="image/x-icon">
    <title>BOS Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ URL::asset('assets/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css') }}">
    <style>
        .w-30 {
            width: 30% !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div>
                            <a class="logo" href="index.html">
                                <img class="img-fluid for-dark w-30"
                                    src="{{ URL::asset('assets/images/logo/logo-light.png') }}" alt="looginpage">
                                <img class="img-fluid for-light w-30"
                                    src="{{ URL::asset('assets/images/logo/logo-dark.png') }}" alt="looginpage">
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" action="{{ route('admin.loginauth') }}" method="POST">
                                @csrf
                                <h4>Sign in to account </h4>
                                <p>Enter your email & password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="text" name="email"
                                        placeholder="Test@gmail.com" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger f-w-500">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password </label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="login[password]"
                                            placeholder="*********" value="{{ old('password') }}">
                                        <div class="show-hide"> <span class="show"></span></div>
                                    </div>
                                    @if ($errors->has('login.password'))
                                        <span class="text-danger f-w-500">{{ $errors->first('login.password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Remember password</label>
                                    </div>
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
        <script src="{{ URL::asset('assets/js/config.js') }}"></script>
        <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    </div>
</body>

</html>

@if (session('error'))
    <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
        <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header toast-img">
                <img class="rounded me-2" src="{{ URL::asset('assets/images/icons/error.gif') }}" alt="profile">
                <strong class="me-auto">Error..!</strong>
                <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body toast-light bg-danger">{{ session('error') }}</div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let toastLive = document.getElementById("liveToast");
            let toast = new bootstrap.Toast(toastLive);
            toast.show();
        });
    </script>
@endif

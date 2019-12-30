<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Sun Operational Light Initiative Development</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('solid_logoonly.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('admin_assets/css/style-primary.css') }}">

</head>

<body>

<div class="main-wrapper" style="background-color: #26211d;">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap" style="width:60%; margin: 5% auto 0 auto;">

            <div class="text-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('solid_logo.png') }}" width="200"/>
                </a>

                <h3 class="text-white">Sign up</h3>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mt-20">
                    <div class="col-md-6" style="margin: 0 auto;">

                        <label for="username" class="text-white">Username</label>
                        <input id="username" type="text" class="form-control mb-20 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="password" class="text-white">Password</label>
                        <input id="password" type="password" class="form-control mb-20 @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="col-12 mt-10 text-center">
                        <button type="submit" class="button button-primary">Login</button></div>

                </div>
            </form>

        </div>

    </div><!-- Content Body End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{ asset('admin_assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/vendor/bootstrap.min.js') }}"></script>

<!--Plugins JS-->
<script src="{{ asset('admin_assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/tippy4.min.js.js') }}"></script>

<!--Main JS-->
<script src="{{ asset('admin_assets/js/main.js') }}"></script>

</body>

</html>

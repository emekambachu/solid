<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register - Sun Operational Light Initiative Development</title>
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

            <div class="text-center text-white">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('solid_logo.png') }}" width="200"/>
                </a>

                <h1 class="text-white">Registration Complete</h1>
                <h3 class="text-white">Thank you {{ Session::get('firstname') }} {{ Session::get('lastname') }} for Opening an account with us</h3>
                <p>Your account will be active after approval</p>
            </div>

            <div class="text-center text-white mt-20">
                <p><strong><a href="{{ route('login') }}">Login</a></strong></p>
            </div>

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

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

            <div class="text-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('solid_logo.png') }}" width="200"/>
                </a>

                <h3 class="text-white">Sign up</h3>

                @include('includes.alerts')
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row mt-20">
                    <div class="col-md-6">

                        <label for="firstname" class="text-white">First Name</label>
                        <input id="firstname" type="text" class="form-control mb-20 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="lastname" class="text-white">Last Name</label>
                        <input id="lastname" type="text" class="form-control mb-20 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="username" class="text-white">Username</label>
                        <input id="username" type="text" class="form-control mb-20 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="mobile" class="text-white">Mobile Number</label>
                        <input id="mobile" type="text" class="form-control mb-20 @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="email" class="text-white">Email</label>
                        <input id="email" type="email" class="form-control mb-20 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
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

                        <label for="password-confirm" class="text-white">Password Confirmation</label>
                        <input id="password-confirm" type="password" class="form-control mb-20" name="password_confirmation" required autocomplete="new-password">

                        <label for="referer" class="text-white">Referer Username</label>
                        <input id="referer" type="text" class="form-control mb-20 @error('referer') is-invalid @enderror" name="referer" value="{{ old('referer') }}" autofocus>
                        @error('referer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="select-referer" class="text-white">Select Referer if you do not have any above</label>
                        <select class="form-control mb-20" name="select_referer">
                            <option>Select referer if not inserted above</option>
                            @if($referers)
                                @foreach($referers as $ref)
                                <option value="{{ $ref->username }}">{{ $ref->username }}</option>
                                @endforeach
                            @else
                                <option>No referer available</option>
                            @endif
                        </select>

                        <label for="state" class="text-white">State</label>
                        <input id="state" type="text" class="form-control mb-20 @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" autofocus>
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="col-md-6">

                        <label for="address" class="text-white">Address</label>
                        <input id="address" type="text" class="form-control mb-20 @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="nokname" class="text-white">Next of kin Name</label>
                        <input id="nokname" type="text" class="form-control mb-20 @error('nokname') is-invalid @enderror" name="nokname" value="{{ old('nokname') }}" autofocus>
                        @error('nokname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="nokmobile" class="text-white">Next of kin Mobile</label>
                        <input id="nokmobile" type="text" class="form-control mb-20 @error('nokmobile') is-invalid @enderror" name="nokmobile" value="{{ old('nokname') }}" autofocus>
                        @error('nokname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="accname" class="text-white">Bank Account Name</label>
                        <input id="accname" type="text" class="form-control mb-20 @error('accname') is-invalid @enderror" name="accname" value="{{ old('accname') }}" autofocus required>
                        @error('accname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="bank" class="text-white">Bank Name</label>
                        <select name="bank" class="form-control mb-20" required>
                            <option selected disabled>Select Bank</option>
                            <option value="Heritage Bank">Heritage Bank</option>
                            <option value="GT Bank">GT Bank</option>
                            <option value="Diamond Bank">Diamond Bank</option>
                            <option value="First Bank">First Bank</option>
                            <option value="Access Bank">Access Bank</option>
                            <option value="Keystone Bank">Keystone Bank</option>
                            <option value="Union Bank">Union Bank</option>
                            <option value="United Bank of Africa">United Bank of Africa</option>
                            <option value="Fidelity Bank">Fidelity Bank</option>
                            <option value="Zenith Bank">Zenith Bank</option>
                            <option value="CITI Bank">CITI Bank</option>
                            <option value="Stanbic IBTC">Stanbic IBTC</option>
                            <option value="WEMA Bank">WEMA Bank</option>
                            <option value="FCMB">FCMB</option>
                            <option value="ECOBank">ECOBank</option>
                            <option value="Skye Bank">Skye Bank</option>
                            <option value="Sterling Bank">Sterling Bank</option>
                            <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                        </select>
                        @error('bank')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="accnum" class="text-white">Bank Account Number</label>
                        <input id="accnum" type="text" class="form-control mb-20 @error('accnum') is-invalid @enderror" name="accnum" value="{{ old('accnum') }}" autofocus required>
                        @error('accnum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="payopt" class="text-white">How would you like to receive payment</label>
                        <select id="payopt" class="form-control mb-20" name="payopt" required>
                            <option>Transfer</option>
                            <option>Cheque</option>
                        </select>

                        <label for="prefbank" class="text-white">Prefered bank for receiving payment</label>
                        <select id="prefbank" class="form-control mb-20" name="prefbank" required>
                            <option selected disabled>Select Bank</option>
                            <option value="Heritage Bank">Heritage Bank</option>
                            <option value="GT Bank">GT Bank</option>
                            <option value="Diamond Bank">Diamond Bank</option>
                            <option value="First Bank">First Bank</option>
                            <option value="Access Bank">Access Bank</option>
                            <option value="Keystone Bank">Keystone Bank</option>
                            <option value="Union Bank">Union Bank</option>
                            <option value="United Bank of Africa">United Bank of Africa</option>
                            <option value="Fidelity Bank">Fidelity Bank</option>
                            <option value="Zenith Bank">Zenith Bank</option>
                            <option value="CITI Bank">CITI Bank</option>
                            <option value="Stanbic IBTC">Stanbic IBTC</option>
                            <option value="WEMA Bank">WEMA Bank</option>
                            <option value="FCMB">FCMB</option>
                            <option value="ECOBank">ECOBank</option>
                            <option value="Skye Bank">Skye Bank</option>
                            <option value="Sterling Bank">Sterling Bank</option>
                            <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                        </select>

                        <label for="feename" class="text-white">Account Number and Name of registration payment</label>
                        <input id="feename" type="text" class="form-control mb-20 @error('feename') is-invalid @enderror" name="feename" value="{{ old('feename') }}" autofocus required>
                        @error('feename')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="slipnum" class="text-white">Slip or transaction number for registration payment</label>
                        <input id="slipnum" type="text" class="form-control mb-20 @error('slipnum') is-invalid @enderror" name="slipnum" value="{{ old('slipnum') }}" autofocus required>
                        @error('slipnum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="col-12 mt-10 text-center">
                        <button type="submit" class="button button-primary">Sign up</button></div>

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

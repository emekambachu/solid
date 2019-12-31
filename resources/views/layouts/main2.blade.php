<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Sun Operational Light Initiative Development</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

<div class="main-wrapper">


    <!-- Header Section Start -->
    <div class="header-section">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo (Header Left) Start -->
                <div class="header-logo col-auto">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('solid_logo.png') }}" width="150" alt="">
                        <img src="{{ asset('solid_logo.png') }}" width="150" class="logo-light" alt="">
                    </a>
                </div><!-- Header Logo (Header Left) End -->

                <!-- Header Right Start -->
                <div class="header-right flex-grow-1 col-auto">
                    <div class="row justify-content-between align-items-center">

                        <!-- Side Header Toggle & Search Start -->
                        <div class="col-auto">
                            <div class="row align-items-center">

                                <!--Side Header Toggle-->
                                <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                <!--Header Search-->
                                <div class="col-auto">

                                    <div class="header-search">

                                        <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                        <div class="header-search-form">
                                            <form action="#">
                                                <input type="text" placeholder="Search Here">
                                                <button><i class="zmdi zmdi-search"></i></button>
                                            </form>
                                            <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div><!-- Side Header Toggle & Search End -->

                        <!-- Header Notifications Area Start -->
                        <div class="col-auto">

                            <ul class="header-notification-area">

                                <!--Language-->
                                <li class="adomx-dropdown position-relative col-auto">
                                    <a class="toggle" href="#">
                                        <img class="lang-flag" src="{{ asset('admin_assets/images/flags/flag-1.jpg') }}" alt="">
                                        <i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                    <!-- Dropdown -->
                                    <ul class="adomx-dropdown-menu dropdown-menu-language">
                                        <li><a href="#">
                                                <img src="{{ asset('admin_assets/images/flags/flag-1.jpg') }}" alt=""> English</a></li>
                                        <li><a href="#">
                                                <img src="{{ asset('admin_assets/images/flags/flag-2.jpg') }}" alt=""> Japanese</a></li>
                                        <li><a href="#">
                                                <img src="{{ asset('admin_assets/images/flags/flag-3.jpg') }}" alt=""> Spanish </a></li>
                                        <li><a href="#">
                                                <img src="{{ asset('admin_assets/images/flags/flag-4.jpg') }}" alt=""> Germany</a></li>
                                    </ul>

                                </li>

                                <!--Mail-->
                                <li class="adomx-dropdown col-auto">
                                    <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span class="badge"></span></a>

                                    <!-- Dropdown -->
                                    <div class="adomx-dropdown-menu dropdown-menu-mail">
                                        <div class="head">
                                            <h4 class="title">You have 3 new mail.</h4>
                                        </div>
                                        <div class="body custom-scroll">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <div class="image">
                                                            <img src="{{ asset('admin_assets/images/avatar/avatar-2.jpg') }}" alt=""></div>
                                                        <div class="content">
                                                            <h6>Sub: New Account</h6>
                                                            <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                        </div>
                                                        <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="image">
                                                            <img src="{{ asset('admin_assets/images/avatar/avatar-1.jpg') }}" alt=""></div>
                                                        <div class="content">
                                                            <h6>Sub: Mail Support</h6>
                                                            <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                        </div>
                                                        <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="image"><img src="{{ asset('admin_assets/images/avatar/avatar-2.jpg') }}" alt=""></div>
                                                        <div class="content">
                                                            <h6>Sub: Product inquiry</h6>
                                                            <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                        </div>
                                                        <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="image"><img src="{{ asset('admin_assets/images/avatar/avatar-1.jpg') }}" alt=""></div>
                                                        <div class="content">
                                                            <h6>Sub: Mail Support</h6>
                                                            <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                        </div>
                                                        <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>

                                <!--Notification-->
                                <li class="adomx-dropdown col-auto">
                                    <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                    <!-- Dropdown -->
                                    <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                        <div class="head">
                                            <h5 class="title">You have 4 new notification.</h5>
                                        </div>
                                        <div class="body custom-scroll">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-notifications-none"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-block"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-info-outline"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shield-security"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-notifications-none"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-block"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-info-outline"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shield-security"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="footer">
                                            <a href="#" class="view-all">view all</a>
                                        </div>
                                    </div>

                                </li>

                                <!--User-->
                                <li class="adomx-dropdown col-auto">
                                    <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="{{ asset('admin_assets/images/avatar/avatar-1.jpg') }}" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">Madison Howard</span>
                                            </span>
                                    </a>

                                    <!-- Dropdown -->
                                    <div class="adomx-dropdown-menu dropdown-menu-user">
                                        <div class="head">
                                            <h5 class="name"><a href="#">Madison Howard</a></h5>
                                            <a class="mail" href="#">mailnam@mail.com</a>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>

                            </ul>

                        </div><!-- Header Notifications Area End -->

                    </div>
                </div><!-- Header Right End -->

            </div>
        </div>
    </div><!-- Header Section End -->
    <!-- Side Header Start -->
    <div class="side-header show">
        <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
        <!-- Side Header Inner Start -->
        <div class="side-header-inner custom-scroll">

            <nav class="side-header-menu" id="side-header-menu">
                <ul>
                    <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Dashboard</span></a>
                        <ul class="side-header-sub-menu">
                            <li><a href="index.html"><span>E-commerce (Default)</span></a></li>
                            <li><a href="index-crypto.html"><span>Cryptocurrency</span></a></li>
                        </ul>
                    </li>
                    <li><a href="widgets.html"><i class="ti-palette"></i> <span>Widgets</span></a></li>
                </ul>
            </nav>

        </div><!-- Side Header Inner End -->
    </div><!-- Side Header End -->

    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Dashboard <span>/ eCommerce</span></h3>
                </div>
            </div><!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <input type="text" class="form-control input-date-predefined">
                </div>
            </div><!-- Page Button Group End -->

        </div><!-- Page Headings End -->

        <!-- Top Report Wrap Start -->
        <div class="row">
            <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>Total Visitor</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>Todays</h5>
                        <h2>100,560.00</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 92%;"></div>
                        </div>
                        <p>92% of unique visitor</p>
                    </div>

                </div>
            </div><!-- Top Report End -->

            <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>Product Sold</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>Todays</h5>
                        <h2>85,000.00</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 98%;"></div>
                        </div>
                        <p>98% of unique visitor</p>
                    </div>

                </div>
            </div><!-- Top Report End -->

            <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>Order Received</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>Todays</h5>
                        <h2>5,000.00</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 88%;"></div>
                        </div>
                        <p>88% of unique visitor</p>
                    </div>

                </div>
            </div><!-- Top Report End -->

            <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>Total Revenue</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>Todays</h5>
                        <h2>3,000,000.00</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 76%;"></div>
                        </div>
                        <p>76% of unique visitor</p>
                    </div>

                </div>
            </div><!-- Top Report End -->
        </div><!-- Top Report Wrap End -->

        <div class="row mbn-30">

            <!-- Revenue Statistics Chart Start -->
            <div class="col-md-8 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">Revenue Statistics</h4>
                    </div>
                    <div class="box-body">
                        <div class="chart-legends-1 row">
                            <div class="chart-legend-1 col-12 col-sm-4">
                                <h5 class="title">Total Sale</h5>
                                <h3 class="value text-secondary">$5000,000</h3>
                            </div>
                            <div class="chart-legend-1 col-12 col-sm-4">
                                <h5 class="title">Total View</h5>
                                <h3 class="value text-primary">10000,000</h3>
                            </div>
                            <div class="chart-legend-1 col-12 col-sm-4">
                                <h5 class="title">Total Support</h5>
                                <h3 class="value text-warning">100,000</h3>
                            </div>
                        </div>
                        <div class="chartjs-revenue-statistics-chart">
                            <canvas id="chartjs-revenue-statistics-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div><!-- Revenue Statistics Chart End -->

            <!-- Market Trends Chart Start -->
            <div class="col-md-4 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">Market Trends</h4>
                    </div>
                    <div class="box-body">
                        <div class="chartjs-market-trends-chart">
                            <canvas id="chartjs-market-trends-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div><!-- Market Trends Chart End -->

            <!-- Recent Transaction Start -->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">Recent Transaction</h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-vertical-middle table-selectable">

                                <!-- Table Head Start -->
                                <thead>
                                <tr>
                                    <th class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></th>
                                    <!--<th class="selector h5"><button class="button-check"></button></th>-->
                                    <th><span>Image</span></th>
                                    <th><span>Product Name</span></th>
                                    <th><span>ID</span></th>
                                    <th><span>Quantity</span></th>
                                    <th><span>Price</span></th>
                                    <th><span>Status</span></th>
                                    <th></th>
                                </tr>
                                </thead><!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                <tr>
                                    <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><img src="{{ asset('admin_assets/images/product/list-product-1.jpg') }}" alt="" class="table-product-image rounded-circle"></td>
                                    <td><a href="#">Microsoft surface pro 4</a></td>
                                    <td>#MSP40022</td>
                                    <td>05 - Products</td>
                                    <td>$60000000.00</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                                <tr class="selected">
                                    <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><img src="{{ asset('admin_assets/images/product/list-product-2.jpg') }}" alt="" class="table-product-image rounded-circle"></td>
                                    <td><a href="#">Microsoft surface pro 4</a></td>
                                    <td>#MSP40022</td>
                                    <td>05 - Products</td>
                                    <td>$60000000.00</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><img src="{{ asset('admin_assets/images/product/list-product-3.jpg') }}" alt="" class="table-product-image rounded-circle"></td>
                                    <td><a href="#">Microsoft surface pro 4</a></td>
                                    <td>#MSP40022</td>
                                    <td>05 - Products</td>
                                    <td>$60000000.00</td>
                                    <td><span class="badge badge-warning">Due</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><img src="{{ asset('admin_assets/images/product/list-product-4.jpg') }}" alt="" class="table-product-image rounded-circle"></td>
                                    <td><a href="#">Microsoft surface pro 4</a></td>
                                    <td>#MSP40022</td>
                                    <td>05 - Products</td>
                                    <td>$60000000.00</td>
                                    <td><span class="badge badge-danger">Reject</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                                </tbody><!-- Table Body End -->

                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Recent Transaction End -->

            <!-- Daily Sale Report Start -->
            <div class="col-xlg-4 col-lg-6 col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">Daily Sale Report</h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table daily-sale-report">

                                <!-- Table Head Start -->
                                <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Detail</th>
                                    <th>Payment</th>
                                </tr>
                                </thead><!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                <tr>
                                    <td class="fw-600">Alexander</td>
                                    <td>
                                        <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                    </td>
                                    <td><span class="text-success d-flex justify-content-between fw-600">$500.00<span class="tippy" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Linda</td>
                                    <td>
                                        <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                    </td>
                                    <td><span class="text-success d-flex justify-content-between fw-600">$20.00<span class="tippy" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Patrick</td>
                                    <td>
                                        <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                    </td>
                                    <td><span class="text-danger d-flex justify-content-between fw-600">$120.00<span class="tippy" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Jose</td>
                                    <td>
                                        <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                    </td>
                                    <td><span class="text-success d-flex justify-content-between fw-600">$1750.00<span class="tippy" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Amber</td>
                                    <td>
                                        <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                    </td>
                                    <td><span class="text-warning d-flex justify-content-between fw-600">$165.00<span class="tippy" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Linda</td>
                                    <td>
                                        <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                    </td>
                                    <td><span class="text-success d-flex justify-content-between fw-600">$20.00<span class="tippy" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                </tr>
                                </tbody><!-- Table Body End -->

                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Daily Sale Report End -->

            <!-- To Do List Start -->
            <div class="col-xlg-4 col-lg-6 col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">To-do List</h4>
                    </div>
                    <div class="box-body p-0">

                        <!--Todo List Start-->
                        <ul class="todo-list">

                            <!--Todo Item Start-->
                            <li class="done">
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Mistaken idea of denouncing pleasure.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Encounter consequences that are.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li class="done">
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Nor again is there anyone who loves.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                        </ul>
                        <!--Todo List End-->

                        <!--Add Todo List Start-->
                        <form action="#" class="todo-list-add-new" data-date="false">
                            <label class="status"><input type="checkbox"><i class="icon zmdi zmdi-star-outline"></i></label>
                            <input class="content" type="text" placeholder="Type new Task">
                            <button class="submit"><i class="zmdi zmdi-plus-circle-o"></i></button>
                        </form>
                        <!--Add Todo List End-->

                    </div>
                </div>
            </div><!-- To Do List End -->

            <!-- Chat Start -->
            <div class="col-xlg-4 col-lg-6 col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">Recent Chats</h4>
                    </div>
                    <div class="box-body">

                        <div class="widget-chat-wrap custom-scroll">
                            <ul class="widget-chat-list">
                                <li>
                                    <div class="widget-chat">
                                        <div class="head">
                                            <h5>Rebecca Mitchell</h5>
                                            <span>Yesterday 05.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{ asset('admin_assets/images/comment/comment-1.jpg') }}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-chat">
                                        <div class="head">
                                            <h5>Jennifer White</h5>
                                            <span>Today 06.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{ asset('admin_assets/images/comment/comment-2.jpg') }}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-chat">
                                        <div class="head">
                                            <h5>Roger Welch</h5>
                                            <span>Today 06.31 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{ asset('admin_assets/images/comment/comment-3.jpg') }}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-chat">
                                        <div class="head">
                                            <h5>Rebecca Mitchell</h5>
                                            <span>Yesterday 05.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image">
                                                <img src="{{ asset('admin_assets/images/comment/comment-1.jpg') }}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-chat">
                                        <div class="head">
                                            <h5>Jennifer White</h5>
                                            <span>Today 06.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{ asset('admin_assets/images/comment/comment-2.jpg') }}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-chat">
                                        <div class="head">
                                            <h5>Roger Welch</h5>
                                            <span>Today 06.31 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{ asset('admin_assets/images/comment/comment-3.jpg') }}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget-chat-submission">
                            <form action="#">
                                <input type="text" placeholder="Type something">
                                <div class="buttons">
                                    <label class="file-upload button button-sm button-box button-round button-primary" for="chat-file-upload">
                                        <input type="file" id="chat-file-upload" multiple>
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                    </label>
                                    <button class="submit button button-sm button-box button-round button-primary"><i class="zmdi zmdi-mail-send"></i></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div><!-- Chat End -->

            <!-- News & Updates Start -->
            <div class="col-xlg-5 col-lg-6 col-12 mb-30">
                <!-- News & Updates Wrap Start -->
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">News & Updates</h4>
                    </div>
                    <div class="box-body">
                        <!-- News & Updates Inner Start -->
                        <div class="news-update-inner">

                            <!-- News Item -->
                            <div class="news-item">

                                <!-- Content -->
                                <div class="content">
                                    <!-- Category -->
                                    <div class="categories">
                                        <a href="#" class="new">New</a>
                                        <a href="#" class="product">Product</a>
                                    </div>
                                    <!-- Title -->
                                    <h4 class="title"><a href="#">Sed do eiusmod tempor incididunt ut labore. Lorem Ipsum is simplydummy text of the printing and typesetting industry.</a></h4>
                                    <!-- Meta -->
                                    <ul class="meta">
                                        <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                        <li>By: <a href="#">Howard</a></li>
                                    </ul>
                                </div>

                            </div>

                            <!-- News Item -->
                            <div class="news-item">

                                <!-- Content -->
                                <div class="content">
                                    <!-- Category -->
                                    <div class="categories">
                                        <a href="#" class="support">Support</a>
                                    </div>
                                    <!-- Title -->
                                    <h4 class="title"><a href="#">Sed do eiusmod tempor labore. Lorem Ipsum is simplydummy text of the printing and.</a></h4>
                                    <!-- Meta -->
                                    <ul class="meta">
                                        <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                        <li>By: <a href="#">Aaron</a></li>
                                    </ul>
                                </div>

                            </div>

                            <!-- News Item -->
                            <div class="news-item">

                                <!-- Content -->
                                <div class="content">
                                    <!-- Category -->
                                    <div class="categories">
                                        <a href="#" class="refund">Refund</a>
                                    </div>
                                    <!-- Title -->
                                    <h4 class="title"><a href="#">Sed do eiusmod typesetting industry. Lorem Ipsum is simplydummy text of the printing and typesetting industry.</a></h4>
                                    <!-- Meta -->
                                    <ul class="meta">
                                        <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                        <li>By: <a href="#">Dylan</a></li>
                                    </ul>
                                </div>

                            </div>

                        </div><!-- News & Updates Inner End -->
                    </div>
                </div><!-- News & Updates Wrap End -->
            </div><!-- News & Updates End -->

            <!-- Top Selling Country Start -->
            <div class="col-xlg-7 col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">Top Selling Country</h4>
                    </div>
                    <div class="box-body">
                        <div id="vmap-world-2" class="vmap vmap-world-2"></div>
                    </div>
                </div>
            </div><!-- Top Selling Country End -->

        </div>

    </div><!-- Content Body End -->

    <!-- Footer Section Start -->
    <div class="footer-section">
        <div class="container-fluid">

            <div class="footer-copyright text-center">
                <p class="text-body-light">{{ date('Y') }} &copy; <a href="">Sun Operational Light Initiative Development</a></p>
            </div>

        </div>
    </div><!-- Footer Section End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/vendor/bootstrap.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('admin_assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/tippy4.min.js.js') }}"></script>
<!--Main JS-->
<script src="{{ asset('admin_assets/js/main.js') }}"></script>

<!-- Plugins & Activation JS For Only This Page -->

<!--Moment-->
<script src="{{ asset('admin_assets/js/plugins/moment/moment.min.js') }}"></script>

<!--Daterange Picker-->
<script src="{{ asset('admin_assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

<!--Echarts-->
<script src="{{ asset('admin_assets/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/chartjs/chartjs.active.js') }}"></script>

<!--VMap-->
<script src="{{ asset('admin_assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/vmap/vmap.active.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets\images\favicon.ico') }}" />

    <link rel="shortcut icon" href="assets\images\favicon.ico"><!-- Plugins css -->
    <link href="{{ asset('plugins\bootstrap-colorpicker\css\bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins\bootstrap-datepicker\dist\css\bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins\select2\css\select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins\bootstrap-touchspin\css\jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet">
    <!--Chartist Chart CSS -->
    <link href="{{ asset('assets\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets\css\metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets\css\icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{ asset('assets\images\logo-light.png') }}" alt="" height="18" />
                    </span>
                    <i>
                        <img src="{{ asset('assets\images\logo-sm.png') }}" alt="" height="22" />
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets\images\users\user-4.jpg') }}" alt="user" class="rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-account-circle m-r-5"></i>
                                    Profile
                                </a>

                                <a class="dropdown-item d-block" href="#"> <i class="mdi mdi-settings m-r-5"></i>
                                    Settings</a>

                                <div class="dropdown-divider"></div>

                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item text-danger">
                                        <i class="mdi mdi-power text-danger"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="ti-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="ti-calendar"></i>
                                <span> Master Data
                                    <span class="float-right menu-arrow">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </span>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a href="{{ route('login') }}"> Pegawai / Tenaga Medis</a></li>
                                <li><a href="email-read.html"> Pendidikan</a></li>
                                <li><a href="email-compose.html"> Jabatan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">@yield('page-title')</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Validation</li>
                                </ol>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown"><button
                                            class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="mdi mdi-settings mr-2"></i>
                                            Settings</button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
            <footer class="footer">
                © 2019 Veltrix <span class="d-none d-sm-inline-block">
                    <i class="mdi mdi-heart text-danger"></i> Themesbrand
                </span>.
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('assets\js\jquery.min.js') }}"></script>
    <script src="{{ asset('assets\js\bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets\js\metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets\js\jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets\js\waves.min.js') }}"></script>


    <!-- Plugins js -->
    <script src="{{ asset('plugins\bootstrap-colorpicker\js\bootstrap-colorpicker.min.js') }}">
    </script>
    <script src="{{ asset('plugins\bootstrap-datepicker\js\bootstrap-datepicker.js') }}">
    </script>
    <script src="{{ asset('plugins\select2\js\select2.min.js') }}"></script>
    <script src="{{ asset('plugins\bootstrap-maxlength\bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('plugins\bootstrap-filestyle\js\bootstrap-filestyle.min.js') }}">
    </script>
    <script
        src="{{ asset('plugins\bootstrap-touchspin\js\jquery.bootstrap-touchspin.min.js') }}">
    </script>
    <!-- Plugins Init js -->
    <script src="{{ asset('assets\pages\form-advanced.js') }}"></script>
    <!--Chartist Chart-->
    <script src="{{ asset('assets\js\app.js') }}"></script>
</body>

</html>
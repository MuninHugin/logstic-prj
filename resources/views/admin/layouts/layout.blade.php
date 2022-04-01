<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin E3PL | @if($title){{$title}}@else Blank Page @endif</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link" target="_blank">
            <img src="{{asset('/img/header/LogoE3PL.png')}}" srcset="{{asset('/img/header/LogoE3PL@2x.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">E3PL</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('/img/header/LogoE3PL.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/manage/vars')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Variables Table
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/manage/freight-charges')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Freight Charges Table
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Charts
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../charts/inline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../charts/uplot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>uPlot</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
{{--                    <li class="nav-header">EXAMPLES</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="../calendar.html" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-calendar-alt"></i>--}}
{{--                            <p>--}}
{{--                                Calendar--}}
{{--                                <span class="badge badge-info right">2</span>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../examples/invoice.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Front Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div id="app" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@if($title){{$title}}@else Blank Page @endif</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('manage') }}">Home</a></li>
                            <li class="breadcrumb-item active">@if($title){{$title}}@else Blank Page @endif</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    @yield('content')
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</div>
<script src="{{ asset('assets/admin/js/admin.js') }}"></script>
<script  src="{{mix ('/js/adminApp.js')}}"></script>
<script>
    for (item of document.getElementsByClassName('nav-link')) {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname
        let link = item.href
        if(link === location) {
            item.classList.add('active')
        }
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.ico ') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/fontawesome/css/fontawesome-all.min.css ') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/animation/css/animate.min.css ') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css ') }}">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>

<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Datta Able</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Messages</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                <a href="{{ route('admin-messages') }}" class="nav-link ">
                    <span class="pcoded-micon">
                        <i class="feather icon-box"></i>
                    </span>
                    <span class="pcoded-mtext">Messages</span>
                </a>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                <a href="{{ route('admin-update-template-image') }}" class="nav-link ">
                    <span class="pcoded-micon">
                        <i class="feather icon-image"></i>
                    </span>
                    <span class="pcoded-mtext">Update Template Image</span>
                </a>
                </li>
                {{-- <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li> --}}
                {{-- <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li> --}}
                {{-- <li class="nav-item pcoded-menu-caption">
                    <label>UI Element</label>
                </li>
                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Components</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="bc_button.html" class="">Button</a></li>
                        <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                        <li class=""><a href="bc_breadcrumb-pagination.html" class="">Breadcrumb & paggination</a></li>
                        <li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
                        <li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
                        <li class=""><a href="bc_typography.html" class="">Typography</a></li>


                        <li class=""><a href="icon-feather.html" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item pcoded-menu-caption">
                    <label>Forms & table</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                    <a href="{{ route('admin-messages') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form elements</span></a>
                </li>
                <li data-username="Table bootstrap datatable footable" class="nav-item">
                    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Table</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Chart & Maps</label>
                </li>
                <li data-username="Charts Morris" class="nav-item"><a href="chart-morris.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a></li>
                <li data-username="Maps Google" class="nav-item"><a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a></li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Pages</label>
                </li>
                <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                        <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                    </ul>
                </li>
                <li data-username="Sample Page" class="nav-item"><a href="sample-page.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>
                <li data-username="Disabled Menu" class="nav-item disabled"><a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li> --}}
            </ul>
        </div>
    </div>
</nav>
<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
        <a href="index.html" class="b-brand">
            <div class="b-bg">
                <i class="feather icon-trending-up"></i>
            </div>
            <span class="b-title">Datta Able</span>
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="javascript:">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
            <li class="nav-item">
                <div class="main-search">
                    <div class="input-group">
                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                        <a href="javascript:" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>
                        <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                    </div>
                </div>
            </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
                <input type="submit" style="margin-left: 425px; width:123px; color: white;border-radius: 38px;" name="logout" value="Log out" class="btn btn-info btn-lg">

        </form>
    </div>
</header>

@yield('content')
<script src="{{ asset('admin/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/my.js') }}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body>
</html>

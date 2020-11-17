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

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SI-HIBAH - Sistem Informasi Dana Hibah</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('css/ready.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header d-flex justify-content-center">
                <a href="" class="logo text-center">
                    <img src="{{ asset('img/logo.png') }}" alt="user-img" width="30" class="mr-2">
                    SI-HIBAH
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <img src="{{ asset('img/profile.png') }}" alt="user-img" width="36"
                                    class="img-circle">
                                <span>{{ Auth::guard('web')->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img src="{{ asset('img/profile.png') }}" alt="user">
                                        </div>
                                        <div class="u-text">
                                            <h4>{{ Auth::guard('web')->user()->username }}</h4>
                                            <p class="text-muted">{{ Auth::guard('web')->user()->email }}</p>
                                            <a href="#" class="btn btn-rounded btn-info btn-sm">Profil</a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="la la-sign-out mr-2"></i> Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <ul class="nav">
                    <li
                        class="nav-item {{ request()->routeIs(Auth::user()->role === 'admin' ? 'admin.dashboard' : 'user.dashboard') ? 'active' : '' }}">
                        <a
                            href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}">
                            <i class="la la-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    @if (Auth::user()->role === 'admin')
                        <li class="nav-item {{ request()->routeIs('admin.validate.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.validate.index') }}">
                                <i class="la la-file"></i>
                                <p>Pengajuan</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.contact.index') }}">
                                <i class="la la-phone"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->role === 'user')
                        <li class="nav-item {{ request()->routeIs('user.submission.*') ? 'active' : '' }}">
                            <a href="{{ route('user.submission.index') }}">
                                <i class="la la-edit"></i>
                                <p>Pendaftaran</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        @yield('content')
    </div>

    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugin/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
    <script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/ready.min.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SI-HIBAH - Sistem Informasi Dana Hibah</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('img/logo.png') }}" class="me-3" alt="Logo Meranti">
                <h1 class="sitename">SI-HIBAH</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @php
                        $isAuthPage = request()->is('login') || request()->is('register');
                    @endphp

                    <li><a href="{{ $isAuthPage ? url('/') : '#hero' }}">Beranda</a></li>
                    <li><a href="{{ $isAuthPage ? url('/') : '#about' }}">Tentang Kami</a></li>
                    <li><a href="{{ $isAuthPage ? url('/') : '#features' }}">Keunggulan</a></li>
                    <li><a href="{{ $isAuthPage ? url('/') : '#features-cards' }}">Alur</a></li>
                    <li><a href="{{ $isAuthPage ? url('/') : '#services' }}">Kategori</a></li>
                    <li><a href="{{ $isAuthPage ? url('/') : '#contact' }}">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="d-flex">
                <a class="btn-getstarted" href="{{ route('login.form') }}">Masuk</a>
                <a class="btn-getstarted" href="{{ route('register.form') }}">Daftar</a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <span class="sitename">SI-HIBAH</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Kepulauan Meranti</p>
                        <p>Meranti, Selatpanjang</p>
                        <p class="mt-3">
                            <strong>Phone:</strong>
                            <span>+1 5589 55488 55</span>
                        </p>
                        <p>
                            <strong>Email:</strong>
                            <span>info@meranti.com</span>
                        </p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#features">Keunggulan</a></li>
                        <li><a href="#features-cards">Alur</a></li>
                        <li><a href="#services">Kategori</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Kategori</h4>
                    <ul>
                        <li><a href="#">Pembangunan Sumur Bor</a></li>
                        <li><a href="#">Bantuan Usaha Mikro</a></li>
                        <li><a href="#">Pengadaan Buku Perpustakaan</a></li>
                        <li><a href="#">Pembangunan Masjid</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 text-center footer-links">
                    <h4>Kepulauan Meranti</h4>
                    <img src="{{ asset('img/logo.png') }}" alt="Lambang Meranti" width="35%">
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">SI-HIBAH</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Designed by
                <a href="#">Nadia Khairunnisak</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

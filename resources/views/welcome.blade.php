@extends('layouts.landing-page')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Kesejahteraan Rakyat
                            </div>

                            <h1 class="mb-4">
                                Sistem Informasi <br />
                                <span class="accent-text">Dana Hibah</span>
                            </h1>

                            <p class="mb-3 mb-md-5">
                                Sistem Informasi Dana Hibah membantu pengelolaan pengajuan, verifikasi, dan pencairan
                                dana secara efisien.
                                Platform ini mempermudah lembaga atau individu dalam memantau status permohonan serta
                                transparansi penggunaan anggaran.
                            </p>

                            <div class="hero-buttons">
                                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Ajukan Sekarang</a>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-play-circle me-1"></i>
                                    Tutorial Pengajuan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('img/logo.png') }}" alt="Lambang Meranti" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta mt-3">Sistem Informasi Dana Hibah</span>
                        <h2 class="about-title">
                            Tentang Kami
                        </h2>
                        <p class="about-description">
                            Sistem Informasi Pengajuan Dana Hibah membantu lembaga dan
                            individu dalam mengajukan permohonan dana hibah secara cepat, transparan, dan efisien.
                            Dengan sistem ini, pengguna dapat dengan mudah mengunggah dokumen persyaratan, memantau
                            status pengajuan, serta mendapatkan informasi terbaru terkait proses seleksi.
                        </p>

                        <div class="row feature-list-wrapper">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Pengajuan dana hibah lebih mudah dan cepat
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Proses seleksi yang transparan dan akuntabel
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Notifikasi real-time mengenai status pengajuan
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Dukungan berbagai kategori hibah sesuai kebutuhan
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Terintegrasi dengan sistem verifikasi dan evaluasi
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Laporan dan riwayat pengajuan tersimpan dengan aman
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="info-wrapper">
                            <div class="row gy-4">
                                <div class="col-lg-5">
                                    <div class="profile d-flex align-items-center gap-3">
                                        <img src="{{ asset('img/profile.png') }}" alt="Developer Profile"
                                            class="profile-image" />
                                        <div>
                                            <h4 class="profile-name">
                                                Nadia Khairunnisak
                                            </h4>
                                            <p class="profile-position">
                                                Developer
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-info d-flex align-items-center gap-2">
                                        <i class="bi bi-telephone-fill"></i>
                                        <div>
                                            <p class="contact-label">
                                                Hubungi Kami
                                            </p>
                                            <p class="contact-number">
                                                +123 456-789
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4" />
                                <img src="img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class="features section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Hibah</h2>
                <p>
                    Keunggulan Sistem Hibah
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                <h4>Pengajuan Online</h4>
                            </a>
                        </li>
                        <!-- End tab nav item -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                <h4>Pantau Status</h4>
                            </a>
                        </li>
                        <!-- End tab nav item -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                <h4>Verifikasi Otomatis</h4>
                            </a>
                        </li>
                        <!-- End tab nav item -->
                    </ul>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Voluptatem dignissimos provident</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Duis aute irure dolor in
                                            reprehenderit in voluptate
                                            velit.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis
                                            aute irure dolor in
                                            reprehenderit in voluptate
                                            trideta storacalaperda mastiro
                                            dolore eu fugiat nulla
                                            pariatur.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="img/features-illustration-1.webp" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Neque exercitationem debitis</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Duis aute irure dolor in
                                            reprehenderit in voluptate
                                            velit.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Provident mollitia neque rerum
                                            asperiores dolores quos qui a.
                                            Ipsum neque dolor voluptate nisi
                                            sed.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis
                                            aute irure dolor in
                                            reprehenderit in voluptate
                                            trideta storacalaperda mastiro
                                            dolore eu fugiat nulla
                                            pariatur.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="img/features-illustration-2.webp" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Voluptatibus commodi accusamu</h3>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Duis aute irure dolor in
                                            reprehenderit in voluptate
                                            velit.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>
                                        <span>Provident mollitia neque rerum
                                            asperiores dolores quos qui a.
                                            Ipsum neque dolor voluptate nisi
                                            sed.</span>
                                    </li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="img/features-illustration-3.webp" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->
                </div>
            </div>
        </section>
        <!-- /Features Section -->

        <!-- Features Cards Section -->
        <section id="features-cards" class="features-cards section">

            <div class="timeline-container">
                <div class="timeline-header">
                    <h2>Alur Pengajuan Hibah Online</h2>
                    <p>Panduan lengkap proses pengajuan hibah dari awal hingga pelaporan</p>
                </div>

                <div class="timeline">
                    <div class="timeline-line"></div>
                    <div class="timeline-steps">
                        <!-- Step 1 -->
                        <div class="timeline-step step-1">
                            <div class="timeline-dot">
                                <i class="bi bi-person-plus icon"></i>
                            </div>
                            <div class="timeline-year">Januari</div>
                            <div class="timeline-step-content">
                                <h5>Pendaftaran Akun</h5>
                                <p>Membuat akun dan melengkapi profil di sistem aplikasi hibah online</p>
                                <p class="deadline">Batas waktu: 31 Januari</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="timeline-step step-2">
                            <div class="timeline-dot">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <div class="timeline-year">Februari</div>
                            <div class="timeline-step-content">
                                <h5>Penyusunan Proposal</h5>
                                <p>Mengisi formulir dan mengunggah dokumen pendukung proposal hibah</p>
                                <p class="deadline">Batas waktu: 28 Februari</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="timeline-step step-3">
                            <div class="timeline-dot">
                                <i class="bi bi-send"></i>
                            </div>
                            <div class="timeline-year">Maret</div>
                            <div class="timeline-step-content">
                                <h5>Pengajuan Proposal</h5>
                                <p>Mengirimkan proposal final ke Perangkat Daerah terkait melalui sistem</p>
                                <p class="deadline">Batas waktu: 31 Maret</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="timeline-step step-4">
                            <div class="timeline-dot">
                                <i class="bi bi-search"></i>
                            </div>
                            <div class="timeline-year">April-Mei</div>
                            <div class="timeline-step-content">
                                <h5>Verifikasi Administrasi</h5>
                                <p>Perangkat Daerah melakukan verifikasi kelengkapan dokumen dan persyaratan</p>
                                <p class="deadline">Proses: ± 2 bulan</p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="timeline-step step-5">
                            <div class="timeline-dot">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <div class="timeline-year">Juni</div>
                            <div class="timeline-step-content">
                                <h5>Persetujuan Proposal</h5>
                                <p>Hasil seleksi dan persetujuan proposal oleh Tim Anggaran Pemerintah Daerah</p>
                                <p class="deadline">Pemberitahuan: Akhir Juni</p>
                            </div>
                        </div>

                        <!-- Step 6 -->
                        <div class="timeline-step step-6">
                            <div class="timeline-dot">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <div class="timeline-year">Juli-Oktober</div>
                            <div class="timeline-step-content">
                                <h5>Pencairan Dana</h5>
                                <p>Proses pencairan dana hibah sesuai jadwal yang telah ditentukan</p>
                                <p class="deadline">Pencairan: Juli-Oktober</p>
                            </div>
                        </div>

                        <!-- Step 7 -->
                        <div class="timeline-step step-7">
                            <div class="timeline-dot">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <div class="timeline-year">Januari</div>
                            <div class="timeline-step-content">
                                <h5>Pelaporan</h5>
                                <p>Penyerahan laporan pertanggungjawaban penggunaan dana hibah</p>
                                <p class="deadline">Batas waktu: 10 Januari tahun berikutnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Features Cards Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Proposal diajukan</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Proposal diproses</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Proposal disetujui</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Proposal ditolak</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- /Stats Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kategori Hibah</h2>
                <p>
                    Kategori hibah yang disalurkan
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-activity"></i>
                            </div>
                            <div>
                                <h3>Pembangunan Masjid</h3>
                                <p>Pembuatan masjid di daerah kekeringan untuk menyediakan rumah ibaadah bagi masyarakat
                                </p>
                                <h3>Rp. 150.000.000</h3>
                                <a href="" class="read-more">Selanjutnya
                                    <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <div>
                                <h3>Bantuan Usaha Mikro</h3>
                                <p>Bantuan modal usaha untuk pengembangan bisnis kecil menengah, seperti warung dan UMKM
                                    lainnya</p>
                                <h3>Rp. 50.000.000</h3>
                                <a href="" class="read-more">Selanjutnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-easel"></i>
                            </div>
                            <div>
                                <h3>Pengadaan Buku Perpustakaan</h3>
                                <p>Pembelian buku pelajaran dan referensi untuk meningkatkan kualitas pendidikan di
                                    sekolah</p>
                                <h3>Rp. 50.000.000</h3>
                                <a href="" class="read-more">Selanjutnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-clipboard-data"></i>
                            </div>
                            <div>
                                <h3>Pembangunan Sumur Bor</h3>
                                <p>Pembuatan sumur bor di daerah kekeringan untuk menyediakan air bersih bagi masyarakat
                                </p>
                                <h3>Rp. 50.000.000</h3>
                                <a href="" class="read-more">Selanjutnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Card -->
                </div>
            </div>
        </section>
        <!-- /Services Section -->

        <!-- Call To Action 2 Section -->
        <section id="call-to-action-2" class="call-to-action-2 section dark-background">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Segera Ajukan Proposal Anda!</h3>
                            <p>Jangan lewatkan kesempatan ini! Klik tombol di bawah untuk mengajukan proposal hibah.</p>
                            <a class="cta-btn" href="{{ route('login.form') }}">Ajukan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action 2 Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>
                    Masukkan dan pertanyaan anda yang lain bisa salurkan disini
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Info Lanjut</h3>
                            <p>
                                Jika Anda memiliki pertanyaan atau membutuhkan bantuan terkait aplikasi pengajuan,
                                silakan hubungi kami melalui informasi di bawah ini.
                            </p>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Lokasi</h4>
                                    <p>Kepulauan Meranti</p>
                                    <p>Meranti, Selatpanjang</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p>info@meranti.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Kontak</h3>
                            <p>
                                Jika Anda memiliki pertanyaan atau membutuhkan bantuan terkait aplikasi pengajuan,
                                silakan hubungi kami melalui informasi di bawah ini.
                            </p>

                            <form action="{{ route('contact.submit') }}" method="POST" class="php-email-form"
                                data-aos="fade-up" data-aos-delay="200">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Nama"
                                            required="" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required="" />
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subjek"
                                            required="" />
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">
                                            Your message has been sent.
                                            Thank you!
                                        </div>

                                        <button type="submit" class="btn">
                                            Kirim
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection

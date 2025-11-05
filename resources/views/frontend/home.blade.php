<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <title>PPID UFDK - Pejabat Pengelola Informasi dan Dokumentasi Universitas Fort de Kock</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PPID Universitas Fort de Kock menyediakan layanan informasi publik yang transparan, akurat, dan mudah diakses sesuai UU No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik" />
        <meta name="keywords" content="PPID, UFDK, Universitas Fort de Kock, informasi publik, transparansi, keterbukaan informasi, Bukittinggi" />
        <meta name="author" content="PPID Universitas Fort de Kock" />
        <meta name="robots" content="index, follow" />
        <meta property="og:title" content="PPID UFDK - Layanan Informasi Publik Universitas Fort de Kock" />
        <meta property="og:description" content="Akses informasi publik yang transparan dan akuntabel dari Universitas Fort de Kock" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:image" content="{{ asset('images/logo/LOGO PPID hitam.png') }}" />

        <!-- fevicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />

        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />

        <!-- slider -->
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />

        <!-- Icon -->
        <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}" type="text/css" />

        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        
        <!-- Custom CSS for PPID cards alignment -->
        <link rel="stylesheet" href="{{ asset('css/card-fix.css') }}" type="text/css" />
        
        <!-- Custom CSS for Agenda Kampus -->
        <link rel="stylesheet" href="{{ asset('css/agenda-kampus.css') }}" type="text/css" />
        
        <!-- Custom CSS for PPID Footer -->
        <link rel="stylesheet" href="{{ asset('css/ppid-footer.css') }}" type="text/css" />
        
        <!-- Custom CSS for News Switching -->
        <link rel="stylesheet" href="{{ asset('css/news-switching.css') }}" type="text/css" />
        
        <!-- Enhanced CSS for News Scroll Fix -->
        <link rel="stylesheet" href="{{ asset('css/news-scroll-fix.css') }}" type="text/css" />
        
        <!-- Custom CSS for Service Hours -->
        <link rel="stylesheet" href="{{ asset('css/service-hours.css') }}" type="text/css" />
        
        <!-- Build Assets -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-8HN48N4u.css') }}" type="text/css" />
        
        <!-- Contact Section CSS -->
        <link rel="stylesheet" href="{{ asset('css/contact-section.css') }}" type="text/css" />

    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

        <nav class="navbar navbar-expand-lg navbar-custom" id="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
                    <img class="logo-light" src="{{ asset('images/logo/LOGO PPID UFDK-01.png') }}" alt="" height="70">
                    <img class="logo-dark" src="{{ asset('images/logo/LOGO PPID UFDK-01.png') }}" alt="" height="70">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                    <!-- toggle button -->
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto" id="navbar-navlist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#ppid" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil PPID
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                                <li><a class="dropdown-item" href="{{ route('ppid.profil') }}">Profil</a></li>
                                <li><a class="dropdown-item" href="{{ route('ppid.maklumat') }}">Maklumat Layanan Informasi Publik</a></li>
                                <li><a class="dropdown-item" href="{{ route('ppid.visi-misi') }}">Visi dan Misi</a></li>
                                <li><a class="dropdown-item" href="{{ route('ppid.tugas-fungsi') }}">Tugas dan Fungsi</a></li>
                                <li><a class="dropdown-item" href="{{ route('ppid.struktur-organisasi') }}">Struktur Organisasi</a></li>
                                <li><a class="dropdown-item" href="{{ route('ppid.regulasi') }}">Regulasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#informasi" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Informasi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                                <li><a class="dropdown-item" href="#daftar-informasi">Daftar Informasi Publik</a></li>
                                <li><a class="dropdown-item" href="#informasi-berkala">Informasi Wajib Diumumkan Berkala</a></li>
                                <li><a class="dropdown-item" href="#informasi-tersedia">Informasi Wajib Tersedia Setiap Saat</a></li>
                                <li><a class="dropdown-item" href="#informasi-serta-merta">Informasi Wajib Diumumkan Serta Merta</a></li>
                                <li><a class="dropdown-item" href="#informasi-dikecualikan">Informasi yang Dikecualikan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#tata-cara" id="tataCaraDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tata Cara
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="tataCaraDropdown">
                                <li><a class="dropdown-item" href="#pengaduan-pejabat">Tata Cara Pengaduan Pejabat</a></li>
                                <li><a class="dropdown-item" href="#pengaduan-mitra">Tata Cara Pengaduan Mitra Kerja Sama</a></li>
                                <li><a class="dropdown-item" href="#permohonan-informasi">Permohonan Informasi Publik</a></li>
                                <li><a class="dropdown-item" href="#pengajuan-keberatan">Tata Cara Pengajuan Keberatan</a></li>
                                <li><a class="dropdown-item" href="#penyelesaian-sengketa">Penyelesaian Sengketa Informasi</a></li>
                                <li><a class="dropdown-item" href="#pengujian-konsekuensi">Tata Cara Pengujian Konsekuensi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#permohonan" id="permohonanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Permohonan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="permohonanDropdown">
                                <li><a class="dropdown-item" href="#formulir-pengaduan">Formulir Pengaduan</a></li>
                                <li><a class="dropdown-item" href="#formulir-permohonan-informasi">Formulir Permohonan Informasi Publik</a></li>
                                <li><a class="dropdown-item" href="#formulir-keberatan">Formulir Keberatan atas Permohonan Informasi Publik</a></li>
                                <li><a class="dropdown-item" href="#formulir-gratifikasi">Formulir Pengaduan Gratifikasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mb-3 mb-lg-0" href="#berita" id="beritaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Berita
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="beritaDropdown">
                                <li><a class="dropdown-item" href="#news">Berita</a></li>
                                <li><a class="dropdown-item" href="#agenda">Agenda</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- End container -->
        </nav>
        <!-- End Navbar -->

        <div class="overflow-hidden-x">
            <!-- Start Bootstrap Carousel Banner -->
            <section id="home">
                <div id="ppidCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#ppidCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#ppidCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#ppidCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#ppidCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    
                    <!-- Carousel Inner -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/banner/Banner Website PPID UFDK-03.jpg') }}" class="d-block w-100 carousel-image" alt="PPID Banner 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner/Banner Website PPID UFDK-02.jpg') }}" class="d-block w-100 carousel-image" alt="PPID Banner 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner/Banner Website PPID UFDK-04.jpg') }}" class="d-block w-100 carousel-image" alt="PPID Banner 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner/Banner Website PPID UFDK-01.jpg') }}" class="d-block w-100 carousel-image" alt="PPID Banner 4">
                        </div>
                    </div>
                    
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#ppidCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#ppidCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <!-- End Bootstrap Carousel Banner -->

        <!-- Start PPID Section -->
        <section class="section ppid" id="ppid">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <h3 class="feature-heading"><span class="first-letter desktop-style">P</span>PID UNIVERSITAS FORT DE KOCK</h3>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <a class="accordion-button" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div>
                                            <p class="mb-0">Profil Singkat</p>
                                        </div>
                                    </a>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14 text-muted mb-1">PPID UFDK dibentuk berdasarkan Undang-Undang Nomor 14 Tahun 2008 tentang
                                        Keterbukaan Informasi Publik (KIP) dan peraturan turunannya...</p>
                                        <a href="javascript:void(0)">
                                            Selengkapnya <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div>
                                            <p class="mb-0">Visi dan Misi</p>
                                        </div>
                                    </a>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14 text-muted mb-0">Mewujudkan layanan informasi yang terbuka, cepat, tepat, dan berkualitas guna mendukung
                                            tata kelola Universitas Fort De Kock yang transparan, akuntabel, dan partisipatif.</p>
                                        <a href="javascript:void(0)" class="fs-14 text-decoration-none">
                                            Selengkapnya <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div>
                                            <p class="mb-0">Tugas dan Fungsi</p>
                                        </div>
                                    </a>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14 text-muted mb-0">tugas dan fungsi PPID Universitas Fort de Kock berpusat pada pengelolaan dan pelayanan informasi publik yang transparan, akurat, dan mudah diakses.</p>
                                        <a href="javascript:void(0)" class="fs-14 text-decoration-none">
                                            Selengkapnya <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <div class="card bg-transparent border-0">
                                <img src="{{ asset('images/gedungutama.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row-->
            </div><!-- end container -->
        </section>
        <!-- End PPID Section -->

        <!-- Start features -->
        <section class="section feature" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-4">
                            <h2 class="heading">Layanan PPID UFDK</h2>
                            <p class="text-muted fs-17">Pejabat Pengelola Informasi dan Dokumentasi menyediakan layanan sebagai berikut.</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
                <div class="ppid-cards-container">
                    <div class="ppid-card-wrapper">
                        <div data-aos="fade-right" data-aos-duration="1800" class="w-100">
                            <div class="ppid-feature-card p-3 py-sm-4 rounded">
                                <div class="ppid-card-content">
                                    <div class="ppid-icon-container">
                                        <i class="mdi mdi-file-document-multiple-outline text-primary h2"></i>
                                    </div>
                                    <div class="ppid-text-content">
                                        <div class="ppid-content-body">
                                            <h5 class="title">Informasi</h5>
                                            <p class="text-muted mb-2">Informasi publik yang tersedia:</p>
                                            <ul class="list-unstyled text-muted small mb-3">
                                                <li>• Informasi Wajib Berkala</li>
                                                <li>• Informasi Tersedia Saat Ini</li>
                                                <li>• Informasi Serta Merta</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ppid-button-container">
                                    <a href="javascript:void(0)" class="text-dark">Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card wrapper -->
                    <div class="ppid-card-wrapper">
                        <div data-aos="fade-up" data-aos-duration="1800" class="w-100">
                            <div class="ppid-feature-card p-3 py-sm-4 rounded">
                                <div class="ppid-card-content">
                                    <div class="ppid-icon-container">
                                        <i class="mdi mdi-clipboard-list-outline text-primary h2"></i>
                                    </div>
                                    <div class="ppid-text-content">
                                        <div class="ppid-content-body">
                                            <h5 class="title">Tata Cara</h5>
                                            <p class="text-muted mb-2">Prosedur dan mekanisme:</p>
                                            <ul class="list-unstyled text-muted small mb-3">
                                                <li>• Tata Cara Pengaduan Pejabat</li>
                                                <li>• Tata Cara Pengaduan Mitra Kerja Sama</li>
                                                <li>• Tata Cara Pengajuan Keberatan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ppid-button-container">
                                    <a href="javascript:void(0)" class="text-dark">Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card wrapper -->
                    <div class="ppid-card-wrapper">
                        <div data-aos="fade-left" data-aos-duration="1800" class="w-100">
                            <div class="ppid-feature-card p-3 py-sm-4 rounded">
                                <div class="ppid-card-content">
                                    <div class="ppid-icon-container">
                                        <i class="mdi mdi-file-document-edit-outline text-primary h2"></i>
                                    </div>
                                    <div class="ppid-text-content">
                                        <div class="ppid-content-body">
                                            <h5 class="title">Permohonan</h5>
                                            <p class="text-muted mb-2">Formulir dan layanan:</p>
                                            <ul class="list-unstyled text-muted small mb-3">
                                                <li>• Formulir Pengaduan</li>
                                                <li>• Formulir Permohonan Informasi Publik</li>
                                                <li>• Formulir Keberatan Atas Layanan Informasi Publik</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ppid-button-container">
                                    <a href="javascript:void(0)" class="text-dark">Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card wrapper -->
                </div><!-- end row -->


            </div><!-- end container -->
        </section>
        <!-- end Features -->

        <!-- Start cta -->
        <section class="section cta">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div data-aos="fade-down" data-aos-duration="1800">
                            <h3 class="fw-bold">Maklumat</h3>
                            <p>Kami menyatakan siap memberikan layanan informasi publik bagi masyarakat sesuai dengan amanat Undang-Undang nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</p>
                            <a class="btn btn-primary" href="javascript:void(0)">Selengkapnya</a>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </section>
        <!-- End cta -->



        <!-- Start Team -->
        <section class="section team" style="z-index: 1;">
            <div class="team-background-pattern">
                <div class="floating-shape shape-1"></div>
                <div class="floating-shape shape-2"></div>
                <div class="floating-shape shape-3"></div>
                <div class="floating-shape shape-4"></div>
                <div class="floating-shape shape-5"></div>
            </div>
            <!-- end modern background -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading">Pimpinan PPID</h2>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row -->
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="team-card">
                            <div class="team-card-img">
                               <img class="img-fluid" src="{{ asset('images/user/deal1.png') }}" alt="image">
                                <div class="team-social-icons">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Atasan PPID UFDK</h5>
                                <p class="mb-0 fs-13 text-muted">Prof. Dr. Hj. Evi Hasnita, S.Pd, Ns, M.Kes</p>
                            </div>
                        </div>
                    </div><!-- End col -->
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="team-card">
                            <div class="team-card-img">
                               <img class="img-fluid" src="{{ asset('images/user/deal2.png') }}" alt="image">
                                <div class="team-social-icons">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" target="">
                                                <i class="mdi mdi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">PPID Utama UFDK</h5>
                                <p class="mb-0 fs-13 text-muted">Wendo Afriyoma Pratama, S. Ds., M. Sn.</p>
                            </div>
                        </div>
                    </div><!-- End col -->
                </div><!-- end row-->
            </div><!-- end cotainer-->
        </section>
        <!-- End Team -->

        <!-- START news -->
        <section class="section news" id="news">
            <div class="bg-shape"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="heading">Berita Terkini</h2>
                            <p class="text-muted fs-17">Dapatkan informasi terbaru seputar transparansi informasi publik, 
                                kebijakan pemerintah, dan perkembangan layanan PPID yang dapat diakses oleh masyarakat.</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- End row -->
                
                <!-- News Container with proper CSS classes -->
                <div class="news-container">
                    <!-- Main News Article (Left Side) -->
                    <div class="main-news" data-aos="fade-right" data-aos-duration="1800" data-news-id="1">
                        <div class="main-news-image">
                            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                 alt="Berita Utama">
                            <div class="news-category">Transparansi</div>
                            <div class="news-date">15 Desember 2024</div>
                        </div>
                        <div class="main-news-content">
                            <div class="main-news-meta">
                                <div class="news-author">
                                    <i class="mdi mdi-account"></i>
                                    <span>Admin PPID</span>
                                </div>
                                <div class="news-views">
                                    <i class="mdi mdi-eye"></i>
                                    <span>1,245</span>
                                </div>
                            </div>
                            <h3 class="main-news-title">
                                Implementasi Sistem Informasi PPID Terpadu untuk Meningkatkan Transparansi Publik
                            </h3>
                            <p class="main-news-excerpt">
                                Pemerintah meluncurkan sistem informasi publik digital terbaru yang memungkinkan masyarakat 
                                mengakses berbagai data dan informasi pemerintahan secara real-time. Sistem ini dirancang 
                                untuk meningkatkan transparansi dan akuntabilitas dalam penyelenggaraan pemerintahan, 
                                serta mempermudah masyarakat dalam mengakses layanan publik.
                            </p>
                            <a href="#" class="read-more-btn">
                                Baca Selengkapnya
                                <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- News Sidebar (Right Side) -->
                    <div class="news-sidebar" data-aos="fade-left" data-aos-duration="1800">
                        <h4 class="sidebar-title">Berita Lainnya</h4>
                        
                        <div class="news-list">
                            <!-- News Item 1 -->
                            <div class="news-item" data-news-id="2" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Peluncuran Portal PPID Online untuk Kemudahan Akses Informasi">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 1">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Peluncuran Portal PPID Online untuk Kemudahan Akses Informasi
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>14 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>892</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 2 -->
                            <div class="news-item" data-news-id="3" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Regulasi Baru Tentang Keterbukaan Informasi Publik Tahun 2024">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 2">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Regulasi Baru Tentang Keterbukaan Informasi Publik Tahun 2024
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>13 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>756</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 3 -->
                            <div class="news-item" data-news-id="4" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Workshop Literasi Informasi Publik untuk Masyarakat">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 3">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Workshop Literasi Informasi Publik untuk Masyarakat
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>12 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>634</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 4 -->
                            <div class="news-item" data-news-id="5" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Pemeliharaan Sistem PPID Terjadwal Minggu Depan">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 4">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Pemeliharaan Sistem PPID Terjadwal Minggu Depan
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>11 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>423</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 5 -->
                            <div class="news-item" data-news-id="6" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Integrasi AI dalam Sistem Pelayanan Informasi Publik">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 5">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Integrasi AI dalam Sistem Pelayanan Informasi Publik
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>10 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>567</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 6 -->
                            <div class="news-item" data-news-id="7" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Kerjasama PPID dengan Universitas untuk Penelitian Transparansi">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 6">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Kerjasama PPID dengan Universitas untuk Penelitian Transparansi
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>9 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>389</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 7 -->
                            <div class="news-item" data-news-id="8" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Pelatihan Pengelolaan Dokumen Digital untuk Aparatur">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 7">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Pelatihan Pengelolaan Dokumen Digital untuk Aparatur
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>8 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>445</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 8 -->
                            <div class="news-item" data-news-id="9" tabindex="0" role="button" aria-label="Klik untuk melihat berita: Evaluasi Kinerja PPID Semester II Tahun 2024">
                                <div class="news-item-image">
                                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                         alt="Berita 8">
                                </div>
                                <div class="news-item-content">
                                    <h6 class="news-item-title">
                                        Evaluasi Kinerja PPID Semester II Tahun 2024
                                    </h6>
                                    <div class="news-item-meta">
                                        <div class="news-item-date">
                                            <i class="mdi mdi-calendar"></i>
                                            <span>7 Des 2024</span>
                                        </div>
                                        <div class="news-item-views">
                                            <i class="mdi mdi-eye"></i>
                                            <span>523</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End container -->
        </section>
        <!-- END news -->

        <!-- Start cta -->
        <section class="section cta">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                        <div class="banner-wrapper" data-aos="fade-right" data-aos-duration="1800">
                            <a href="https://elhkpn.kpk.go.id/portal/user/login#announ" target="_blank" class="banner-link">
                                <div class="banner-container">
                                    <img src="{{ asset('images/banner/banner-lhkpn.jpg') }}" alt="LHKPN - Laporan Harta Kekayaan Penyelenggara Negara" class="banner-image">
                                    <div class="banner-overlay"></div>
                                </div>
                            </a>
                        </div>
                    </div><!-- end col-->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner-wrapper" data-aos="fade-left" data-aos-duration="1800">
                            <a href="https://www.lapor.go.id/" target="_blank" class="banner-link">
                                <div class="banner-container">
                                    <img src="{{ asset('images/banner/banner-lapor.jpg') }}" alt="LAPOR! - Layanan Aspirasi dan Pengaduan Online Rakyat" class="banner-image">
                                    <div class="banner-overlay"></div>
                                </div>
                            </a>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </section>
        <!-- End cta -->

        <!-- Start Agenda Kampus -->
        <section class="agenda-kampus" id="agenda">
            <div class="agenda-background-pattern"></div>
            <div class="container">
                <!-- Header Section -->
                <div class="agenda-header" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Agenda Kampus</h2>
                    <p class="university-name">Universitas Fort de Kock</p>
                    <p class="description">
                        Ikuti berbagai kegiatan dan acara penting yang diselenggarakan 
                        oleh Universitas Fort de Kock sepanjang tahun akademik.
                    </p>
                </div>

                <!-- Agenda Container -->
                <div class="agenda-container" data-aos="fade-up" data-aos-duration="1200">
                    <!-- Agenda List -->
                    <div class="agenda-list">
                        <!-- Akademik Category -->
                        <div class="agenda-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="agenda-date">
                                <span class="date-number">15</span>
                                <span class="date-month">NOV</span>
                                <span class="date-year">2024</span>
                            </div>
                            <div class="agenda-content">
                                <div class="agenda-category akademik">Akademik</div>
                                <h4 class="agenda-title">Wisuda ke-105 Universitas Fort de Kock</h4>
                                <p class="agenda-description">Upacara wisuda untuk lulusan periode 2024/2025 dengan berbagai program studi.</p>
                            </div>
                            <div class="agenda-action">
                                <span class="agenda-status upcoming">Mendatang</span>
                            </div>
                        </div>

                        <div class="agenda-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="agenda-date">
                                <span class="date-number">26</span>
                                <span class="date-month">AUG</span>
                                <span class="date-year">2025</span>
                            </div>
                            <div class="agenda-content">
                                <div class="agenda-category akademik">Akademik</div>
                                <h4 class="agenda-title">Pengenalan Budaya Akademik dan Kemahasiswaan (PBAK) 2025</h4>
                                <p class="agenda-description">Orientasi mahasiswa baru untuk memperkenalkan budaya akademik dan kehidupan kampus.</p>
                            </div>
                            <div class="agenda-action">
                                <span class="agenda-status upcoming">Mendatang</span>
                            </div>
                        </div>

                        <!-- Penelitian & Pengabdian Category -->
                        <div class="agenda-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="agenda-date">
                                <span class="date-number">13</span>
                                <span class="date-month">AUG</span>
                                <span class="date-year">2025</span>
                            </div>
                            <div class="agenda-content">
                                <div class="agenda-category penelitian">Penelitian</div>
                                <h4 class="agenda-title">Seminar Nasional Kimia dan Teknologi Pangan 2025</h4>
                                <p class="agenda-description">Seminar nasional dengan tema inovasi teknologi pangan berkelanjutan.</p>
                            </div>
                            <div class="agenda-action">
                                <span class="agenda-status upcoming">Mendatang</span>
                            </div>
                        </div>

                        <div class="agenda-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="agenda-date">
                                <span class="date-number">05</span>
                                <span class="date-month">SEP</span>
                                <span class="date-year">2025</span>
                            </div>
                            <div class="agenda-content">
                                <div class="agenda-category penelitian">Penelitian</div>
                                <h4 class="agenda-title">Workshop Metodologi Penelitian untuk Dosen Muda</h4>
                                <p class="agenda-description">Pelatihan metodologi penelitian untuk meningkatkan kualitas riset dosen muda.</p>
                            </div>
                            <div class="agenda-action">
                                <span class="agenda-status upcoming">Mendatang</span>
                            </div>
                        </div>

                        <!-- Kerjasama Category -->
                        <div class="agenda-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="agenda-date">
                                <span class="date-number">18</span>
                                <span class="date-month">SEP</span>
                                <span class="date-year">2025</span>
                            </div>
                            <div class="agenda-content">
                                <div class="agenda-category kerjasama">Pengabdian</div>
                                <h4 class="agenda-title">Program Literasi Digital Nagari</h4>
                                <p class="agenda-description">Pengabdian masyarakat untuk meningkatkan literasi digital di nagari sekitar kampus.</p>
                            </div>
                            <div class="agenda-action">
                                <span class="agenda-status upcoming">Mendatang</span>
                            </div>
                        </div>

                        <div class="agenda-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="agenda-date">
                                <span class="date-number">12</span>
                                <span class="date-month">OCT</span>
                                <span class="date-year">2025</span>
                            </div>
                            <div class="agenda-content">
                                <div class="agenda-category kerjasama">Kerjasama</div>
                                <h4 class="agenda-title">MoU dengan Industri Pariwisata Sumatera Barat</h4>
                                <p class="agenda-description">Penandatanganan kerjasama dengan industri pariwisata untuk program magang mahasiswa.</p>
                            </div>
                            <div class="agenda-action">
                                <span class="agenda-status upcoming">Mendatang</span>
                            </div>
                        </div>
                    </div>

                    <!-- View All Button -->
                    <div class="agenda-footer" data-aos="fade-up" data-aos-delay="700">
                        <button class="btn-view-all">
                            <span>Lihat Semua Agenda</span>
                            <i class="mdi mdi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Agenda Kampus -->

        <!-- Start Contact Section -->
        <section class="section contact" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="heading">Hubungi Kami</h2>
                            <p class="text-muted fs-17">
                                Untuk informasi lebih lanjut mengenai layanan PPID atau untuk mengajukan 
                                permohonan informasi publik, silakan hubungi kami melalui kontak di bawah ini.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="contact-info-card" data-aos="fade-right" data-aos-duration="1800">
                            <h4 class="mb-4">Informasi Kontak</h4>
                            
                            <div class="contact-item-detail mb-4">
                                <div class="contact-icon-wrapper">
                                    <i class="mdi mdi-map-marker contact-icon"></i>
                                </div>
                                <div class="contact-content">
                                    <h6>Alamat</h6>
                                    <p class="text-muted mb-0">
                                        Jalan Soekarno Hatta No. 11, Manggis Ganting,<br>
                                        Kecamatan Mandiangin Koto Selayan,<br>
                                        Kota Bukittinggi, Sumatera Barat 26117
                                    </p>
                                </div>
                            </div>
                            
                            <div class="contact-item-detail mb-4">
                                <div class="contact-icon-wrapper">
                                    <i class="mdi mdi-phone contact-icon"></i>
                                </div>
                                <div class="contact-content">
                                    <h6>Telepon</h6>
                                    <p class="text-muted mb-0">+62 752 123456</p>
                                </div>
                            </div>
                            
                            <div class="contact-item-detail mb-4">
                                <div class="contact-icon-wrapper">
                                    <i class="mdi mdi-email contact-icon"></i>
                                </div>
                                <div class="contact-content">
                                    <h6>Email</h6>
                                    <p class="text-muted mb-0">ppid@ufdk.ac.id</p>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div class="contact-form-card" data-aos="fade-left" data-aos-duration="1800">
                            <h4 class="mb-4">Kirim Pesan</h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="mdi mdi-send me-2"></i>Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- START FOOTER PPID - LAYOUT 4 KOLOM SEIMBANG -->
        <footer class="ppid-footer-dark">
            <div class="container">
                <div class="row">
                    <!-- Kolom 1: Logo PPID + Kepanjangan -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="footer-logo-section">
                            <!-- Logo Hierarchy: UFDK first, then PPID -->
                            <div class="logo-hierarchy">
                                <img src="{{ asset('images/Logo UFDK-01.png') }}" alt="Logo UFDK" class="logo-ufdk-main">
                                <img src="{{ asset('images/logo/LOGO PPID UFDK-03.png') }}" alt="Logo PPID" class="logo-ppid-secondary">
                            </div>
                            <div class="institution-info">
                                <h5 class="footer-title">PPID</h5>
                                <p class="footer-subtitle">Pejabat Pengelola Informasi dan Dokumentasi<br>Universitas Fort de Kock</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom 2: Alamat & Kontak -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="footer-contact-section">
                            <h6 class="footer-heading">ALAMAT & KONTAK</h6>
                            <div class="address-content">
                                <p class="address-compact">
                                    <i class="mdi mdi-map-marker contact-icon"></i>
                                    <strong>Gedung Rektorat Lt 1 Universitas Fort de Kock</strong>
                                    <span >Jalan Soekarno Hatta No. 11 Manggis Ganting, Mandiangin Koto Selayan<br>
                                    Bukittinggi, Sumatera Barat 26117</span>
                                </p>
                            </div>
                            <div class="contact-info mt-3">
                                <p class="contact-item">
                                    <i class="mdi mdi-phone contact-icon"></i>
                                    <span>+62 752 123456</span>
                                </p>
                                <p class="contact-item">
                                    <i class="mdi mdi-email contact-icon"></i>
                                    <span>ppid@ufdk.ac.id</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom 3: Link Terkait & Layanan -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="footer-links-section">
                            <h6 class="footer-heading">LINK TERKAIT</h6>
                            <ul class="footer-links">
                                <li><a href="#" class="footer-link">Profil PPID</a></li>
                                <li><a href="https://lapor.go.id" target="_blank" class="footer-link">LAPOR</a></li>
                                <li><a href="https://elhkpn.kpk.go.id" target="_blank" class="footer-link">LHKPN</a></li>
                                <li><a href="#" class="footer-link">Permohonan Informasi</a></li>
                                <li><a href="#" class="footer-link">Daftar Informasi Publik</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Kolom 4: Jam Layanan -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="footer-service-section">
                            <h6 class="footer-heading">JAM LAYANAN</h6>
                            <div class="service-hours-vertical">
                                <!-- Senin - Jumat -->
                                <div class="service-day-block mb-2">
                                    <div class="service-day-header">
                                        <i class="mdi mdi-calendar-clock service-icon"></i>
                                        <span class="service-day">Senin - Jum'at</span>
                                    </div>
                                    <div class="service-times-vertical">
                                        <div class="service-time-item">
                                            <i class="mdi mdi-clock-outline time-icon"></i>
                                            <span class="service-time">09.00 - 12.00 WIB</span>
                                        </div>
                                        <div class="service-time-item">
                                            <i class="mdi mdi-clock-outline time-icon"></i>
                                            <span class="service-time">13.00 - 15.00 WIB</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Sabtu -->
                                <div class="service-day-block">
                                    <div class="service-day-header">
                                        <i class="mdi mdi-calendar-clock service-icon"></i>
                                        <span class="service-day">Sabtu</span>
                                    </div>
                                    <div class="service-times-vertical">
                                        <div class="service-time-item">
                                            <i class="mdi mdi-clock-outline time-icon"></i>
                                            <span class="service-time">09.00 - 12.00 WIB</span>
                                        </div>
                                        <div class="service-time-item">
                                            <i class="mdi mdi-clock-outline time-icon"></i>
                                            <span class="service-time">13.00 - 14.00 WIB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER PPID -->
        </div>

        <!-- COPYRIGHT SECTION -->
        <div class="ppid-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="copyright-text">
                                © <script>document.write(new Date().getFullYear())</script> 
                                PPID Universitas Fort de Kock. Pustik Team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END COPYRIGHT SECTION -->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <!--Custom js-->
        <script src="{{ asset('js/counter.js') }}"></script>

        <!--Bootstrap Js-->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <!-- animation -->
        <script src="{{ asset('js/aos.js') }}"></script>

        <!-- swiper js -->
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

        <!-- contact -->
        <script src="{{ asset('js/contact.js') }}"></script>

        <!-- Team particles-->
        <script src="{{ asset('js/particles.min.js') }}"></script>

        <!-- App Js -->
        <script src="{{ asset('build/assets/app-BiuuSBn-.js') }}"></script>

        <!-- Navbar Scroll Behavior -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- News Scroll Enhancement -->
        <script src="{{ asset('js/news-scroll.js') }}"></script>

        <!-- Agenda Kampus JavaScript -->
        <script src="{{ asset('js/agenda-kampus.js') }}"></script>

        <!-- Bootstrap Carousel Configuration -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Bootstrap carousel with auto-slide
                const ppidCarousel = new bootstrap.Carousel('#ppidCarousel', {
                    interval: 5000, // Auto-slide every 5 seconds
                    ride: 'carousel',
                    pause: 'hover', // Pause on hover
                    wrap: true, // Loop infinitely
                    touch: true // Enable touch/swipe support
                });
            });
        </script>

        <!-- Back to Top Function -->
        <script>
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            // Combined scroll handler for back-to-top button
            // Note: Navbar scroll behavior is handled by app.js using addEventListener
            function handleBackToTopScroll() {
                const backToTopBtn = document.getElementById("back-to-top");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backToTopBtn.style.display = "block";
                } else {
                    backToTopBtn.style.display = "none";
                }
            }

            // Use addEventListener instead of window.onscroll to avoid conflicts
            window.addEventListener('scroll', handleBackToTopScroll, { passive: true });
        </script>

    </body>
</html>
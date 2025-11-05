<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <title>Profil PPID - PPID Universitas Fort de Kock</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Profil Pejabat Pengelola Informasi dan Dokumentasi (PPID) Universitas Fort de Kock" />
        <meta name="keywords" content="PPID, Profil, Universitas Fort de Kock, Informasi Publik" />
        <meta name="author" content="PPID UFDK" />
        <meta name="email" content="ppid@ufdk.ac.id" />
        <meta name="website" content="https://ppid.ufdk.ac.id" />
        <meta name="Version" content="v1.0.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

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
        
        <!-- Footer CSS -->
        <link rel="stylesheet" href="{{ asset('css/ppid-footer.css') }}" type="text/css" />
        
        <!-- Service Hours CSS -->
        <link rel="stylesheet" href="{{ asset('css/service-hours.css') }}" type="text/css" />

        <style>
            .hero-section {
                background: linear-gradient(135deg, #ff8800 0%, #ff4400 25%, #ff6600 50%, #ff9900 75%, #ffaa00 100%);
                padding: 120px 0 80px;
                color: white;
                position: relative;
                overflow: hidden;
            }
            
            .hero-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: 
                    radial-gradient(circle at 15% 85%, rgba(255, 136, 0, 0.4) 0%, transparent 40%),
                    radial-gradient(circle at 85% 15%, rgba(255, 68, 0, 0.4) 0%, transparent 40%),
                    radial-gradient(circle at 50% 50%, rgba(255, 170, 0, 0.2) 0%, transparent 60%),
                    linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
                opacity: 0.9;
            }
            
            .hero-content {
                position: relative;
                z-index: 2;
            }
            
            .ppid-content {
                padding: 80px 0;
                background: #f8f9fa;
            }
            
            .ppid-card {
                background: white;
                border-radius: 15px;
                padding: 40px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                margin-bottom: 30px;
                transition: all 0.3s ease;
                border-left: 5px solid #ff9000;
            }
            
            .ppid-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            }
            
            .ppid-card h3 {
                color: #2c3e50;
                font-weight: 700;
                margin-bottom: 20px;
                font-size: 1.5rem;
            }
            
            .ppid-card p {
                color: #7f8c8d;
                line-height: 1.8;
                margin-bottom: 0;
            }
            
            .ppid-card ul {
                color: #7f8c8d;
                line-height: 1.8;
            }
            
            .ppid-card ul li {
                margin-bottom: 8px;
            }
            
            .icon-box {
                width: 80px;
                height: 80px;
                background: linear-gradient(135deg, #ff8800 0%, #ff4400 50%, #ffaa00 100%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
                color: white;
                font-size: 2rem;
                box-shadow: 0 8px 25px rgba(255, 136, 0, 0.4), 0 4px 15px rgba(255, 68, 0, 0.3);
                border: 2px solid rgba(255, 255, 255, 0.2);
            }
            
            .stats-section {
                background: linear-gradient(135deg, #2c3e50, #34495e);
                padding: 60px 0;
                color: white;
            }
            
            .stat-item {
                text-align: center;
                padding: 20px;
            }
            
            .stat-number {
                font-size: 3rem;
                font-weight: 700;
                color: #ff8800;
                display: block;
                text-shadow: 0 2px 4px rgba(255, 136, 0, 0.3);
            }
            
            .stat-label {
                font-size: 1.1rem;
                margin-top: 10px;
                opacity: 0.9;
            }
        </style>
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
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#ppid" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil PPID
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                                <li><a class="dropdown-item active" href="{{ route('ppid.profil') }}">Profil</a></li>
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
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Hero Section Start -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="hero-content text-center" data-aos="fade-up">
                            <h1 class="display-4 fw-bold mb-4">Profil PPID</h1>
                            <p class="lead mb-0">Pejabat Pengelola Informasi dan Dokumentasi<br>Universitas Fort de Kock</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Modern PPID Content Start -->
        <section class="profil-lorem-modern">
            <div class="container">
                <!-- Header Section -->
                <div class="profil-header-modern" data-aos="fade-up">
                    <h2 class="section-title-modern">PPID Universitas Fort de Kock</h2>
                    <div class="title-underline-modern"></div>
                </div>

                <!-- Content Grid -->
                <div class="profil-content-grid" data-aos="fade-up" data-aos-delay="200" style="align-items: center;">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="lorem-card-modern">
                            <div class="card-content-modern">
                                <p class="lorem-paragraph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                
                                <p class="lorem-paragraph">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </p>
                                

                            </div>
                        </div>
                    </div>

                    <!-- Video Column -->
                    <div class="video-column">
                        <div class="video-container-modern">
                            <div class="video-wrapper-modern">
                                <iframe 
                                    src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                                    title="Video Profil PPID" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="video-info-modern">
                                <h4 class="video-title-modern">Video Profil PPID</h4>
                                <p class="video-description-modern">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modern PPID Content End -->



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

            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true
            });
        </script>
    </body>
</html>
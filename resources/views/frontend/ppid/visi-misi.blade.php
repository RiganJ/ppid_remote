<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <title>Visi dan Misi - PPID Universitas Fort de Kock</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Visi dan Misi PPID Universitas Fort de Kock" />
        <meta name="keywords" content="PPID, Visi, Misi, Universitas Fort de Kock" />
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
        
        <!-- PPID Footer CSS -->
        <link rel="stylesheet" href="{{ asset('css/ppid-footer.css') }}" type="text/css" />
        
        <!-- Service Hours CSS -->
        <link rel="stylesheet" href="{{ asset('css/service-hours.css') }}" type="text/css" />

        <style>
            .hero-section {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
                opacity: 0.3;
            }
            
            .hero-content {
                position: relative;
                z-index: 2;
            }
            
            .visi-misi-content {
                padding: 80px 0;
                background: #f8f9fa;
            }
            
            .visi-misi-card {
                background: white;
                border-radius: 15px;
                padding: 40px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                margin-bottom: 30px;
                transition: all 0.3s ease;
                height: 100%;
            }
            
            .visi-card {
                border-left: 5px solid #e74c3c;
            }
            
            .misi-card {
                border-left: 5px solid #3498db;
            }
            
            .visi-misi-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            }
            
            .visi-misi-card h3 {
                color: #2c3e50;
                font-weight: 700;
                margin-bottom: 20px;
                font-size: 1.8rem;
            }
            
            .visi-misi-card p, .visi-misi-card li {
                color: #7f8c8d;
                line-height: 1.8;
            }
            
            .visi-misi-card ul li {
                margin-bottom: 15px;
                position: relative;
                padding-left: 25px;
            }
            
            .visi-misi-card ul li::before {
                content: '✓';
                position: absolute;
                left: 0;
                color: #3498db;
                font-weight: bold;
            }
            
            .icon-box {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
                color: white;
                font-size: 2rem;
            }
            
            .visi-icon {
                background: linear-gradient(135deg, #e74c3c, #c0392b);
            }
            
            .misi-icon {
                background: linear-gradient(135deg, #3498db, #2980b9);
            }
            
            .values-section {
                background: linear-gradient(135deg, #2c3e50, #34495e);
                padding: 80px 0;
                color: white;
            }
            
            .value-item {
                text-align: center;
                padding: 30px 20px;
                background: rgba(255,255,255,0.1);
                border-radius: 15px;
                margin-bottom: 20px;
                transition: all 0.3s ease;
                height: 100%;
            }
            
            .value-item:hover {
                background: rgba(255,255,255,0.2);
                transform: translateY(-5px);
            }
            
            .value-icon {
                font-size: 3rem;
                color: #3498db;
                margin-bottom: 20px;
            }
            
            .value-title {
                font-size: 1.3rem;
                font-weight: 600;
                margin-bottom: 15px;
            }
        </style>
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

        <!-- Navbar Start -->
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
                                <li><a class="dropdown-item" href="{{ route('ppid.profil') }}">Profil</a></li>
                                <li><a class="dropdown-item" href="{{ route('ppid.maklumat') }}">Maklumat Layanan Informasi Publik</a></li>
                                <li><a class="dropdown-item active" href="{{ route('ppid.visi-misi') }}">Visi dan Misi</a></li>
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
                            <h1 class="display-4 fw-bold mb-4">Visi dan Misi</h1>
                            <p class="lead mb-0">PPID Universitas Fort de Kock</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Visi Misi Content Start -->
        <section class="visi-misi-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="visi-misi-card visi-card" data-aos="fade-right">
                            <div class="visi-icon icon-box">
                                <i class="mdi mdi-eye"></i>
                            </div>
                            <h3>VISI</h3>
                            <p class="fs-5 fw-medium text-dark">
                                "Menjadi pengelola informasi dan dokumentasi yang profesional, transparan, dan akuntabel dalam mendukung terwujudnya good governance di Universitas Fort de Kock"
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="visi-misi-card misi-card" data-aos="fade-left">
                            <div class="misi-icon icon-box">
                                <i class="mdi mdi-target"></i>
                            </div>
                            <h3>MISI</h3>
                            <ul class="list-unstyled">
                                <li>Menyelenggarakan pengelolaan informasi dan dokumentasi secara sistematis dan terintegrasi</li>
                                <li>Memberikan pelayanan informasi publik yang cepat, tepat, dan mudah diakses</li>
                                <li>Meningkatkan kualitas layanan informasi publik secara berkelanjutan</li>
                                <li>Membangun sistem informasi yang transparan dan akuntabel</li>
                                <li>Meningkatkan partisipasi publik dalam pengawasan penyelenggaraan universitas</li>
                                <li>Mengembangkan budaya keterbukaan informasi di lingkungan universitas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Visi Misi Content End -->

        <!-- Values Section Start -->
        <section class="values-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h2 class="fw-bold mb-3" data-aos="fade-up">Nilai-Nilai PPID</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="100">Nilai-nilai yang menjadi pedoman dalam menjalankan tugas dan fungsi PPID</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up">
                            <div class="value-icon">
                                <i class="mdi mdi-shield-check"></i>
                            </div>
                            <div class="value-title">Integritas</div>
                            <p>Berkomitmen untuk selalu jujur, konsisten, dan dapat dipercaya dalam setiap tindakan</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="value-icon">
                                <i class="mdi mdi-account-heart"></i>
                            </div>
                            <div class="value-title">Profesional</div>
                            <p>Menjalankan tugas dengan keahlian, kompetensi, dan standar kualitas yang tinggi</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="value-icon">
                                <i class="mdi mdi-eye"></i>
                            </div>
                            <div class="value-title">Transparansi</div>
                            <p>Memberikan informasi secara terbuka, jelas, dan mudah dipahami oleh publik</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="value-icon">
                                <i class="mdi mdi-clipboard-check"></i>
                            </div>
                            <div class="value-title">Akuntabilitas</div>
                            <p>Bertanggung jawab atas setiap keputusan dan tindakan yang diambil</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="value-icon">
                                <i class="mdi mdi-clock-fast"></i>
                            </div>
                            <div class="value-title">Responsif</div>
                            <p>Cepat tanggap dalam merespons kebutuhan dan permintaan informasi publik</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="value-icon">
                                <i class="mdi mdi-handshake"></i>
                            </div>
                            <div class="value-title">Kolaboratif</div>
                            <p>Bekerja sama dengan berbagai pihak untuk mencapai tujuan bersama</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="value-icon">
                                <i class="mdi mdi-lightbulb"></i>
                            </div>
                            <div class="value-title">Inovatif</div>
                            <p>Selalu mencari cara-cara baru untuk meningkatkan kualitas layanan</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="value-item" data-aos="fade-up" data-aos-delay="700">
                            <div class="value-icon">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <div class="value-title">Peduli</div>
                            <p>Memahami dan mengutamakan kepentingan serta kebutuhan masyarakat</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Values Section End -->

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

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-gradient-primary" id="back-to-top"><i class="mdi mdi-chevron-up"></i></a>

        <!-- javascript -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true
            });

            // Back to top functionality
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            window.onscroll = function() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    document.getElementById("back-to-top").style.display = "block";
                } else {
                    document.getElementById("back-to-top").style.display = "none";
                }
            };
        </script>
    </body>
</html>
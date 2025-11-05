<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regulasi - PPID</title>
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <!-- Swiper CSS -->
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    
    <!-- PPID Footer CSS -->
    <link rel="stylesheet" href="{{ asset('css/ppid-footer.css') }}" type="text/css" />
    
    <!-- Service Hours CSS -->
    <link rel="stylesheet" href="{{ asset('css/service-hours.css') }}" type="text/css" />
    
    <!-- Material Design Icons -->
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}" type="text/css" />
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2c5aa0;
            --secondary-color: #f8f9fa;
            --accent-color: #ffc107;
            --text-dark: #333;
            --text-light: #666;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1e3d72 100%);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: var(--accent-color) !important;
            transform: translateY(-2px);
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .dropdown-item {
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1e3d72 100%);
            color: white;
            padding: 6rem 0 4rem;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.1"><polygon points="0,0 1000,0 1000,100 0,80"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .content-section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        .regulation-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 5px solid var(--primary-color);
        }

        .regulation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .regulation-type {
            background: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .regulation-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .regulation-number {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .regulation-description {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .regulation-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-download {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-download:hover {
            background: #1e3d72;
            color: white;
            transform: translateY(-2px);
        }

        .btn-view {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-view:hover {
            background: var(--primary-color);
            color: white;
        }

        .category-section {
            background: var(--secondary-color);
            padding: 4rem 0;
        }

        .category-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
        }

        .category-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .category-count {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .footer {
            background: var(--text-dark);
            color: white;
            padding: 3rem 0 1rem;
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .regulation-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
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
                            <li><a class="dropdown-item" href="{{ route('ppid.visi-misi') }}">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="{{ route('ppid.tugas-fungsi') }}">Tugas dan Fungsi</a></li>
                            <li><a class="dropdown-item" href="{{ route('ppid.struktur-organisasi') }}">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item active" href="{{ route('ppid.regulasi') }}">Regulasi</a></li>
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">Regulasi</h1>
                <p class="hero-subtitle">Dasar Hukum dan Peraturan Pejabat Pengelola Informasi dan Dokumentasi</p>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section class="category-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Kategori Regulasi</h2>
            
            <div class="row">
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h4 class="category-title">Undang-Undang</h4>
                        <div class="category-count">3</div>
                        <p>Regulasi</p>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h4 class="category-title">Peraturan Pemerintah</h4>
                        <div class="category-count">5</div>
                        <p>Regulasi</p>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4 class="category-title">Peraturan Menteri</h4>
                        <div class="category-count">8</div>
                        <p>Regulasi</p>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4 class="category-title">Peraturan Daerah</h4>
                        <div class="category-count">12</div>
                        <p>Regulasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Daftar Regulasi PPID</h2>
            
            <!-- Undang-Undang -->
            <div class="regulation-card" data-aos="fade-up" data-aos-delay="100">
                <div class="regulation-type">Undang-Undang</div>
                <h3 class="regulation-title">Keterbukaan Informasi Publik</h3>
                <div class="regulation-number">UU No. 14 Tahun 2008</div>
                <p class="regulation-description">
                    Undang-undang yang mengatur tentang keterbukaan informasi publik, hak masyarakat untuk memperoleh informasi, 
                    dan kewajiban badan publik untuk menyediakan dan melayani permintaan informasi publik.
                </p>
                <div class="regulation-actions">
                    <a href="#" class="btn-download">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </a>
                    <a href="#" class="btn-view">
                        <i class="fas fa-eye me-2"></i>Lihat Detail
                    </a>
                </div>
            </div>

            <div class="regulation-card" data-aos="fade-up" data-aos-delay="200">
                <div class="regulation-type">Undang-Undang</div>
                <h3 class="regulation-title">Administrasi Pemerintahan</h3>
                <div class="regulation-number">UU No. 30 Tahun 2014</div>
                <p class="regulation-description">
                    Undang-undang tentang administrasi pemerintahan yang mengatur penyelenggaraan pemerintahan 
                    yang baik dan bersih serta pelayanan publik yang berkualitas.
                </p>
                <div class="regulation-actions">
                    <a href="#" class="btn-download">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </a>
                    <a href="#" class="btn-view">
                        <i class="fas fa-eye me-2"></i>Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Peraturan Pemerintah -->
            <div class="regulation-card" data-aos="fade-up" data-aos-delay="300">
                <div class="regulation-type">Peraturan Pemerintah</div>
                <h3 class="regulation-title">Pelaksanaan Undang-Undang Keterbukaan Informasi Publik</h3>
                <div class="regulation-number">PP No. 61 Tahun 2010</div>
                <p class="regulation-description">
                    Peraturan pemerintah yang mengatur pelaksanaan undang-undang keterbukaan informasi publik, 
                    termasuk tata cara permohonan informasi dan penyelesaian sengketa informasi.
                </p>
                <div class="regulation-actions">
                    <a href="#" class="btn-download">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </a>
                    <a href="#" class="btn-view">
                        <i class="fas fa-eye me-2"></i>Lihat Detail
                    </a>
                </div>
            </div>

            <div class="regulation-card" data-aos="fade-up" data-aos-delay="400">
                <div class="regulation-type">Peraturan Pemerintah</div>
                <h3 class="regulation-title">Standar Pelayanan Publik</h3>
                <div class="regulation-number">PP No. 96 Tahun 2012</div>
                <p class="regulation-description">
                    Peraturan tentang pelaksanaan undang-undang pelayanan publik yang mengatur standar 
                    pelayanan publik dan sistem pengelolaan pengaduan pelayanan publik.
                </p>
                <div class="regulation-actions">
                    <a href="#" class="btn-download">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </a>
                    <a href="#" class="btn-view">
                        <i class="fas fa-eye me-2"></i>Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Peraturan Menteri -->
            <div class="regulation-card" data-aos="fade-up" data-aos-delay="500">
                <div class="regulation-type">Peraturan Menteri</div>
                <h3 class="regulation-title">Pedoman Pengelolaan Informasi dan Dokumentasi</h3>
                <div class="regulation-number">Permen PANRB No. 83 Tahun 2012</div>
                <p class="regulation-description">
                    Peraturan menteri yang mengatur pedoman pengelolaan informasi dan dokumentasi 
                    di lingkungan kementerian dan lembaga pemerintah non kementerian.
                </p>
                <div class="regulation-actions">
                    <a href="#" class="btn-download">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </a>
                    <a href="#" class="btn-view">
                        <i class="fas fa-eye me-2"></i>Lihat Detail
                    </a>
                </div>
            </div>

            <div class="regulation-card" data-aos="fade-up" data-aos-delay="600">
                <div class="regulation-type">Peraturan Menteri</div>
                <h3 class="regulation-title">Standar Operasional Prosedur PPID</h3>
                <div class="regulation-number">Permen PANRB No. 3 Tahun 2017</div>
                <p class="regulation-description">
                    Peraturan yang mengatur standar operasional prosedur pejabat pengelola informasi 
                    dan dokumentasi di lingkungan badan publik.
                </p>
                <div class="regulation-actions">
                    <a href="#" class="btn-download">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </a>
                    <a href="#" class="btn-view">
                        <i class="fas fa-eye me-2"></i>Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- START FOOTER PPID - LAYOUT 4 KOLOM SEIMBANG -->
    <footer class="ppid-footer-dark">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Logo dan Deskripsi -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-logo-section">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('images/logo-udk.png') }}" alt="Logo UDK" class="footer-logo me-3">
                            <div>
                                <h5 class="footer-title">PPID</h5>
                                <p class="footer-subtitle">Pejabat Pengelola Informasi dan Dokumentasi<br>Universitas Fort de Kock</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2: Alamat dan Kontak -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-contact-section">
                        <h6 class="footer-heading">ALAMAT & KONTAK</h6>
                        <div class="footer-contact-item">
                            <i class="mdi mdi-map-marker footer-icon"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl. Soekarno Hatta No. 11<br>
                                Bukittinggi, Sumatera Barat<br>
                                26181
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <i class="mdi mdi-phone footer-icon"></i>
                            <div>
                                <strong>Telepon:</strong><br>
                                (0752) 625534
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <i class="mdi mdi-email footer-icon"></i>
                            <div>
                                <strong>Email:</strong><br>
                                ppid@udk.ac.id
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 3: Link Terkait -->
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
                        <div class="service-hours">
                            <div class="service-day">
                                <span class="day">Senin - Kamis</span>
                                <span class="time">08:00 - 16:00 WIB</span>
                            </div>
                            <div class="service-day">
                                <span class="day">Jumat</span>
                                <span class="time">08:00 - 11:30 WIB</span>
                            </div>
                            <div class="service-day">
                                <span class="day">Sabtu - Minggu</span>
                                <span class="time">Tutup</span>
                            </div>
                        </div>
                        <div class="footer-note">
                            <small><i class="mdi mdi-information-outline"></i> Layanan informasi tersedia sesuai jam kerja</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER PPID -->

    <!-- Copyright Section -->
    <div class="copyright-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">&copy; 2024 PPID Universitas Fort de Kock. Semua hak dilindungi.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="mdi mdi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="mdi mdi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="mdi mdi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="mdi mdi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- AOS JS -->
    <script src="{{ asset('js/aos.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <!-- App JS -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Back to top functionality
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'flex';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
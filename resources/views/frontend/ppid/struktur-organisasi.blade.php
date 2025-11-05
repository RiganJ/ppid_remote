<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - PPID</title>
    
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

        .org-chart {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }

        .org-level {
            margin-bottom: 3rem;
            text-align: center;
        }

        .org-box {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1e3d72 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin: 0.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            display: inline-block;
            min-width: 250px;
        }

        .org-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .org-title {
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .org-name {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .connector {
            height: 30px;
            width: 2px;
            background: var(--primary-color);
            margin: 0 auto;
        }

        .horizontal-connector {
            height: 2px;
            background: var(--primary-color);
            margin: 15px 0;
        }

        .responsibilities-section {
            background: var(--secondary-color);
            padding: 4rem 0;
        }

        .responsibility-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .responsibility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .responsibility-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: white;
            font-size: 1.5rem;
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
            
            .org-box {
                min-width: 200px;
                margin: 0.25rem;
            }
            
            .section-title {
                font-size: 2rem;
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
                            <li><a class="dropdown-item active" href="{{ route('ppid.struktur-organisasi') }}">Struktur Organisasi</a></li>
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">Struktur Organisasi</h1>
                <p class="hero-subtitle">Pejabat Pengelola Informasi dan Dokumentasi (PPID)</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Struktur Organisasi PPID</h2>
            
            <div class="org-chart" data-aos="fade-up" data-aos-delay="200">
                <!-- Level 1: Atasan PPID -->
                <div class="org-level">
                    <div class="org-box">
                        <div class="org-title">Atasan PPID</div>
                        <div class="org-name">Kepala Dinas/Instansi</div>
                    </div>
                </div>
                
                <div class="connector"></div>
                
                <!-- Level 2: PPID Utama -->
                <div class="org-level">
                    <div class="org-box">
                        <div class="org-title">PPID Utama</div>
                        <div class="org-name">Sekretaris Dinas/Instansi</div>
                    </div>
                </div>
                
                <div class="connector"></div>
                
                <!-- Level 3: PPID Pelaksana -->
                <div class="org-level">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="org-box">
                                <div class="org-title">PPID Pelaksana</div>
                                <div class="org-name">Kepala Bagian Umum</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="org-box">
                                <div class="org-title">PPID Pelaksana</div>
                                <div class="org-name">Kepala Sub Bagian Hukum</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="org-box">
                                <div class="org-title">PPID Pelaksana</div>
                                <div class="org-name">Kepala Sub Bagian Humas</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="connector"></div>
                
                <!-- Level 4: PPID Pembantu -->
                <div class="org-level">
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="org-box">
                                <div class="org-title">PPID Pembantu</div>
                                <div class="org-name">Staf Administrasi</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="org-box">
                                <div class="org-title">PPID Pembantu</div>
                                <div class="org-name">Staf Dokumentasi</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="org-box">
                                <div class="org-title">PPID Pembantu</div>
                                <div class="org-name">Staf IT</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="org-box">
                                <div class="org-title">PPID Pembantu</div>
                                <div class="org-name">Staf Pelayanan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsibilities Section -->
    <section class="responsibilities-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Tanggung Jawab Setiap Posisi</h2>
            
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="responsibility-card">
                        <div class="responsibility-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Atasan PPID</h4>
                        <ul>
                            <li>Menetapkan kebijakan pengelolaan informasi dan dokumentasi</li>
                            <li>Mengawasi pelaksanaan tugas PPID</li>
                            <li>Memastikan ketersediaan sumber daya untuk PPID</li>
                            <li>Mengevaluasi kinerja PPID secara berkala</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="responsibility-card">
                        <div class="responsibility-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>PPID Utama</h4>
                        <ul>
                            <li>Mengkoordinasikan seluruh kegiatan PPID</li>
                            <li>Menyusun program kerja PPID</li>
                            <li>Melaporkan pelaksanaan tugas kepada Atasan PPID</li>
                            <li>Menyelesaikan sengketa informasi publik</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="responsibility-card">
                        <div class="responsibility-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>PPID Pelaksana</h4>
                        <ul>
                            <li>Melaksanakan kebijakan pengelolaan informasi</li>
                            <li>Mengumpulkan dan mengklasifikasi informasi</li>
                            <li>Menyediakan layanan informasi kepada publik</li>
                            <li>Memelihara sistem informasi dan dokumentasi</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="responsibility-card">
                        <div class="responsibility-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4>PPID Pembantu</h4>
                        <ul>
                            <li>Membantu pelaksanaan tugas PPID Pelaksana</li>
                            <li>Melakukan entry data dan dokumentasi</li>
                            <li>Memberikan pelayanan informasi langsung</li>
                            <li>Memelihara dan mengarsipkan dokumen</li>
                        </ul>
                    </div>
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
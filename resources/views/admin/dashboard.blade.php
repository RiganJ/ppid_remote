@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang {{ auth('admin')->user()->name }}! 🎉</h5>
                            <p class="mb-4">
                                Anda telah berhasil masuk ke panel admin PPID. Kelola konten dan informasi publik dengan mudah melalui dashboard ini.
                            </p>
                            <a href="{{ route('admin.profile') }}" class="btn btn-sm btn-outline-primary">Lihat Profile</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="/admin-assets/img/illustrations/man-with-laptop.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop.png" data-app-light-img="illustrations/man-with-laptop.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/admin-assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Total Pengunjung</span>
                            <h3 class="card-title mb-2">12,628</h3>
                            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/admin-assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Permintaan Info</span>
                            <h3 class="card-title text-nowrap mb-1">48</h3>
                            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Statistik Pengunjung</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="mb-1">Bulan Ini</h6>
                                <h4 class="text-primary mb-1">2,856</h4>
                                <small class="text-muted">Pengunjung</small>
                            </div>
                            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-primary p-2"><i class="bx bx-desktop text-primary"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>Desktop</small>
                                        <h6 class="mb-0">1,856</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-info p-2"><i class="bx bx-mobile-alt text-info"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>Mobile</small>
                                        <h6 class="mb-0">1,000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/admin-assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="d-block mb-1">Dokumen</span>
                            <h3 class="card-title text-nowrap mb-2">156</h3>
                            <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/admin-assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Berita</span>
                            <h3 class="card-title mb-2">42</h3>
                            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +18.07%</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Aktivitas Terbaru</h5>
                                        <span class="badge bg-label-warning rounded-pill">Hari ini</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-medium"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                        <h3 class="mb-0">84</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Permintaan Informasi Terbaru -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Permintaan Info Terbaru</h5>
                        <small class="text-muted">5 permintaan terakhir</small>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded me-3">
                                    <img src="/admin-assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                    <h6 class="mb-0">John Doe</h6>
                                    <small class="text-muted">Data Anggaran 2024</small>
                                </div>
                            </div>
                        </div>
                        <div class="user-progress">
                            <small class="fw-medium">Menunggu</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded me-3">
                                    <img src="/admin-assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                    <h6 class="mb-0">Jane Smith</h6>
                                    <small class="text-muted">Laporan Keuangan</small>
                                </div>
                            </div>
                        </div>
                        <div class="user-progress">
                            <small class="fw-medium">Diproses</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded me-3">
                                    <img src="/admin-assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                    <h6 class="mb-0">Ahmad Rahman</h6>
                                    <small class="text-muted">Data Pegawai</small>
                                </div>
                            </div>
                        </div>
                        <div class="user-progress">
                            <small class="fw-medium">Selesai</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Permintaan Informasi Terbaru -->

        <!-- Dokumen Terpopuler -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Dokumen Terpopuler</h5>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/admin-assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">PDF</small>
                                    <h6 class="mb-0">Laporan Tahunan 2023</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">1,234</h6>
                                    <span class="text-muted">unduhan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/admin-assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Excel</small>
                                    <h6 class="mb-0">Data Anggaran 2024</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">856</h6>
                                    <span class="text-muted">unduhan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/admin-assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">PDF</small>
                                    <h6 class="mb-0">Profil Instansi</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">642</h6>
                                    <span class="text-muted">unduhan</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Dokumen Terpopuler -->

        <!-- Aktivitas Sistem -->
        <div class="col-md-12 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Aktivitas Sistem</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="activityDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activityDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Lihat Semua</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="timeline">
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Dokumen baru ditambahkan</h6>
                                    <small class="text-muted">2 menit yang lalu</small>
                                </div>
                                <p class="mb-0">Laporan Keuangan Q4 2023 telah diunggah</p>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-info"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Permintaan informasi baru</h6>
                                    <small class="text-muted">15 menit yang lalu</small>
                                </div>
                                <p class="mb-0">John Doe mengajukan permintaan data anggaran</p>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-success"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Backup berhasil</h6>
                                    <small class="text-muted">1 jam yang lalu</small>
                                </div>
                                <p class="mb-0">Backup database harian telah selesai</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Aktivitas Sistem -->
    </div>
</div>
@endsection
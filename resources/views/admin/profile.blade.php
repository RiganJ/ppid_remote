@extends('admin.layouts.app')

@section('title', 'Profil Admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Pengaturan /</span> Profil Admin</h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="bx bx-bell me-1"></i> Notifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i> Koneksi</a>
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Detail Profil</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="/admin-assets/img/avatars/1.svg" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload foto baru</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Diizinkan JPG, GIF atau PNG. Ukuran maksimal 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="formAccountSettings" method="POST" action="{{ route('admin.profile.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name', auth('admin')->user()->name) }}" autofocus />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email', auth('admin')->user()->email) }}" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control" id="role" name="role" value="{{ auth('admin')->user()->role }}" readonly />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="status">Status</label>
                                <input type="text" id="status" class="form-control" value="{{ auth('admin')->user()->is_active ? 'Aktif' : 'Tidak Aktif' }}" readonly />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                            <button type="reset" class="btn btn-outline-secondary">Batal</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Ubah Password</h5>
                <div class="card-body">
                    <form id="formChangePassword" method="POST" action="{{ route('admin.profile.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="current_password">Password Saat Ini</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control @error('current_password') is-invalid @enderror" type="password" name="current_password" id="current_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('current_password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="password">Password Baru</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="password_confirmation">Konfirmasi Password Baru</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <p class="fw-medium mt-2">Persyaratan Password:</p>
                                <ul class="ps-3 mb-0">
                                    <li class="mb-1">Minimal 8 karakter - semakin panjang, semakin baik</li>
                                    <li class="mb-1">Setidaknya satu karakter huruf kecil</li>
                                    <li>Setidaknya satu angka, simbol, atau karakter spasi</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-1">
                            <button type="submit" class="btn btn-primary me-2">Ubah Password</button>
                            <button type="reset" class="btn btn-outline-secondary">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle functionality
        const passwordToggles = document.querySelectorAll('.form-password-toggle .input-group-text');
        
        passwordToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('bx-hide');
                    icon.classList.add('bx-show');
                } else {
                    input.type = 'password';
                    icon.classList.remove('bx-show');
                    icon.classList.add('bx-hide');
                }
            });
        });

        // Image upload preview
        const uploadInput = document.getElementById('upload');
        const uploadedAvatar = document.getElementById('uploadedAvatar');
        const resetBtn = document.querySelector('.account-image-reset');

        if (uploadInput) {
            uploadInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        uploadedAvatar.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        if (resetBtn) {
            resetBtn.addEventListener('click', function() {
                uploadedAvatar.src = '/admin-assets/img/avatars/1.svg';
                uploadInput.value = '';
            });
        }
    });
</script>
@endpush
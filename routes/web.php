<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('frontend.home');
});

// PPID Routes
Route::prefix('ppid')->name('ppid.')->group(function () {
    Route::get('/profil', function () {
        return view('frontend.ppid.profil');
    })->name('profil');
    
    Route::get('/maklumat', function () {
        return view('frontend.ppid.maklumat');
    })->name('maklumat');
    
    Route::get('/visi-misi', function () {
        return view('frontend.ppid.visi-misi');
    })->name('visi-misi');
    
    Route::get('/tugas-fungsi', function () {
        return view('frontend.ppid.tugas-fungsi');
    })->name('tugas-fungsi');
    
    Route::get('/struktur-organisasi', function () {
        return view('frontend.ppid.struktur-organisasi');
    })->name('struktur-organisasi');
    
    Route::get('/regulasi', function () {
        return view('frontend.ppid.regulasi');
    })->name('regulasi');
});

// Admin Routes
Route::prefix('admin-ppid')->name('admin.')->group(function () {
    // Guest routes (login form)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminController::class, 'login'])->name('login.post');
    });
    
    // Authenticated admin routes
    Route::middleware(['auth:admin', 'admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::put('/profile', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Show admin login form
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle admin login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Show admin dashboard
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Handle admin logout
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('admin.login');
    }

    /**
     * Show admin profile
     */
    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    /**
     * Update admin profile
     */
    public function updateProfile(Request $request)
    {
        $admin = auth('admin')->user();
        
        // Validate based on what's being updated
        if ($request->filled('current_password')) {
            // Password update validation
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|min:8|confirmed',
            ], [
                'current_password.required' => 'Password saat ini harus diisi',
                'password.required' => 'Password baru harus diisi',
                'password.min' => 'Password baru minimal 8 karakter',
                'password.confirmed' => 'Konfirmasi password tidak cocok',
            ]);

            // Check current password
            if (!Hash::check($request->current_password, $admin->password)) {
                return back()->withErrors(['current_password' => 'Password saat ini tidak benar']);
            }

            // Update password
            $admin->update([
                'password' => Hash::make($request->password)
            ]);

            return back()->with('success', 'Password berhasil diubah');
        } else {
            // Profile update validation
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:admins,email,' . $admin->id,
            ], [
                'name.required' => 'Nama harus diisi',
                'name.max' => 'Nama maksimal 255 karakter',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah digunakan',
            ]);

            // Update profile
            $admin->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            return back()->with('success', 'Profil berhasil diperbarui');
        }
    }
}
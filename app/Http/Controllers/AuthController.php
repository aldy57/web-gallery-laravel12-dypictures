<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('accounts.register');
    }

    public function register(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_lengkap' => 'required|string|max:150',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|min:6'
        ], [
            // Pesan error
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nama_lengkap.max' => 'Nama lengkap maksimal 150 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        // Simpan data pengguna baru ke database
        Pengguna::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password) // Hash password untuk keamanan
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/member/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function showLogin()
    {
        return view('accounts.login');
    }

    public function login(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            // Pesan error
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi'
        ]);

        // Mencari 1 baris data di tabel pengguna berdasarkan email inputan pengguna
        $pengguna = Pengguna::where('email', $request->email)->first();

        // Hash::check membandingkan password input (plain) dengan password di DB (hashed)
        if ($pengguna && Hash::check($request->password, $pengguna->password)) {
            // Simpan data pengguna ke session browser
            Session::put('user_id', $pengguna->id_pengguna);
            Session::put('user_name', $pengguna->nama_lengkap);
            Session::put('user_email', $pengguna->email);
            Session::put('is_logged_in', true);

            // Redirect ke dashboard
            return redirect('/member')->with('success', 'Login berhasil!');
        } else {
            // Kalo email atau password ga ketemu/salah, kembali ke halaman login dengan error
            return back()->with('error', 'Email atau password salah!');
        }
    }

    public function logout()
    {
        // Hapus semua data session browser
        Session::flush();

        // Redirect ke halaman login
        return redirect('/member/login')->with('success', 'Logout berhasil!');
    }
}

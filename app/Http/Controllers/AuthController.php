<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AuthController extends Controller
{
    // Menampilkan Halaman Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses Login (Logika Utama)
    public function login(Request $request)
    {
        // 1. Validasi Input dari Form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Cari Email di Database (Manual Query biar aman dari error admin_id)
        $admin = Admin::where('email', $request->email)->first();

        // 3. Cek apakah Admin ketemu DAN Passwordnya cocok
        if ($admin && Hash::check($request->password, $admin->password)) {
            
            // 4. Jika cocok, buat sesi login
            Auth::login($admin);
            $request->session()->regenerate();

            // 5. Redirect ke Dashboard
            return redirect()->route('dashboard');
        }

        // 6. Jika salah, kembalikan ke login dengan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
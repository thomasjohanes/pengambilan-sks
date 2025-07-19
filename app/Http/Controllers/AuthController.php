<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLogin()
    {
        return view('login');
    }

    // Proses login dan redirect ke dashboard
    public function processLogin(Request $request)
    {
        // Validasi bisa ditambah jika mau
        session([
            'email' => $request->email,
            'role' => $request->role
        ]);

        return redirect('/dashboard');
    }

    // Tampilkan form dashboard (isi nama, nim, jurusan)
    public function showDashboard()
    {
        return view('dashboard');
    }

    // Proses form dashboard → redirect ke menu
    public function processDashboard(Request $request)
    {
        session([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/student/menu');
    }

    // Tampilkan menu mahasiswa
    public function showMenu()
    {
        return view('student_menu');
    }

    // Logout
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLogin()
    {
        return view('login');
    }

    // Proses login (simulasi tanpa database)
    public function processLogin(Request $request)
    {
        // Simpan email dan role ke session
        session([
            'email' => $request->email,
            'role' => $request->role
        ]);

        // Redirect berdasarkan role
        if ($request->role === 'student') {
            return redirect('/dashboard/student');
        } elseif ($request->role === 'teacher') {
            return redirect('/dashboard/teacher');
        } elseif ($request->role === 'admin') {
            return redirect('/dashboard/admin');
        } else {
            return redirect('/dashboard');
        }
    }

    // Dashboard fallback
    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showStudentDashboard()
    {
        if (session('role') !== 'student') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dashboard_student');
    }

    public function showTeacherDashboard()
    {
        if (session('role') !== 'teacher') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dashboard_teacher');
    }

    public function showAdminDashboard()
    {
        if (session('role') !== 'admin') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dashboard_admin');
    }

    // Proses isi data pengguna → redirect ke menu masing-masing
    public function processDashboard(Request $request)
    {
        session([
            'nama' => $request->nama,
            'nim' => $request->nim ?? null,
            'jurusan' => $request->jurusan ?? null
        ]);

        if (session('role') === 'student') {
            return redirect('/mahasiswa/menu');
        } elseif (session('role') === 'teacher') {
            return redirect('/dosen/menu');
        } elseif (session('role') === 'admin') {
            return redirect('/admin/menu');
        } else {
            return redirect('/dashboard');
        }
    }

    public function showMenu()
    {
        if (session('role') !== 'student') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('mahasiswa_menu');
    }

    public function showDosenMenu()
    {
        if (session('role') !== 'teacher') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dosen_menu');
    }

    public function showAdminMenu()
    {
        if (session('role') !== 'admin') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('admin_menu');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}

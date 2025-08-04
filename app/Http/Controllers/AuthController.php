<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Admin;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('login');
    }

    // Proses login
    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ]);

        $role = $request->role;
        $email = $request->email;
        $password = $request->password;

        if ($role === 'student') {
            $user = Mahasiswa::where('email', $email)->first();
        } elseif ($role === 'teacher') {
            $user = Dosen::where('email', $email)->first();
        } elseif ($role === 'admin') {
            $user = Admin::where('email', $email)->first();
        } else {
            return redirect('/login')->with('error', 'Peran tidak valid.');
        }

        if ($user && Hash::check($password, $user->password)) {
            session([
                'email' => $user->email,
                'role' => $role,
                'nama' => $user->nama ?? null,
                'id' => $user->id
            ]);

            if ($role === 'student') {
                return redirect('/dashboard/student');
            } elseif ($role === 'teacher') {
                return redirect('/dashboard/teacher');
            } else {
                return redirect('/admin/menu'); 
            }

        } else {
            return redirect('/login')->with('error', 'Email atau password salah.');
        }
    }

    // Logout
    public function logout()
    {
        session()->flush();
        return redirect('/login')->with('success', 'Berhasil logout.');
    }

    // Tampilkan dashboard mahasiswa
    public function showStudentDashboard()
    {
        if (session('role') !== 'student') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dashboard_student');
    }

    // Tampilkan dashboard dosen
    public function showTeacherDashboard()
    {
        if (session('role') !== 'teacher') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dashboard_teacher');
    }

    // Tampilkan dashboard admin
    public function showAdminDashboard()
    {
        if (session('role') !== 'admin') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dashboard_admin');
    }

    // Tampilkan menu mahasiswa
    public function showMenu()
    {
        if (session('role') !== 'student') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('mahasiswa_menu');
    }

    // Tampilkan menu dosen
    public function showDosenMenu()
    {
        dd(session()->all());

        if (session('role') !== 'teacher') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('dosen_menu');
    }

    // Tampilkan menu admin
    public function showAdminMenu()
    {   
        if (session('role') !== 'admin') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        return view('admin_menu');
    }

    // Proses input dashboard mahasiswa (validasi nama, nim, jurusan)
    public function processDashboard(Request $request)
    {
        if (session('role') !== 'student') {
            return redirect('/login')->with('error', 'Akses ditolak.');
        }

        $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:20',
            'jurusan' => 'required|string|max:50',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nim.required' => 'NIM wajib diisi.',
            'jurusan.required' => 'Jurusan wajib diisi.',
        ]);

        session([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/mahasiswa/menu');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDosen = Dosen::count();
        $totalMahasiswa = Mahasiswa::count();
        $totalMatkul = Matkul::count();

        return view('dashboard_login', compact('totalDosen', 'totalMahasiswa', 'totalMatkul'));
    }
}

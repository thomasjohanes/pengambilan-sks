<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $user = Student::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        session([
            'nama' => $user->nama,
            'nim' => $user->nim,
            'jurusan' => $user->jurusan,
        ]);
        return redirect('/dashboard');
    }

    return back()->with('error', 'Login gagal');
});

Route::get('/dashboard', function () {
    $data = session()->only(['nama', 'nim', 'jurusan']);
    return view('dashboard', compact('data'));
});

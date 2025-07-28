<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Nama tabel di database
    protected $table = 'Mahasiswa';

    // Field yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'password',
        'jurusan'
    ];
}

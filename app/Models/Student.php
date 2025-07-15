<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Nama tabel di database
    protected $table = 'students';

    // Field yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'password',
        'jurusan'
    ];
}

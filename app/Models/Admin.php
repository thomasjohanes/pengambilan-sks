<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin'; // sesuaikan nama tabel jika berbeda
    protected $fillable = ['nama', 'email', 'password']; // sesuaikan kolom tabel
}

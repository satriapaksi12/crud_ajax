<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;


    // protected $table = "mahasiswa"; //protected $table untuk konvensi penamaan tabel karna laravel default mengharuskan pakai akhiran s, seperti mahasiswas
    protected $guarded = ['id']; // Semua kolom yang kita tambahkan ke $guarded akan diabaikan
}

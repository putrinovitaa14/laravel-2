<?php

namespace App\Http\Controllers;

use App\Siswa;

class SiswaController extends Controller
{
    public function tampil()
    {
        // menampilkan ssemua data dari model siswa yang bersumber dari tabel / migration siswas
        // atau sama dengan query sql
        $a = Siswa::all();
        return view('siswa.index', ['siswa' => $a]);
    }
}

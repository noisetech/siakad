<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function halaman_utama(){
        return view('pages.siswa.halaman_utama');
    }
}

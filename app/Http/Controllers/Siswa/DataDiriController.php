<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Pelajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataDiriController extends Controller
{
     public function datadiri(){

        // mendapatkan data diri pelajar bedasarakan pelajar yang login
        $items = Pelajar::where('users_id', Auth::user()->id)->first();
        return view('pages.siswa.data-diri.index' , [
            'items' => $items
        ]);

     }
}

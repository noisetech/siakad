<?php

namespace App\Http\Controllers\Admin;

use App\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $items = Guru::all();

        return view('pages.guru.index', [
            'items' => $items
        ]);
    }

    public function create(){
        return view('pages.guru.create');
    }


    public function store(Request $request){
        $items = new Guru;

        $items->nama = $request->nama;
        $items->alamat = $request->alamat;
        $items->jenis_kelamin = $request->jenis_kelamin;
        $items->no_telepon = $request->no_telepon;

        // dd($items);

        $items->save();

        return redirect()->route('guru.index');
    }

    public function edit($id){
        $item = Guru::find($id);

        return view('pages.guru.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id){
        $item = Guru::find($id);

        $item->nama = $request->nama;
        $item->alamat  = $request->alamat;
        $item->jenis_kelamin = $request->jenis_kelamin;
        $item->no_telepon = $request->no_telepon;

        $item->save();

        return redirect()->route('guru.index');

    }


    public function destroy($id){
        $item = Guru::find($id);

        $item->delete();

        return redirect()->route('guru.index');
    }

}

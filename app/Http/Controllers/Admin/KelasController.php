<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kelas;
use App\Pelajar;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $items = Kelas::all();

        return view('pages.kelas.index', [
            'items' => $items
        ]);
    }

    public function create(){

        $pelajar = Pelajar::all();

        return view('pages.kelas.create', [
            'pelajar' => $pelajar
        ]);
    }

    public function store(Request $request){
        $items = new Kelas;
        $items->nama_kelas = $request->nama_kelas;

       $items->save();

       return redirect()->route('kelas.index');
    }

    public function edit($id){
        $item = Kelas::find($id);

        return view('pages.kelas.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id){
        $item = Kelas::find($id);

        $item->nama_kelas = $request->nama_kelas;
        $item->save();

        return redirect()->route('kelas.index');
    }

    public function destroy($id){
        $item = Kelas::find($id);

        $item->delete();

        return redirect()->route('kelas.index');
    }
}

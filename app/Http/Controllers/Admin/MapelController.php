<?php

namespace App\Http\Controllers\Admin;

use App\Guru;
use App\Http\Controllers\Controller;
use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){
        $items = Mapel::with(['guru'])->get();
        return view('pages.mapel.index', [
            'items' => $items
        ]);
    }

    public function create(){
        $guru = Guru::all();

        return view('pages.mapel.create', [
            'guru' => $guru
        ]);
    }

    public function store(Request $request){
        $items = new Mapel;

        $items->nama = $request->nama;
        $items->guru_id = $request->guru_id;
        $items->save();

        return redirect()->route('mapel.index');
    }


    public function edit($id){
        $item = Mapel::find($id);
        $guru = Guru::all();

        return view('pages.mapel.edit', [
            'item' => $item,
            'guru' => $guru
        ]);
    }

    public function update(Request $request, $id){
        $item = Mapel::find($id);

        $item->nama = $request->nama;
        $item->guru_id = $request->guru_id;

        return redirect()->route('mapel.index');
    }


    public function destroy($id){

        $items = Mapel::find($id);
        $items->delete();

        return redirect()->route('mapel.index');

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kelas;
use App\Pelajar;
use App\User;
use Illuminate\Http\Request;

class PelajarController extends Controller
{
    public function index(){

        $items = Pelajar::with(['users', 'kelas'])->get();

        return view('pages.pelajar.index', [
            'items' => $items
        ]);
    }

    public function create(){

        // hanya mendapatkan  inputan email dari user  yang memiliki role user
        // dan hidden email admin pada inputan
         $email  = User::where('role', 'user')
        ->orderBy('email')
        ->get();

        $kelas = Kelas::all();

        // $kelas

        return view('pages.pelajar.create', [
            'email' => $email,
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
            'users_id' => 'required',
            'kelas_id' => 'required',
        ]);

        $items = new Pelajar;
        $items->nama = $request->nama;
        $items->jenis_kelamin = $request->jenis_kelamin;
        $items->alamat = $request->alamat;
        $items->no_telepon = $request->no_telepon;
        $items->users_id = $request->users_id;
        $items->kelas_id = $request->kelas_id;

        if($request->hasFile('gambar')){
            $penyimpnana = 'public/gambar';
            $gambar = $request->file('gambar');
            $nama = $gambar->getClientOriginalName();
            $upload = $request->file('gambar')->storeAs($penyimpnana, $nama);

            $items['gambar'] = $nama;
        }

        // dd($items);

        $items->save();

        return redirect()->route('pelajar.index')->with('success','Data berhasil ditambahkan!');
    }

    public function edit($id){
        $item = Pelajar::find($id);

        // hanya mendapatkan  inputan email dari user  yang memiliki role user
        // dan hidden email admin pada inputan
        $email  = User::where('role', 'user')
        ->orderBy('email')
        ->get();


        return view('pages.pelajar.edit', [
            'item' => $item,
            'email' => $email
        ]);
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required'
        ]);

        $item = Pelajar::find($id);

        $item->nama = $request->nama;
        $item->jenis_kelamin = $request->jenis_kelamin;
        $item->alamat = $request->alamat;
        $item->no_telepon = $request->no_telepon;
        $item->email = $request->email;
        $item->save();

        return redirect()->route('pelajar.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id){
        $item = Pelajar::find($id);

        $item->delete();

        return redirect()->route('pelajar.index')->with('success', 'Data berhasil dihapus');
    }
}

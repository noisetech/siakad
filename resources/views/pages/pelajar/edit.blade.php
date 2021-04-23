@extends('layouts.admin')

@section('title', 'halaman dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mengubah Data Pelajar</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pelajar.update', $item->id) }}" method="POST">
            @csrf

            @method('put')

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $item->nama }}">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="{{ $item->jenis_kelamin }}">Data Sebelumnya({{ $item->jenis_kelamin }})</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Nama" value="{{ $item->alamat }}">
                </div>

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>

                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control" placeholder="Masukan Nama" value="{{ $item->no_telepon }}">
                </div>


                <div class="form-group">
                    <label for="">Email</label>
                    <select name="email" class="form-control">
                        <option value="{{ $item->users->email }}">Data Sebelumnya({{ $item->users->email }})</option>
                        @foreach ($email as $item)
                        <option value="{{ $item->email }}">{{ $item->email }}</option>
                        @endforeach
                    </select>
                </div>

            <button class="btn btn-block btn-warning">
                <i class="fas fa-sm fa-edit"> Ubah</i>
            </button>
            </form>
        </div>
    </div>



</div>
@endsection

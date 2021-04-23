@extends('layouts.admin')

@section('title', 'halaman dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menambah Data Guru</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('guru.store') }}" method="POST">
                @csrf


                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ old('nama') }}">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="{{ old('alamat') }}">
                </div>


                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control" placeholder="Masukan Telepon" value="{{ old('no_telepon') }}">
                </div>


                <button class="btn btn-block btn-primary">
                    <i class="fas fa-sm fa-save"> Simpan</i>
                </button>
            </form>
        </div>
    </div>




</div>
@endsection

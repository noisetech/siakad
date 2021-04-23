@extends('layouts.admin')

@section('title', 'halaman dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mengubah Data Kelas</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('kelas.update', $item->id) }}" method="POST">
                @csrf
                @method('put')


                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" placeholder="Masukan Kelas" value="{{ $item->nama_kelas }}">
                </div>

                <button class="btn btn-block btn-warning">
                    <i class="fas fa-sm fa-edit"> Simpan</i>
                </button>
            </form>
        </div>
    </div>




</div>
@endsection

@extends('layouts.admin')

@section('title', 'halaman ubah mapel')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mapel</h1>
        <a href="{{ route('mapel.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus-circle fa-sm text-white-50"></i> Menambah Data</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('mapel.update', $item->id) }}" method="POST">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="">Mata Pelajaran</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Mata Pelajaran" value="{{ $item->nama }}">
            </div>

            <div class="form-group">
                <label for="">Pengajar</label>
                <select name="" class="form-control">
                    <option value="{{ $item->guru->nama }}">Data Sebelumnya({{ $item->guru->nama }})</option>
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

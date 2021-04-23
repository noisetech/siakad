@extends('layouts.admin')

@section('title', 'halaman menambah mapel')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menambah Data Mapel</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('mapel.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">Nama :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ old('nama') }}">
                </div>

                <div class="form-group">
                    <label for="">Guru Pengajar</label>
                    <select name="guru_id" class="form-control">
                        <option value="">Pilih Guru Pengajar</option>
                        @foreach ($guru as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-block btn-primary">
                    <i class="fas fa-sm fa-save"> Simpan</i>
                </button>
            </form>
        </div>
    </div>




</div>
@endsection

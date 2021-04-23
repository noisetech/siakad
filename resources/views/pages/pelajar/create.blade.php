@extends('layouts.admin')

@section('title', 'halaman dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menambah Data Pelajar</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pelajar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                 </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <select name="jenis_kelamin" class="form-control  @error('jenis_kelamin') is-invalid @enderror">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukan Nama" value="{{ old('alamat') }}">
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" placeholder="Masukan Nama" value="{{ old('no_telepon') }}">
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control  @error('gambar') is-invalid @enderror" placeholder="Masukan Gambar" name="gambar">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                <div class="form-group">
                    <label for="">Email</label>
                    <select name="users_id" class="form-control  @error('users_id') is-invalid @enderror">
                        <option value="">Pilih Email</option>
                        @foreach ($email as $item)
                        <option value="{{ $item->id }}">{{ $item->email }}</option>
                        @endforeach
                    </select>
                    @error('users_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>


                <div class="form-group">
                    <label for="">Riwayat Kelas</label>
                    <select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                        <option value="">Pilih Kelas</option>
                        @foreach ($kelas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                        @endforeach
                    </select>
                    @error('kelas_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>



            <button class="btn btn-block btn-primary">
                <i class="fas fa-sm fa-save"> Simpan</i>
            </button>
            </form>
        </div>
    </div>



</div>
@endsection

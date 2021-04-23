@extends('layouts.siswa')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-900">Data Diri Anda</h1>
    </div>


    <div class="card shadow"  style="width:350px;">
        <div class="card-body">

            <style>
                .card-body{
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    padding: 50px;
                }

                .card-body p{
                    font-weight: bold
                }
            </style>

                <img src="{{ Storage::url('/gambar/'. $items->gambar) }}" class="card-img-top img-thumbnail" alt="...">
                    <p class="mt-3 ml-3">Nama Anda : {{ $items->nama }}
                    <br>
                     Jenis Kelamin : {{ $items->jenis_kelamin }}
                     <br>
                     Alamat : {{ $items->alamat }}
                     <br>
                     No Telepon : {{ $items->no_telepon }}
                </p>

                <a href="" class="btn btn-warning" style="margin-left: 84px;">
                    <i class="fas fa-edit"> Ubah data</i>
                </a>


        </div>

    </div>

</div>
@endsection

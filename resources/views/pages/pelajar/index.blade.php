@extends('layouts.admin')

@section('title', 'halaman dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pelajar</h1>
        <a href="{{ route('pelajar.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus-circle fa-sm text-white-50"></i> Menambah Data</a>
    </div>

    @if (session('status'))
    <div class="alert alert-success mt-5">
        {{ session('status') }}
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Gambar</th>
                            <th>Email</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_telepon }}</td>
                            <td>
                                <img src="{{ Storage::url('/gambar/'.$item->gambar) }}" alt="" width="150" class="img-thumbnail">
                            </td>
                            <td>{{ $item->users->email }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>
                                <a href="{{ route('pelajar.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-sm fa-edit"></i>
                                </a>

                                <a href="{{ route('pelajar.destroy', $item->id) }}" class="btn btn-sm btn-danger delete-confirm">
                                    <i class="fas fa-sm fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
@endsection

@push('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Anda yakin?',
        text: 'Data yang terhapus tidak dapat dikembalikan!',
        icon: 'warning',
        dangerMode: true,
        buttons: ["Tidak", "Hapus!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }else{
            swal("Data Anda Tetap Tersimpan!");
        }
        setTimeout(window.location.reload.bind(window.location), 1500);
    });
});
</script>

<script>
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}",  'success')
    setTimeout(window.location.reload.bind(window.location), 2000);
    @endif
</script>
@endpush

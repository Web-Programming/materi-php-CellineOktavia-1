@extends('app.master')
@section('title', 'Supplier Index')

@section('sidebar')
    @parent
@endsection

@section('submenu-supplier')
    <a href="/supplier/create" class="list-group-item list-group-item-action ps-4">Tambah Supplier</a>
    <a href="/supplier/search" class="list-group-item list-group-item-action ps-4">Cari Supplier</a>
@endsection

@section('content')
    <h1 class="h3 mb-3">Supplier</h1>
    <p class="text-muted">Halaman Daftar Supplier</p>

    <div class="card mb-3">
        <div class="card-body">
            Konten supplier bisa ditampilkan di sini.
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="mb-4">{{ $title }}</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>No. Telpon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($suppliers as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['phone'] }}</td>
                            <td>{{ $item['address'] }}</td>
                            <td>
                                <a href="{{ url('/supplier/' . $item['id']) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ url('/supplier/' . $item['id'] . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@extends('app.master')
@section('title', 'Produk Index')

@section('sidebar')
    @parent
@endsection

@section('submenu-produk')
        <a href="/produk/create" class="list-group-item-action ps-4" style="text-decoration: none">Tambah Produk</a>
        <a href="/produk/search" class="list-group-item-action ps-4" style="text-decoration: none">Cari Produk</a>
@endsection

@section('content')
    <h1 class="h3 mb-3">Produk</h1>
    <p class="text-muted">Halaman Daftar Produk yang Menggunakan Kehidupan</p>

    <div class="card">
        <div class="card-body">
            Konten produk bisa ditampilkan di sini.
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="mb-4">{{ $title }}</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead> 
                <tbody>
                    @for ($i = 0; $i < count($products); $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $products[$i]['name'] }}</td>
                            <td>Rp {{ number_format($products[$i]['price'], 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ url('/produk/' . $products[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ url('/produk/' . $products[$i]['id'] . '/edit') }}" class="btn btn-sm btn-info">Edit</a>
                            </td>
                        </tr>
                    @endfor

                    {{-- @foreach ($products as $item)
                        <tr>
                            <td>{( $loop->iteration  )}</td>
                            <td>{( $item['name'] )}</td>
                            <td>Rp {( number_format($products[$i]['price'], 0, ',', '.') )}</td>
                            <td>
                                <a href="{{ url('/produk/' . $products[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ url('/produk/' . $products[$i]['id'] . '/edit') }}" class="btn btn-sm btn-info">Edit</a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
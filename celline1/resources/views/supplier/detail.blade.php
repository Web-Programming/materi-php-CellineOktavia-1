@extends('template')
@section('title', 'Ini Halaman Detail')

@section('navbar')
    @parent
    <b>Ini bisa diisi Navbar Tambahan</b>
@endsection

@section('content')
    <h1>Ini halaman detail supplier</h1>
        Nama Produk : <b>{{ $supplier_name }}</b>
        Id : <b>{{ $id }}</b>

        <hr/>
        @for ($i = 0; $i < 5; $i++)
            Data {{ $i }} <br />
        @endfor
    <div class="container-fluid">
        <h1 class="mb-4">{{ $title }}</h1>
        <p>ID Supplier {{ $product['id'] }}</p>
        <p>phone: {{ $suppliers['phone'] }}</p>
        <hr>
        <a href="{{ url('/produk') }}" class="btn btn-primary ">Kembali</a>
    </div>
@endsection

    

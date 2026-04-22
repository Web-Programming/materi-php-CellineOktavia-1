@extends('template')
@section('title', 'Ini Halaman Detail')

@section('navbar')
    @parent
    <b>Ini bisa diisi Navbar Tambahan</b>
@endsection

    @section('content')
        <h1>Ini halamana detail produk</h1>
            Nama Produk : <b>{{ $product_name }}</b>
            Id : <b>{{ $id }}</b>

            <hr/>
            @for ($i = 0; $i < 5; $i++)
                Data {{ $i }} <br />
            @endfor
    @endsection
    

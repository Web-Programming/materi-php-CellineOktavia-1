@extends('app.master')

@section('title', $title)

@section('sidebar')
    @parent
@section('submenu-supplier')
    <a href="/produk/create"
        class="list-group-item list-group-item-action ps-4 
         {{ request()->is('produk/create') ? 'active' : '' }}">Tambah
        Supplier</a>
    <a href="/produk/search"
        class="list-group-item list-group-item-action ps-4 
         {{ request()->is('produk/search') ? 'active' : '' }}">Cari
        Supplier</a>
@endsection
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ url('/produk/' . $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description', $product->description) }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                        <option value="{{old('status') }}">Pilih Status</option>
                        <option value="new" {{ old('status', $product->status) === 'new' ? 'selected' : '' }}>Baru</option>
                        <option value="used" {{ old('status', $product->status) == 'used' ? 'selected' : '' }}>Bekas</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">Tanggal Rilis</label>
                    <input type="date" name="release_date" id="release_date" class="form-control @error('release_date') is-invalid @enderror" value="{{ old('release_date', $product->release_date) }}">
                    @error('release_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input" {{ old('is_active') ? 'checked' : '' }}>
                    <label for="is_active" class="form-check-label">Aktif</label>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection

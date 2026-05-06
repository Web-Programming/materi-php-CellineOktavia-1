<?php

use Illuminate\Support\Facades\Route;

//Route ke halaman utama
Route::get('/', function () {
    echo 'Hello, Nama saya Celline';
    // return view('welcome');
});

//Route ke halaman alamat
Route::get('/alamat', function(){
    echo 'Jalan Rajawali No. 14 Palembang';
    echo '<br>';
    echo 'Rt. 01 Rw. 02';
    echo '<br>';
    echo 'Kota Palembang';
    echo '<br>';
    echo 'Provinsi Sumatera Selatan';
});

//Route dinamis dengan parameter id
Route::get('/user/{id}', function($id){
    echo 'User ID: ' .$id;
});

//Route dinamis dengan parameter nama
Route::get('/user2/{name}', function($name){
    echo 'User Name: ' .$name;
});

//Route dinamis dengan opsional parameter nama
Route::get('/user3/{name?}', function($name = 'Tamu'){
    echo 'User Name: ' .$name;
});

//Route dinamis dengan parameter nama dan id
Route::get('/user4/{id}/{name}', function($id, $name){
    echo 'User ID: ' .$id;
    echo '<br>';
    echo 'User Name: ' .$name;
});

//Router dengan metode POST -> menyimpan
Route::get('/simpan', function(){
    echo 'Data berhasil disimpan';
});

//Router dengan metode PUT -> update data
Route::get('/update/{id}', function($id){
    echo 'Data berhasil diperbarui dengan ID: ' .$id;
});

//Router dengan metode PATCH -> update data
Route::get('/update2/{id}', function($id){
    echo 'Data berhasil diperbarui dengan ID: ' .$id;
});

//Router dengan metode DELETE -> menghapus data
Route::get('/hapus/{id}', function($id){
    echo 'Data berhasil dihapus dengan ID: ' .$id;
});

//Route untuk menampilkan halaman test_method
Route::get('/test-method', function(){
    return view('test_method');
});

//Menampilkan halaman profile
Route::get('/profile', function(){
    return view('profile');
});

//Gunakan . untuk memisahkan folder dengan view
Route::get('/detailproduk', function(){
    return view('produk.detail');
});

//Mengirim data ke view
Route::get('/detailproduk/{name}', function($name){
    return view('produk.detail', 
    ['product_name'=>$name,
    'id'=> 101,
    'color'=> 'Silver',
    'Stock'=> 12
    ]);
});

Route::get('/detailprdouk/{name}', function($name){
    return view('produk.detail',
        ['product_name'=> $name,
            'id'=> $id,
            'color'=> 'Silver',
            'Stock'=> 12
        ]
    );
});

//Produk
Route::get('/produk/', function(){
    return view('produk.index');
});

Route::get('/produk/create', function(){
    return view('produk.create');
});

Route::get('/produk/search', function(){
    return view('produk.search');
});

Route::get('/produk/detail', function(){
    return view('produk.detail');
});

//Supplier
Route::get('/supplier/', function(){
    return view('supplier.index');
});

use App\Http\Controllers\ProdukController;
//php artisan make:controller ProdukController --Resource
Route::resource('/produk', ProdukController::class);
Route::get('/produk/search', ProdukController::class.'@search');

//php artisan make:controller SupplierController --Resouce
//Route::resource('supplier', SupplierController::class);
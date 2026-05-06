<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $title = 'Daftar Produk';

        $products = [
            ['id'=> 1, 'name' => 'Laptop', 'price'=> 7500000],
            ['id'=> 2, 'name'=> 'Mouse', 'price'=> 150000],
            ['id'=> 3, 'name'=> 'Keyboard', 'price'=> 300000],
            ['id'=> 4, 'name'=> 'Monitor', 'price'=> 2500000]
        ];

        return view('produk.index', compact('title', 'products'));
    }

    public function create(){
        return view('produk.create');
    }

    public function show(string $id){
        $title = "Detail Produk";
        $product = ['id'=> 4, 'name'=>'Monitor', 'price'=>2500000];
        return view('produk.detail', compact('id', 'product', 'title'));
    }
}
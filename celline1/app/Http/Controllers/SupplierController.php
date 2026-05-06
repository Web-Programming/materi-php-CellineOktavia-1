<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $title = 'Daftar Supplier';

        $suppliers = [
            ['id'=> 1, 'name' => 'Sumber Jaya', 'phone'=> 1234567, 'address'=> 'Jl. Ahmad Dhani'], //Oktal hanya boleh 0 - 7 angka
            ['id'=> 2, 'name'=> 'CV Animator', 'phone'=> 9999999, 'address'=> 'Jl. Bukit Bergaya'],
            ['id'=> 3, 'name'=> 'PT Huuaaaa', 'phone'=> 4444444, 'address'=> 'Jl. 9 Naga'],
            ['id'=> 4, 'name'=> 'Jujur Janggal', 'phone'=> 1111111, 'address'=> 'Jl. Pasti Sukses']
        ];

    return view('supplier.index', compact('title', 'suppliers'));
}

    // public function create(){
    //     return view('produk.create');
    // }

    public function show(string $id){
        $title = "Detail Supplier";
        $product = ['id'=> 4, 'name'=>'Tembaga Buruk', 'phone'=>6667778, 'address'=>'Jl. Kiloan'];
        return view('supplier.detail', compact('id', 'supplier', 'title'));
    }
}

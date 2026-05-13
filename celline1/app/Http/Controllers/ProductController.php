<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Daftar Produk";

        // Mengambil semua data produk dari database
        $products = Product::all();

        return view('produk.index', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create', [
            'title' => 'Tambah Produk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric'
        ]);

        // Simpan data ke database
        Product::create($validatedData);

        // Redirect setelah berhasil
        return redirect('/produk/create')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Detail Produk";
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);
        return view('produk.detail', compact('product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Produk";
        $product = Product::findOrFail($id);
        return view('produk.edit', compact('product', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
        [
        'name' => 'required|string|max:100',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'status' => 'required|in:new,used',
        'is_active' => 'nullable|boolean',
        'release_date' => 'nullable|date',
        ],
        [
        'name.required' => 'Nama produk wajib diisi.',
        'name.max' => 'Nama produk maksimal 100 karakter.',

        'price.required' => 'Harga produk wajib diisi.',
        'price.numeric' => 'Harga produk harus berupa angka.',
        'price.min' => 'Harga produk tidak boleh negatif.',

        'status.required' => 'Status produk wajib dipilih.',
        'status.in' => 'Status produk harus new atau used.',

        'release_date.date' => 'Format tanggal rilis tidak valid.',
        ]
    );

    $validated['is_active'] = $request->has('is_active') ? 1 : 0;
    Product::create($validated);

    return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari produk
        $product = Product::findOrFail($id);
        // Hapus produk
        $product->delete();
        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');
    }

    /**
     * Search product.
     */
    public function search(Request $request)
    {
        $title = "Cari Produk";
        $keyword = $request->keyword;
        $products = Product::where('name', 'like', '%' . $keyword . '%')->get();
        return view('produk.search', compact('products', 'title', 'keyword'));
    }
}
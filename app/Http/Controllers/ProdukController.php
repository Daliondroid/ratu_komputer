<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Nanti di sini lu bisa tambahin logic
        // kayak ngitung total produk, total omset, dll.
        // Untuk sekarang, kita cuma panggil view-nya aja.

        return view('dashboard.index');
    }

    // App/Http/Controllers/ProdukController.php

    public function create()
    {
        // Return view yang ada di folder: resources/views/produk/create.blade.php
        return view('produk.create');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'kode_produk' => 'required',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'id_kategori' => 'required',
            'id_cabang' => 'required', // Penting!
        ]);

        // Simpan Data
        \App\Models\Produk::create($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan ke cabang tersebut!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

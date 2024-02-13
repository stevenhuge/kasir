<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $Produk = Produk::all();
        return view('produk', compact('Produk'));
    }

    public function create() {
        return view('tambah');
    }

    public function store(Request $request) {
        Produk::create([
            'name'=>$request->name,
            'harga'=>$request->harga,
            'stok'=>$request->stok
        ]);
        return redirect()->route('produk.index');
    }

    public function destroy(int $id) {
        Produk::where('id', $id)->delete();
        return redirect()->route('produk.index');
    }

}

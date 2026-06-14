<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Menampilkan data nilai kuliah
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        foreach ($keranjangbelanja as $k) {
            $k->Total = $k->Jumlah * $k->Harga;
        }

        return view('indexkeranjangbelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // Menampilkan form tambah dari tombol "beli"
    public function tambah()
    {
        return view('tambahkeranjangbelanja');
    }

    // Masukkan data ke dalam database
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect('/keranjangbelanja');
    }

    // Menambahkan fitur hapus data dari tombol "batal"
    public function batal($id)
    {
        DB::table('keranjangbelanja')
            ->where('ID', $id)
            ->delete();

        return redirect('/keranjangbelanja');
    }
}

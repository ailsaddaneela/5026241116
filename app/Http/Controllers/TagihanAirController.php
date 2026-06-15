<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanAirController extends Controller
{
    // menampilkan data tagihan air
    public function index()
    {
        $tagihanair = DB::table('tagihan_air')->get();
        foreach ($tagihanair as $t) {
            $t->penggunaan= $t->MeterAkhir - $t->MeterAwal;
            $t->total= $t->penggunaan * 5000;
        }

        return view('indextagihanair', ['tagihanair' => $tagihanair]);
    }

    // menampilkan form tambah
    public function tambah()
    {
        return view('tambahtagihanair');
    }

    // masukkan data ke dalam database
    public function store(Request $request)
    {
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir,
        ]);

        return redirect('/eas');
    }
}

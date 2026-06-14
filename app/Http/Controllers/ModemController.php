<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModemController extends Controller
{
    // Menampilkan data nilai kuliah
    public function index()
    {
        $modem = DB::table('modem')->paginate(10);

        return view('Modem.index', ['modem' => $modem]);
    }

    // Menampilkan form tambah
    public function tambah()
    {
        return view('Modem.tambah');
    }

    // Masukkan data ke dalam database
    public function store(Request $request)
    {
        DB::table('modem')->insert([
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->tersedia,
        ]);

        return redirect('/modem');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $modem = DB::table('modem')
            ->where('ID', $id)
            ->get();

        return view('Modem.edit', [
            'modem' => $modem
        ]);
    }

     // Update data modem
    public function update(Request $request)
    {
        DB::table('modem')
            ->where('ID', $request->id)
            ->update([
                'merkmodem' => $request->merkmodem,
                'stockmodem' => $request->stockmodem,
                'tersedia' => $request->tersedia,
            ]);

        return redirect('/modem');
    }

    // Hapus data modem
    public function hapus($id)
    {
        DB::table('modem')
            ->where('ID', $id)
            ->delete();

        return redirect('/modem');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\PegawaiDBController;

//Controller Nilai Kuliah
use App\Http\Controllers\NilaiKuliahController;

//Controller Keranjang Belanja
use App\Http\Controllers\KeranjangBelanjaController;

//Controller Siswa
use App\Http\Controllers\SiswaController;

// Controller Modem (Latihan PRA EAS)
use App\Http\Controllers\ModemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('5026241116', [DosenController::class, 'NRP']);
Route::get('contoh', [DosenController::class, 'contoh']);
Route::get('intro', [DosenController::class, 'intro']);
Route::get('news', [DosenController::class, 'news']);
Route::get('news1', [DosenController::class, 'news1']);
Route::get('responsive', [DosenController::class, 'responsive']);
Route::get('template', [DosenController::class, 'template']);

Route::get('index_pert5', [DosenController::class, 'index_pert5']);
Route::get('linktree', [DosenController::class, 'linktree']);

//CRUD tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBontroller::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);
Route::get('/nilaikuliah/edit/{id}', [NilaiKuliahController::class, 'edit']);
Route::post('/nilaikuliah/update', [NilaiKuliahController::class, 'update']);
Route::get('/nilaikuliah/hapus/{id}', [NilaiKuliahController::class, 'hapus']);

//CRUD Keranjang Belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

//CRUD Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//CRUD Modem
Route::get('/modem', [ModemController::class, 'index']);
Route::get('/modem/tambah', [ModemController::class, 'tambah']);
Route::post('/modem/store', [ModemController::class, 'store']);
Route::get('/modem/edit/{id}', [ModemController::class, 'edit']);
Route::post('/modem/update', [ModemController::class, 'update']);
Route::get('/modem/hapus/{id}', [ModemController::class, 'hapus']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;

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

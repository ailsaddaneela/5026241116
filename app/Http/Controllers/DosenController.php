<?php

namespace App\Http\Controllers;
//package kuliah pert3

use Illuminate\Http\Request;
//import

class DosenController extends Controller
{

public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}

public function biodata(){
    $nama = "Ailsa Des Daneela" ;
    $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
}

public function NRP(){
    return view('5026241116');
}

public function contoh(){
    return view('contoh');
}

public function intro(){
    return view('intro');
}

public function news(){
    return view('news');
}

public function news1(){
    return view('news1');
}

public function responsive(){
    return view('responsive');
}

public function template(){
    return view('template');
}

public function index_pert5(){
    return view('index_pert5');
}

public function linktree(){
    return view('linktree');
}

}

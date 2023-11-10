<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profile', function () {
    $nama = 'Fulan';
    // return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});

Route::get('tabel', function () {
    return view('pertemuan5/tabel');
});

Route::get('tabel_e1', function () {
    return view('pertemuan5_e1/tabel');
});

Route::get('tabel_d1', function () {
    return view('d1/pertemuan5/tabel');
});

Route::get('tabel_a1', function () {
    $kode_pelanggan = ['PEL001', 'PEL003', 'PEL005'];
    $nama = ['Agus', 'Joko', 'Mahmud'];
    $alamat = ['Medan', 'Tembung', 'Johor'];
    $jumlah = count($alamat);
    return view('a1/pertemuan5/tabel')->with([
        'x' => $kode_pelanggan,
        'y' => $nama,
        'z' => $alamat,
        'count' => $jumlah
    ]);
});

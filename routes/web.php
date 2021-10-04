<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hallo Pak';
});

Route::get('laravel/framework', function () {
    return 'Hallo Laravel';
});

Route::get('jurusan', function () {
    return 'Rekayasa Perangkat Lunak';
});

Route::get('nama', function () {
    return 'Saya Silvi Lestari';
});

Route::get('welcome', function () {
    return 'Selamat Datang';
});

// Parameter dibagi menjadi 2 : Parameter Wajib dan Parameter Optional
// Parameter Wajib
Route::get('/nama-framework/{nama}', function ($nama) {
    return 'Nama Framework yang dimasukan adalah : ' .$nama;
});


Route::get('/kelas-anda/{kelas}', function ($kelas) {
    return 'Saya duduk dibangku kelas : ' .$kelas;
});

Route::get('/nama-framework/{nama}/tahun-rilis/{tahun}', function ($nama, $tahun) {
    return 'Nama Framework yang dimasukan adalah : ' .$nama
    . '<br>Tahun <b>Rilis</b> : ' .$tahun;
});


// Parameter Optional diberi tanda ?
Route::get('/nama-saya-adalah/{nama?}', function ($nama = null) {
    return 'Nama Saya Adalah : ' .$nama;
});

// atau null diganti dengan 'wajib diisi'
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'Wajib di isi') {
    return 'Nama Saya Adalah : ' .$nama;
});


Route::get('/hitung-luas-segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    return 'Hasil Luas Segitiganya : ' .($alas * $tinggi) * 0.5;
});


Route::get('/hitung-luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1, $tinggi = 1) {
    return 'Hasil Luas Segitiganya : ' .($alas * $tinggi) * 0.5;
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $mahasiswa = [
        'nama' => 'Mita Listiana Lestari',
        'nim' => '251011700870',
        'prodi' => 'Sistem Informasi',
        'kampus' => 'Universitas Pamulang',
        'status' => 'Mahasiswa Aktif',
    ];

    return view('welcome', compact('mahasiswa'));
});
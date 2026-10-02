<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Mita Listiana Lestari',
            'nim' => '251011700870',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Mahasiswa Aktif',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}
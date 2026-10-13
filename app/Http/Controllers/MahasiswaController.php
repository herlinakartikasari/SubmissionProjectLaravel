<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Latihan A: Menampilkan profil mahasiswa
    public function profil()
    {
        $nama = 'Herlina Kartika Sari';
        $nim = '2023XXXX';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    // Latihan B: Menampilkan daftar mahasiswa
    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Andi', 'nim' => '2301001', 'ipk' => 3.80],
            ['nama' => 'Budi', 'nim' => '2301002', 'ipk' => 3.40],
            ['nama' => 'Citra', 'nim' => '2301003', 'ipk' => 3.20],
            ['nama' => 'Dina', 'nim' => '2301004', 'ipk' => 2.90],
            ['nama' => 'Eko', 'nim' => '2301005', 'ipk' => 3.60],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    // Latihan C: Menampilkan detail mahasiswa berdasarkan NIM
    public function detail($nim)
    {
        $mahasiswa = [
            ['nama' => 'Andi', 'nim' => '2301001', 'ipk' => 3.80],
            ['nama' => 'Budi', 'nim' => '2301002', 'ipk' => 3.40],
            ['nama' => 'Citra', 'nim' => '2301003', 'ipk' => 3.20],
            ['nama' => 'Dina', 'nim' => '2301004', 'ipk' => 2.90],
            ['nama' => 'Eko', 'nim' => '2301005', 'ipk' => 3.60],
        ];

        $data = collect($mahasiswa)->firstWhere('nim', $nim);

        abort_if(!$data, 404);

        return view('mahasiswa.detail', ['mhs' => $data]);
    }
}

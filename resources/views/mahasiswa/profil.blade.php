<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
</head>
<body>
    <h1>Profil Mahasiswa</h1>
<x-alert tipe="sukses">
    Data mahasiswa berhasil ditampilkan.
</x-alert>

<x-alert tipe="info">
    Selamat datang di halaman profil mahasiswa.
</x-alert>

<x-alert tipe="bahaya">
    Contoh pesan kesalahan.
</x-alert>
<x-kartu>
    <x-slot:judul>Profil Mahasiswa</x-slot:judul>

    Halaman ini menampilkan informasi mahasiswa.
</x-kartu>

    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Program Studi: {{ $prodi }}</p>

    <a href="{{ route('mahasiswa.daftar') }}">Lihat Daftar Mahasiswa</a>
</body>
</html>

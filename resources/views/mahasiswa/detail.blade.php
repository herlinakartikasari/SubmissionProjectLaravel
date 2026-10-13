<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>

    <p>Nama: {{ $mhs['nama'] }}</p>
    <p>NIM: {{ $mhs['nim'] }}</p>
    <p>IPK: {{ $mhs['ipk'] }}</p>

    <a href="{{ route('mahasiswa.daftar') }}">
        Kembali ke Daftar Mahasiswa
    </a>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detail Jurusan</title>
</head>
<body>

    <h1>Detail Jurusan</h1>
    <table border="1" cellpadding="8" cellspacing="0">
       <tr>
            <th>ID</th>
            <td>{{ $jurusan->id }}</td>
        </tr>
        <tr>
            <th>Kode Jurusan</th>
            <td>{{ $jurusan->kode }}</td>
        </tr>
        <tr>
            <th>Nama Jurusan</th>
            <td>{{ $jurusan->nama }}</td>
        </tr>
    </table>

    <br>

    <a href="{{ route('jurusan.index') }}">
        Kembali
    </a>
</body>
</html>

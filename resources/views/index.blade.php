<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h2>Data Karyawan</h2>

    <br><br>

    <form method="GET" action="{{ route('karyawan.cari') }}">
        <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari nama...">
        <button type="submit">Search</button>
    </form>

    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Departemen</th>
        </tr>
        @foreach($karyawan as $p)
        <tr>
            <td>{{ $p->ID }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->posisi }}</td>
            <td>{{ $p->departemen->nama_departemen }}</td>
            <td><a href="/karyawan/{{ $p->ID }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
    <br><br><br><br><br>
    <form action="{{ route('delete', ['ID' => $p->ID]) }}" method="POST">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="text-red-600 cursor-pointer">Hapus</button>
    </form>

    <a href="{{ route('tambah') }}" class="text-lg text-blue-600 font-base">Tambah</a>

    
</body>
</html>
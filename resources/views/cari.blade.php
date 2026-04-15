<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pencarian Karyawan</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
</head>
<body>
    <h2>Hasil Pencarian Karyawan</h2>

    <form method="GET" action="{{ route('cari') }}">
        <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari nama lagi...">
        <button type="submit">Search</button>
        <a href="{{ route('karyawan') }}">Kembali ke Semua Data</a>
    </form>

    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Departemen</th>
        </tr>
        @forelse($karyawan as $p)
        <tr>
            <td>{{ $p->ID }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->posisi }}</td>
            <td>{{ $p->departemen?->nama_departemen ?? 'N/A' }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Data tidak ditemukan untuk kata kunci "{{ request('cari') }}"</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
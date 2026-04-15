<form action="{{ route('update', ['ID' => $karyawan->ID]) }}" method="POST">
    @csrf
    @method('PUT') <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $karyawan->nama }}" required>
    </div>
    <div>
        <label for="posisi">Posisi</label>
        <input type="text" name="posisi" id="posisi" value="{{ $karyawan->posisi }}" required>
    </div>
    <button type="submit">Edit Karyawan</button>
</form>
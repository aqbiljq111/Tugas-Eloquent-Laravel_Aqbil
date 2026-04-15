<form action="{{ route('create') }}" method="POST" class="mx-auto p-6">
    @csrf
    <div class="mb-5">
        <label for="nama" class="block text-sm font-medium text-slate-700 mb-2">Nama</label>
        <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border border-blue-300 rounded-md" required>
    </div>
    <div class="mb-6 mt-2">
        <label for="posisi" class="block text-sm font-medium text-slate-700 mb-2">Posisi</label>
        <input type="text" name="posisi" id="posisi" class="w-full px-4 py-2 border border-blue-300 rounded-md" required>
    </div>
    <div>
        <label for="id_departemen">id_departemen</label>
        <input type="int" name="id_departemen" id="id-departemen" required>
    </div>
    <button type="submit" class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-md">Tambah Karyawan</button>
</form>
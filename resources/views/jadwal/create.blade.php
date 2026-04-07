<x-app-layout>
    <div style="padding: 30px; color:white;">

        <h1 style="font-size: 24px; font-weight: bold;">Tambah Jadwal</h1>

        <form action="{{ route('jadwal.store') }}" method="POST">
            @csrf

            <div style="margin-top:15px;">
                <label>Nama Hari</label><br>
                <input type="text" name="nama_hari" style="width:100%; padding:8px; background-color:white; color:black; border:none;">
            </div>

            <div style="margin-top:15px;">
                <label>Tipe Hari</label><br>
                <select name="tipe_hari" style="width:100%; padding:8px; background-color:white; color:black; border:none;">
                    <option value="weekday">Weekday</option>
                    <option value="weekend">Weekend</option>
                </select>
            </div>

            <br>
            <button style="background:#facc15; padding:10px 20px; border:none;">
                Simpan
            </button>
        </form>

    </div>
</x-app-layout>
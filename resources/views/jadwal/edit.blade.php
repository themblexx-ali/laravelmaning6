<x-app-layout>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0f0f0f;
            color: black;
        }

        .edit-jadwal {
            padding: 50px;
        }

        .edit-jadwal h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: white;
        }

        .edit-jadwal label {
            font-size: 18px;
            margin-bottom: 5px;
            display: block;
            color: #ddd;
        }

        .edit-jadwal input, .edit-jadwal select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
        }

        .edit-jadwal button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-jadwal button:hover {
            background-color: #45a049;
        }
    </style>

    <div class="edit-jadwal">
        <h1>Edit Jadwal</h1>

        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label>Nama Hari</label><br>
                <input type="text" name="nama_hari" value="{{ $jadwal->nama_hari }}">
            </div>

            <div>
                <label>Tipe Hari</label><br>
                <select name="tipe_hari">
                    <option value="weekday" {{ $jadwal->tipe_hari == 'weekday' ? 'selected' : '' }}>Weekday</option>
                    <option value="weekend" {{ $jadwal->tipe_hari == 'weekend' ? 'selected' : '' }}>Weekend</option>
                </select>
            </div>

            <div>
                <label>Status</label><br>
                <select name="status">
                    <option value="tersedia" {{ $jadwal->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="penuh" {{ $jadwal->status == 'penuh' ? 'selected' : '' }}>Penuh</option>
                </select>
            </div>

            <br>
            <button type="submit">Update</button>
        </form>
    </div>
</x-app-layout>
<x-app-layout>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0f0f0f;
            color: white;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        .admin-sidebar {
            width: 250px;
            background: #181818;
            padding: 20px;
        }

        .admin-header {
            font-size: 22px;
            font-weight: bold;
            color: #facc15;
            margin-bottom: 20px;
        }

        .admin-nav a {
            display: block;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
            color: white;
            text-decoration: none;
        }

        .admin-nav a:hover {
            background-color: #ffffff;
            color: #0f0f0f;
        }

        .admin-content {
            flex: 1;
            padding: 20px;
        }

        .jadwal-card {
            background-color: #ffffff;
            color: #0f0f0f;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            text-decoration: none;
        }

        .btn-edit {
            background: #3b82f6;
            color: white;
        }

        .btn-status {
            background: #22c55e;
            color: white;
        }

        .btn-delete {
            background: #ef4444;
            color: white;
        }
        
        .btn-edit:hover {
            background: #3710e2;
            color: white;
        }
        .btn-status:hover {
            background: #028f09;
            color: white;
        }
        .btn-delete:hover {
            background: #ff0000;
            color: white;
        }
    </style>

    <div class="admin-container">

        <!-- SIDEBAR -->
        <aside class="admin-sidebar">
            <div class="admin-header">ADMIN PANEL</div>

            <nav class="admin-nav">
                <a href="#">📊 Dashboard</a>
                <a href="#jadwal">📅 Jadwal</a>
                <a href="#booking">📥 Booking</a>
            </nav>
        </aside>

        <!-- CONTENT -->
        <div class="admin-content">

            <h1>Dashboard Admin</h1>

            <!-- JADWAL -->
            <div class="jadwal-card" id="jadwal">
                <h2>Data Jadwal</h2>

                @forelse($jadwal as $item)
                    <div class="jadwal-item">
                        <ul>
                            <li><b>{{ $item->nama_hari }}</b></li>
                        
                        <p>Status: 
                            <span>
                                {{ $item->status }}
                            </span>
                        </p>
                        <p>{{ $item->tanggal }}</p>

                        <a href="{{ route('jadwal.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('jadwal.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>

                        <form action="{{ route('jadwal.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        </form>
                        </ul>
                    </div>
                @empty
                    <p>Tidak ada jadwal</p>
                @endforelse

                <form action="{{ route('jadwal.create') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-edit">Tambah Jadwal</button>
                </form>
            </div>

            <!-- BOOKING -->
            <div class="card" id="booking">
                <h2>Data Booking Masuk</h2>

                @forelse($booking as $b)
                    <div class="booking-item">
                        <ul>
                            <li>Nama: {{ $b->nama }}</li>
                            <li>No HP: {{ $b->no_hp }}</li>
                            <li>Pembayaran: {{ $b->pembayaran }}</li>
                            <li>Tanggal: {{ $b->tanggal }}</li>
                        </ul>
                    </div>
                @empty
                    <p>Belum ada booking</p>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>
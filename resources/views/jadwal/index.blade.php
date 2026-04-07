<x-app-layout>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

body {
    background: #0f0f0f;
    font-family: 'Poppins', sans-serif;
}

/* CONTAINER */
.jadwal {
    padding: 80px 10%;
    color: white;
}

/* TITLE */
.jadwal h1 {
    font-size: 42px;
    margin-bottom: 10px;

    background: linear-gradient(90deg, #d4af37, #f5e6b3);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.jadwal p {
    color: #aaa;
    margin-bottom: 40px;
}

/* LAPANGAN TITLE */
.lapangan-title {
    font-size: 28px;
    margin: 40px 0 15px;
    color: #d4af37;
}

/* CARD */
.jadwal-card {
    background: #1a1a1a;
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 25px;

    border: 1px solid rgba(212,175,55,0.2);
    transition: 0.3s;
}

.jadwal-card:hover {
    transform: translateY(-5px);
    border-color: #d4af37;
}

/* INFO TEXT */
.jadwal-card p {
    margin-bottom: 8px;
    color: #ccc;
}

/* GRID JAM */
.jam-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    gap: 10px;
    margin-top: 15px;
}

/* JAM BOX */
.jam-box {
    background: #111;
    padding: 12px;
    border-radius: 10px;
    text-align: center;
    border: 1px solid rgba(212,175,55,0.1);
    transition: 0.3s;
}

.jam-box:hover {
    border-color: #d4af37;
    transform: scale(1.05);
}

/* JAM TEXT */
.jam-box span {
    display: block;
    font-size: 14px;
    margin-bottom: 8px;
}

/* BUTTON */
.btn-gold {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 12px;
    text-decoration: none;
    font-weight: bold;

    background: linear-gradient(90deg, #37d466, #2fd324);
    color: black;

    box-shadow: 0 0 8px rgba(99, 231, 132, 0.4);
    transition: 0.3s;
}

.btn-gold:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(78, 228, 36, 0.7);
}

/* DETAIL BUTTON */
.btn-detail {
    margin-top: 20px;
    display: inline-block;
    color: #1dc48c;
    text-decoration: none;
    font-size: 14px;
}

.btn-detail:hover {
    text-decoration: underline;
}
</style>

<div class="jadwal">
    <h1>Jadwal Lapangan</h1>
    <p>Pilih waktu terbaik untuk booking lapangan futsal.</p>

    @foreach($lapangan as $lap)
        <div class="lapangan-title">{{ $lap->nama_lapangan }}</div>

        @foreach($lap->jadwals as $jadwal)
            <div class="jadwal-card">

                <p><strong>Hari:</strong> {{ $jadwal->nama_hari }}</p>
                <p><strong>Status:</strong> {{ $jadwal->status }}</p>

                <div class="jam-container">

                    {{-- WEEKDAY --}}
                    @if($jadwal->tipe_hari == 'weekday')
                        @foreach($jam_slots_weekday as $jam)
                            <div class="jam-box">
                                <span>{{ $jam->jam_mulai }} - {{ $jam->jam_selesai }}</span>
                                <a href="{{ route('booking.create', ['jam_slot_id' => $jam->id]) }}" class="btn-gold">
                                    Booking
                                </a>
                            </div>
                        @endforeach

                    {{-- WEEKEND --}}
                    @else
                        @foreach($jam_slots_weekend as $jam)
                            <div class="jam-box">
                                <span>{{ $jam->jam_mulai }} - {{ $jam->jam_selesai }}</span>
                                <a href="{{ route('booking.create', ['jam_slot_id' => $jam->id]) }}" class="btn-gold">
                                    Booking
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>

                <a href="{{ route('lapangan.detail', $lap->id) }}" class="btn-detail">
                    Lihat Detail →
                </a>

            </div>
        @endforeach
    @endforeach

</div>
</x-app-layout>
<x-app-layout>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    /* JADWAL */
    .jadwal {
        animation: slideIn 2s ease-in-out;
        padding: 100px;
        border: 5px solid #aaa;
        background-color: #202020;
        color: white;
    }
    .jadwal h1 {
        font-size: 50px;
        margin-bottom: 20px;
    }
    .jadwal-card{
        background-color: #524f4f;
        padding: 15px;
        margin-bottom: 10px;
        border: 10px;
        border-radius: 10px;
    }
    .jadwal p {
         font-size: 20px;
         margin-bottom: 20px;
        }
        .jadwal h3 {
            font-size: 30px;
            margin-bottom: 15px;
        }
        .jadwal div {
            background-color: #202020;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .jadwal div p {
            font-size: 18px;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        .jadwal div span {
            font-weight: bold;
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <div class="jadwal">
        <h1>Jadwal Lapangan</h1>
        <p>Berikut adalah jadwal yang tersedia untuk lapangan futsal kami.</p>

        @foreach($lapangan as $lap)
            <h2>{{ $lap->nama_lapangan }}</h2>

            @foreach($lap->jadwals as $jadwal)
                <div class="jadwal-card">
                    <p><strong>Hari:</strong> {{ $jadwal->nama_hari }}</p>
                    <p><strong>Status:</strong> {{ $jadwal->status }}</p>

                    <p><strong>Jam Tersedia:</strong></p>

                    {{-- WEEKDAY --}}
                    @if($jadwal->tipe_hari == 'weekday')
                        @foreach($jam_slots_weekday as $jam)
                            <div class="jam-box">
                                {{ $jam->jam_mulai }} - {{ $jam->jam_selesai }}
                            </div>
                        @endforeach

                    {{-- WEEKEND --}}
                    @else
                        @foreach($jam_slots_weekend as $jam)
                            <div class="jam-box">
                                {{ $jam->jam_mulai }} - {{ $jam->jam_selesai }}
                            </div>
                        @endforeach
                    @endif

                </div>
            @endforeach

        @endforeach

    </div>
</x-app-layout>
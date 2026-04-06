<x-app-layout>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    /* BOOKING */
    .booking {
        animation: slideIn 2s ease-in-out;
        padding: 100px;
        border: 5px solid #aaa;
        background-color: #202020;
        color: white;
    }
    .booking h1 {
        font-size: 50px;
        margin-bottom: 20px;
    }
    .booking p {
         font-size: 20px;
         margin-bottom: 20px;
     }
        .booking h3 {
            font-size: 30px;
            margin-bottom: 15px;
        }
        .booking div {
            background-color: #202020;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .booking div p {
            font-size: 18px;
        }
        .booking div span {
            font-weight: bold;
        }
        .booking img {
            width: 400px;
            border-radius: 15px;
            margin-bottom: 20px;
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
    <div class="booking">
        <h1>Booking Lapangan</h1>
        <p>Silakan pilih jadwal yang tersedia untuk melakukan booking lapangan futsal.</p>
        @forelse ($lapangan->jadwal as $jadwal)
            <div class="booking-card">
                <h3>{{ $jadwal->hari }}</h3>
                <p>Jam: 
                    <select name="jam">
                        @foreach($jam as $item)
                            <option value="{{ $item->jam }}">
                                {{ $item->jam }}
                            </option>
                        @endforeach
                    </select>
                </p>
                <p>Status: {{ $jadwal->status }}</p>
                <p>Harga: Rp {{ number_format($jadwal->harga, 0, ',', '.') }}</p>
                <p>
                    @if ($jadwal->status === 'Tersedia')
                        <a href="{{ route('booking.create', ['jadwal_id' => $jadwal->id]) }}" class="btn btn-primary">Booking Sekarang</a>
                    @else
                        <span class="text-muted">Tidak Tersedia</span>
                    @endif
                </p>
            </div>
        @empty
            <p>Maaf, tidak ada jadwal yang tersedia untuk booking saat ini.</p>
        @endforelse
    </div>
</x-app-layout>
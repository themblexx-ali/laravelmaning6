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
        color: black;
    }
    .booking h1 {
        font-size: 50px;
        margin-bottom: 20px;
        color: white;
    }
    .booking label {
        font-size: 20px;
        margin-bottom: 10px;
        color: white;
    }
    .booking input, .booking select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
    }
        .booking button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .booking button:hover {
            background-color: #45a049;
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
        <form action="{{ route('booking.store') }}" method="POST">
        @csrf

            <label>Nama Pemesan:</label><br>
            <input type="text" name="nama" required><br><br>

            <label>Nomor HP:</label><br>
            <input type="text" name="no_hp" required><br><br>

            <label>Jam Booking:</label><br>
            <input type="text" value="{{ $jam->jam_mulai }} - {{ $jam->jam_selesai }}" readonly><br><br>

            {{-- kirim id jam --}}
            <input type="hidden" name="jam_slot_id" value="{{ $jam->id }}">

            <label>Pembayaran:</label><br>
            <select name="pembayaran" required>
                <option value="cash">Cash</option>
                <option value="transfer">Transfer</option>
            </select><br><br>

            <label>Tanggal:</label><br>
            <input type="date" name="tanggal" required><br><br>

            <button type="submit" class="btn btn-primary">Booking</button>
            @if($errors->any())
                <div style="color:red;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
                </div>
            @endif
        </form> 
    </div>
</x-app-layout>
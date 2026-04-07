<x-app-layout>
<style>
    body {
        background: linear-gradient(135deg, #1f1f1f, #2c2c2c);
        font-family: 'Segoe UI', sans-serif;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background: #2b2b2b;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        animation: fadeIn 1s ease-in-out;
    }

    h1 {
        text-align: center;
        color: #fff;
        margin-bottom: 25px;
    }

    label {
        color: #ddd;
        font-weight: 500;
    }

    input, select {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: none;
        outline: none;
        background: #444;
        color: #fff;
    }

    input:focus, select:focus {
        border: 1px solid #4CAF50;
        background: #555;
    }

    .btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #4CAF50, #2e7d32);
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        transform: scale(1.05);
        background: linear-gradient(135deg, #45a049, #1b5e20);
    }

    .error {
        background: #ff4444;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 10px;
        color: white;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px);}
        to { opacity: 1; transform: translateY(0);}
    }
</style>

<div class="container">
    <h1>Booking Lapangan</h1>

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf

        <label>Nama Pemesan</label>
        <input type="text" name="nama" placeholder="Masukkan nama..." required>

        <label>Nomor HP</label>
        <input type="text" name="no_hp" placeholder="08xxxx..." required>

        <label>Jam Booking</label>
        <input type="text" value="{{ $jam->jam_mulai }} - {{ $jam->jam_selesai }}" readonly>

        <input type="hidden" name="jam_slot_id" value="{{ $jam->id }}">

        <label>Pembayaran</label>
        <select name="pembayaran">
            <option value="cash">Cash</option>
            <option value="transfer">Transfer</option>
        </select>

        <label>Tanggal</label>
        <input type="date" name="tanggal" required>

        <button type="submit" class="btn">Booking Sekarang</button>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="error">{{ $error }}</div>
            @endforeach
        @endif
    </form>
</div>
</x-app-layout>
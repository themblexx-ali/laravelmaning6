<x-app-layout>
<style>
    body {
        background: linear-gradient(135deg, #1f1f1f, #2c2c2c);
        font-family: 'Segoe UI', sans-serif;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        background: #2b2b2b;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        text-align: center;
        animation: fadeIn 1s ease-in-out;
    }

    h1 {
        color: white;
        margin-bottom: 20px;
    }

    label {
        color: #ddd;
        display: block;
        text-align: left;
    }

    input {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: none;
        background: #444;
        color: white;
    }

    button {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #2196F3, #1565C0);
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        transform: scale(1.05);
        background: linear-gradient(135deg, #1e88e5, #0d47a1);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px);}
        to { opacity: 1; transform: translateY(0);}
    }
</style>

<div class="container">
    <h1>Booking Lapangan</h1>

    <form action="">
        <label>Nama Pemesan</label>
        <input type="text" name="nama" placeholder="Masukkan nama...">

        <label>Jam Booking</label>
        <input type="time" name="jam">

        <button type="submit">Submit Booking</button>
    </form>
</div>
</x-app-layout>
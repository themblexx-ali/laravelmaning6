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
    <form action="/booking/store" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama">
    <input type="text" name="no_hp" placeholder="No HP">
    <input type="date" name="tanggal">

    <label>Pilih Jam:</label><br>

    @foreach($jam as $item)
        <label>
            <input type="checkbox" name="jam[]" value="{{ $item->jam }}">
            {{ date('H:i', strtotime($item->jam)) }}
        </label><br>
    @endforeach

    <button type="submit">Booking</button>
</form>
</div>
</x-app-layout>
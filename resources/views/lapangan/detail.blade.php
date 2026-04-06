<x-app-layout>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    /* DETAIL */
    .detail {
        animation: slideIn 2s ease-in-out;
        padding: 100px;
        border: 5px solid #aaa;
        background-color: #202020;
        color: white;
    }
    .detail h1 {
        font-size: 50px;
        margin-bottom: 20px;
    }
    .detail p {
         font-size: 20px;
         margin-bottom: 20px;
     }
        .detail h3 {
            font-size: 30px;
            margin-bottom: 15px;
        }
        .detail div {
            background-color: #202020;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .detail div p {
            font-size: 18px;
        }
        .detail div span {
            font-weight: bold;
        }
        .detail img {
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
<div class="detail">
    <h1>{{ $lapangan->nama }}</h1>
    @foreach (explode("\n", $lapangan->deskripsi) as $p)
        <p>{{ $p }}</p>
    @endforeach
    <p>Harga: Rp {{ number_format($lapangan->harga) }}</p>
    <img src="{{ asset('storage/' . $lapangan->gambar) }}" alt="{{ $lapangan->nama }}">
</div>
</x-app-layout>
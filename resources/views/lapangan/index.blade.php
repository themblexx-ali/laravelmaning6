<x-app-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #121212;
        }

        /* HERO */
        .hero {
            animation: slideIn 1.5s ease-in-out;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 120px 10%;
            background: linear-gradient(135deg, #1a1a1a, #0d0d0d);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-text {
            max-width: 500px;
            z-index: 2;
        }

        .hero-text h1 {
            font-size: 70px;
            font-style: italic;
            font-family: "Times New Roman", serif;
            margin-bottom: 15px;

            /* GOLD TEXT */
            background: linear-gradient(90deg, #d4af37, #f5e6b3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-text p {
            color: #bbb;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        /* GOLD BUTTON */
        .btn {
            padding: 12px 25px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;

            background: linear-gradient(90deg, #d4af37, #f5e6b3);
            color: black;

            box-shadow: 0 0 10px rgba(212,175,55,0.4);
            transition: 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(212,175,55,0.7);
        }

        .hero img {
            width: 420px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(212,175,55,0.2);
            transition: 0.3s;
        }

        .hero img:hover {
            transform: scale(1.03);
        }

        /* GLOW EFFECT */
        .glow {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(212,175,55,0.3), transparent 70%);
            filter: blur(120px);
            top: 10%;
            left: 30%;
            z-index: 1;
        }

        /* ABOUT */
        .about {
            animation: slideIn 1.5s ease-in-out;
            padding: 80px 10%;
            background: #1a1a1a;
            color: white;
        }

        .about h2 {
            font-size: 32px;
            margin-bottom: 20px;

            background: linear-gradient(90deg, #d4af37, #f5e6b3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about p {
            color: #aaa;
            max-width: 700px;
            line-height: 1.6;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="hero">
        <div class="glow"></div>

        <div class="hero-text">
            <h1>Neper Futsal</h1>
            <p>
                Situs booking lapangan futsal SMK Negeri 1 Cirebon
                yang menghadirkan kemudahan, kenyamanan,
                dan pengalaman premium.
            </p>

            @if($lapangan)
                <a class="btn" href="{{ route('jadwal.index', $lapangan->id) }}">
                    Pesan Sekarang
                </a>
            @endif
        </div>

        <img src="{{ asset('img/lapFutsal.jpg') }}" alt="Futsal">
    </div>

    <div class="about" id="about">
        <p style="color:#d4af37;">SMK Negeri 1 Cirebon</p>
        <h2>Tentang Situs</h2>
        <p>
            Website ini digunakan untuk mempermudah proses booking lapangan futsal secara online.
            Pengguna dapat melihat jadwal, memilih lapangan, dan melakukan pemesanan dengan cepat
            dan efisien.
        </p>
    </div>

</x-app-layout>
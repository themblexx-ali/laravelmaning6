<x-app-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        /* HERO */
        .hero {
            animation: slideIn 2s ease-in-out;
            display: flex;
            justify-content: space-between;;
            align-items: center;
            padding: 250px;
            background-color: #202020;
            border: 5px solid #aaa;
            color: white;
        }

        .hero-text {
            font-size: large;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;     
            max-width: 500px;
        }

        .hero-text h1 {
            font-size: 85px;
            font-style: italic;
            font-family: "Times New Roman", serif;
            margin-bottom: 15px;
        }

        .hero-text p {
            color: #aaa;
            margin-bottom: 20px;
        }

        .btn {
            background: white;
            color: black;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .hero img {
            width: 400px;
            border-radius: 15px;
        }

        /* ABOUT */
        .about {
            animation: slideIn 2s ease-in-out;
            padding: 60px;
            border: 5px solid #aaa;
            background-color: #5c5c5c;
            color: white;
            text-align: left;
        }

        .about h2 {
            font-size: 32px;
            margin-bottom: 50px;
        }

        .about p {
            margin-bottom: 50px;
            color: #aaa;
            max-width: 700px;
        }
        /* @keyframes moveGlow {
            0% { transform: translate(0,0); }
            50% { transform: translate(50px, -50px); }
            100% { transform: translate(0,0); }
        } */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .glow {
            position: fixed;
            width: 500px;
            height: 500px;

            background: radial-gradient(circle, rgba(255, 150, 0, 0.5), transparent 100%);
            filter: blur(100px);

            top: 20%;
            left: 35%;
            z-index: -1;

            /* animation: moveGlow 6s infinite ease-in-out; */
        }

    </style>

    <div class="hero">
        <div class="hero-text">
            <div class="glow"></div>
            <h1>Neper Futsal</h1>
            <p>Situs booking lapangan futsal SMK Negeri 1 Cirebon menjamin kemudahan, kenyamanan, & ketenangan</p>
                <a class="btn" href="{{ route('jadwal.index', $lapangan->id) }}">
                    Pesan Sekarang
                </a>
            </div>

        <img src="img/lapFutsal.jpg" alt="Futsal">
    </div>

    <div class="about" id="about">
        <p>SMK Negeri 1 Cirebon</p>
        <h2>Tentang Situs?</h2>
        <p>
            Website ini digunakan untuk mempermudah proses booking lapangan futsal secara online.
            Pengguna dapat melihat jadwal, memilih lapangan, dan melakukan pemesanan dengan mudah.
        </p>
    </div>


</x-app-layout>
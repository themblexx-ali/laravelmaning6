<x-app-layout>
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #0f0f0f;
        color: white;
    }

    /* HERO */
    .hero {
        min-height: 90vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 0 20px;
        position: relative;
    }

    /* GLOW BACKGROUND */
    .hero::before {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(212,175,55,0.2), transparent 70%);
        filter: blur(120px);
        top: 20%;
        z-index: 0;
    }

    .hero h1 {
        font-size: 60px;
        margin-bottom: 15px;
        z-index: 1;
    }

    .hero h1 span {
        background: linear-gradient(90deg, #d4af37, #f5e6b3);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero p {
        max-width: 600px;
        color: #aaa;
        margin-bottom: 30px;
        line-height: 1.6;
        z-index: 1;
    }

    /* BUTTON */
    .btn {
        padding: 14px 30px;
        border-radius: 12px;
        font-weight: bold;
        text-decoration: none;
        transition: 0.3s;
        z-index: 1;
    }

    .btn-main {
        background: linear-gradient(90deg, #d4af37, #f5e6b3);
        color: black;
        box-shadow: 0 0 15px rgba(212,175,55,0.5);
    }

    .btn-main:hover {
        transform: scale(1.05);
    }

    /* FEATURES */
    .features {
        display: flex;
        justify-content: center;
        gap: 30px;
        padding: 60px 10%;
        flex-wrap: wrap;
    }

    .feature-card {
        background: #1a1a1a;
        padding: 25px;
        border-radius: 15px;
        width: 250px;
        text-align: center;
        border: 1px solid rgba(212,175,55,0.2);
        transition: 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        border-color: #d4af37;
    }

    .feature-card h3 {
        margin-bottom: 10px;
        color: #d4af37;
    }

    .feature-card p {
        color: #aaa;
        font-size: 14px;
    }

    /* ABOUT */
    .about {
        text-align: center;
        padding: 60px 20px;
        background: #111;
    }

    .about h2 {
        margin-bottom: 15px;
        font-size: 30px;
        background: linear-gradient(90deg, #d4af37, #f5e6b3);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about p {
        max-width: 600px;
        margin: auto;
        color: #aaa;
    }
</style>


<!-- HERO -->
<div class="hero">
    <h1>NEPER <span>FUTSAL</span></h1>

    <p>
        Booking lapangan futsal jadi lebih cepat, praktis,
        dan nyaman langsung dari genggaman.
    </p>

    @if($lapangan)
        <a href="{{ route('jadwal.index', $lapangan->id) }}" class="btn btn-main">
            Pesan Sekarang
        </a>
    @endif
</div>


<!-- FEATURES -->
<div class="features">
    <div class="feature-card">
        <h3>Cepat</h3>
        <p>Booking lapangan hanya dalam hitungan detik tanpa ribet.</p>
    </div>

    <div class="feature-card">
        <h3>Mudah</h3>
        <p>Tampilan simpel dan mudah digunakan semua orang.</p>
    </div>

    <div class="feature-card">
        <h3>Efisien</h3>
        <p>Lihat jadwal dan pesan kapan saja tanpa datang langsung.</p>
    </div>
</div>


<!-- ABOUT -->
<div class="about" id="about">
    <h2>Tentang Neper Futsal</h2>
    <p>
        Website ini dibuat untuk mempermudah proses booking lapangan futsal
        secara online di SMK Negeri 1 Cirebon dengan sistem yang cepat dan modern.
    </p>
</div>

</x-app-layout> 
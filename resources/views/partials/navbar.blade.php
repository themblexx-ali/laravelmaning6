<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Playfair+Display:wght@600&display=swap');

body {
    margin: 0;
    background-color: #121212;
}

/* NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 60px;

    /* FIX WARNA (GA ABU) */
    background: rgba(0,0,0,0.9);
    backdrop-filter: blur(8px);

    border-bottom: 1px solid rgba(212,175,55,0.3);
    box-shadow: 0 4px 20px rgba(0,0,0,0.6);

    position: sticky;
    top: 0;
    z-index: 1000;

    animation: slideDown 0.8s ease;
    transition: 0.3s;
}

/* SCROLL EFFECT */
.navbar.scrolled {
    background: rgba(0,0,0,0.98);
}

/* LOGO */
.logo {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo img {
    width: 42px;
    height: 42px;
    object-fit: contain;
    filter: drop-shadow(0 0 6px rgba(212,175,55,0.5));
    transition: 0.3s;
}

.logo img:hover {
    transform: rotate(5deg) scale(1.05);
}

/* TEXT LOGO */
.logo div {
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    font-weight: 600;
    letter-spacing: 1px;
    color: white;
}

/* GOLD SHIMMER */
.logo span {
    background: linear-gradient(90deg, #d4af37, #f5e6b3, #d4af37);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shimmer 3s linear infinite;
}

/* NAV MENU */
.nav {
    display: flex;
    align-items: center;
    list-style: none;
}

.nav-link {
    position: relative;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    color: #ddd;
    text-decoration: none;
    margin-left: 30px;
    transition: 0.3s;
}

/* UNDERLINE GOLD */
.nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 0%;
    height: 2px;
    background: linear-gradient(90deg, #d4af37, #f5e6b3);
    transition: 0.3s;
}

.nav-link:hover {
    color: #fff;
}

.nav-link:hover::after {
    width: 100%;
}

/* ANIMATION */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes shimmer {
    0% { background-position: -200% center; }
    100% { background-position: 200% center; }
}
</style>

<div class="navbar" id="navbar">
    <div class="logo">
        <img src="{{ asset('img/neperlogo.png') }}" alt="Logo">
        <div>NEPER<span>FUTSAL</span></div>
    </div>

    <nav>
        <ul class="nav">
            <li><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="/jadwal">Jadwal</a></li>           
            <li><a class="nav-link" href="/profile">Account</a></li>
        </ul>
    </nav>
</div>

<script id="navbar-scroll-effect">
window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
});
</script>
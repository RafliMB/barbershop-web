<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Febrian Barbershop</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Oswald:wght@700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tambahkan di bagian <head> -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Tambahkan sebelum </body> -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #111;
      color: white;
      margin: 0;
      padding: 0;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background-color: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 40px;
      height: 100px;
      transition: background-color 0.3s ease;
    }

    .navbar-transparent {
      background-color: transparent !important;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-img {
      width: 44px;
      height: 44px;
    }

    .brand-text {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 20px;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: white;
      line-height: 1;
    }

    .nav-menu {
      display: flex;
      gap: 32px;
    }

    .nav-menu a {
      font-family: 'Montserrat', sans-serif;
      font-size: 20px;
      font-weight: 700;
      text-transform: uppercase;
      color: white;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .nav-menu a:hover {
      color: #aaa;
    }

    /* HERO SECTION */
    #home.hero {
      position: relative;
      height: 100vh;
      background: url("{{ asset('images/febrianbarber.png') }}") center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 1rem;
      text-align: center;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.60);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 1000px;
      width: 100%;
      margin: 0 auto;
      color: white;
      text-align: center;
      padding-top: 4rem;
    }

    .hero-subtitle {
      font-weight: 600;
      font-size: clamp(1rem, 1vw, 1rem);
      margin-bottom: 0.5rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
      color: #f0f0f0;
    }

    .hero-title {
      font-family: 'Oswald', sans-serif;
      font-weight: 900;
      font-size: clamp(6rem, 4vw, 8rem);
      line-height: 1.1;
      margin: 1rem auto 3rem;
      text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.9);
      color: white;
    }

    .hero-button {
      display: inline-block;
      padding: 0.3rem 1.1em;
      font-size: clamp(1rem, 1.5vw, 1.25rem);
      font-weight: 800;
      border: 3px solid white;
      color: white;
      text-decoration: none;
      border-radius: 0px;
      transition: background-color 0.3s ease, color 0.3s ease;
      box-shadow: 0 0 12px rgba(255, 255, 255, 0.8);
    }

    .hero-button:hover,
    .hero-button:focus {
      background-color: white;
      color: black;
      box-shadow: 0 0 16px rgba(255, 255, 255, 1);
    }

    #tentang {
      background: url("{{ asset('images/bg2.png') }}") center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 100px 20px 220px;
      /* <-- pastikan ini agar tidak ketutup navbar */
      font-family: 'Nunito', sans-serif;
      min-height: 100vh;
    }


    .tentang-container {
      max-width: 820px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }


    .tentang-logo {
      width: 160px;
      height: 160px;
      margin-top: 55px;
      margin-bottom: 15px;
      display: block;
      margin-left: auto;
      margin-right: auto;

    }

    .tentang-title {
      font-size: 50px;
      font-weight: 900;
      text-transform: uppercase;
      margin-bottom: 30px;
      text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.4);
      letter-spacing: 1px;
    }

    .tentang-description {
      font-size: 22px;
      font-weight: 500;
      line-height: 1.5;
      letter-spacing: 0;
      max-width: 945px;
      margin: 0 auto 50px;
      color: #ffffff;
    }


    .tentang-button {
      display: inline-block;
      font-size: 18px;
      font-weight: 900;
      padding: 14px 50px;
      border-radius: 8px;
      background-color: white;
      color: black;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 0 12px rgba(255, 255, 255, 0.7);
      border: 1px solid #999;
    }

    .tentang-button:hover {
      transform: scale(1.05);
      background-color: #e6e6e6;
    }

    @media (max-width: 768px) {
      .tentang-title {
        font-size: 34px;
      }

      .tentang-description {
        font-size: 18px;
      }

      .tentang-button {
        font-size: 16px;
        padding: 12px 30px;
      }
    }

    #layanan {
      background: url("{{ asset('images/bg3.png') }}") center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 100px 20px 220px;
      min-height: 100vh;
    }

    .layanan-container {
      max-width: 820px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .layanan-title {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #000;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .layanan-subtitle {
      font-size: 16px;
      margin-bottom: 50px;
      color: #333;
    }

    .layanan-grid {
      display: flex;
      gap: 30px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .layanan-card {
      background: linear-gradient(to bottom, #ffffff, #dcdcdc);
      border-radius: 12px;
      box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.2);
      padding: 30px 20px;
      width: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .layanan-card h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #222;
    }

    .layanan-card h4 {
      font-size: 22px;
      font-weight: bold;
      margin: 5px 0;
      color: #000;
    }

    .layanan-card .durasi {
      font-size: 14px;
      margin-bottom: 20px;
      color: #555;
    }

    .layanan-card ul {
      list-style: none;
      padding: 0;
      margin: 0 0 30px;
      width: 100%;
    }

    .layanan-card ul li {
      background-color: rgba(0, 0, 0, 0.07);
      margin-bottom: 5px;
      padding: 10px;
      border-radius: 4px;
      font-size: 14px;
      color: #333;
    }

    .layanan-card button {
      background: #000;
      color: #fff;
      padding: 12px 20px;
      border: 2px solid #fff;
      border-radius: 25px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .layanan-card button:hover {
      background: #fff;
      color: #000;
      border-color: #000;
    }

    /* GALERI STYLE */
    .galeri-section {
      background-color: #000;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .galeri-title {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 2px;
    }

    .galeri-subtitle {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .galeri-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
      max-width: 1200px;
      margin: 0 auto;
    }

    .galeri-grid img {
      width: 100%;
      aspect-ratio: 3 / 4;
      height: auto;
      object-fit: cover;
      display: block;
      cursor: pointer;
      transition: transform 0.3s ease;
      border: 1px solid #111;
      /* agar terlihat simetris */
    }

    .galeri-grid img:hover {
      transform: scale(1.01);
      outline: 2px solid rgba(255, 255, 255, 0.3);
    }

    /* LIGHTBOX */
    .lightbox {
      display: none;
      position: fixed;
      z-index: 9999;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.95);
      justify-content: center;
      align-items: center;
    }

    .lightbox-content {
      max-width: 90%;
      max-height: 85%;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
    }

    .close {
      position: absolute;
      top: 20px;
      right: 40px;
      font-size: 40px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      z-index: 10000;
    }

    /* RESPONSIF MOBILE: 2 kolom */
    @media (max-width: 768px) {
      .galeri-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .galeri-title {
        font-size: 2.2rem;
      }
    }
  </style>
</head>

<body>

  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  <script>
    window.addEventListener('scroll', () => {
      const navbar = document.querySelector('.navbar');
      const home = document.getElementById('home');
      if (!home) return;
      const scrollY = window.scrollY;
      const homeHeight = home.offsetHeight;
      if (scrollY < homeHeight) {
        navbar.classList.add('navbar-transparent');
      } else {
        navbar.classList.remove('navbar-transparent');
      }
    });
    window.dispatchEvent(new Event('scroll'));
  </script>

</body>

</html>
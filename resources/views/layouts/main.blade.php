<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Febrian Barbershop</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #111;
      font-family: 'Oswald', sans-serif;
      color: white;
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
      height: 110px;
    }

    .logo-area {
      display: flex;
      align-items: center;
    }

    .logo-area img {
      width: 68px;
      height: 68px;
      margin-right: 30px;
    }

    .brand-text {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 68.44px;
      font-size: 28px;
      line-height: 35px;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: white;
    }

    .brand-text .line-1 {
      display: flex;
      align-items: center;
      gap: 6px;
      font-weight: 500;
    }

    .brand-text .line-2 {
      font-weight: 500;
    }

    .nav-menu {
      display: flex;
      gap: 40px;
    }

    .nav-menu a {
      font-size: 28px;
      font-weight: 700;
      letter-spacing: 0.05em;
      color: white;
      text-decoration: none;
      text-transform: uppercase;
      transition: color 0.2s ease;
    }

    .nav-menu a:hover {
      color: #999;
    }

    main {
      padding-top: 110px;
      /* agar tidak tertutup navbar */
    }
  </style>
</head>

<body>
  <header class="navbar">
    <div class="logo-area">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" />
      <div class="brand-text">
        <div class="line-1">FEBRIAN💈</div>
        <div class="line-2">BARBERSHOP</div>
      </div>
    </div>

    <nav class="nav-menu">
      <a href="#home">Home</a>
      <a href="#tentang">About Us</a>
      <a href="#layanan">Service</a>
      <a href="#galeri">Gallery</a>
      <a href="#produk">Our Product</a>
    </nav>

  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
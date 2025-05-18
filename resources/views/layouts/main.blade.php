<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Febrian Barbershop</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      background-color: #111;
      font-family: 'Oswald', sans-serif;
      color: white;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: black;
      padding: 0 40px;
      height: 110px;
    }

    /* Logo dan Brand area */
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
      height: 68.44px; /* sesuai tinggi logo */
      font-size: 28px;
      line-height: 35px;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: white;
    }

    .brand-text .line-1 {
      display: flex;
      align-items: center;
      gap: 6px; /* jarak antara FEBRIAN dan emoji */
      font-weight: 500;
    }

    .brand-text .line-2 {
      font-weight: 500;
    }

    /* Nav menu */
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

    /* Padding top supaya konten tidak tertutup navbar */

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
      <a href="#">Home</a>
      <a href="#">About Us</a>
      <a href="#">Service</a>
      <a href="#">Gallery</a>
      <a href="#">Our Product</a>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>
</body>
</html>

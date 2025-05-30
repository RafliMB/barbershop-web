<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Febrian Barbershop</title>
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Oswald:wght@700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
</head>

<body class="overflow-x-hidden m-0 p-0 min-h-screen bg-black text-white">
  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
</body>

</html>

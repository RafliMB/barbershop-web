<footer class="bg-white text-black text-sm font-sans border-t border-black">
  <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8 items-start">

    <!-- Logo dan Kontak -->
    <div class="space-y-4">
      <!-- Logo besar -->
      <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="h-24 mb-10"> <!-- Ubah ke h-24 agar besar -->

      <!-- Email -->
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/mail.svg') }}" class="w-5 h-5" alt="mail">
        <span class="whitespace-nowrap">febrianbarbershop@gmail.com</span>
      </div>

      <!-- Jam -->
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/clock.svg') }}" class="w-5 h-5" alt="clock">
        <span class="whitespace-nowrap">Mulai Buka Pukul 09.00 - 21.00</span>
      </div>

      <!-- Telepon -->
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/phone.svg') }}" class="w-5 h-5" alt="phone">
        <span class="whitespace-nowrap">085865726621</span>
      </div>

      <!-- Alamat -->
      <div class="flex items-start gap-3">
        <img src="{{ asset('images/map.svg') }}" class="w-5 h-5 mt-1" alt="map">
        <span class="leading-snug">Jl. Pala Raya No.Desa, Kademangan, Mejasem Barat., Kec. Kramat, Kabupaten Tegal, Jawa Tengah 52181
      </div>
    </div>

    <!-- Company -->
    <div>
      <h3 class="text-base font-bold mb-4">Company</h3>
      <div class="grid grid-cols-2 gap-y-2 gap-x-6 font-normal">
        <a href="#">Profile</a>
        <a href="#">Galery</a>
        <a href="#">Service</a>
        <a href="#">Product</a>
        <a href="#">Contact Us</a>
      </div>
    </div>

    <!-- Newsletter -->
    <div>
      <h3 class="text-base font-bold mb-4 ">Let's Stay in Touch</h3>
      <p class="text-sm mb-4 leading-relaxed">
        Sign up with your email address to<br>
        receive news, promosi, and updates
      </p>
      <input type="email" placeholder="Your Email Addresss"
             class="w-full border border-black px-3 py-1 text-sm mb-2 focus:outline-none">
      <button class="w-full border border-black py-1 font-semibold hover:bg-black hover:text-white transition">Submit</button>
      <p class="text-xs mt-1">We respect your privacy.</p>
    </div>

    <!-- Social Media -->
    <div>
      <h3 class="text-base font-bold mb-4">Follow Us</h3>
      <ul class="space-y-3 font-normal">
        <li class="flex items-center gap-3"><img src="{{ asset('images/facebook.svg') }}" class="w-5 h-5"> Facebook</li>
        <li class="flex items-center gap-3"><img src="{{ asset('images/twitter.svg') }}" class="w-5 h-5"> Twitter</li>
        <li class="flex items-center gap-3"><img src="{{ asset('images/instagram.svg') }}" class="w-5 h-5"> Instagram</li>
        <li class="flex items-center gap-3"><img src="{{ asset('images/tiktok.svg') }}" class="w-5 h-5"> Tiktok</li>
        <li class="flex items-center gap-3"><img src="{{ asset('images/whatsapp.svg') }}" class="w-5 h-5"> WhatsApp</li>
      </ul>
    </div>

  </div>

  <!-- Footer Bottom -->
  <div class="border-t border-black text-center py-4 text-xs">
    © 2025 · Febrian Barbershop · dev by Pecinta Mie Ayam
  </div>
</footer>

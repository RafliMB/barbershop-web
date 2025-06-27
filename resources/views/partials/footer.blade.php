<footer class="bg-white text-black text-sm font-sans border-t border-black">
  <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8 items-start">

    <!-- Logo dan Kontak -->
    <div class="space-y-4">
      <!-- Logo besar -->
      <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="h-24 mb-10">

      <!-- Email -->
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/email.png') }}" alt="Email" class="w-4 h-4">
        <span class="whitespace-nowrap">febrianbarbershop@gmail.com</span>
      </div>

      <!-- Jam -->
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/jam.png') }}" alt="Jam" class="w-4 h-4">
        <span class="whitespace-nowrap">Mulai Buka Pukul 09.00 - 21.00</span>
      </div>

      <!-- Telepon -->
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/telepon.png') }}" alt="Telepon" class="w-4 h-4">
        <span class="whitespace-nowrap">085865726621</span>
      </div>

      <!-- Alamat -->
      <div class="flex items-start gap-3">
        <img src="{{ asset('images/alamat.png') }}" alt="Alamat" class="w-5 h-5">
        <span class="leading-snug">
          Jl. Pala Raya No.Desa, Kademangan, Mejasem Barat., Kec. Kramat, Kabupaten Tegal, Jawa Tengah 52181
        </span>
      </div>
    </div>

    <!-- Company -->
    <div>
      <h3 class="text-base font-bold mb-4">Company</h3>
      <div class="grid grid-cols-2 gap-y-2 gap-x-6 font-normal">
        <a href="#tentang">Profile</a>
        <a href="#galeri">Galery</a>
        <a href="#layanan">Service</a>
        <a href="#product">Product</a>
        <a href="https://api.whatsapp.com/send?phone=6285865826621">Contact Us</a>
      </div>
    </div>

    <!-- Newsletter -->
    <div>
      @if (session('success'))
      <div class="text-green-600 text-sm mb-2">
        {{ session('success') }}
      </div>
      @endif

      <form action="{{ route('subscribe.store') }}" method="POST">
        @csrf
        <h3 class="text-base font-bold mb-4">Let's Stay in Touch</h3>
        <p class="text-sm mb-4 leading-relaxed">
          Sign up with your email address to<br>
          receive news, promosi, and updates
        </p>
        <input type="email" name="email" placeholder="Your Email Address"
          class="w-full border border-black px-3 py-1 text-sm mb-2 focus:outline-none" required>
        <button type="submit"
          class="w-full border border-black py-1 font-semibold hover:bg-black hover:text-white transition">
          Submit
        </button>
        <p class="text-xs mt-1">We respect your privacy.</p>
      </form>
    </div>


    <!-- Social Media -->
    <div>
      <h3 class="text-base font-bold mb-4">Follow Us</h3>
      <ul class="space-y-3 font-normal">
        <li class="flex items-center gap-3">
          <a href="https://facebook.com/febrianbarbershop" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3">
            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-4 h-4"> Facebook
          </a>
        </li>
        <li class="flex items-center gap-3">
          <a href="https://twitter.com/febrianbarbershop" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3">
            <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="w-4 h-4"> Twitter
          </a>
        </li>
        <li class="flex items-center gap-3">
          <a href="https://instagram.com/febrianbarbershop" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3">
            <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-4 h-4"> Instagram
          </a>
        </li>
        <li class="flex items-center gap-3">
          <a href="https://tiktok.com/@febrianbarbershop" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3">
            <img src="{{ asset('images/tiktok.png') }}" alt="Tiktok" class="w-4 h-4"> Tiktok
          </a>
        </li>
        <li class="flex items-center gap-3">
          <a href="https://wa.me/+6285865826621" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3">
            <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="w-4 h-4"> WhatsApp
          </a>
        </li>
      </ul>
    </div>



  </div>

  <!-- Footer Bottom -->
  <div class="border-t border-black text-center py-4 text-xs">
    © 2025 · Febrian Barbershop · dev by PecintaMieAyam
  </div>
</footer>
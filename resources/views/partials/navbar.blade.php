<header id="navbar" class="fixed top-0 left-0 right-0 z-[1000] flex justify-between items-center px-[30px] h-[65px] transition-all duration-300 bg-[rgba(0,0,0,0.01)]">
  <div class="flex items-center gap-[15px]">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[38px] h-[38px]" />
    <div id="brand-name" class="font-black text-[20px] tracking-[0.05em] uppercase text-white leading-none font-[Montserrat]">
      FEBRIAN BARBERSHOP
    </div>
  </div>
  <nav class="flex gap-[32px]">
    <a href="#home" class="text-white text-[20px] font-black uppercase font-[Montserrat] no-underline hover:text-[#aaa] transition-colors duration-200">Home</a>
    <a href="#tentang" class="text-white text-[20px] font-black uppercase font-[Montserrat] no-underline hover:text-[#aaa] transition-colors duration-200">About Us</a>
    <a href="#layanan" class="text-white text-[20px] font-black uppercase font-[Montserrat] no-underline hover:text-[#aaa] transition-colors duration-200">Service</a>
    <a href="#galeri" class="text-white text-[20px] font-black uppercase font-[Montserrat] no-underline hover:text-[#aaa] transition-colors duration-200">Gallery</a>
    <a href="#product" class="text-white text-[20px] font-black uppercase font-[Montserrat] no-underline hover:text-[#aaa] transition-colors duration-200">Our Product</a>
  </nav>
</header>


<script>
window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);

function handleScroll() {
  const navbar = document.getElementById('navbar');
  const brand = document.getElementById('brand-name');
  const links = navbar.querySelectorAll('a');
  const layananSection = document.getElementById('layanan');
  const layananTop = layananSection.offsetTop;
  const batasPutih = 600;

  const scrollY = window.scrollY;

  if (scrollY >= layananTop - 100 && scrollY <= layananTop + batasPutih) {
    // Di area section layanan: putih
    navbar.classList.add('bg-white', 'shadow-md');
    navbar.classList.remove('bg-black');
    brand.classList.add('!text-black');
    links.forEach(a => a.classList.add('!text-black'));
  } else if (scrollY > 50) {
    // Scroll lewat sedikit: hitam
    navbar.classList.add('bg-black', 'shadow-md');
    navbar.classList.remove('bg-white');
    brand.classList.remove('!text-black');
    links.forEach(a => a.classList.remove('!text-black'));
  } else {
    // Di posisi paling atas: transparan
    navbar.classList.remove('bg-black', 'bg-white', 'shadow-md');
    brand.classList.remove('!text-black');
    links.forEach(a => a.classList.remove('!text-black'));
  }
}
</script>
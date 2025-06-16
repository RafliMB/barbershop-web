<header id="navbar" class="fixed top-0 left-0 right-0 z-[1000] flex justify-between items-center px-[30px] h-[65px] transition-all duration-300 bg-[rgba(0,0,0,0.01)]">
  <!-- Logo -->
  <div class="flex items-center gap-[15px]">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[38px] h-[38px]" />
    <div id="brand-name" class="font-black text-[20px] tracking-[0.05em] uppercase text-white leading-none font-[Montserrat]">
      FEBRIAN BARBERSHOP
    </div>
  </div>

  <!-- Hamburger Button (Mobile) -->
  <button id="menu-toggle" class="lg:hidden text-white focus:outline-none">
    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
  </button>

  <!-- Navigation Menu -->
  <nav id="nav-menu" class="hidden flex-col absolute top-[65px] left-0 w-full bg-black lg:flex lg:static lg:flex-row lg:bg-transparent lg:w-auto gap-[32px] p-4 lg:p-0">
    <a href="#home" class="text-white text-[20px] font-black uppercase font-[Montserrat] hover:text-[#aaa] transition-colors duration-200">Home</a>
    <a href="#tentang" class="text-white text-[20px] font-black uppercase font-[Montserrat] hover:text-[#aaa] transition-colors duration-200">About Us</a>
    <a href="#layanan" class="text-white text-[20px] font-black uppercase font-[Montserrat] hover:text-[#aaa] transition-colors duration-200">Service</a>
    <a href="#galeri" class="text-white text-[20px] font-black uppercase font-[Montserrat] hover:text-[#aaa] transition-colors duration-200">Gallery</a>
    <a href="#product" class="text-white text-[20px] font-black uppercase font-[Montserrat] hover:text-[#aaa] transition-colors duration-200">Our Product</a>
  </nav>
</header>

<script>
// Scroll behavior
window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);

function handleScroll() {
  const navbar = document.getElementById('navbar');
  const brand = document.getElementById('brand-name');
  const links = navbar.querySelectorAll('a');
  const layananSection = document.getElementById('layanan');
  if (!navbar || !brand || !layananSection) return;

  const layananTop = layananSection.offsetTop;
  const batasPutih = 600;
  const scrollY = window.scrollY;

  if (scrollY >= layananTop - 100 && scrollY <= layananTop + batasPutih) {
    navbar.classList.add('!bg-white', 'shadow-md');
    navbar.classList.remove('!bg-black');
    brand.classList.add('!text-black');
    links.forEach(a => a.classList.add('!text-black'));
  } else if (scrollY > 50) {
    navbar.classList.add('!bg-black', 'shadow-md');
    navbar.classList.remove('!bg-white');
    brand.classList.remove('!text-black');
    links.forEach(a => a.classList.remove('!text-black'));
  } else {
    navbar.classList.remove('!bg-black', '!bg-white', 'shadow-md');
    brand.classList.remove('!text-black');
    links.forEach(a => a.classList.remove('!text-black'));
  }
}

// Toggle mobile menu
const toggleBtn = document.getElementById('menu-toggle');
const navMenu = document.getElementById('nav-menu');
toggleBtn.addEventListener('click', () => {
  navMenu.classList.toggle('hidden');
});
</script>

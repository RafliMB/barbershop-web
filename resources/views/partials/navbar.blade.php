<header id="navbar" class="fixed top-0 left-0 right-0 z-[1000] flex justify-between items-center px-6 h-[65px] transition-all duration-300 bg-[rgba(0,0,0,0.01)] backdrop-blur-sm">
  <!-- Logo dan Brand -->
  <div class="flex items-center gap-4">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[38px] h-[38px]" />
    <div id="brand-name" class="font-black text-lg tracking-[0.05em] uppercase text-white leading-none font-[Montserrat]">
      FEBRIAN BARBERSHOP
    </div>
  </div>

  <!-- Hamburger Button (Mobile) -->
  <button id="menu-toggle" class="lg:hidden focus:outline-none">
    <svg id="hamburger-icon" class="w-7 h-7 text-white transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
  </button>

  <!-- Navigation Menu -->
  <nav id="nav-menu" class="hidden flex-col absolute top-[65px] left-0 w-full bg-[rgba(0,0,0,0.9)] text-white lg:flex lg:static lg:flex-row lg:bg-transparent lg:w-auto gap-6 p-4 lg:p-0 transition-all duration-300 rounded-b-lg">
    <div class="group relative">
      <a href="#home" class="text-lg font-black uppercase font-[Montserrat] hover:text-[#aaa] transition duration-200">Home</a>
    </div>
    <div class="group relative">
      <a href="#tentang" class="text-lg font-black uppercase font-[Montserrat] hover:text-[#aaa] transition duration-200">About Us</a>
    </div>
    <div class="group relative">
      <a href="#layanan" class="text-lg font-black uppercase font-[Montserrat] hover:text-[#aaa] transition duration-200">Service</a>
    </div>
    <div class="group relative">
      <a href="#galeri" class="text-lg font-black uppercase font-[Montserrat] hover:text-[#aaa] transition duration-200">Gallery</a>
    </div>
    <div class="group relative">
      <a href="#product" class="text-lg font-black uppercase font-[Montserrat] hover:text-[#aaa] transition duration-200">Our Product</a>
    </div>
  </nav>
</header>


<script>
window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);

function handleScroll() {
  const navbar = document.getElementById('navbar');
  const brand = document.getElementById('brand-name');
  const links = navbar.querySelectorAll('a');
  const hamburgerIcon = document.getElementById('hamburger-icon');
  const navMenu = document.getElementById('nav-menu');
  const layananSection = document.getElementById('layanan');

  const scrollY = window.scrollY;
  const layananTop = layananSection ? layananSection.offsetTop : 500;
  const batasPutih = 600;

  if (scrollY >= layananTop - 100 && scrollY <= layananTop + batasPutih) {
    navbar.classList.add('!bg-white', 'shadow-md');
    navbar.classList.remove('!bg-black');
    navMenu.classList.remove('bg-[rgba(0,0,0,0.9)]');
    navMenu.classList.add('bg-white');
    navMenu.classList.remove('text-white');
    navMenu.classList.add('text-black');
    brand.classList.add('!text-black');
    links.forEach(a => {
      a.classList.add('!text-black');
      a.classList.remove('!text-white');
    });
    hamburgerIcon.classList.remove('text-white');
    hamburgerIcon.classList.add('text-black');
  } else if (scrollY > 50) {
    navbar.classList.add('!bg-black', 'shadow-md');
    navbar.classList.remove('!bg-white');
    navMenu.classList.add('bg-[rgba(0,0,0,0.9)]');
    navMenu.classList.remove('bg-white');
    navMenu.classList.remove('text-black');
    navMenu.classList.add('text-white');
    brand.classList.remove('!text-black');
    links.forEach(a => {
      a.classList.remove('!text-black');
      a.classList.add('!text-white');
    });
    hamburgerIcon.classList.remove('text-black');
    hamburgerIcon.classList.add('text-white');
  } else {
    navbar.classList.remove('!bg-black', '!bg-white', 'shadow-md');
    navMenu.classList.add('bg-[rgba(0,0,0,0.9)]');
    navMenu.classList.remove('bg-white');
    navMenu.classList.remove('text-black');
    navMenu.classList.add('text-white');
    brand.classList.remove('!text-black');
    links.forEach(a => {
      a.classList.remove('!text-black');
      a.classList.add('!text-white');
    });
    hamburgerIcon.classList.remove('text-black');
    hamburgerIcon.classList.add('text-white');
  }
}

// Toggle mobile menu
const toggleBtn = document.getElementById('menu-toggle');
const navMenu = document.getElementById('nav-menu');
toggleBtn.addEventListener('click', () => {
  navMenu.classList.toggle('hidden');
});
</script>



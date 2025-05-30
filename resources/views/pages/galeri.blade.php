<!-- GALERI SECTION -->
<section id="galeri" class="bg-black text-white py-24 text-center">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-5xl font-extrabold mb-2 tracking-widest">OUR GALLERY</h2>
    <p class="text-lg mb-10">Galeri Foto Dari Febrian Barbershop</p>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-0">
      <img src="/images/gambar (1).png" alt="galeri 1" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
      <img src="/images/gambar (2).png" alt="galeri 2" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
      <img src="/images/gambar (3).png" alt="galeri 3" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
      <img src="/images/gambar (4).png" alt="galeri 4" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
      <img src="/images/gambar (5).png" alt="galeri 5" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
      <img src="/images/gambar (6).png" alt="galeri 6" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
      <img src="/images/gambar (7).png" alt="galeri 7" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
      <img src="/images/gambar (8).png" alt="galeri 8" class="w-full aspect-[3/4] object-cover border border-[#111] hover:scale-[1.01] hover:outline hover:outline-2 hover:outline-white/30 transition cursor-pointer" onclick="openLightbox(this)">
    </div>
  </div>
</section>

<!-- LIGHTBOX MODAL -->
<div id="lightbox" class="hidden fixed z-[9999] inset-0 bg-black/95 flex justify-center items-center" onclick="closeLightbox()">
  <span class="absolute top-5 right-10 text-white text-4xl font-bold cursor-pointer z-[10000]">&times;</span>
  <img id="lightbox-img" class="max-w-[90%] max-h-[85%] rounded-lg shadow-[0_0_20px_rgba(255,255,255,0.3)]" />
</div>

<script>
  function openLightbox(img) {
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    lightbox.classList.remove("hidden");
    lightboxImg.src = img.src;
  }

  function closeLightbox() {
    document.getElementById("lightbox").classList.add("hidden");
  }
</script>

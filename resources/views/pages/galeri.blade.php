<!-- GALERI SECTION -->
<section class="galeri-section" id="galeri">
  <div class="galeri-container">
    <h2 class="galeri-title">OUR GALERY</h2>
    <p class="galeri-subtitle">Galeri Foto Dari Febrian Barbershop</p>

    <div class="galeri-grid">
      <img src="/images/gambar (1).png" alt="galeri 1" onclick="openLightbox(this)">
      <img src="/images/gambar (2).png" alt="galeri 2" onclick="openLightbox(this)">
      <img src="/images/gambar (3).png" alt="galeri 3" onclick="openLightbox(this)">
      <img src="/images/gambar (4).png" alt="galeri 4" onclick="openLightbox(this)">
      <img src="/images/gambar (5).png" alt="galeri 5" onclick="openLightbox(this)">
      <img src="/images/gambar (6).png" alt="galeri 6" onclick="openLightbox(this)">
      <img src="/images/gambar (7).png" alt="galeri 7" onclick="openLightbox(this)">
      <img src="/images/gambar (8).png" alt="galeri 8" onclick="openLightbox(this)">
    </div>
  </div>
</section>

<!-- LIGHTBOX MODAL -->
<div id="lightbox" class="lightbox" onclick="closeLightbox()">
  <span class="close">&times;</span>
  <img class="lightbox-content" id="lightbox-img" />
</div>

<script>
  function openLightbox(img) {
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    lightbox.style.display = "flex";
    lightboxImg.src = img.src;
  }

  function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
  }
</script>


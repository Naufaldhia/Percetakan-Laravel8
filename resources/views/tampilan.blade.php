<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Percetakan Adi Prima</title>
  <link rel="stylesheet" href="{{ asset('projek/Style_Index.css') }}" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <!-- Header -->
  @include('layout.header')

  <!-- Main Content Section -->
  <div class="main-content">
    <!-- Left Column -->
    <div class="left-column">
      <h1>Percetakan Adi Prima</h1>
      <p>
        Selamat datang di Percetakan Adi Prima, solusi terbaik untuk semua
        kebutuhan percetakan Anda. Kami menyediakan berbagai layanan mulai
        dari pencetakan digital hingga offset printing dengan kualitas terbaik
        dan harga yang bersaing. Percetakan Adi Prima selalu berkomitmen untuk
        memberikan pelayanan prima dengan hasil cetak yang memuaskan. Dengan
        teknologi modern dan tim profesional, kami siap membantu Anda mencetak
        berbagai jenis produk sesuai kebutuhan Anda.
      </p>
    </div>

    <!-- Right Column with Image Slider -->
    <div class="right-column">
      <div class="image-slider">
        <div class="slider">
          <img src="{{ asset('projek/images.jpeg') }}" alt="Gambar 1" class="gambar-percetakan" />
          <img src="{{ asset('projek/images_anime1.jpeg') }}" alt="Gambar 2" class="gambar-percetakan" />
          <img src="{{ asset('projek/pink.jpeg') }}" alt="Gambar 3" class="gambar-percetakan" />
          <img src="{{ asset('projek/putih.jpg') }}" alt="Gambar 4" class="gambar-percetakan" />
          <img src="{{ asset('projek/waifu.jpeg') }}" alt="Gambar 5" class="gambar-percetakan" />
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
        <!-- Dots for Slide Navigation -->
        <div class="dots">
          <span class="dot" onclick="currentSlide(0)"></span>
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Product Gallery Section -->
  <div class="product-gallery">
    <h2>Produk Terbaru</h2>
    <div class="product-grid">
      <!-- Product Items -->
      @foreach ([
      ['img' => 'images.jpeg', 'desc' => 'Cetak Box Roti Panas / Kukus di Medan'],
      ['img' => 'images_anime1.jpeg', 'desc' => 'Buat/Cetak Bon Faktur di Medan'],
      ['img' => 'pink.jpeg', 'desc' => 'Buat/Cetak Box Crepes di Medan'],
      ['img' => 'putih.jpg', 'desc' => 'Buat/Cetak Kotak Toast Roti Bakar'],
      ['img' => 'waifu.jpeg', 'desc' => 'Buat/Cetak Kotak Martabak, Pasta, Roti Bakar di Medan'],
      ] as $product)
      <div class="product-item">
        <img src="{{ asset('projek/' . $product['img']) }}" alt="{{ $product['desc'] }}" />
        <p>{{ $product['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Footer -->
  @include('layout.footer')

  <script>
    let slideIndex = 0;

    function showSlides() {
      const slides = document.querySelectorAll(".gambar-percetakan");
      const dots = document.querySelectorAll(".dot");

      slides.forEach((slide, index) => {
        slide.style.display = index === slideIndex ? "block" : "none";
      });

      dots.forEach((dot, index) => {
        dot.className = dot.className.replace(" active", "");
        if (index === slideIndex) dot.className += " active";
      });
    }

    function changeSlide(n) {
      const slides = document.querySelectorAll(".gambar-percetakan");
      slideIndex = (slideIndex + n + slides.length) % slides.length;
      showSlides();
    }

    function currentSlide(n) {
      slideIndex = n;
      showSlides();
    }

    setInterval(() => {
      changeSlide(1);
    }, 4000);

    showSlides();
  </script>
</body>

</html>
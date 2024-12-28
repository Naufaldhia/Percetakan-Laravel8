<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Percetakan Adi Prima</title>
  <link rel="stylesheet" href="{{ asset('projek/Style_About.css') }}" />
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

  <!-- Main Content -->
  <section class="about-section">
    <div class="container">
      <h1>Tentang Kami</h1>
      <p>
        Selamat datang di <strong>Percetakan Adi Prima</strong>, solusi
        percetakan profesional Anda. Dengan pengalaman bertahun-tahun, kami
        menyediakan layanan percetakan berkualitas tinggi untuk memenuhi
        berbagai kebutuhan bisnis Anda.
      </p>

      <div class="content-grid">
        <div class="about-item">
          <i class="fas fa-print"></i>
          <h3>Layanan Kami</h3>
          <p>
            Kami menawarkan berbagai jenis layanan percetakan, mulai dari
            kartu nama, brosur, spanduk, hingga cetak digital lainnya.
          </p>
        </div>

        <div class="about-item">
          <i class="fas fa-handshake"></i>
          <h3>Visi dan Misi</h3>
          <p>
            Kami berkomitmen untuk memberikan kualitas dan layanan terbaik
            bagi pelanggan kami dengan selalu mengutamakan kepuasan dan
            kepercayaan.
          </p>
        </div>

        <div class="about-item">
          <i class="fas fa-users"></i>
          <h3>Tim Kami</h3>
          <p>
            Tim profesional kami selalu siap membantu Anda dalam mencapai
            hasil percetakan yang optimal dengan kualitas tinggi.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('layout.footer')
</body>

</html>
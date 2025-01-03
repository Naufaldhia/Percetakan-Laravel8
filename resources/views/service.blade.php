<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Percetakan Adi Prima</title>
  <link rel="stylesheet" href="{{ asset('projek/Style_Service.css') }}" />
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
  <section class="services-section">
    <div class="container">
      <h1>Layanan Kami</h1>
      <p>
        Kami menyediakan berbagai layanan percetakan yang profesional dan
        berkualitas tinggi.
      </p>
      <div class="services-grid">
        <!-- Service Item 1 -->
        <div class="service-item">
          <i class="fas fa-print"></i>
          <h2>Percetakan Digital</h2>
          <p>
            Layanan cetak digital dengan kualitas tinggi yang cepat dan
            efisien untuk memenuhi kebutuhan bisnis Anda.
          </p>
        </div>

        <!-- Service Item 2 -->
        <div class="service-item">
          <i class="fas fa-copy"></i>
          <h2>Percetakan Offset</h2>
          <p>
            Solusi percetakan offset yang sangat baik untuk hasil cetak dalam
            jumlah besar dengan warna yang tajam dan konsisten.
          </p>
        </div>

        <!-- Service Item 3 -->
        <div class="service-item">
          <i class="fas fa-photo-video"></i>
          <h2>Desain Grafis</h2>
          <p>
            Tim desainer kami siap membantu menciptakan desain visual menarik
            untuk kebutuhan promosi Anda.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('layout.footer')
</body>

</html>
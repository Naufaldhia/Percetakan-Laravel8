<style>
  /* Footer Styling */
  footer {
    background-color: #222;
    color: white;
    padding: 40px 0;
    text-align: center;
  }

  .footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
  }

  .footer-column {
    width: 30%;
    margin-bottom: 20px;
  }

  .footer-column h3 {
    font-size: 18px;
    color: #ff0000;
    margin-bottom: 20px;
    font-weight: bold;
  }

  .footer-column ul {
    list-style: none;
    padding: 0;
  }

  .footer-column ul li {
    margin: 10px 0;
    font-size: 14px;
  }

  .footer-column ul li a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-column ul li a:hover {
    color: #ff0000;
  }

  .social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
  }

  .social-icons a {
    color: white;
    font-size: 20px;
    transition: transform 0.3s ease;
  }

  .social-icons a:hover {
    color: #ff0000;
    transform: scale(1.1);
  }

  .footer-bottom {
    background-color: #111;
    padding: 20px 0;
  }

  .footer-bottom p {
    margin: 0;
    font-size: 14px;
    color: #bbb;
  }

  @media (max-width: 768px) {
    .footer-column {
      width: 100%;
    }
  }
</style>

<footer>
  <div class="footer-container">
    <div class="footer-column">
      <h3>Hubungi Kami</h3>
      <p>
        Hubungi kami untuk informasi lebih lanjut tentang layanan kami. Kami siap membantu Anda!
      </p>
      <ul class="contact-info">
        <li><i class="fas fa-envelope"></i> Percetakanadiprima.com</li>
        <li><i class="fab fa-whatsapp"></i> +62 896-1351-9840</li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>Tautan Cepat</h3>
      <ul class="quick-links">
        <li><a href="/tampilan">Home</a></li>
        <li><a href="/about">Tentang</a></li>
        <li><a href="/service">Layanan</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>Ikuti Kami</h3>
      <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=100064256010908"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/adiprimaprinter"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/adiprimasuraprinta?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
        <a href="https://id.linkedin.com/in/edwin-adi-prima-percetakan-159879b6"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Percetakan Adi Prima. All Rights Reserved.</p>
  </div>
</footer>
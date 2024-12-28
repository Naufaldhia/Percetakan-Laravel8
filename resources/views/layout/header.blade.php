<style>
  /* Header Styling */
  nav {
    background-color: #333;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .logo-section {
    display: flex;
    align-items: center;
  }

  .logo-section img {
    height: 45px;
    width: 45px;
    margin-right: 10px;
  }

  .brand-text .adi-prima {
    font-size: 20px;
    font-weight: bold;
    color: white;
  }

  .brand-text .percetakan {
    font-size: 12px;
    color: #ff0000;
    letter-spacing: 1px;
  }

  .nav-links {
    list-style: none;
    display: flex;
  }

  .nav-links li {
    margin: 0 15px;
  }

  .nav-links a {
    text-decoration: none;
    color: white;
    font-size: 14px;
    transition: color 0.3s ease;
  }

  .nav-links a:hover {
    color: #ff0000;
  }

  .auth-buttons {
    display: flex;
    gap: 10px;
  }

  .auth-buttons a {
    display: inline-block;
    padding: 8px 18px;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    border-radius: 25px;
    color: white;
    background-color: #ff1010;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .auth-buttons .login-btn {
    background-color: #ff1010;
  }

  .auth-buttons .register-btn {
    background-color: #28a745;
  }

  .auth-buttons a:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .auth-buttons a:active {
    transform: translateY(1px);
  }

  .auth-buttons a.register-btn:hover {
    background-color: #218838;
  }

  .auth-buttons a.login-btn:hover {
    background-color: #d91c1c;
  }
</style>

<nav>
  <div class="logo-section">
    <img src="{{ asset('projek/images3.jpeg') }}" alt="Profil Logo" />
    <div class="brand-text">
      <span class="percetakan">Percetakan</span>
      <span class="adi-prima">Adi Prima</span>
    </div>
  </div>

  <ul class="nav-links">
    <li>
      <a href="/tampilan">
        <i class="fas fa-home"></i>
        <span>Home</span>
      </a>
    </li>
    <li>
      <a href="/about">
        <i class="fas fa-question-circle"></i>
        <span>Tentang</span>
      </a>
    </li>
    <li>
      <a href="/service">
        <i class="fas fa-user"></i>
        <span>Layanan</span>
      </a>
    </li>
  </ul>

  <div class="auth-buttons">
    <a class="login-btn" href="{{ route('login') }}">Login</a>
    <a class="register-btn" href="{{ route('register') }}">Daftar</a>
  </div>
</nav>
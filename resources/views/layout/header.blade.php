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

  .auth-buttons button {
    padding: 8px 15px;
    background-color: #ff1010;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .auth-buttons .register-btn {
    background-color: #28a745;
  }

  .auth-buttons button:hover {
    background-color: #ff5e5e;
    transform: scale(1.05);
  }
</style>

<nav>
  <div class="logo-section">
    <img src="{{ asset('projek/images.jpeg') }}" alt="Profil Logo" />
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
        <span>About</span>
      </a>
    </li>
    <li>
      <a href="/service">
        <i class="fas fa-user"></i>
        <span>Service</span>
      </a>
    </li>
  </ul>

  <div class="auth-buttons">
    <a class="login-btn" href="{{ route('login') }}">Login</a>
    <a class="register-btn" href="{{ route('register') }}">Daftar</a>
  </div>
</nav>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Wisata Jember')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #2a9d8f;
      --secondary: #264653;
      --accent: #e9c46a;
      --danger: #e76f51;
      --light: #f8f9fa;
      --dark: #212529;
      --gradient: linear-gradient(135deg, #2a9d8f 0%, #264653 100%);
      --card-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      --hover-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    body {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                  url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2100&q=80') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', 'Segoe UI', sans-serif;
      color: white;
      min-height: 100vh;
    }

    /* Navbar */
    nav.navbar {
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(10px);
      box-shadow: var(--card-shadow);
      z-index: 2000;
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--accent) !important;
    }

    .nav-link {
      color: white !important;
      margin-right: 15px;
      transition: 0.3s;
      position: relative;
    }

    .nav-link:hover {
      color: var(--accent) !important;
    }

    .nav-link.active {
      color: var(--accent) !important;
      font-weight: 600;
    }

    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: var(--accent);
    }

    /* Login Button in Navbar */
    .nav-link[href*="login"] {
      background: #84b044 !important;
      padding: 0.5rem 1.2rem !important;
      border-radius: 5px !important;
      color: white !important;
      transition: all 0.3s ease;
      display: inline-block;
      margin-left: 0.5rem;
    }

    .nav-link[href*="login"]:hover {
      background: #72923a !important;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(132, 176, 68, 0.4);
    }

    .btn-login-navbar {
      background: #84b044 !important;
      color: white !important;
      padding: 0.5rem 1.2rem !important;
      border-radius: 5px !important;
      text-decoration: none !important;
      font-weight: 600;
      transition: all 0.3s ease;
      display: inline-block;
      border: none;
    }

    .btn-login-navbar:hover {
      background: #72923a !important;
      color: white !important;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(132, 176, 68, 0.4);
    }

    /* Dropdown Menu */
    .dropdown-menu {
      background: rgba(0, 0, 0, 0.9);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 8px;
      box-shadow: var(--card-shadow);
      margin-top: 0.5rem;
    }

    .dropdown-item {
      color: white !important;
      padding: 0.75rem 1.5rem;
      transition: all 0.3s ease;
    }

    .dropdown-item:hover {
      background: rgba(255, 255, 255, 0.1);
      color: var(--accent) !important;
    }

    .dropdown-item.text-danger:hover {
      background: rgba(231, 111, 81, 0.2);
      color: var(--danger) !important;
    }

    .dropdown-divider {
      border-color: rgba(255, 255, 255, 0.2);
      margin: 0.5rem 0;
    }

    /* Login Button */
    .btn-outline-light {
      color: white !important;
      border-color: white !important;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background-color: white !important;
      color: var(--primary) !important;
      border-color: white !important;
    }

    /* Dropdown Button */
    .btn-link {
      color: white !important;
      text-decoration: none !important;
    }

    .btn-link:hover {
      color: var(--accent) !important;
    }

    /* Register Button */
    .btn-light {
      background-color: white !important;
      color: var(--primary) !important;
      border-color: white !important;
      transition: all 0.3s ease;
    }

    .btn-light:hover {
      background-color: var(--accent) !important;
      color: var(--secondary) !important;
      border-color: var(--accent) !important;
      transform: translateY(-2px);
    }

    /* Button Group Spacing */
    .gap-2 {
      gap: 0.5rem !important;
    }

    /* Hero Section */
    .hero-section {
      position: relative;
      width: 100%;
      height: 500px;
      margin-top: -80px;
      padding-top: 80px;
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                  url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2100&q=80') no-repeat center center;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      color: white;
      animation: fadeInUp 1s ease;
    }

    .hero-subtitle {
      font-size: 0.95rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 1rem;
      font-weight: 500;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 2rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero-btn {
      display: inline-block;
      background: #4a7ba7;
      color: white;
      padding: 12px 40px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      border: 2px solid #4a7ba7;
      font-size: 1rem;
    }

    .hero-btn:hover {
      background: transparent;
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 5px 20px rgba(74, 123, 167, 0.4);
    }

    .hero-indicators {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 3;
      display: flex;
      gap: 12px;
    }

    .indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .indicator.active {
      background: white;
      width: 30px;
      border-radius: 6px;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Main Content */
    .main-content {
      padding-top: 0;
      min-height: calc(100vh - 80px);
    }

    /* Dashboard Header */
    .dashboard-header {
      padding: 2.5rem 0;
      margin-bottom: 2rem;
      text-align: center;
    }

    .welcome-text {
      font-weight: 700;
      font-size: 2.5rem;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
    }

    .subtitle {
      opacity: 0.9;
      font-size: 1.1rem;
      max-width: 650px;
      margin: 0 auto;
    }

    .date-badge {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 50px;
      padding: 0.5rem 1rem;
      display: inline-flex;
      align-items: center;
      margin-top: 1rem;
    }

    /* Glassmorphism Cards */
    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: var(--card-shadow);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .glass-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--hover-shadow);
    }

    /* Stat Cards */
    .stat-card {
      text-align: center;
      padding: 1.5rem;
    }

    .card-icon {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      margin: 0 auto 1rem;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.8rem;
      background: rgba(255,255,255,0.2);
      border: 2px solid rgba(255,255,255,0.3);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
    }

    .stat-label {
      font-size: 1rem;
      opacity: 0.9;
    }

    /* Destinasi Cards */
    .destinasi-img {
      height: 200px;
      background-size: cover;
      background-position: center;
      transition: transform 0.5s ease;
    }

    .glass-card:hover .destinasi-img {
      transform: scale(1.05);
    }

    .card-body {
      padding: 1.5rem;
    }

    .card-title {
      font-weight: 600;
      margin-bottom: 0.8rem;
      color: var(--accent);
    }

    .card-text {
      opacity: 0.9;
      margin-bottom: 1.2rem;
      line-height: 1.6;
    }

    /* Section Titles */
    .section-title {
      font-weight: 600;
      margin-bottom: 1.5rem;
      color: var(--accent);
      position: relative;
    }

    .section-title:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--accent);
      border-radius: 3px;
    }

    /* Quick Actions */
    .quick-actions {
      display: flex;
      gap: 1.2rem;
      margin-top: 2.5rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .action-btn {
      flex: 1;
      min-width: 180px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      text-align: center;
      padding: 1.5rem;
      color: white;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: var(--card-shadow);
    }

    .action-btn:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-5px);
      color: var(--accent);
    }

    .action-icon {
      font-size: 1.8rem;
      margin-bottom: 0.8rem;
      color: var(--accent);
    }

    /* Buttons */
    .btn-outline-accent {
      color: var(--accent);
      border-color: var(--accent);
      transition: all 0.3s ease;
    }

    .btn-outline-accent:hover {
      background-color: var(--accent);
      color: var(--secondary);
      border-color: var(--accent);
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 1.5rem;
      font-size: 0.9rem;
      background: rgba(0, 0, 0, 0.5);
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Animations */
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .fade-in {animation: fadeIn 0.8s ease forwards;}

    /* Form Styles */
    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
      border-radius: 8px;
      padding: 0.75rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.15);
      border-color: var(--accent);
      color: white;
      box-shadow: 0 0 0 0.2rem rgba(233, 196, 106, 0.25);
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .form-label {
      color: white;
      font-weight: 500;
      margin-bottom: 0.5rem;
    }

    .btn-primary {
      background: var(--accent);
      border: none;
      color: var(--secondary);
      font-weight: 600;
      padding: 0.75rem 2rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: #f4c430;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(233, 196, 106, 0.4);
    }

    .btn-danger {
      background: var(--danger);
      border: none;
      color: white;
      font-weight: 600;
      padding: 0.75rem 2rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-danger:hover {
      background: #d65a3f;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(231, 111, 81, 0.4);
    }

    .btn-outline-danger {
      border: 2px solid var(--danger);
      color: var(--danger);
      background: transparent;
      font-weight: 600;
      padding: 0.75rem 2rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-outline-danger:hover {
      background: var(--danger);
      color: white;
      transform: translateY(-2px);
    }

    .btn-secondary {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
      font-weight: 600;
      padding: 0.75rem 2rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.2);
      color: white;
    }

    .text-success {
      color: #4ade80 !important;
    }

    .text-white-50 {
      color: rgba(255, 255, 255, 0.7) !important;
    }

    .text-link {
      color: var(--accent);
      text-decoration: none;
    }

    .text-link:hover {
      color: #f4c430;
      text-decoration: underline;
    }

    /* Modal Styles */
    .modal-content {
      background: rgba(0, 0, 0, 0.95);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .modal-header {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .modal-footer {
      border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    .btn-close-white {
      filter: invert(1) grayscale(100%) brightness(200%);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .welcome-text {
        font-size: 2rem;
      }
      
      .quick-actions {
        flex-direction: column;
      }
      
      .action-btn {
        min-width: auto;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/dashboard"><i class="fas fa-umbrella-beach me-2"></i>Wisata Jember</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">Beranda</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->is('dashboard/destinasi*') ? 'active' : '' }}" href="/dashboard/destinasi">Destinasi</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/fasilitas">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->is('galeri') ? 'active' : '' }}" href="/dashboard/galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->is('tentangkami') ? 'active' : '' }}" href="/dashboard/tentangKami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/dashboard/kontak">Kontak</a></li>
        </ul>
        <div class="ms-3">
          @guest
          <a href="{{ route('login') }}" class="btn btn-login-navbar">
            <i class="fas fa-sign-in-alt me-1"></i>Login
          </a>
          @endguest
          @auth
          <div class="dropdown d-inline">
            <button class="btn btn-link nav-link dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
              <i class="fas fa-user me-1"></i>{{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user-edit me-2"></i>Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger">
                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                  </button>
                </form>
              </li>
            </ul>
          </div>
          @else
          <div class="d-flex gap-2">
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
              <i class="fas fa-sign-in-alt me-2"></i>Login
            </a>
            <a href="{{ route('register') }}" class="btn btn-light btn-sm">
              <i class="fas fa-user-plus me-2"></i>Daftar
            </a>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    @yield('content')
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Wisata Jember. Semua Hak Dilindungi.
  </footer>

  <script>
    // Highlight menu aktif
    document.addEventListener('DOMContentLoaded', function() {
      const currentPage = window.location.pathname;
      const navLinks = document.querySelectorAll('.nav-link');
      
      navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Wisata Jember</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--accent) !important;
    }

    .nav-link {
      color: white !important;
      margin-right: 15px;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: var(--accent) !important;
    }

    /* Header */
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

    footer {
      text-align: center;
      padding: 1.5rem;
      font-size: 0.9rem;
      background: rgba(0, 0, 0, 0.5);
      margin-top: 3rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .fade-in {animation: fadeIn 0.8s ease forwards;}
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-umbrella-beach me-2"></i>Wisata Jember</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/destinasi">Destinasi</a></li>

          <li class="nav-item"><a class="nav-link" href="#">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>

          <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Dashboard -->
  <div class="container" style="padding-top:100px;">
    <div class="dashboard-header fade-in text-center">
      <h1 class="welcome-text">Selamat Datang di Dashboard Wisata Jember 🌴</h1>
      <p class="subtitle">Kelola destinasi wisata, fasilitas, dan informasi pariwisata Jember dengan mudah</p>
      <div class="date-badge">
        <i class="fas fa-calendar-alt me-2"></i>
        <span id="current-date">Senin, 10 November 2025</span>
      </div>
    </div>

    <!-- Statistik -->
    <div class="row text-center">
      <div class="col-md-4 mb-4 fade-in">
        <div class="glass-card stat-card">
          <div class="card-icon"><i class="fas fa-map-marked-alt"></i></div>
          <div class="stat-number">24</div>
          <div class="stat-label">Total Destinasi</div>
        </div>
      </div>
      <div class="col-md-4 mb-4 fade-in">
        <div class="glass-card stat-card">
          <div class="card-icon"><i class="fas fa-hotel"></i></div>
          <div class="stat-number">12</div>
          <div class="stat-label">Fasilitas Tersedia</div>
        </div>
      </div>
      <div class="col-md-4 mb-4 fade-in">
        <div class="glass-card stat-card">
          <div class="card-icon"><i class="fas fa-users"></i></div>
          <div class="stat-number">1.248</div>
          <div class="stat-label">Pengunjung Terdaftar</div>
        </div>
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions fade-in">
      <a href="#" class="action-btn">
        <div class="action-icon"><i class="fas fa-plus-circle"></i></div>
        Tambah Destinasi
      </a>
      <a href="#" class="action-btn">
        <div class="action-icon"><i class="fas fa-images"></i></div>
        Kelola Galeri
      </a>
      <a href="#" class="action-btn">
        <div class="action-icon"><i class="fas fa-file-alt"></i></div>
        Tambah Artikel
      </a>
      <a href="#" class="action-btn">
        <div class="action-icon"><i class="fas fa-cogs"></i></div>
        Pengaturan
      </a>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Wisata Jember. Semua Hak Dilindungi.
  </footer>

  <script>
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById('current-date').textContent = new Date().toLocaleDateString('id-ID', options);
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

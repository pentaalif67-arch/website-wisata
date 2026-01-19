<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Wisata Jember</title>
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
                  url('https://asset-2.tstatic.net/travel/foto/bank/images/pantai-papuma-jember-jawa-timur.jpg') no-repeat center center fixed;
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

    /* Main Content */
    .main-content {
      padding-top: 100px;
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

    /* Aktivitas List */
    .activity-item {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .activity-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(255, 255, 255, 0.1);
      margin-right: 1rem;
      font-size: 1rem;
    }

    .activity-content {
      flex: 1;
    }

    .activity-title {
      margin: 0;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .activity-time {
      font-size: 0.8rem;
      opacity: 0.7;
      margin: 0;
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
      
      .stat-number {
        font-size: 2rem;
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
          <li class="nav-item"><a class="nav-link active" href="/dashboard">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/destinasi">Destinasi</a></li>
          @auth
            @if(Auth::user()->isPelanggan())
              <li class="nav-item"><a class="nav-link" href="/dashboard/pemesanan-tiket">Pesanan Saya</a></li>
            @endif
          @endauth
          <li class="nav-item"><a class="nav-link" href="/dashboard/fasilitas">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/tentangKami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/kontak">Kontak</a></li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user me-1"></i>{{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background: rgba(0, 0, 0, 0.9); border: 1px solid rgba(255, 255, 255, 0.2);">
              <li><a class="dropdown-item text-white" href="{{ route('profile.edit') }}"><i class="fas fa-user-edit me-2"></i>Profile</a></li>
              <li><hr class="dropdown-divider" style="border-color: rgba(255, 255, 255, 0.2);"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger" style="background: transparent; border: none; width: 100%; text-align: left;">
                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
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
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-map-marked-alt"></i></div>
            <div class="stat-number">{{ number_format($statistik['jumlahDestinasi'] ?? 0) }}</div>
            <div class="stat-label">Total Destinasi</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-hotel"></i></div>
            <div class="stat-number">{{ number_format($statistik['jumlahFasilitas'] ?? 0) }}</div>
            <div class="stat-label">Fasilitas Tersedia</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-ticket-alt"></i></div>
            <div class="stat-number">{{ number_format($statistik['totalTiketTerjual'] ?? 0) }}</div>
            <div class="stat-label">Tiket Terjual</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-images"></i></div>
            <div class="stat-number">{{ number_format($statistik['jumlahGaleri'] ?? 0) }}</div>
            <div class="stat-label">Total Galeri</div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <!-- Destinasi Populer -->
        <div class="col-md-8 mb-4">
          <h3 class="section-title fade-in">Destinasi Populer</h3>
          <div class="row">
            <!-- Pantai Papuma -->
            <div class="col-md-6 mb-3 fade-in">
              <div class="glass-card h-100">
                <div class="destinasi-img" style="background-image: url('https://asset-2.tstatic.net/travel/foto/bank/images/pantai-papuma-jember-jawa-timur.jpg');"></div>
                <div class="card-body">
                  <h5 class="card-title">Pantai Papuma</h5>
                  <p class="card-text">Jember, Jawa Timur</p>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <div class="rating">
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half-alt text-warning"></i>
                      <span class="ms-1">(4.5)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pantai Bandealit -->
            <div class="col-md-6 mb-3 fade-in">
              <div class="glass-card h-100">
                <div class="destinasi-img" style="background-image: url('https://backpackerjakarta.com/wp-content/uploads/2016/11/Pesona-Wisata-Pantai-Bandealit-Jember.jpg');"></div>
                <div class="card-body">
                  <h5 class="card-title">Pantai Bandealit</h5>
                  <p class="card-text">Jember, Jawa Timur</p>
                  <div class="d-flex justify-content-between align-items-center">
                   
                    <div class="rating">
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="far fa-star text-warning"></i>
                      <span class="ms-1">(4.2)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Teluk Love -->
            <div class="col-md-6 mb-3 fade-in">
              <div class="glass-card h-100">
                <div class="destinasi-img" style="background-image: url('https://asset.kompas.com/crops/hHvbTRkW_5N7F3lcya3JQIHvuRA=/0x0:780x520/750x500/data/photo/2019/02/08/3228997686.jpg');"></div>
                <div class="card-body">
                  <h5 class="card-title">Teluk Love</h5>
                  <p class="card-text">Jember, Jawa Timur</p>
                  <div class="d-flex justify-content-between align-items-center">
                   
                    <div class="rating">
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <span class="ms-1">(4.7)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Puncak Rembangan -->
            <div class="col-md-6 mb-3 fade-in">
              <div class="glass-card h-100">
                <div class="destinasi-img" style="background-image: url('https://turisian.com/wp-content/uploads/2023/02/Wisata-Puncak-Rembangan-Jember.jpg');"></div>
                <div class="card-body">
                  <h5 class="card-title">Puncak Rembangan</h5>
                  <p class="card-text">Jember, Jawa Timur</p>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <div class="rating">
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="far fa-star text-warning"></i>
                      <span class="ms-1">(4.3)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Aktivitas Terbaru -->
        <div class="col-md-4 mb-4">
          <h3 class="section-title fade-in">Aktivitas Terbaru</h3>
          <div class="glass-card">
            <div class="card-body">
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-ticket-alt"></i>
                </div>
                <div class="activity-content">
                  <h6 class="activity-title">Tiket baru terjual</h6>
                  <p class="activity-time">5 menit yang lalu</p>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-user-plus"></i>
                </div>
                <div class="activity-content">
                  <h6 class="activity-title">Pengunjung baru terdaftar</h6>
                  <p class="activity-time">1 jam yang lalu</p>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="activity-content">
                  <h6 class="activity-title">Destinasi baru ditambahkan</h6>
                  <p class="activity-time">2 jam yang lalu</p>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="activity-content">
                  <h6 class="activity-title">Ulasan baru diterima</h6>
                  <p class="activity-time">5 jam yang lalu</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Actions telah dihapus -->
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Wisata Jember. Semua Hak Dilindungi.
  </footer>

  <script>
    // Update date dengan JavaScript
    document.addEventListener('DOMContentLoaded', function() {
      const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
      document.getElementById('current-date').textContent = new Date().toLocaleDateString('id-ID', options);
      
      // Highlight menu aktif
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
</body>
</html>
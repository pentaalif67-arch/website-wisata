<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fasilitas Wisata Jember</title>
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
                  url('https://www.rayadventure.com/wp-content/uploads/2018/07/wisata-pantai-papuma-645x429.jpg') no-repeat center center fixed;
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

    /* Fasilitas Cards */
    .fasilitas-img {
      height: 200px;
      background-size: cover;
      background-position: center;
      transition: transform 0.5s ease;
    }

    .glass-card:hover .fasilitas-img {
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

    .btn-accent {
      background-color: var(--accent);
      color: var(--secondary);
      border-color: var(--accent);
      transition: all 0.3s ease;
    }

    .btn-accent:hover {
      background-color: #f4b847;
      border-color: #f4b847;
      color: var(--secondary);
    }

    /* Search and Filter */
    .search-box {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 2rem;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.15);
      border-color: var(--accent);
      color: white;
      box-shadow: 0 0 0 0.2rem rgba(233, 196, 106, 0.25);
    }

    /* Fasilitas Stats */
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

    /* Badges */
    .category-badge {
      background: rgba(233, 196, 106, 0.2);
      color: var(--accent);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      border: 1px solid rgba(233, 196, 106, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .welcome-text {
        font-size: 2rem;
      }
      
      .search-box {
        padding: 1rem;
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
          <li class="nav-item"><a class="nav-link" href="/dashboard">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/destinasi">Destinasi</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/fasilitas">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/tentangKami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
      <div class="dashboard-header fade-in text-center">
        <h1 class="welcome-text">Fasilitas Wisata Jember 🏨</h1>
        <p class="subtitle">Temukan berbagai fasilitas pendukung untuk kenyamanan perjalanan wisata Anda di Jember</p>
      </div>

      <!-- Statistik Fasilitas -->
      <div class="row text-center mb-5">
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-hotel"></i></div>
            <div class="stat-number">28</div>
            <div class="stat-label">Penginapan</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-utensils"></i></div>
            <div class="stat-number">45</div>
            <div class="stat-label">Restoran</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-car"></i></div>
            <div class="stat-number">15</div>
            <div class="stat-label">Transportasi</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-shopping-cart"></i></div>
            <div class="stat-number">32</div>
            <div class="stat-label">Oleh-oleh</div>
          </div>
        </div>
      </div>

      <!-- Search and Filter -->
      <div class="glass-card search-box fade-in">
        <div class="row">
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-text bg-transparent border-end-0">
                <i class="fas fa-search text-white"></i>
              </span>
              <input type="text" class="form-control border-start-0" placeholder="Cari fasilitas...">
            </div>
          </div>
          <div class="col-md-4">
            <select class="form-select">
              <option selected>Semua Kategori</option>
              <option>Penginapan</option>
              <option>Restoran</option>
              <option>Transportasi</option>
              <option>Oleh-oleh</option>
              <option>Wisata Keluarga</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Daftar Fasilitas -->
      <div class="row">
        <!-- Card 1 - Hotel Mutiara -->
        <div class="col-md-4 mb-4 fade-in">
          <div class="glass-card h-100">
            <div class="fasilitas-img" style="background-image: url('');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">Hotel Mutiara Jember</h5>
                <span class="category-badge">Penginapan</span>
              </div>
              <p class="card-text">Hotel bintang 4 dengan fasilitas lengkap di pusat kota Jember. Cocok untuk bisnis dan liburan keluarga.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-accent btn-sm">Lihat Detail</button>
                <div class="rating">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="far fa-star text-warning"></i>
                  <span class="ms-1">(4.0)</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2 - Restoran Laut Biru -->
        <div class="col-md-4 mb-4 fade-in">
          <div class="glass-card h-100">
            <div class="fasilitas-img" style="background-image: url('');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">Restoran Laut Biru</h5>
                <span class="category-badge">Restoran</span>
              </div>
              <p class="card-text">Restoran seafood segar dengan pemandangan pantai. Menyajikan hidangan laut khas Jember.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-accent btn-sm">Lihat Detail</button>
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

        <!-- Card 3 - Rental Mobil Jember -->
        <div class="col-md-4 mb-4 fade-in">
          <div class="glass-card h-100">
            <div class="fasilitas-img" style="background-image: url('');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">Jember Car Rental</h5>
                <span class="category-badge">Transportasi</span>
              </div>
              <p class="card-text">Layanan rental mobil dengan berbagai pilihan kendaraan dan sopir profesional untuk keliling Jember.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-accent btn-sm">Lihat Detail</button>
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

        <!-- Card 4 - Toko Oleh-oleh Khas Jember -->
        <div class="col-md-4 mb-4 fade-in">
          <div class="glass-card h-100">
            <div class="fasilitas-img" style="background-image: url('');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">Toko Oleh-oleh Khas Jember</h5>
                <span class="category-badge">Oleh-oleh</span>
              </div>
              <p class="card-text">Menjual berbagai oleh-oleh khas Jember seperti suwar-suwir, tape, dan kerajinan tangan lokal.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-accent btn-sm">Lihat Detail</button>
                <div class="rating">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <span class="ms-1">(4.8)</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 5 - Villa Papuma -->
        <div class="col-md-4 mb-4 fade-in">
          <div class="glass-card h-100">
            <div class="fasilitas-img" style="background-image: url('');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">Villa Papuma Beach</h5>
                <span class="category-badge">Penginapan</span>
              </div>
              <p class="card-text">Villa eksklusif dengan pemandangan langsung ke Pantai Papuma. Fasilitas privat dan mewah.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-accent btn-sm">Lihat Detail</button>
                <div class="rating">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star-half-alt text-warning"></i>
                  <span class="ms-1">(4.7)</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 6 - Warung Tahu Telur -->
        <div class="col-md-4 mb-4 fade-in">
          <div class="glass-card h-100">
            <div class="fasilitas-img" style="background-image: url('');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">Warung Tahu Telur Jember</h5>
                <span class="category-badge">Restoran</span>
              </div>
              <p class="card-text">Kuliner legendaris Jember dengan tahu telur yang khas. Tempat favorit wisatawan lokal maupun mancanegara.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-accent btn-sm">Lihat Detail</button>
                <div class="rating">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <span class="ms-1">(4.9)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Actions -->
      <div class="quick-actions fade-in mt-5">
        <a href="#" class="action-btn">
          <div class="action-icon"><i class="fas fa-plus-circle"></i></div>
          Tambah Fasilitas
        </a>
        <a href="#" class="action-btn">
          <div class="action-icon"><i class="fas fa-edit"></i></div>
          Kelola Fasilitas
        </a>
        <a href="#" class="action-btn">
          <div class="action-icon"><i class="fas fa-chart-bar"></i></div>
          Laporan Fasilitas
        </a>
        <a href="#" class="action-btn">
          <div class="action-icon"><i class="fas fa-cogs"></i></div>
          Pengaturan
        </a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Wisata Jember. Semua Hak Dilindungi.
  </footer>

  <style>
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

    @media (max-width: 768px) {
      .quick-actions {
        flex-direction: column;
      }
      
      .action-btn {
        min-width: auto;
      }
    }
  </style>

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

      // Search functionality
      const searchInput = document.querySelector('input[type="text"]');
      const fasilitasCards = document.querySelectorAll('.glass-card.h-100');
      
      searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        fasilitasCards.forEach(card => {
          const title = card.querySelector('.card-title').textContent.toLowerCase();
          const description = card.querySelector('.card-text').textContent.toLowerCase();
          
          if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });

      // Filter functionality
      const filterSelect = document.querySelector('select');
      filterSelect.addEventListener('change', function() {
        const selectedCategory = this.value;
        
        fasilitasCards.forEach(card => {
          const category = card.querySelector('.category-badge').textContent;
          
          if (selectedCategory === 'Semua Kategori' || category === selectedCategory) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Tentang Kami - Wisata Jember' }}</title>
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

    /* Team Cards */
    .team-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--accent);
      margin-bottom: 1rem;
    }

    .info-card {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 1.5rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
      height: 100%;
    }

    .info-header {
      display: flex;
      align-items: center;
      margin-bottom: 0.5rem;
    }

    .info-icon {
      width: 30px;
      color: var(--accent);
      margin-right: 10px;
      font-size: 1.1rem;
    }

    .info-label {
      font-weight: 600;
      color: var(--accent);
      font-size: 0.9rem;
      margin: 0;
    }

    .info-value {
      margin: 0;
      font-size: 0.95rem;
      opacity: 0.9;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 1.5rem;
      font-size: 0.9rem;
      background: rgba(0, 0, 0, 0.5);
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      margin-top: 3rem;
    }

    /* Animations */
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .fade-in {animation: fadeIn 0.8s ease forwards;}

    /* Timeline */
    .timeline {
      position: relative;
      padding-left: 30px;
    }

    .timeline:before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 2px;
      background: var(--accent);
    }

    .timeline-item {
      position: relative;
      margin-bottom: 2rem;
    }

    .timeline-item:before {
      content: '';
      position: absolute;
      left: -36px;
      top: 5px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: var(--accent);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .welcome-text {
        font-size: 2rem;
      }
      
      .team-img {
        width: 80px;
        height: 80px;
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
          <li class="nav-item"><a class="nav-link active" href="/dashboard/tentangKami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
      <div class="dashboard-header fade-in text-center">
        <h1 class="welcome-text">Tentang Kami 🌴</h1>
        <p class="subtitle">Menjelajahi keindahan Jember, satu destinasi pada satu waktu</p>
      </div>

      <!-- Tentang Kami Content -->
      <div class="row fade-in">
        <!-- Profil Perusahaan -->
        <div class="col-lg-8 mb-4">
          <div class="glass-card p-4">
            <h3 class="section-title">Siapa Kami?</h3>
            <p class="mb-4">
              Wisata Jember adalah platform digital yang didedikasikan untuk memperkenalkan kekayaan alam, budaya, dan destinasi wisata yang tersembunyi di Kabupaten Jember, Jawa Timur. Kami berkomitmen untuk menjadi pemandu terpercaya bagi wisatawan lokal maupun mancanegara yang ingin mengeksplorasi keindahan Jember.
            </p>
            
            <h3 class="section-title mt-4">Misi Kami</h3>
            <ul class="mb-4">
              <li class="mb-2">Mempromosikan destinasi wisata Jember kepada dunia</li>
              <li class="mb-2">Menyediakan informasi akurat dan terbaru tentang setiap destinasi</li>
              <li class="mb-2">Mendukung pengembangan pariwisata berkelanjutan di Jember</li>
              <li class="mb-2">Memudahkan wisatawan dalam merencanakan perjalanan mereka</li>
            </ul>
            
            <h3 class="section-title mt-4">Visi Kami</h3>
            <p>
              Menjadikan Jember sebagai destinasi wisata unggulan di Jawa Timur melalui digitalisasi informasi dan promosi yang inovatif.
            </p>
          </div>
        </div>

        <!-- Statistik -->
        <div class="col-lg-4 mb-4">
          <div class="glass-card p-4 h-100">
            <h3 class="section-title">Pencapaian Kami</h3>
            <div class="info-card mb-3">
              <div class="info-header">
                <i class="fas fa-map-marked-alt info-icon"></i>
                <h6 class="info-label">Destinasi Terdaftar</h6>
              </div>
              <p class="info-value">50+</p>
            </div>
            
            <div class="info-card mb-3">
              <div class="info-header">
                <i class="fas fa-users info-icon"></i>
                <h6 class="info-label">Pengguna Bulanan</h6>
              </div>
              <p class="info-value">10.000+</p>
            </div>
            
            <div class="info-card mb-3">
              <div class="info-header">
                <i class="fas fa-calendar-alt info-icon"></i>
                <h6 class="info-label">Tahun Berdiri</h6>
              </div>
              <p class="info-value">2020</p>
            </div>
            
            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-star info-icon"></i>
                <h6 class="info-label">Rating Platform</h6>
              </div>
              <p class="info-value">4.8/5.0</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Timeline Perjalanan -->
      <div class="glass-card p-4 mb-4 fade-in">
        <h3 class="section-title">Perjalanan Kami</h3>
        <div class="timeline">
          <div class="timeline-item">
            <h5 class="text-accent">2020 - Awal Perjalanan</h5>
            <p>Platform Wisata Jember diluncurkan dengan 10 destinasi awal</p>
          </div>
          <div class="timeline-item">
            <h5 class="text-accent">2021 - Ekspansi Konten</h5>
            <p>Menambahkan fitur galeri dan ulasan pengguna</p>
          </div>
          <div class="timeline-item">
            <h5 class="text-accent">2022 - Kolaborasi</h5>
            <p>Bekerja sama dengan Dinas Pariwisata Jember dan komunitas lokal</p>
          </div>
          <div class="timeline-item">
            <h5 class="text-accent">2023 - Inovasi Platform</h5>
            <p>Meluncurkan sistem booking dan panduan wisata digital</p>
          </div>
          <div class="timeline-item">
            <h5 class="text-accent">2024 - Sampai Sekarang</h5>
            <p>Menjadi platform referensi utama untuk wisata di Jember</p>
          </div>
        </div>
      </div>

      <!-- Tim Kami -->
      <div class="glass-card p-4 fade-in">
        <h3 class="section-title text-center">Tim Kami</h3>
        <p class="text-center mb-4">Orang-orang di balik kesuksesan Wisata Jember</p>
        
        <div class="row">
          @foreach($teamMembers as $member)
          <div class="col-md-4 mb-4">
            <div class="text-center">
              <img src="https://ui-avatars.com/api/?name={{ urlencode($member['name']) }}&background=e9c46a&color=264653&size=100" 
                   alt="{{ $member['name'] }}" 
                   class="team-img">
              <h5 class="mt-2 mb-1">{{ $member['name'] }}</h5>
              <p class="text-accent mb-2">{{ $member['position'] }}</p>
              <p class="small opacity-75">{{ $member['bio'] }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Kontak -->
      <div class="glass-card p-4 mt-4 fade-in">
        <h3 class="section-title">Hubungi Kami</h3>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-envelope info-icon"></i>
                <h6 class="info-label">Email</h6>
              </div>
              <p class="info-value">{{ $contact['email'] }}</p>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-phone info-icon"></i>
                <h6 class="info-label">Telepon</h6>
              </div>
              <p class="info-value">{{ $contact['phone'] }}</p>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-map-marker-alt info-icon"></i>
                <h6 class="info-label">Alamat</h6>
              </div>
              <p class="info-value">{{ $contact['address'] }}</p>
            </div>
          </div>
        </div>
        
        <div class="text-center mt-4">
          <a href="#" class="btn btn-accent me-3"><i class="fas fa-envelope me-2"></i>Kirim Pesan</a>
          <a href="/dashboard/destinasi" class="btn btn-outline-accent"><i class="fas fa-map-marked-alt me-2"></i>Jelajahi Destinasi</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      &copy; 2025 Wisata Jember. Semua Hak Dilindungi. | 
      <span class="opacity-75">{{ $description }}</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
</body>
</html>
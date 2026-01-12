<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Destinasi - Wisata Jember</title>
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

    /* Form Styles */
    .form-control, .form-select {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      transition: all 0.3s ease;
    }

    .form-control::placeholder, .form-select::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .form-control:focus, .form-select:focus {
      background: rgba(255, 255, 255, 0.15);
      border-color: var(--accent);
      color: white;
      box-shadow: 0 0 0 0.2rem rgba(233, 196, 106, 0.25);
    }

    .form-label {
      font-weight: 500;
      color: var(--accent);
      margin-bottom: 0.5rem;
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
      font-weight: 600;
    }

    .btn-accent:hover {
      background-color: #f4b847;
      border-color: #f4b847;
      color: var(--secondary);
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
      
      .main-content {
        padding-top: 80px;
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
          <li class="nav-item"><a class="nav-link active" href="/dashboard/destinasi">Destinasi</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/fasilitas">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/tentangkami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
      <div class="dashboard-header fade-in text-center">
        <h1 class="welcome-text">Tambah Destinasi Wisata Baru 🌅</h1>
        <p class="subtitle">Isi formulir di bawah ini untuk menambahkan destinasi wisata baru di Jember</p>
      </div>

      <!-- Form Container -->
      <div class="glass-card p-4 fade-in">
        <form action="{{ route('destinasi.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row">
            <!-- Nama Destinasi -->
            <div class="col-md-6 mb-3">
              <label for="nama" class="form-label">Nama Destinasi</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <!-- Kategori -->
            <div class="col-md-6 mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select class="form-select" id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Pantai">Pantai</option>
                <option value="Pegunungan">Pegunungan</option>
                <option value="Air Terjun">Air Terjun</option>
                <option value="Perkebunan">Perkebunan</option>
                <option value="Wisata Keluarga">Wisata Keluarga</option>
                <option value="Budaya">Budaya</option>
              </select>
            </div>
          </div>

          <!-- Deskripsi Singkat -->
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
          </div>

          <!-- Deskripsi Lengkap -->
          <div class="mb-3">
            <label for="deskripsi_lengkap" class="form-label">Deskripsi Lengkap</label>
            <textarea class="form-control" id="deskripsi_lengkap" name="deskripsi_lengkap" rows="4"></textarea>
          </div>

          <div class="row">
            <!-- Upload Gambar -->
            <div class="col-md-6 mb-3">
              <label for="gambar" class="form-label">Upload Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
              <small class="text-muted">Tipe: JPG, PNG, GIF (Max: 2MB)</small>
            </div>

            <!-- Lokasi -->
            <div class="col-md-6 mb-3">
              <label for="lokasi" class="form-label">Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>
          </div>

          <div class="row">
            <!-- Harga Tiket -->
            <div class="col-md-6 mb-3">
              <label for="harga_tiket" class="form-label">Harga Tiket (Rp)</label>
              <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" min="0" required>
            </div>

            <!-- Kontak -->
            <div class="col-md-6 mb-3">
              <label for="kontak" class="form-label">Kontak (opsional)</label>
              <input type="text" class="form-control" id="kontak" name="kontak" placeholder="+62...">
            </div>
          </div>

          <!-- Jam Buka dan Tutup -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="jam_buka" class="form-label">Jam Buka</label>
              <input type="time" class="form-control" id="jam_buka" name="jam_buka" required>
            </div>
            <div class="col-md-6">
              <label for="jam_tutup" class="form-label">Jam Tutup</label>
              <input type="time" class="form-control" id="jam_tutup" name="jam_tutup" required>
            </div>
          </div>

          <!-- Maps Link -->
          <div class="mb-4">
            <label for="maps_link" class="form-label">Google Maps Link (opsional)</label>
            <input type="url" class="form-control" id="maps_link" name="maps_link" placeholder="https://goo.gl/maps/...">
          </div>

          <!-- Tombol Aksi -->
          <div class="d-flex justify-content-between pt-3">
            <a href="{{ route('destinasi.index') }}" class="btn btn-outline-accent">
              <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
            <button type="submit" class="btn btn-accent">
              <i class="fas fa-save me-2"></i>Simpan Destinasi
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Wisata Jember. Semua Hak Dilindungi.
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
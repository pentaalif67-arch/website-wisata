<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Destinasi - Wisata Jember</title>
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

    /* Image Preview */
    .image-preview {
      border: 2px solid rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      padding: 10px;
      margin-top: 10px;
      text-align: center;
    }

    .current-image {
      max-width: 100%;
      max-height: 200px;
      border-radius: 8px;
    }

    .image-label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
      color: var(--accent);
    }

    /* Alert Styles */
    .alert {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
    }

    .alert-success {
      border-color: rgba(40, 167, 69, 0.3);
    }

    .alert-danger {
      border-color: rgba(220, 53, 69, 0.3);
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
          <li class="nav-item"><a class="nav-link" href="/dashboard/destinasi">Destinasi</a></li>
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
        <h1 class="welcome-text">Edit Destinasi Wisata 🌅</h1>
        <p class="subtitle">Perbarui informasi destinasi wisata di Jember</p>
      </div>

      <!-- Form Container -->
      <div class="glass-card p-4 fade-in">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
          <i class="fas fa-check-circle me-2"></i>
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
          <i class="fas fa-exclamation-circle me-2"></i>
          Terdapat kesalahan dalam pengisian form:
          <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <form action="{{ route('destinasi.update', $destinasi->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <!-- Nama Destinasi -->
            <div class="col-md-6 mb-3">
              <label for="nama" class="form-label">Nama Destinasi</label>
              <input type="text" class="form-control" id="nama" name="nama" 
                     value="{{ old('nama', $destinasi->nama) }}" required>
            </div>

            <!-- Kategori -->
            <div class="col-md-6 mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select class="form-select" id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategori as $kat)
                <option value="{{ $kat }}" {{ old('kategori', $destinasi->kategori) == $kat ? 'selected' : '' }}>
                  {{ $kat }}
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <!-- Deskripsi Singkat -->
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi', $destinasi->deskripsi) }}</textarea>
            <div class="form-text text-white-50" id="charCount">Sisa karakter: 500</div>
          </div>

          <!-- Deskripsi Lengkap -->
          <div class="mb-3">
            <label for="deskripsi_lengkap" class="form-label">Deskripsi Lengkap</label>
            <textarea class="form-control" id="deskripsi_lengkap" name="deskripsi_lengkap" rows="4">{{ old('deskripsi_lengkap', $destinasi->deskripsi_lengkap) }}</textarea>
          </div>

          <div class="row">
            <!-- Upload Gambar Baru -->
            <div class="col-md-6 mb-3">
              <label for="gambar" class="form-label">Upload Gambar Baru (Opsional)</label>
              <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
              <small class="text-muted d-block mt-1">Kosongkan jika tidak ingin mengubah gambar</small>
              <small class="text-muted">Tipe: JPG, PNG, GIF (Max: 2MB)</small>
            </div>

            <!-- Lokasi -->
            <div class="col-md-6 mb-3">
              <label for="lokasi" class="form-label">Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="lokasi" 
                     value="{{ old('lokasi', $destinasi->lokasi) }}" required>
            </div>
          </div>

          <!-- Preview Gambar Saat Ini -->
          @if($destinasi->gambar)
          <div class="mb-4">
            <span class="image-label">Gambar Saat Ini:</span>
            <div class="image-preview">
              <img src="{{ asset('storage/' . $destinasi->gambar) }}" 
                   alt="{{ $destinasi->nama }}" 
                   class="current-image mb-2">
              <div class="text-muted small">Gambar yang saat ini digunakan</div>
            </div>
          </div>
          @endif

          <div class="row">
            <!-- Harga Tiket -->
            <div class="col-md-6 mb-3">
              <label for="harga_tiket" class="form-label">Harga Tiket (Rp)</label>
              <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" 
                     value="{{ old('harga_tiket', $destinasi->harga_tiket) }}" min="0" required>
            </div>

            <!-- Kontak -->
            <div class="col-md-6 mb-3">
              <label for="kontak" class="form-label">Kontak (opsional)</label>
              <input type="text" class="form-control" id="kontak" name="kontak" 
                     value="{{ old('kontak', $destinasi->kontak) }}" placeholder="+62...">
            </div>
          </div>

          <!-- Jam Buka dan Tutup -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="jam_buka" class="form-label">Jam Buka</label>
              <input type="time" class="form-control" id="jam_buka" name="jam_buka" 
                     value="{{ old('jam_buka', $destinasi->jam_buka) }}" required>
            </div>
            <div class="col-md-6">
              <label for="jam_tutup" class="form-label">Jam Tutup</label>
              <input type="time" class="form-control" id="jam_tutup" name="jam_tutup" 
                     value="{{ old('jam_tutup', $destinasi->jam_tutup) }}" required>
            </div>
          </div>

          <!-- Maps Link -->
          <div class="mb-4">
            <label for="maps_link" class="form-label">Google Maps Link (opsional)</label>
            <input type="url" class="form-control" id="maps_link" name="maps_link" 
                   value="{{ old('maps_link', $destinasi->maps_link) }}" placeholder="https://goo.gl/maps/...">
          </div>

          <!-- Tombol Aksi -->
          <div class="d-flex justify-content-between pt-3">
            <a href="{{ route('destinasi.index') }}" class="btn btn-outline-accent">
              <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
            <div>
              <button type="submit" class="btn btn-accent">
                <i class="fas fa-save me-2"></i>Simpan Perubahan
              </button>
            </div>
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

      // Karakter counter untuk deskripsi singkat
      const deskripsiInput = document.getElementById('deskripsi');
      const charCount = document.getElementById('charCount');
      
      if (deskripsiInput && charCount) {
        function updateCharCount() {
          const remaining = 500 - deskripsiInput.value.length;
          charCount.textContent = `Sisa karakter: ${remaining}`;
          charCount.style.color = remaining < 50 ? '#ff6b6b' : 'rgba(255, 255, 255, 0.5)';
        }
        
        deskripsiInput.addEventListener('input', updateCharCount);
        updateCharCount(); // Inisialisasi awal
      }

      // Preview gambar baru sebelum upload
      const gambarInput = document.getElementById('gambar');
      if (gambarInput) {
        gambarInput.addEventListener('change', function(e) {
          const file = e.target.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
              const currentImagePreview = document.querySelector('.current-image');
              if (currentImagePreview) {
                currentImagePreview.src = e.target.result;
              } else {
                // Buat preview jika belum ada
                const imagePreviewDiv = document.createElement('div');
                imagePreviewDiv.className = 'mb-4';
                imagePreviewDiv.innerHTML = `
                  <span class="image-label">Preview Gambar Baru:</span>
                  <div class="image-preview">
                    <img src="${e.target.result}" class="current-image mb-2">
                    <div class="text-muted small">Preview gambar baru</div>
                  </div>
                `;
                
                const existingPreview = document.querySelector('.image-preview');
                if (existingPreview && existingPreview.parentElement) {
                  existingPreview.parentElement.insertBefore(imagePreviewDiv, existingPreview.parentElement.firstChild);
                } else {
                  const form = gambarInput.closest('form');
                  form.insertBefore(imagePreviewDiv, gambarInput.parentElement);
                }
              }
            };
            reader.readAsDataURL(file);
          }
        });
      }
    });
  </script>
</body>
</html>
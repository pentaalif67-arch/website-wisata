<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Galeri Wisata Jember</title>
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

    /* Galeri Cards */
    .galeri-img {
      height: 250px;
      background-size: cover;
      background-position: center;
      transition: transform 0.5s ease;
    }

    .glass-card:hover .galeri-img {
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

    /* Badges */
    .category-badge {
      background: rgba(233, 196, 106, 0.2);
      color: var(--accent);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      border: 1px solid rgba(233, 196, 106, 0.3);
    }

    .date-badge {
      background: rgba(42, 157, 143, 0.2);
      color: var(--primary);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      border: 1px solid rgba(42, 157, 143, 0.3);
    }

    /* Detail Modal Styles */
    .detail-img {
      width: 100%;
      height: 350px;
      object-fit: cover;
      border-radius: 16px;
      margin-bottom: 2rem;
      border: none;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    .info-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.2rem;
      margin-bottom: 1.5rem;
    }

    .info-card {
      background: rgba(42, 157, 143, 0.08);
      border-radius: 14px;
      padding: 1.2rem;
      border: 1px solid rgba(42, 157, 143, 0.2);
      transition: all 0.3s ease;
    }

    .info-card:hover {
      background: rgba(42, 157, 143, 0.12);
      border-color: rgba(42, 157, 143, 0.4);
      transform: translateY(-2px);
    }

    .info-header {
      display: flex;
      align-items: center;
      margin-bottom: 0.8rem;
    }

    .info-icon {
      width: 35px;
      color: var(--accent);
      margin-right: 12px;
      font-size: 1.2rem;
      text-align: center;
    }

    .info-label {
      font-weight: 600;
      color: var(--accent);
      font-size: 0.95rem;
      margin: 0;
    }

    .info-value {
      margin: 0;
      font-size: 0.95rem;
      opacity: 0.95;
      line-height: 1.5;
    }

    .description-section {
      background: rgba(42, 157, 143, 0.08);
      border-radius: 14px;
      padding: 1.5rem;
      margin-bottom: 2rem;
      border: 1px solid rgba(42, 157, 143, 0.2);
    }

    .section-label {
      color: var(--accent);
      font-weight: 600;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    /* Modal Styles */
    .modal-content {
      background: rgba(15, 15, 25, 0.98);
      backdrop-filter: blur(20px);
      border-radius: 18px;
      border: 1px solid rgba(42, 157, 143, 0.2);
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.9);
      color: white;
    }

    .modal-header {
      border-bottom: 1px solid rgba(42, 157, 143, 0.15);
      padding: 2rem;
      background: linear-gradient(135deg, rgba(42, 157, 143, 0.08) 0%, rgba(38, 70, 83, 0.08) 100%);
    }

    .modal-title {
      color: var(--accent);
      font-weight: 700;
      font-size: 1.8rem;
    }

    .btn-close {
      filter: brightness(0.8);
      opacity: 0.7;
    }

    .btn-close:hover {
      opacity: 1;
      filter: brightness(1);
    }

    .modal-body {
      padding: 2rem;
    }

    .modal-footer {
      border-top: 1px solid rgba(42, 157, 143, 0.15);
      padding: 1.5rem 2rem;
      background: rgba(42, 157, 143, 0.05);
    }

    /* Button Styles */
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
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(233, 196, 106, 0.3);
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

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .welcome-text {
        font-size: 2rem;
      }
      
      .search-box {
        padding: 1rem;
      }
      
      .galeri-img {
        height: 200px;
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
          <li class="nav-item"><a class="nav-link active" href="/dashboard">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/destinasi">Destinasi</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/fasilitas">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/tentangKami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Main Content -->
  <div class="main-content" @auth @if(Auth::user()->isAdmin()) data-is-admin="true" @endif @endauth>
    <div class="container">
      <div class="dashboard-header fade-in text-center">
        <h1 class="welcome-text">Galeri Wisata Jember 📸</h1>
        <p class="subtitle">Jelajahi keindahan Jember melalui koleksi foto-foto menakjubkan dari berbagai destinasi wisata</p>
      </div>

      <!-- Search and Filter -->
      <div class="glass-card search-box fade-in">
        <div class="row">
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-text bg-transparent border-end-0">
                <i class="fas fa-search text-white"></i>
              </span>
              <input type="text" class="form-control border-start-0" placeholder="Cari foto galeri...">
            </div>
          </div>
          <div class="col-md-4">
            <select class="form-select" id="kategoriFilter">
              <option value="Semua">Semua Kategori</option>
              <option value="Pantai">Pantai</option>
              <option value="Pegunungan">Pegunungan</option>
              <option value="Air Terjun">Air Terjun</option>
              <option value="Perkebunan">Perkebunan</option>
              <option value="Wisata Keluarga">Wisata Keluarga</option>
              <option value="Kota">Kota</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Galeri Grid -->
      <div class="row" id="galeriGrid">
        <!-- Data galeri akan dimasukkan di sini oleh JavaScript -->
      </div>

      <!-- Quick Actions - Hanya untuk Admin -->
      @auth
        @if(Auth::user()->isAdmin())
          <div class="quick-actions fade-in mt-5">
            <a href="#" class="action-btn" data-bs-toggle="modal" data-bs-target="#tambahGaleriModal">
              <div class="action-icon"><i class="fas fa-plus-circle"></i></div>
              Tambah Galeri
            </a>
          </div>
        @endif
      @endauth

      <!-- Quick Actions -->
      <div class="quick-actions fade-in mt-5">
        <a href="#" class="action-btn">
          <div class="action-icon"><i class="fas fa-plus-circle"></i></div>
          Tambah Foto
        </a>
        <a href="#" class="action-btn">
          <div class="action-icon"><i class="fas fa-cloud-upload-alt"></i></div>
          Upload Galeri
        </a>
        <a href="#" class="action-btn">
          <div class="action-icon"><i class="fas fa-sliders-h"></i></div>
          Kelola Album
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

  <!-- Modal untuk detail galeri -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTitle"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img id="modalImage" src="" class="detail-img" alt="" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; margin-bottom: 1.5rem; border: 2px solid rgba(255, 255, 255, 0.2);">
          
          <div class="description-section">
            <h6 class="section-label">Deskripsi</h6>
            <p id="modalDescription"></p>
          </div>

          <div class="info-grid">
            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-map-marker-alt info-icon"></i>
                <h6 class="info-label">Lokasi</h6>
              </div>
              <p class="info-value" id="modalLokasi">Tidak tersedia</p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-clock info-icon"></i>
                <h6 class="info-label">Jam Operasional</h6>
              </div>
              <p class="info-value" id="modalJam">Tidak tersedia</p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-ticket-alt info-icon"></i>
                <h6 class="info-label">Harga Tiket</h6>
              </div>
              <p class="info-value" id="modalHarga">Tidak tersedia</p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-folder info-icon"></i>
                <h6 class="info-label">Kategori</h6>
              </div>
              <p class="info-value" id="modalCategory"></p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-calendar info-icon"></i>
                <h6 class="info-label">Tanggal Ditambahkan</h6>
              </div>
              <p class="info-value" id="modalDate"></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-accent pesan-tiket-btn">Pesan Tiket</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tambah Galeri -->
  <div class="modal fade" id="tambahGaleriModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fas fa-plus-circle me-2"></i>Tambah Galeri
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="tambahGaleriForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="judulGaleri" class="form-label">
                <i class="fas fa-heading me-2"></i>Judul
              </label>
              <input type="text" class="form-control" id="judulGaleri" name="judul" required>
            </div>

            <div class="mb-3">
              <label for="kategoriGaleri" class="form-label">
                <i class="fas fa-tag me-2"></i>Kategori
              </label>
              <select class="form-select" id="kategoriGaleri" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Pantai">Pantai</option>
                <option value="Pegunungan">Pegunungan</option>
                <option value="Air Terjun">Air Terjun</option>
                <option value="Perkebunan">Perkebunan</option>
                <option value="Wisata Keluarga">Wisata Keluarga</option>
                <option value="Kota">Kota</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="deskripsiGaleri" class="form-label">
                <i class="fas fa-align-left me-2"></i>Deskripsi
              </label>
              <textarea class="form-control" id="deskripsiGaleri" name="deskripsi" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="fotoGaleri" class="form-label">
                <i class="fas fa-image me-2"></i>Upload Foto
              </label>
              <input type="file" class="form-control" id="fotoGaleri" name="foto" accept="image/*" required>
              <small class="text-muted">Format: JPG, PNG (Maksimal 5MB)</small>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-accent" onclick="submitTambahGaleri()">
            <i class="fas fa-save me-2"></i>Simpan
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit Galeri -->
  <div class="modal fade" id="editGaleriModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fas fa-edit me-2"></i>Edit Galeri
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editGaleriForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="editGaleriId" name="id">
            
            <div class="mb-3">
              <label for="editJudulGaleri" class="form-label">
                <i class="fas fa-heading me-2"></i>Judul
              </label>
              <input type="text" class="form-control" id="editJudulGaleri" name="judul" required>
            </div>

            <div class="mb-3">
              <label for="editKategoriGaleri" class="form-label">
                <i class="fas fa-tag me-2"></i>Kategori
              </label>
              <select class="form-select" id="editKategoriGaleri" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Pantai">Pantai</option>
                <option value="Pegunungan">Pegunungan</option>
                <option value="Air Terjun">Air Terjun</option>
                <option value="Perkebunan">Perkebunan</option>
                <option value="Wisata Keluarga">Wisata Keluarga</option>
                <option value="Kota">Kota</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="editDeskripsiGaleri" class="form-label">
                <i class="fas fa-align-left me-2"></i>Deskripsi
              </label>
              <textarea class="form-control" id="editDeskripsiGaleri" name="deskripsi" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="editFotoGaleri" class="form-label">
                <i class="fas fa-image me-2"></i>Upload Foto Baru (Opsional)
              </label>
              <input type="file" class="form-control" id="editFotoGaleri" name="foto" accept="image/*">
              <small class="text-muted">Format: JPG, PNG (Maksimal 5MB)</small>
              <div class="mt-2">
                <img id="editFotoPreview" style="max-width: 200px; display: none; border-radius: 8px;">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-accent" onclick="submitEditGaleri()">
            <i class="fas fa-save me-2"></i>Update
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Data galeri dari server (Laravel Blade) - Inject di awal script
    const galeriData = window.galeriData || [];

    // Fungsi untuk menampilkan galeri
    function renderGaleri(data = galeriData) {
      const galeriGrid = document.getElementById('galeriGrid');
      galeriGrid.innerHTML = '';

      data.forEach(item => {
        const col = document.createElement('div');
        col.className = 'col-md-4 mb-4 fade-in';
        col.setAttribute('data-kategori', item.kategori);
        
        // Handle image path - if it's from storage, prepend /storage/
        let imagePath = item.gambar || item.image || '';
        if (imagePath && !imagePath.startsWith('http') && !imagePath.startsWith('/storage/')) {
          imagePath = '/storage/' + imagePath;
        }
        
        // Cek apakah user adalah admin
        const isAdmin = document.querySelector('[data-is-admin]')?.dataset.isAdmin === 'true';
        
        let actionButtons = '';
        if (isAdmin) {
          actionButtons = `
            <div class="d-flex gap-2 mt-2">
              <button class="btn btn-sm btn-warning text-dark flex-grow-1" onclick="editGaleri(${item.id})">
                <i class="fas fa-edit me-1"></i>Edit
              </button>
              <button class="btn btn-sm btn-danger flex-grow-1" onclick="deleteGaleri(${item.id})">
                <i class="fas fa-trash me-1"></i>Hapus
              </button>
            </div>
          `;
        }
        
        col.innerHTML = `
          <div class="glass-card h-100">
            <div class="galeri-img" style="background-image: url('${imagePath}');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">${item.nama || item.judul}</h5>
                <span class="category-badge">${item.kategori || 'Umum'}</span>
              </div>
              <p class="card-text">${item.deskripsi || item.description || 'Destinasi wisata'}</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="date-badge">
                  <i class="fas fa-calendar me-1"></i>${item.created_at ? new Date(item.created_at).toLocaleDateString('id-ID') : item.tanggal || 'Terbaru'}
                </span>
                <button class="btn btn-outline-accent btn-sm" onclick="openModal(${item.id})">
                  <i class="fas fa-expand me-1"></i>Lihat
                </button>
              </div>
              ${actionButtons}
            </div>
          </div>
        `;
        
        galeriGrid.appendChild(col);
      });
    }

    // Fungsi untuk membuka modal
    function openModal(id) {
      const item = galeriData.find(img => img.id === id);
      if (item) {
        // Handle image path
        let imagePath = item.gambar || item.image || '';
        if (imagePath && !imagePath.startsWith('http') && !imagePath.startsWith('/storage/')) {
          imagePath = '/storage/' + imagePath;
        }
        
        document.getElementById('modalTitle').textContent = item.nama || item.judul;
        document.getElementById('modalImage').src = imagePath;
        document.getElementById('modalImage').alt = item.nama || item.judul;
        document.getElementById('modalDescription').textContent = item.deskripsi || item.description || 'Destinasi wisata';
        document.getElementById('modalCategory').textContent = item.kategori || 'Umum';
        
        // Info Lokasi
        if (item.lokasi) {
          document.getElementById('modalLokasi').textContent = item.lokasi;
        } else {
          document.getElementById('modalLokasi').textContent = 'Tidak tersedia';
        }
        
        // Info Jam Operasional
        if (item.jam_buka && item.jam_tutup) {
          document.getElementById('modalJam').textContent = item.jam_buka + ' - ' + item.jam_tutup;
        } else {
          document.getElementById('modalJam').textContent = 'Tidak tersedia';
        }
        
        // Info Harga Tiket
        if (item.harga_tiket) {
          const harga = new Intl.NumberFormat('id-ID', {style: 'currency', currency: 'IDR'}).format(item.harga_tiket);
          document.getElementById('modalHarga').textContent = harga;
        } else {
          document.getElementById('modalHarga').textContent = 'Tidak tersedia';
        }
        
        // Tanggal
        const dateStr = item.created_at ? new Date(item.created_at).toLocaleDateString('id-ID') : (item.tanggal || 'Terbaru');
        document.getElementById('modalDate').textContent = dateStr;
        
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        modal.show();
      }
    }

    // Highlight menu aktif
    document.addEventListener('DOMContentLoaded', function() {
      // Render galeri pertama kali
      renderGaleri();

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
      
      searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const filteredData = galeriData.filter(item => 
          item.judul.toLowerCase().includes(searchTerm) || 
          item.deskripsi.toLowerCase().includes(searchTerm)
        );
        renderGaleri(filteredData);
      });

      // Filter functionality
      const filterSelect = document.getElementById('kategoriFilter');
      filterSelect.addEventListener('change', function() {
        const selectedCategory = this.value;
        const filteredData = selectedCategory === 'Semua' 
          ? galeriData 
          : galeriData.filter(item => item.kategori === selectedCategory);
        renderGaleri(filteredData);
      });

      // Fungsi untuk submit form tambah galeri
      window.submitTambahGaleri = function() {
        const form = document.getElementById('tambahGaleriForm');
        const formData = new FormData(form);

        fetch('/dashboard/galeri/store', {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('Galeri berhasil ditambahkan!');
            // Reset form
            form.reset();
            // Tutup modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('tambahGaleriModal'));
            modal.hide();
            // Refresh halaman
            location.reload();
          } else {
            alert('Error: ' + (data.message || 'Tidak diketahui'));
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat menambahkan galeri');
        });
      };

      // Fungsi untuk edit galeri
      window.editGaleri = function(id) {
        const item = galeriData.find(img => img.id === id);
        if (item) {
          // Set form data
          document.getElementById('editGaleriId').value = id;
          document.getElementById('editJudulGaleri').value = item.nama || item.judul;
          document.getElementById('editKategoriGaleri').value = item.kategori;
          document.getElementById('editDeskripsiGaleri').value = item.deskripsi || item.description || '';
          
          // Tampilkan preview foto
          const imagePath = item.gambar || item.image || '';
          const imagePathFull = imagePath.startsWith('http') || imagePath.startsWith('/storage/') 
            ? imagePath 
            : '/storage/' + imagePath;
          document.getElementById('editFotoPreview').src = imagePathFull;
          document.getElementById('editFotoPreview').style.display = 'block';
          
          const modal = new bootstrap.Modal(document.getElementById('editGaleriModal'));
          modal.show();
        }
      };

      // Fungsi untuk submit edit galeri
      window.submitEditGaleri = function() {
        const id = document.getElementById('editGaleriId').value;
        const form = document.getElementById('editGaleriForm');
        const formData = new FormData(form);

        fetch(`/dashboard/galeri/update/${id}`, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-HTTP-Method-Override': 'PUT',
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('Galeri berhasil diupdate!');
            const modal = bootstrap.Modal.getInstance(document.getElementById('editGaleriModal'));
            modal.hide();
            location.reload();
          } else {
            alert('Error: ' + (data.message || 'Tidak diketahui'));
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat mengupdate galeri');
        });
      };

      // Fungsi untuk delete galeri
      window.deleteGaleri = function(id) {
        if (confirm('Yakin ingin menghapus galeri ini?')) {
          fetch(`/dashboard/galeri/delete/${id}`, {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'X-HTTP-Method-Override': 'DELETE',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || document.querySelector('input[name="_token"]')?.value || '',
            }
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              alert('Galeri berhasil dihapus!');
              location.reload();
            } else {
              alert('Error: ' + (data.message || 'Tidak diketahui'));
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menghapus galeri');
          });
        }
      };
    });
  <script>
    // Inject galeri data dari Blade
    window.galeriData = @json($galeri ?? []);
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
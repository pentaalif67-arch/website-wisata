<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
    @php use Illuminate\Support\Str; @endphp
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
          <li class="nav-item"><a class="nav-link" href="/dashboard/kontak">Kontak</a></li>
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
            <div class="stat-number">{{ $statistik['totalPenginapan'] ?? 0 }}</div>
            <div class="stat-label">Penginapan</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-utensils"></i></div>
            <div class="stat-number">{{ $statistik['totalRestoran'] ?? 0 }}</div>
            <div class="stat-label">Restoran</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-car"></i></div>
            <div class="stat-number">{{ $statistik['totalTransportasi'] ?? 0 }}</div>
            <div class="stat-label">Transportasi</div>
          </div>
        </div>
        <div class="col-md-3 mb-4 fade-in">
          <div class="glass-card stat-card">
            <div class="card-icon"><i class="fas fa-shopping-cart"></i></div>
            <div class="stat-number">{{ $statistik['totalOlehOleh'] ?? 0 }}</div>
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
      <div class="row" id="fasilitasContainer">
        @forelse($fasilitas as $item)
        <div class="col-md-4 mb-4 fade-in fasilitas-item" data-kategori="{{ $item['kategori'] }}" data-nama="{{ strtolower($item['nama']) }}">
          <div class="glass-card h-100">
            @php
              $isUrl = Str::startsWith($item['gambar'], ['http://', 'https://']);
              $imgSrc = $isUrl ? $item['gambar'] : asset('storage/fasilitas/' . $item['gambar']);
            @endphp
            <div class="fasilitas-img" style="background-image: url('{{ $imgSrc }}'); background-size: cover; background-position: center; height: 200px;"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">{{ $item['nama'] }}</h5>
                <span class="category-badge">{{ $item['kategori'] }}</span>
              </div>
              <p class="card-text">{{ Illuminate\Support\Str::limit($item['deskripsi'], 100) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-accent btn-sm" onclick="openDetailModal('{{ json_encode($item) }}')">Lihat Detail</button>
                <div class="rating">
                  @for($i = 1; $i <= 5; $i++)
                    @if($i <= floor($item['rating']))
                      <i class="fas fa-star text-warning"></i>
                    @elseif($i - 0.5 <= $item['rating'])
                      <i class="fas fa-star-half-alt text-warning"></i>
                    @else
                      <i class="far fa-star text-warning"></i>
                    @endif
                  @endfor
                  <span class="ms-1">({{ $item['rating'] }})</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12">
          <div class="glass-card p-4 text-center">
            <i class="fas fa-building fa-3x mb-3" style="color: var(--accent); opacity: 0.7;"></i>
            <h5 class="mb-2">Belum ada fasilitas yang ditambahkan</h5>
            <p class="mb-3 opacity-75">Mulai dengan menambahkan fasilitas penginapan/RBNB terdekat</p>
          </div>
        </div>
        @endforelse
      </div>

      <!-- Quick Actions - Hanya untuk Admin -->
      @auth
        @if(Auth::user()->isAdmin())
          <div class="quick-actions fade-in mt-5">
            <a href="#" class="action-btn" data-bs-toggle="modal" data-bs-target="#tambahFasilitasModal">
              <div class="action-icon"><i class="fas fa-plus-circle"></i></div>
              Tambah Fasilitas
            </a>
            <a href="#" class="action-btn" data-bs-toggle="modal" data-bs-target="#kelolaFasilitasModal">
              <div class="action-icon"><i class="fas fa-edit"></i></div>
              Kelola Fasilitas
            </a>
           
          </div>
        @endif
      @endauth
    </div>
  </div>

  <!-- Modal Kelola Fasilitas -->
  <div class="modal fade" id="kelolaFasilitasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fas fa-cogs me-2"></i>Kelola Fasilitas dari Database
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Alamat</th>
                  <th>Harga</th>
                  <th>Rating</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody id="tabelFasilitas">
                <!-- Data akan dimuat via JavaScript -->
              </tbody>
            </table>
          </div>
          <div id="noDataMessage" class="text-center text-muted py-4">
            <i class="fas fa-inbox fa-3x mb-2 opacity-50"></i>
            <p>Belum ada fasilitas dari database</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit Fasilitas -->
  <div class="modal fade" id="editFasilitasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fas fa-edit me-2"></i>Edit Fasilitas
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editFasilitasForm" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" id="csrfToken" value="{{ csrf_token() }}">
            <input type="hidden" id="editFasilitasId" name="id">
            
            <div class="mb-3">
              <label for="editNamaFasilitas" class="form-label">
                <i class="fas fa-building me-2"></i>Nama Fasilitas
              </label>
              <input type="text" class="form-control" id="editNamaFasilitas" name="nama" required>
            </div>

            <div class="mb-3">
              <label for="editKategori" class="form-label">
                <i class="fas fa-tag me-2"></i>Kategori
              </label>
              <select class="form-select" id="editKategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Hotel">Hotel</option>
                <option value="Penginapan">Penginapan</option>
                <option value="RBNB">RBNB/Guest House</option>
                <option value="Resmi">Wisma Resmi</option>
                <option value="Kost">Kost/Homestay</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="editDeskripsi" class="form-label">
                <i class="fas fa-align-left me-2"></i>Deskripsi
              </label>
              <textarea class="form-control" id="editDeskripsi" name="deskripsi" rows="3" required></textarea>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="editAlamat" class="form-label">
                  <i class="fas fa-map-marker-alt me-2"></i>Alamat
                </label>
                <input type="text" class="form-control" id="editAlamat" name="alamat" required>
              </div>

              <div class="col-md-6 mb-3">
                <label for="editTelepon" class="form-label">
                  <i class="fas fa-phone me-2"></i>Nomor Telepon
                </label>
                <input type="tel" class="form-control" id="editTelepon" name="telepon" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="editHarga" class="form-label">
                  <i class="fas fa-dollar-sign me-2"></i>Harga Per Malam (Rp)
                </label>
                <input type="number" class="form-control" id="editHarga" name="harga_permalam" required>
              </div>

              <div class="col-md-6 mb-3">
                <label for="editKapasitas" class="form-label">
                  <i class="fas fa-bed me-2"></i>Kapasitas (Orang)
                </label>
                <input type="number" class="form-control" id="editKapasitas" name="kapasitas" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="editJarak" class="form-label">
                  <i class="fas fa-map-pin me-2"></i>Jarak ke Destinasi (km)
                </label>
                <input type="number" class="form-control" id="editJarak" name="jarak_km" step="0.1" required>
              </div>

              <div class="col-md-6 mb-3">
                <label for="editRating" class="form-label">
                  <i class="fas fa-star me-2"></i>Rating
                </label>
                <select class="form-select" id="editRating" name="rating">
                  <option value="">-- Pilih Rating --</option>
                  <option value="3">3 Bintang</option>
                  <option value="4">4 Bintang</option>
                  <option value="5">5 Bintang</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label for="editFoto" class="form-label">
                <i class="fas fa-image me-2"></i>Upload Foto (Opsional)
              </label>
              <input type="file" class="form-control" id="editFoto" name="foto" accept="image/*">
              <small class="text-muted">Format: JPG, PNG (Maksimal 5MB)</small>
            </div>

            <div class="mb-3">
              <label for="editWebsite" class="form-label">
                <i class="fas fa-globe me-2"></i>Website/Link Booking
              </label>
              <input type="url" class="form-control" id="editWebsite" name="website">
            </div>

            <div class="mb-3">
              <label for="editFasilitas" class="form-label">
                <i class="fas fa-list me-2"></i>Fasilitas (Pisahkan dengan koma)
              </label>
              <textarea class="form-control" id="editFasilitas" name="fasilitas" rows="2" placeholder="Contoh: WiFi, AC, Parkir, TV, Kolam Renang"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-accent" onclick="submitEditFasilitas()">
            <i class="fas fa-save me-2"></i>Simpan Perubahan
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Detail Fasilitas -->
  <div class="modal fade" id="detailFasilitasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailNama"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img id="detailGambar" src="" alt="" class="detail-img" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; margin-bottom: 1.5rem; border: 2px solid rgba(255, 255, 255, 0.2);">
          
          <div class="description-section">
            <h6 class="section-label">Deskripsi</h6>
            <p id="detailDeskripsi"></p>
          </div>

          <div class="info-grid">
            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-tag info-icon"></i>
                <h6 class="info-label">Kategori</h6>
              </div>
              <p class="info-value" id="detailKategori"></p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-map-marker-alt info-icon"></i>
                <h6 class="info-label">Alamat</h6>
              </div>
              <p class="info-value" id="detailAlamat"></p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-phone info-icon"></i>
                <h6 class="info-label">Telepon</h6>
              </div>
              <p class="info-value" id="detailTelepon"></p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-dollar-sign info-icon"></i>
                <h6 class="info-label">Harga Per Malam</h6>
              </div>
              <p class="info-value" id="detailHarga"></p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-bed info-icon"></i>
                <h6 class="info-label">Kapasitas</h6>
              </div>
              <p class="info-value" id="detailKapasitas"></p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-map-pin info-icon"></i>
                <h6 class="info-label">Jarak ke Destinasi</h6>
              </div>
              <p class="info-value" id="detailJarak"></p>
            </div>

            <div class="info-card">
              <div class="info-header">
                <i class="fas fa-star info-icon"></i>
                <h6 class="info-label">Rating</h6>
              </div>
              <p class="info-value" id="detailRating"></p>
            </div>
          </div>

          <div class="description-section">
            <h6 class="section-label">
              <i class="fas fa-check me-2"></i>Fasilitas
            </h6>
            <div id="detailFasilitas" class="d-flex flex-wrap gap-2"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Tutup</button>
          <a id="detailWebsite" href="#" target="_blank" class="btn btn-accent" style="display: none;">
            <i class="fas fa-external-link-alt me-2"></i>Kunjungi Website
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tambah Fasilitas -->
  <div class="modal fade" id="tambahFasilitasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fas fa-plus-circle me-2"></i>Tambah Fasilitas Penginapan/RBNB Terdekat
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="fasilitasForm" method="POST" enctype="multipart/form-data">
            <!-- Nama Fasilitas -->
            <div class="mb-3">
              <label for="namaFasilitas" class="form-label">
                <i class="fas fa-building me-2"></i>Nama Fasilitas
              </label>
              <input type="text" class="form-control" id="namaFasilitas" name="nama" required placeholder="Contoh: Hotel Wisata Jember">
              <small class="text-muted">Masukkan nama penginapan atau RBNB</small>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
              <label for="kategori" class="form-label">
                <i class="fas fa-tag me-2"></i>Kategori
              </label>
              <select class="form-select" id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Hotel">Hotel</option>
                <option value="Penginapan">Penginapan</option>
                <option value="RBNB">RBNB/Guest House</option>
                <option value="Resmi">Wisma Resmi</option>
                <option value="Kost">Kost/Homestay</option>
              </select>
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
              <label for="deskripsi" class="form-label">
                <i class="fas fa-align-left me-2"></i>Deskripsi
              </label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required placeholder="Deskripsi lengkap mengenai fasilitas penginapan..."></textarea>
            </div>

            <div class="row">
              <!-- Alamat -->
              <div class="col-md-6 mb-3">
                <label for="alamat" class="form-label">
                  <i class="fas fa-map-marker-alt me-2"></i>Alamat
                </label>
                <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Alamat lengkap">
              </div>

              <!-- Nomor Telepon -->
              <div class="col-md-6 mb-3">
                <label for="telepon" class="form-label">
                  <i class="fas fa-phone me-2"></i>Nomor Telepon
                </label>
                <input type="tel" class="form-control" id="telepon" name="telepon" required placeholder="Contoh: 0823-xxxx-xxxx">
              </div>
            </div>

            <div class="row">
              <!-- Harga Per Malam -->
              <div class="col-md-6 mb-3">
                <label for="harga" class="form-label">
                  <i class="fas fa-dollar-sign me-2"></i>Harga Per Malam (Rp)
                </label>
                <input type="number" class="form-control" id="harga" name="harga_permalam" required placeholder="Contoh: 250000">
              </div>

              <!-- Kapasitas -->
              <div class="col-md-6 mb-3">
                <label for="kapasitas" class="form-label">
                  <i class="fas fa-bed me-2"></i>Kapasitas (Orang)
                </label>
                <input type="number" class="form-control" id="kapasitas" name="kapasitas" required placeholder="Jumlah orang">
              </div>
            </div>

            <div class="row">
              <!-- Jarak ke Destinasi -->
              <div class="col-md-6 mb-3">
                <label for="jarak" class="form-label">
                  <i class="fas fa-map-pin me-2"></i>Jarak ke Destinasi (km)
                </label>
                <input type="number" class="form-control" id="jarak" name="jarak_km" step="0.1" required placeholder="Contoh: 5.5">
              </div>

              <!-- Rating -->
              <div class="col-md-6 mb-3">
                <label for="rating" class="form-label">
                  <i class="fas fa-star me-2"></i>Rating
                </label>
                <select class="form-select" id="rating" name="rating">
                  <option value="">-- Pilih Rating --</option>
                  <option value="3">3 Bintang</option>
                  <option value="4">4 Bintang</option>
                  <option value="5">5 Bintang</option>
                </select>
              </div>
            </div>

            <!-- Fasilitas Kamar -->
            <div class="mb-3">
              <label class="form-label">
                <i class="fas fa-check me-2"></i>Fasilitas Kamar
              </label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ac" name="fasilitas" value="AC">
                <label class="form-check-label" for="ac">AC</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="wifi" name="fasilitas" value="WiFi">
                <label class="form-check-label" for="wifi">WiFi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tv" name="fasilitas" value="TV">
                <label class="form-check-label" for="tv">TV</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="kamarMandi" name="fasilitas" value="Kamar Mandi Pribadi">
                <label class="form-check-label" for="kamarMandi">Kamar Mandi Pribadi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="parkir" name="fasilitas" value="Parkir Gratis">
                <label class="form-check-label" for="parkir">Parkir Gratis</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="makanan" name="fasilitas" value="Sarapan">
                <label class="form-check-label" for="makanan">Sarapan</label>
              </div>
            </div>

            <!-- Foto -->
            <div class="mb-3">
              <label for="foto" class="form-label">
                <i class="fas fa-image me-2"></i>Upload Foto
              </label>
              <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
              <small class="text-muted">Format: JPG, PNG (Maksimal 5MB)</small>
            </div>

            <!-- Website/Link -->
            <div class="mb-3">
              <label for="website" class="form-label">
                <i class="fas fa-globe me-2"></i>Website/Link Booking
              </label>
              <input type="url" class="form-control" id="website" name="website" placeholder="https://...">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-accent" onclick="submitFasilitasForm()">
            <i class="fas fa-save me-2"></i>Simpan Fasilitas
          </button>
        </div>
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

    /* Modal Form Styles */
    .modal-content {
      background: rgba(20, 20, 30, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 18px;
      border: 1px solid rgba(42, 157, 143, 0.2);
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.9);
    }

    .modal-header {
      border-bottom: 1px solid rgba(42, 157, 143, 0.15);
      padding: 1.8rem;
      background: linear-gradient(135deg, rgba(42, 157, 143, 0.08) 0%, rgba(38, 70, 83, 0.08) 100%);
    }

    .modal-title {
      color: var(--accent);
      font-weight: 700;
      font-size: 1.4rem;
    }

    .modal-body {
      padding: 2rem;
      max-height: 70vh;
      overflow-y: auto;
    }

    .form-label {
      color: var(--accent);
      font-weight: 600;
      margin-bottom: 0.6rem;
      font-size: 0.95rem;
    }

    .form-control, .form-select {
      background: rgba(42, 157, 143, 0.08);
      border: 1px solid rgba(42, 157, 143, 0.2);
      color: white;
      border-radius: 10px;
      padding: 0.7rem 1rem;
      transition: all 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
      background: rgba(42, 157, 143, 0.12);
      border-color: var(--accent);
      box-shadow: 0 0 0 0.2rem rgba(42, 157, 143, 0.3);
      color: white;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .form-check {
      margin-bottom: 0.6rem;
      padding-left: 0;
    }

    .form-check-input {
      background: rgba(42, 157, 143, 0.2);
      border: 1px solid rgba(42, 157, 143, 0.3);
      border-radius: 4px;
      width: 1.1em;
      height: 1.1em;
      margin-right: 0.6rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .form-check-input:checked {
      background: var(--accent);
      border-color: var(--accent);
    }

    .form-check-label {
      color: white;
      cursor: pointer;
      margin-top: 2px;
    }

    .modal-footer {
      border-top: 1px solid rgba(42, 157, 143, 0.15);
      padding: 1.5rem 1.8rem;
      background: rgba(42, 157, 143, 0.05);
    }

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

    /* Detail Modal Styles */
    .detail-img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 1.5rem;
      border: 2px solid rgba(255, 255, 255, 0.2);
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
      margin-bottom: 1.5rem;
      border: 1px solid rgba(42, 157, 143, 0.2);
    }

    .section-label {
      color: var(--accent);
      font-weight: 600;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    .text-muted {
      color: rgba(255, 255, 255, 0.6) !important;
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
    // Data fasilitas dari controller
    const dbFasilitas = window.dbFasilitas;
    function loadFasilitasDatabase() {
      const tbody = document.getElementById('tabelFasilitas');
      const noDataMsg = document.getElementById('noDataMessage');
      if (dbFasilitas && dbFasilitas.length > 0) {
        tbody.innerHTML = '';
        dbFasilitas.forEach((item, index) => {
          const row = document.createElement('tr');
          row.innerHTML = `
            <td>${index + 1}</td>
            <td><strong>${item.nama}</strong></td>
            <td><span class="badge bg-info">${item.kategori}</span></td>
            <td>${item.alamat ? item.alamat.substring(0, 30) + '...' : '-'}</td>
            <td>Rp ${new Intl.NumberFormat('id-ID').format(item.harga_permalam)}</td>
            <td><i class="fas fa-star text-warning"></i> ${item.rating || '4'}/5</td>
            <td>
              <button class="btn btn-sm btn-warning" onclick="openEditModal(${item.id})">
                <i class="fas fa-edit"></i>
              </button>
              <button class="btn btn-sm btn-danger" onclick="deleteFasilitas(${item.id})">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          `;
          tbody.appendChild(row);
        });
        noDataMsg.style.display = 'none';
      } else {
        noDataMsg.style.display = 'block';
        tbody.innerHTML = '';
      }
    }

    // Fungsi untuk membuka modal edit
    function openEditModal(id) {
      const item = dbFasilitas.find(f => f.id == id);
      
      if (!item) {
        alert('Data fasilitas tidak ditemukan');
        return;
      }
      
      fillEditForm(item);
    }

    function fillEditForm(item) {
      document.getElementById('editFasilitasId').value = item.id;
      document.getElementById('editNamaFasilitas').value = item.nama;
      document.getElementById('editKategori').value = item.kategori;
      document.getElementById('editDeskripsi').value = item.deskripsi;
      document.getElementById('editAlamat').value = item.alamat || '';
      document.getElementById('editTelepon').value = item.telepon || '';
      document.getElementById('editHarga').value = item.harga_permalam || '';
      document.getElementById('editKapasitas').value = item.kapasitas || '';
      document.getElementById('editJarak').value = item.jarak_km || '';
      document.getElementById('editRating').value = item.rating || '';
      document.getElementById('editWebsite').value = item.website || '';
      document.getElementById('editFasilitas').value = item.fasilitas || '';
      
      const kelolaModal = bootstrap.Modal.getInstance(document.getElementById('kelolaFasilitasModal'));
      if (kelolaModal) kelolaModal.hide();
      
      const editModal = new bootstrap.Modal(document.getElementById('editFasilitasModal'));
      editModal.show();
    }

    function submitEditFasilitas() {
      const form = document.getElementById('editFasilitasForm');
      const id = document.getElementById('editFasilitasId').value;
      const formData = new FormData(form);
      
      fetch(`/dashboard/fasilitas/update/${id}`, {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
        }
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert(data.message);
          form.reset();
          
          const editModal = bootstrap.Modal.getInstance(document.getElementById('editFasilitasModal'));
          if (editModal) editModal.hide();
          
          setTimeout(() => location.reload(), 500);
        } else {
          alert('Error: ' + (data.message || 'Tidak diketahui'));
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat update fasilitas');
      });
    }

    function deleteFasilitas(id) {
      if (confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')) {
        fetch(`/dashboard/fasilitas/delete/${id}`, {
          method: 'DELETE',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert(data.message);
            loadFasilitasDatabase();
          } else {
            alert('Error: ' + (data.message || 'Tidak diketahui'));
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat menghapus fasilitas');
        });
      }
    }

    // Tampilkan modal dan load data
    document.addEventListener('show.bs.modal', function(e) {
      if (e.target.id === 'kelolaFasilitasModal') {
        loadFasilitasDatabase();
      }
    });

    // Function untuk membuka detail fasilitas
    function openDetailModal(itemJson) {
      try {
        const item = JSON.parse(itemJson);
        
        // Set data ke modal
        document.getElementById('detailNama').textContent = item.nama;
        document.getElementById('detailGambar').src = item.gambar;
        document.getElementById('detailGambar').alt = item.nama;
        document.getElementById('detailDeskripsi').textContent = item.deskripsi;
        document.getElementById('detailKategori').textContent = item.kategori;
        document.getElementById('detailAlamat').textContent = item.alamat || 'Tidak tersedia';
        document.getElementById('detailTelepon').textContent = item.telepon || 'Tidak tersedia';
        document.getElementById('detailHarga').textContent = item.harga_permalam ? 'Rp ' + new Intl.NumberFormat('id-ID').format(item.harga_permalam) : item.harga || 'Tidak tersedia';
        document.getElementById('detailKapasitas').textContent = (item.kapasitas || '-') + ' orang';
        document.getElementById('detailJarak').textContent = (item.jarak_km || '-') + ' km';
        document.getElementById('detailRating').textContent = item.rating ? item.rating + '/5' : '4/5';
        
        // Set fasilitas badges
        const fasilitasContainer = document.getElementById('detailFasilitas');
        fasilitasContainer.innerHTML = '';
        
        if (item.fasilitas && Array.isArray(item.fasilitas) && item.fasilitas.length > 0) {
          item.fasilitas.forEach(fac => {
            if (fac && typeof fac === 'string') {
              const badge = document.createElement('span');
              badge.className = 'badge bg-primary';
              badge.style.backgroundColor = 'rgba(42, 157, 143, 0.7)';
              badge.style.fontSize = '0.85rem';
              badge.style.padding = '0.5rem 0.8rem';
              badge.textContent = fac.trim();
              fasilitasContainer.appendChild(badge);
            }
          });
        } else {
          fasilitasContainer.innerHTML = '<span class="text-muted">Tidak ada fasilitas yang terdaftar</span>';
        }
        
        // Set website button
        const websiteBtn = document.getElementById('detailWebsite');
        if (item.website) {
          websiteBtn.href = item.website;
          websiteBtn.style.display = 'block';
        } else {
          websiteBtn.style.display = 'none';
        }
        
        // Buka modal
        const modal = new bootstrap.Modal(document.getElementById('detailFasilitasModal'));
        modal.show();
      } catch (error) {
        console.error('Error opening detail modal:', error);
        alert('Terjadi kesalahan saat membuka detail fasilitas');
      }
    }

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

    // Function untuk submit form fasilitas
      window.submitFasilitasForm = function() {
        const form = document.getElementById('fasilitasForm');
        
        // Validasi form
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
          alert('Mohon lengkapi semua field yang diperlikan!');
          form.classList.add('was-validated');
          return;
        }
        
        // Ambil nilai dari form
        const nama = document.getElementById('namaFasilitas').value;
        const kategori = document.getElementById('kategori').value;
        const deskripsi = document.getElementById('deskripsi').value;
        const alamat = document.getElementById('alamat').value;
        const telepon = document.getElementById('telepon').value;
        const harga = document.getElementById('harga').value;
        const kapasitas = document.getElementById('kapasitas').value;
        const jarak = document.getElementById('jarak').value;
        
        // Validasi minimal
        if (!nama || !kategori || !deskripsi || !alamat || !telepon || !harga || !kapasitas || !jarak) {
          alert('Mohon lengkapi semua field yang diperlukan!');
          return;
        }
        
        // Ambil fasilitas yang dipilih
        const facilitiesCheckboxes = document.querySelectorAll('input[name="fasilitas"]:checked');
        const facilities = Array.from(facilitiesCheckboxes).map(cb => cb.value).join(', ');
        
        // Buat FormData untuk upload file
        const formData = new FormData(form);
        
        // Tambahkan CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';
        formData.append('_token', csrfToken);
        
        // Ubah checkbox menjadi array
        formData.delete('fasilitas');
        facilitiesCheckboxes.forEach(cb => {
          formData.append('fasilitas[]', cb.value);
        });
        
        // Submit ke server
        fetch('{{ route("fasilitas.store") }}', {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken,
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('Fasilitas berhasil ditambahkan!');
            form.reset();
            
            // Tutup modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('tambahFasilitasModal'));
            if (modal) {
              modal.hide();
            }
            
            // Reload halaman setelah 1 detik
            setTimeout(() => {
              location.reload();
            }, 1000);
          } else {
            alert('Terjadi kesalahan: ' + (data.message || 'Tidak diketahui'));
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat menyimpan fasilitas!');
        });
      };
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
  //window.dbFasilitas = @json($fasilitas);
</script>
</body>
</html>
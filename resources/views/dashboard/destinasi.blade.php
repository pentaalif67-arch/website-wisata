<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destinasi Wisata Jember</title>
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
      background: rgba(0, 0, 0, 0.1);
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

    /* Modal Styles - Glassmorphism Theme */
    .modal-content {
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
      color: white;
    }

    .modal-header {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      padding: 1.5rem 2rem;
    }

    .modal-title {
      color: var(--accent);
      font-weight: 700;
      font-size: 1.5rem;
    }

    .btn-close {
      filter: invert(1);
      opacity: 0.8;
    }

    .btn-close:hover {
      opacity: 1;
    }

    .modal-body {
      padding: 2rem;
    }

    .modal-footer {
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding: 1.5rem 2rem;
    }

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
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .info-card {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 1rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
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

    .description-section {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .section-label {
      color: var(--accent);
      font-weight: 600;
      margin-bottom: 0.8rem;
      font-size: 1.1rem;
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

    /* Pagination */
    .page-link {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
    }

    .page-link:hover {
      background: rgba(255, 255, 255, 0.2);
      color: var(--accent);
    }

    .page-item.active .page-link {
      background-color: var(--accent);
      border-color: var(--accent);
      color: var(--secondary);
    }

    /* Alert Notifications */
    .notification-container {
      position: fixed;
      top: 80px;
      right: 20px;
      z-index: 9999;
      max-width: 400px;
    }

    .alert-notification {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      color: white;
      animation: slideIn 0.3s ease forwards;
    }

    @keyframes slideIn {
      from {transform: translateX(100%); opacity: 0;}
      to {transform: translateX(0); opacity: 1;}
    }

    .btn-delete {
      color: #dc3545;
      border-color: #dc3545;
    }

    .btn-delete:hover {
      background-color: #dc3545;
      color: white;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .welcome-text {
        font-size: 2rem;
      }
      
      .search-box {
        padding: 1rem;
      }
      
      .detail-img {
        height: 200px;
      }
      
      .modal-header,
      .modal-body,
      .modal-footer {
        padding: 1rem;
      }
      
      .info-grid {
        grid-template-columns: 1fr;
      }

      .notification-container {
        left: 10px;
        right: 10px;
        max-width: 100%;
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

  <!-- Notifications -->
  <div class="notification-container">
    @if(session('success'))
    <div class="alert alert-success alert-notification mb-3" role="alert">
      <div class="d-flex align-items-center">
        <i class="fas fa-check-circle me-2"></i>
        <div>{{ session('success') }}</div>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
      </div>
    </div>
    @endif
    
    @if(session('error'))
    <div class="alert alert-danger alert-notification mb-3" role="alert">
      <div class="d-flex align-items-center">
        <i class="fas fa-exclamation-circle me-2"></i>
        <div>{{ session('error') }}</div>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
      </div>
    </div>
    @endif
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
      <div class="dashboard-header fade-in text-center">
        <h1 class="welcome-text">Destinasi Wisata di Jember 🌅</h1>
        <p class="subtitle">Temukan keindahan alam, budaya, dan pesona unik setiap tempat di Jember</p>
      </div>

      <!-- Search and Filter -->
      <div class="glass-card search-box fade-in">
        <div class="row">
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-text bg-transparent border-end-0">
                <i class="fas fa-search text-white"></i>
              </span>
              <input type="text" class="form-control border-start-0" placeholder="Cari destinasi wisata..." id="searchInput">
            </div>
          </div>
          <div class="col-md-4">
            <select class="form-select" id="categoryFilter">
              <option value="">Semua Kategori</option>
              <option value="Pantai">Pantai</option>
              <option value="Pegunungan">Pegunungan</option>
              <option value="Air Terjun">Air Terjun</option>
              <option value="Perkebunan">Perkebunan</option>
              <option value="Wisata Keluarga">Wisata Keluarga</option>
              <option value="Budaya">Budaya</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Header with Add Button -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="section-title fade-in">Daftar Destinasi</h3>
        @auth
          @if(Auth::user()->isAdmin())
            <a href="{{ route('destinasi.create') }}" class="btn btn-accent fade-in">
              <i class="fas fa-plus-circle me-2"></i>Tambah Destinasi
            </a>
          @else
            <a href="{{ route('pemesanan-tiket.index') }}" class="btn btn-accent fade-in">
              <i class="fas fa-ticket-alt me-2"></i>Pesanan Saya
            </a>
          @endif
        @endauth
      </div>

      <!-- Daftar Destinasi -->
      <div class="row" id="destinasiContainer">
        @forelse($destinasis as $destinasi)
          <div class="col-md-4 mb-4 fade-in destinasi-item" 
               data-category="{{ $destinasi->kategori }}"
               data-name="{{ strtolower($destinasi->nama) }}"
               data-description="{{ strtolower($destinasi->deskripsi) }}">
            <div class="glass-card h-100">
              @if($destinasi->gambar)
                <img src="{{ asset('storage/' . $destinasi->gambar) }}" 
                     alt="{{ $destinasi->nama }}" 
                     class="destinasi-img" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 16px 16px 0 0;"
                     onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="destinasi-img" style="width: 100%; height: 200px; background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); display: none; align-items: center; justify-content: center; border-radius: 16px 16px 0 0;">
                  <i class="fas fa-image" style="font-size: 3rem; color: rgba(255,255,255,0.5);"></i>
                </div>
              @else
                <div class="destinasi-img" style="width: 100%; height: 200px; background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); display: flex; align-items: center; justify-content: center; border-radius: 16px 16px 0 0;">
                  <i class="fas fa-image" style="font-size: 3rem; color: rgba(255,255,255,0.5);"></i>
                </div>
              @endif
              
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <h5 class="card-title m-0">{{ $destinasi->nama }}</h5>
                  <span class="badge bg-accent" style="background-color: var(--accent); color: var(--secondary);">
                    {{ $destinasi->kategori }}
                  </span>
                </div>
                
                <p class="card-text">{{ \Illuminate\Support\Str::limit($destinasi->deskripsi, 100) }}</p>
                
               <div class="d-flex justify-content-between align-items-center">
  <div>
    <button class="btn btn-outline-accent btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $destinasi->id }}">
      <i class="fas fa-eye me-1"></i>Detail
    </button>
    @auth
      @if(Auth::user()->isAdmin())
        <a href="{{ route('destinasi.edit', $destinasi->id) }}" class="btn btn-outline-primary btn-sm ms-2">
          <i class="fas fa-edit me-1"></i>Edit
        </a>
      @else
        <a href="{{ route('pemesanan-tiket.create', $destinasi->id) }}" class="btn btn-outline-success btn-sm ms-2">
          <i class="fas fa-ticket-alt me-1"></i>Pesan Tiket
        </a>
      @endif
    @endauth
  </div>
                  
                  <div class="d-flex align-items-center gap-2">
                    <div class="rating me-2">
                      <i class="fas fa-star text-warning"></i>
                      <span class="ms-1">({{ $destinasi->rating ?? '4.5' }})</span>
                    </div>
                    
                    @auth
                      @if(Auth::user()->isAdmin())
                        <!-- Tombol Hapus - Hanya untuk Admin -->
                        <form action="{{ route('destinasi.destroy', $destinasi->id) }}" method="POST" class="d-inline delete-form">
                          @csrf
                          @method('DELETE')
                          <button type="submit" 
                                  class="btn btn-outline-danger btn-sm delete-btn" 
                                  onclick="return confirmDelete('{{ addslashes($destinasi->nama) }}')"
                                  data-bs-toggle="tooltip" 
                                  data-bs-title="Hapus destinasi"
                                  data-bs-placement="top">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      @endif
                    @endauth
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Detail per Destinasi -->
          <div class="modal fade" id="detailModal-{{ $destinasi->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">{{ $destinasi->nama }}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  @if($destinasi->gambar)
                    <img src="{{ asset('storage/' . $destinasi->gambar) }}" class="detail-img" alt="{{ $destinasi->nama }}" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="detail-img" style="width: 100%; height: 400px; background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); display: none; align-items: center; justify-content: center;">
                      <i class="fas fa-image" style="font-size: 4rem; color: rgba(255,255,255,0.5);"></i>
                    </div>
                  @else
                    <div class="detail-img" style="width: 100%; height: 400px; background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); display: flex; align-items: center; justify-content: center;">
                      <i class="fas fa-image" style="font-size: 4rem; color: rgba(255,255,255,0.5);"></i>
                    </div>
                  @endif
                  
                  <div class="description-section">
                    <h6 class="section-label">Deskripsi</h6>
                    <p>{{ $destinasi->deskripsi_lengkap ?? $destinasi->deskripsi }}</p>
                  </div>

                  <div class="info-grid">
                    <div class="info-card">
                      <div class="info-header">
                        <i class="fas fa-map-marker-alt info-icon"></i>
                        <h6 class="info-label">Lokasi</h6>
                      </div>
                      <p class="info-value">{{ $destinasi->lokasi ?? 'Tidak tersedia' }}</p>
                    </div>

                    <div class="info-card">
                      <div class="info-header">
                        <i class="fas fa-clock info-icon"></i>
                        <h6 class="info-label">Jam Operasional</h6>
                      </div>
                      <p class="info-value">{{ $destinasi->jam_buka ?? '00:00' }} - {{ $destinasi->jam_tutup ?? '24:00' }}</p>
                    </div>

                    <div class="info-card">
                      <div class="info-header">
                        <i class="fas fa-ticket-alt info-icon"></i>
                        <h6 class="info-label">Harga Tiket</h6>
                      </div>
                      <p class="info-value">Rp {{ number_format($destinasi->harga_tiket ?? 0, 0, ',', '.') }}</p>
                    </div>

                    <div class="info-card">
                      <div class="info-header">
                        <i class="fas fa-star info-icon"></i>
                        <h6 class="info-label">Rating</h6>
                      </div>
                      <p class="info-value">{{ $destinasi->rating ?? '4.5' }}/5 ({{ $destinasi->jumlah_ulasan ?? 0 }} review)</p>
                    </div>

                    @if($destinasi->kontak)
                    <div class="info-card">
                      <div class="info-header">
                        <i class="fas fa-phone info-icon"></i>
                        <h6 class="info-label">Kontak</h6>
                      </div>
                      <p class="info-value">{{ $destinasi->kontak }}</p>
                    </div>
                    @endif

                    <div class="info-card">
                      <div class="info-header">
                        <i class="fas fa-swimmer info-icon"></i>
                        <h6 class="info-label">Kategori</h6>
                      </div>
                      <p class="info-value">{{ $destinasi->kategori ?? 'Umum' }}</p>
                    </div>
                  </div>

                  @if($destinasi->maps_link)
                  <div class="mt-3">
                    <a href="{{ $destinasi->maps_link }}" target="_blank" class="btn btn-outline-accent btn-sm">
                      <i class="fas fa-map-marked-alt me-1"></i>Lihat di Google Maps
                    </a>
                  </div>
                  @endif
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-accent" data-bs-dismiss="modal">Tutup</button>
                  @auth
                    @if(Auth::user()->isPelanggan())
                      <a href="{{ route('pemesanan-tiket.create', $destinasi->id) }}" class="btn btn-accent">
                        <i class="fas fa-ticket-alt me-1"></i>Pesan Tiket
                      </a>
                    @endif
                  @endauth
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <div class="glass-card p-4 text-center">
              <i class="fas fa-map-marked-alt fa-3x mb-3" style="color: var(--accent); opacity: 0.7;"></i>
              <h5 class="mb-2">Belum ada destinasi yang ditambahkan</h5>
              <p class="mb-3 opacity-75">Mulai dengan menambahkan destinasi wisata pertama Anda</p>
              @auth
                @if(Auth::user()->isAdmin())
                  <a href="{{ route('destinasi.create') }}" class="btn btn-accent">
                    <i class="fas fa-plus-circle me-2"></i>Tambah Destinasi Pertama
                  </a>
                @endif
              @endauth
            </div>
          </div>
        @endforelse
      </div>

      <!-- Pagination -->
      @if($destinasis->hasPages())
      <nav aria-label="Page navigation" class="mt-5 fade-in">
        {{ $destinasis->links('pagination::bootstrap-5') }}
      </nav>
      @endif
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      &copy; 2025 Wisata Jember. Semua Hak Dilindungi. | 
      <span class="opacity-75">Total Destinasi: {{ $destinasis->total() }}</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Fungsi konfirmasi hapus
    function confirmDelete(destinasiName) {
      return confirm(`Apakah Anda yakin ingin menghapus destinasi "${destinasiName}"?`);
    }

    // Inisialisasi tooltip Bootstrap
    document.addEventListener('DOMContentLoaded', function() {
      // Tooltip untuk tombol hapus
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
      
      // Auto-hide alert setelah 5 detik
      const alerts = document.querySelectorAll('.alert');
      alerts.forEach(alert => {
        setTimeout(() => {
          if (alert && alert.parentNode) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          }
        }, 5000);
      });

      // Search functionality
      const searchInput = document.getElementById('searchInput');
      const categoryFilter = document.getElementById('categoryFilter');
      const destinasiItems = document.querySelectorAll('.destinasi-item');
      
      function filterDestinasi() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;
        
        destinasiItems.forEach(item => {
          const name = item.getAttribute('data-name');
          const description = item.getAttribute('data-description');
          const category = item.getAttribute('data-category');
          
          const matchesSearch = name.includes(searchTerm) || description.includes(searchTerm);
          const matchesCategory = !selectedCategory || category === selectedCategory;
          
          if (matchesSearch && matchesCategory) {
            item.style.display = 'block';
            item.classList.add('fade-in');
          } else {
            item.style.display = 'none';
            item.classList.remove('fade-in');
          }
        });
      }
      
      searchInput.addEventListener('input', filterDestinasi);
      categoryFilter.addEventListener('change', filterDestinasi);

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

      // Add click event for Pesan Tiket buttons
      const pesanTiketButtons = document.querySelectorAll('.pesan-tiket-btn');
      pesanTiketButtons.forEach(button => {
        button.addEventListener('click', function() {
          const destinasiName = this.getAttribute('data-destinasi');
          alert(`Fitur pemesanan tiket untuk "${destinasiName}" akan segera tersedia!`);
        });
      });

      // Smooth scroll untuk notifikasi
      const notifications = document.querySelectorAll('.alert-notification');
      notifications.forEach(notification => {
        notification.addEventListener('click', function() {
          this.style.opacity = '0';
          setTimeout(() => {
            if (this.parentNode) {
              this.parentNode.removeChild(this);
            }
          }, 300);
        });
      });
    });

    // Handle form submission dengan loading state
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
      form.addEventListener('submit', function(e) {
        const button = this.querySelector('.delete-btn');
        if (button) {
          button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
          button.disabled = true;
          button.classList.add('disabled');
        }
      });
    });
  </script>

</body>
</html>
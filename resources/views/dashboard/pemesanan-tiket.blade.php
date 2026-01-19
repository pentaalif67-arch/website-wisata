<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket - Wisata Jember</title>
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

    .main-content {
      padding-top: 100px;
      min-height: calc(100vh - 80px);
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: var(--card-shadow);
      transition: all 0.3s ease;
    }

    .glass-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--hover-shadow);
    }

    .section-title {
      font-weight: 600;
      margin-bottom: 1.5rem;
      color: var(--accent);
    }

    .status-badge {
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .status-pending {
      background: rgba(255, 193, 7, 0.2);
      color: #ffc107;
    }

    .status-confirmed {
      background: rgba(40, 167, 69, 0.2);
      color: #28a745;
    }

    .status-cancelled {
      background: rgba(220, 53, 69, 0.2);
      color: #dc3545;
    }

    .btn-accent {
      background: var(--accent);
      color: var(--secondary);
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-accent:hover {
      background: #d4af5a;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(233, 196, 106, 0.4);
    }

    .btn-outline-accent {
      color: var(--accent);
      border-color: var(--accent);
    }

    .btn-outline-accent:hover {
      background-color: var(--accent);
      color: var(--secondary);
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
          <li class="nav-item"><a class="nav-link active" href="/dashboard/pemesanan-tiket">Pesanan Saya</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/fasilitas">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="/dashboard/kontak">Kontak</a></li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              <i class="fas fa-user me-1"></i>{{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" style="background: rgba(0, 0, 0, 0.9); border: 1px solid rgba(255, 255, 255, 0.2);">
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
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="section-title"><i class="fas fa-ticket-alt me-2"></i>Pesanan Tiket Saya</h2>
        <a href="{{ route('destinasi.index') }}" class="btn btn-accent">
          <i class="fas fa-plus-circle me-2"></i>Pesan Tiket Baru
        </a>
      </div>

      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif

      @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif

      @forelse($pemesanans as $pemesanan)
        <div class="glass-card mb-4 p-4">
          <div class="row align-items-center">
            <div class="col-md-2">
              @if($pemesanan->destinasi_gambar)
                <img src="{{ asset('storage/' . $pemesanan->destinasi_gambar) }}" 
                     alt="{{ $pemesanan->destinasi_nama }}" 
                     class="img-fluid rounded"
                     style="height: 120px; width: 100%; object-fit: cover;"
                     onerror="this.style.display='none';">
              @endif
            </div>
            <div class="col-md-6">
              <h5 class="mb-2">{{ $pemesanan->destinasi_nama }}</h5>
              <p class="mb-1"><i class="fas fa-ticket-alt me-2"></i>Kode: <strong>{{ $pemesanan->kode_pemesanan }}</strong></p>
              <p class="mb-1"><i class="fas fa-calendar me-2"></i>Tanggal Kunjungan: <strong>{{ \Carbon\Carbon::parse($pemesanan->tanggal_kunjungan)->format('d M Y') }}</strong></p>
              <p class="mb-1"><i class="fas fa-users me-2"></i>Jumlah Tiket: <strong>{{ $pemesanan->jumlah_tiket }}</strong></p>
              <p class="mb-0"><i class="fas fa-money-bill-wave me-2"></i>Total: <strong>Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</strong></p>
            </div>
            <div class="col-md-2 text-center">
              @if($pemesanan->status === 'pending')
                <span class="status-badge status-pending">Pending</span>
              @elseif($pemesanan->status === 'confirmed')
                <span class="status-badge status-confirmed">Confirmed</span>
              @else
                <span class="status-badge status-cancelled">Cancelled</span>
              @endif
            </div>
            <div class="col-md-2 text-end">
              <a href="{{ route('pemesanan-tiket.show', $pemesanan->id) }}" class="btn btn-outline-accent btn-sm mb-2">
                <i class="fas fa-eye me-1"></i>Detail
              </a>
              @if($pemesanan->status === 'pending')
                <form action="{{ route('pemesanan-tiket.cancel', $pemesanan->id) }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin membatalkan pemesanan ini?')">
                    <i class="fas fa-times me-1"></i>Batal
                  </button>
                </form>
              @endif
            </div>
          </div>
        </div>
      @empty
        <div class="glass-card p-5 text-center">
          <i class="fas fa-ticket-alt fa-4x mb-3" style="color: var(--accent); opacity: 0.7;"></i>
          <h4 class="mb-3">Belum Ada Pemesanan</h4>
          <p class="mb-4 opacity-75">Mulai dengan memesan tiket untuk destinasi wisata favorit Anda</p>
          <a href="{{ route('destinasi.index') }}" class="btn btn-accent">
            <i class="fas fa-search me-2"></i>Cari Destinasi
          </a>
        </div>
      @endforelse
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

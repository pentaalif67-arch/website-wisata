<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pemesanan - {{ $pemesanan->kode_pemesanan }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #2a9d8f;
      --secondary: #264653;
      --accent: #e9c46a;
      --card-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
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
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--accent) !important;
    }

    .nav-link {
      color: white !important;
    }

    .main-content {
      padding-top: 100px;
      padding-bottom: 50px;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: var(--card-shadow);
      padding: 2rem;
    }

    .info-item {
      padding: 1rem;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    .status-badge {
      padding: 0.5rem 1rem;
      border-radius: 20px;
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
    }

    .btn-outline-accent {
      color: var(--accent);
      border-color: var(--accent);
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
          <li class="nav-item"><a class="nav-link" href="/dashboard/pemesanan-tiket">Pesanan Saya</a></li>
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
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="glass-card">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h3><i class="fas fa-ticket-alt me-2"></i>Detail Pemesanan</h3>
              @if($pemesanan->status === 'pending')
                <span class="status-badge status-pending">Pending</span>
              @elseif($pemesanan->status === 'confirmed')
                <span class="status-badge status-confirmed">Confirmed</span>
              @else
                <span class="status-badge status-cancelled">Cancelled</span>
              @endif
            </div>

            <div class="info-item">
              <h5 class="mb-3">{{ $pemesanan->nama }}</h5>
              @if($pemesanan->gambar)
                <img src="{{ asset('storage/' . $pemesanan->gambar) }}" 
                     alt="{{ $pemesanan->nama }}" 
                     class="img-fluid rounded mb-3"
                     style="max-height: 300px; width: 100%; object-fit: cover;"
                     onerror="this.style.display='none';">
              @endif
              <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>{{ $pemesanan->lokasi }}</p>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="info-item">
                  <h6 class="text-accent mb-2"><i class="fas fa-ticket-alt me-2"></i>Kode Pemesanan</h6>
                  <p class="mb-0 fs-5"><strong>{{ $pemesanan->kode_pemesanan }}</strong></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-item">
                  <h6 class="text-accent mb-2"><i class="fas fa-calendar me-2"></i>Tanggal Kunjungan</h6>
                  <p class="mb-0 fs-5"><strong>{{ \Carbon\Carbon::parse($pemesanan->tanggal_kunjungan)->format('d M Y') }}</strong></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="info-item">
                  <h6 class="text-accent mb-2"><i class="fas fa-users me-2"></i>Jumlah Tiket</h6>
                  <p class="mb-0 fs-5"><strong>{{ $pemesanan->jumlah_tiket }} tiket</strong></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-item">
                  <h6 class="text-accent mb-2"><i class="fas fa-money-bill-wave me-2"></i>Total Harga</h6>
                  <p class="mb-0 fs-5"><strong style="color: var(--accent);">Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</strong></p>
                </div>
              </div>
            </div>

            <div class="info-item">
              <h6 class="text-accent mb-3">Informasi Pemesan</h6>
              <p class="mb-2"><i class="fas fa-user me-2"></i><strong>Nama:</strong> {{ $pemesanan->nama_pemesan }}</p>
              <p class="mb-2"><i class="fas fa-envelope me-2"></i><strong>Email:</strong> {{ $pemesanan->email_pemesan }}</p>
              @if($pemesanan->no_telepon)
                <p class="mb-0"><i class="fas fa-phone me-2"></i><strong>Telepon:</strong> {{ $pemesanan->no_telepon }}</p>
              @endif
            </div>

            @if($pemesanan->catatan)
              <div class="info-item">
                <h6 class="text-accent mb-2"><i class="fas fa-sticky-note me-2"></i>Catatan</h6>
                <p class="mb-0">{{ $pemesanan->catatan }}</p>
              </div>
            @endif

            <div class="info-item">
              <h6 class="text-accent mb-2"><i class="fas fa-clock me-2"></i>Waktu Pemesanan</h6>
              <p class="mb-0">{{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d M Y H:i') }}</p>
            </div>

            <div class="d-flex gap-2 mt-4">
              <a href="{{ route('pemesanan-tiket.index') }}" class="btn btn-outline-accent">
                <i class="fas fa-arrow-left me-2"></i>Kembali
              </a>
              @if($pemesanan->status === 'pending')
                <form action="{{ route('pemesanan-tiket.cancel', $pemesanan->id) }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin membatalkan pemesanan ini?')">
                    <i class="fas fa-times me-2"></i>Batalkan Pemesanan
                  </button>
                </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

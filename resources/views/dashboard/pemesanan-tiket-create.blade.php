<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Tiket - {{ $destinasi->nama }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #2a9d8f;
      --secondary: #264653;
      --accent: #e9c46a;
      --danger: #e76f51;
      --gradient: linear-gradient(135deg, #2a9d8f 0%, #264653 100%);
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
      box-shadow: var(--card-shadow);
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--accent) !important;
    }

    .nav-link {
      color: white !important;
      margin-right: 15px;
    }

    .nav-link:hover {
      color: var(--accent) !important;
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

    .form-control, .form-select {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
    }

    .form-control:focus, .form-select:focus {
      background: rgba(255, 255, 255, 0.15);
      border-color: var(--accent);
      color: white;
      box-shadow: 0 0 0 0.2rem rgba(233, 196, 106, 0.25);
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .form-label {
      color: var(--accent);
      font-weight: 600;
    }

    .btn-accent {
      background: var(--accent);
      color: var(--secondary);
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 10px;
      font-weight: 600;
    }

    .btn-accent:hover {
      background: #d4af5a;
    }

    .btn-outline-accent {
      color: var(--accent);
      border-color: var(--accent);
    }

    .btn-outline-accent:hover {
      background-color: var(--accent);
      color: var(--secondary);
    }

    .destinasi-info {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 2rem;
    }

    .price-display {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--accent);
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
            <h3 class="mb-4"><i class="fas fa-ticket-alt me-2"></i>Pesan Tiket</h3>

            <!-- Destinasi Info -->
            <div class="destinasi-info">
              <div class="row align-items-center">
                <div class="col-md-3">
                  @if($destinasi->gambar)
                    <img src="{{ asset('storage/' . $destinasi->gambar) }}" 
                         alt="{{ $destinasi->nama }}" 
                         class="img-fluid rounded"
                         style="height: 100px; width: 100%; object-fit: cover;"
                         onerror="this.style.display='none';">
                  @endif
                </div>
                <div class="col-md-9">
                  <h5 class="mb-2">{{ $destinasi->nama }}</h5>
                  <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>{{ $destinasi->lokasi }}</p>
                  <p class="mb-0 price-display">
                    <i class="fas fa-tag me-2"></i>Rp {{ number_format($destinasi->harga_tiket, 0, ',', '.') }} / tiket
                  </p>
                </div>
              </div>
            </div>

            @if($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form action="{{ route('pemesanan-tiket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="destinasi_id" value="{{ $destinasi->id }}">

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan *</label>
                  <input type="date" 
                         class="form-control" 
                         id="tanggal_kunjungan" 
                         name="tanggal_kunjungan" 
                         value="{{ old('tanggal_kunjungan') }}"
                         min="{{ date('Y-m-d') }}"
                         required>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="jumlah_tiket" class="form-label">Jumlah Tiket *</label>
                  <input type="number" 
                         class="form-control" 
                         id="jumlah_tiket" 
                         name="jumlah_tiket" 
                         value="{{ old('jumlah_tiket', 1) }}"
                         min="1" 
                         max="20" 
                         required>
                  <small class="text-white-50">Maksimal 20 tiket per pemesanan</small>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nama_pemesan" class="form-label">Nama Pemesan *</label>
                  <input type="text" 
                         class="form-control" 
                         id="nama_pemesan" 
                         name="nama_pemesan" 
                         value="{{ old('nama_pemesan', Auth::user()->name) }}"
                         required>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="email_pemesan" class="form-label">Email Pemesan *</label>
                  <input type="email" 
                         class="form-control" 
                         id="email_pemesan" 
                         name="email_pemesan" 
                         value="{{ old('email_pemesan', Auth::user()->email) }}"
                         required>
                </div>
              </div>

              <div class="mb-3">
                <label for="no_telepon" class="form-label">Nomor Telepon</label>
                <input type="tel" 
                       class="form-control" 
                       id="no_telepon" 
                       name="no_telepon" 
                       value="{{ old('no_telepon') }}"
                       placeholder="+62...">
              </div>

              <div class="mb-4">
                <label for="catatan" class="form-label">Catatan (Opsional)</label>
                <textarea class="form-control" 
                          id="catatan" 
                          name="catatan" 
                          rows="3"
                          placeholder="Catatan khusus untuk pemesanan...">{{ old('catatan') }}</textarea>
              </div>

              <!-- Total Harga -->
              <div class="mb-4 p-3" style="background: rgba(233, 196, 106, 0.2); border-radius: 10px;">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fs-5">Total Pembayaran:</span>
                  <span class="price-display" id="total_harga">Rp {{ number_format($destinasi->harga_tiket, 0, ',', '.') }}</span>
                </div>
              </div>

              <div class="d-flex gap-2">
                <a href="{{ route('destinasi.index') }}" class="btn btn-outline-accent">
                  <i class="fas fa-arrow-left me-2"></i>Kembali
                </a>
                <button type="submit" class="btn btn-accent">
                  <i class="fas fa-check me-2"></i>Pesan Tiket
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Calculate total price
    const hargaTiket = "{{ $destinasi->harga_tiket }}";
    // Jika ingin memastikan tipe number:
    // const hargaTiket = Number("{{ $destinasi->harga_tiket }}");
    const jumlahTiketInput = document.getElementById('jumlah_tiket');
    const totalHargaDisplay = document.getElementById('total_harga');

    function updateTotal() {
      const jumlahTiket = parseInt(jumlahTiketInput.value) || 1;
      const total = hargaTiket * jumlahTiket;
      totalHargaDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID');
    }

    jumlahTiketInput.addEventListener('input', updateTotal);
  </script>
</body>
</html>

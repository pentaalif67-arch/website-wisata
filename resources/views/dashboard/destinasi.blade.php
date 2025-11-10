<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destinasi Wisata Jember</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                  url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2100&q=80') center/cover fixed;
      color: white;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
    }

    .navbar {
      background: rgba(0,0,0,0.7);
      backdrop-filter: blur(10px);
    }

    .nav-link {
      color: #fff !important;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #f4a261 !important;
    }

    .hero {
      text-align: center;
      padding: 6rem 1rem 3rem;
    }

    .hero h1 {
      font-weight: 700;
      color: #e9c46a;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
    }

    .hero p {
      color: #f8f9fa;
      opacity: 0.85;
    }

    .destinasi-card {
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 16px;
      overflow: hidden;
      transition: transform 0.3s ease;
      backdrop-filter: blur(8px);
    }

    .destinasi-card:hover {
      transform: translateY(-8px);
      background: rgba(255,255,255,0.15);
    }

    .destinasi-img {
      height: 200px;
      background-size: cover;
      background-position: center;
    }

    .card-body {
      padding: 1rem;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background: rgba(0,0,0,0.5);
      margin-top: 3rem;
      border-top: 1px solid rgba(255,255,255,0.2);
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand text-light fw-bold" href="/dashboard">🌴 Wisata Jember</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/dashboard">Beranda</a></li>
          <li class="nav-item"><a class="nav-link active text-warning" href="/destinasi">Destinasi</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <h1>Destinasi Wisata di Jember</h1>
    <p>Temukan keindahan alam, budaya, dan pesona unik setiap tempat 🌅</p>
  </section>

  <!-- Daftar Destinasi -->
  <div class="container pb-5">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="destinasi-card">
          <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1493558103817-58b2924bce98?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="card-body">
            <h5 class="fw-bold">Pantai Papuma</h5>
            <p>Keindahan pantai berpasir putih dengan batu karang besar yang memukau mata.</p>
            <button class="btn btn-outline-warning btn-sm">Lihat Detail</button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="destinasi-card">
          <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1519817650390-64a93db511aa?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="card-body">
            <h5 class="fw-bold">Puncak Rembangan</h5>
            <p>Pemandangan indah dari atas bukit dan udara yang sejuk cocok untuk bersantai.</p>
            <button class="btn btn-outline-warning btn-sm">Lihat Detail</button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="destinasi-card">
          <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1533055640609-24b498dfd1b1?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="card-body">
            <h5 class="fw-bold">Air Terjun Tancak</h5>
            <p>Salah satu air terjun tertinggi di Jawa Timur dengan suasana alami dan segar.</p>
            <button class="btn btn-outline-warning btn-sm">Lihat Detail</button>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4 mb-4">
        <div class="destinasi-card">
          <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="card-body">
            <h5 class="fw-bold">Teluk Love</h5>
            <p>Teluk dengan bentuk unik menyerupai hati, populer untuk foto romantis.</p>
            <button class="btn btn-outline-warning btn-sm">Lihat Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <small>© 2025 Wisata Jember. Semua Hak Dilindungi.</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@extends('dashboard.layout')

@section('content')
<!-- Hero Section -->
<div class="hero-section">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-subtitle">DAN BERIKAN MASUKAN KEPADA KAMI</p>
    <h1 class="hero-title">Kepuasan Anda Adalah Semangat Kami</h1>
    <a href="#" class="hero-btn">Kirim Saran</a>
  </div>
  <div class="hero-indicators">
    <span class="indicator active"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
  </div>
</div>

<div class="container">
  <!-- Statistik -->
  <div class="row text-center mt-5 mb-5">
    <div class="col-md-3 mb-4 fade-in">
      <div class="glass-card stat-card">
        <div class="card-icon"><i class="fas fa-map-marked-alt"></i></div>
        <div class="stat-number">24</div>
        <div class="stat-label">Total Destinasi</div>
        <small class="text-success">
          <i class="fas fa-arrow-up me-1"></i>
          Naik
        </small>
      </div>
    </div>
    <div class="col-md-3 mb-4 fade-in">
      <div class="glass-card stat-card">
        <div class="card-icon"><i class="fas fa-users"></i></div>
        <div class="stat-number">1.248</div>
        <div class="stat-label">Pengunjung Terdaftar</div>
        <small class="text-success">
          <i class="fas fa-arrow-up me-1"></i>
          Naik
        </small>
      </div>
    </div>
    <div class="col-md-3 mb-4 fade-in">
      <div class="glass-card stat-card">
        <div class="card-icon"><i class="fas fa-ticket-alt"></i></div>
        <div class="stat-number">893</div>
        <div class="stat-label">Tiket Terjual</div>
        <small class="text-danger">
          <i class="fas fa-arrow-down me-1"></i>
          Turun
        </small>
      </div>
    </div>
    <div class="col-md-3 mb-4 fade-in">
      <div class="glass-card stat-card">
        <div class="card-icon"><i class="fas fa-hotel"></i></div>
        <div class="stat-number">12</div>
        <div class="stat-label">Fasilitas Tersedia</div>
        <small class="text-success">
          <i class="fas fa-arrow-up me-1"></i>
          Stabil
        </small>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <!-- Destinasi Populer -->
    <div class="col-md-8 mb-4">
      <h3 class="section-title fade-in">Destinasi Populer</h3>
      <div class="row">
        <!-- Pantai Papuma -->
        <div class="col-md-6 mb-3 fade-in">
          <div class="glass-card h-100">
            <div class="destinasi-img" style="background-image: url('https://wisatakita.com/pariwisata/532/800-Pantai-Papuma.jpeg');"></div>
            <div class="card-body">
              <h5 class="card-title">Pantai Papuma</h5>
              <p class="card-text">Jember, Jawa Timur</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="rating">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star-half-alt text-warning"></i>
                  <span class="ms-1">(4.5)</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pantai Bandealit -->
        <div class="col-md-6 mb-3 fade-in">
          <div class="glass-card h-100">
            <div class="destinasi-img" style="background-image: url('https://backpackerjakarta.com/wp-content/uploads/2016/11/Pesona-Wisata-Pantai-Bandealit-Jember.jpg');"></div>
            <div class="card-body">
              <h5 class="card-title">Pantai Bandealit</h5>
              <p class="card-text">Jember, Jawa Timur</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="rating">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="far fa-star text-warning"></i>
                  <span class="ms-1">(4.2)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Aktivitas Terbaru -->
    <div class="col-md-4 mb-4">
      <h3 class="section-title fade-in">Aktivitas Terbaru</h3>
      <div class="glass-card">
        <div class="card-body">
          <div class="activity-item">
            <div class="activity-icon">
              <i class="fas fa-ticket-alt"></i>
            </div>
            <div class="activity-content">
              <h6 class="activity-title">Tiket baru terjual</h6>
              <p class="activity-time">5 menit yang lalu</p>
            </div>
          </div>
          
          <div class="activity-item">
            <div class="activity-icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <div class="activity-content">
              <h6 class="activity-title">Pengunjung baru terdaftar</h6>
              <p class="activity-time">1 jam yang lalu</p>
            </div>
          </div>
          
          <div class="activity-item">
            <div class="activity-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="activity-content">
              <h6 class="activity-title">Destinasi baru ditambahkan</h6>
              <p class="activity-time">2 jam yang lalu</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Hero carousel indicators
  let currentSlide = 0;
  const indicators = document.querySelectorAll('.indicator');
  
  setInterval(() => {
    currentSlide = (currentSlide + 1) % indicators.length;
    indicators.forEach((ind, idx) => {
      ind.classList.toggle('active', idx === currentSlide);
    });
  }, 5000);

  // Update date dengan JavaScript
  document.addEventListener('DOMContentLoaded', function() {
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById('current-date').textContent = new Date().toLocaleDateString('id-ID', options);
  });
</script>
@endsection

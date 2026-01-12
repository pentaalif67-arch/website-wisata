<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Wisata Jember</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                  url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') no-repeat center center fixed;
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
      color: var(--accent);
    }

    .subtitle {
      opacity: 0.9;
      font-size: 1.1rem;
      max-width: 650px;
      margin: 0 auto;
      color: rgba(255, 255, 255, 0.8);
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

    /* Section Titles */
    .section-title {
      font-weight: 600;
      margin-bottom: 1.5rem;
      color: var(--accent);
      position: relative;
      display: inline-block;
    }

    .section-title:after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--accent);
      border-radius: 3px;
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

    /* Info Cards */
    .info-card {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 12px;
      padding: 1.5rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
      height: 100%;
      transition: all 0.3s ease;
    }

    .info-card:hover {
      background: rgba(255, 255, 255, 0.12);
      transform: translateY(-3px);
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
      color: white;
    }

    /* Contact Items */
    .contact-item {
      padding: 1.5rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
    }

    .contact-item:hover {
      background: rgba(255, 255, 255, 0.05);
    }

    .contact-item:last-child {
      border-bottom: none;
    }

    .contact-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: rgba(233, 196, 106, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 1rem;
      color: var(--accent);
      font-size: 1.2rem;
    }

    /* Map Container */
    .map-container {
      height: 300px;
      border-radius: 12px;
      overflow: hidden;
      position: relative;
    }

    .map-placeholder {
      width: 100%;
      height: 100%;
      background: rgba(38, 70, 83, 0.8);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: var(--accent);
    }

    /* Social Links */
    .social-links {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
    }

    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .social-link:hover {
      background: var(--accent);
      color: var(--secondary);
      transform: translateY(-3px);
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
      margin-top: 3rem;
    }

    /* Animations */
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .fade-in {animation: fadeIn 0.8s ease forwards;}

    /* Text Link */
    .text-link {
      color: var(--accent);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .text-link:hover {
      color: #f4b847;
      text-decoration: underline;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .welcome-text {
        font-size: 2rem;
      }
      
      .main-content {
        padding-top: 80px;
      }

      .contact-item {
        flex-direction: column;
        text-align: center;
      }

      .contact-icon {
        margin-right: 0;
        margin-bottom: 1rem;
      }
    }

    /* Timeline */
    .timeline {
      position: relative;
      padding-left: 30px;
    }

    .timeline:before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 2px;
      background: var(--accent);
    }

    .timeline-item {
      position: relative;
      margin-bottom: 1rem;
    }

    .timeline-item:before {
      content: '';
      position: absolute;
      left: -36px;
      top: 5px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: var(--accent);
    }

    /* Badges */
    .badge-category {
      background: rgba(233, 196, 106, 0.2);
      color: var(--accent);
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 500;
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
          <li class="nav-item"><a class="nav-link" href="/dashboard/tentangKami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link active" href="/dashboard/kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
      <div class="dashboard-header fade-in text-center">
        <h1 class="welcome-text">Hubungi Kami 📞</h1>
        <p class="subtitle">Kami siap membantu dan menjawab pertanyaan Anda tentang destinasi wisata Jember</p>
      </div>

      <!-- Contact Info & Form -->
      <div class="row fade-in mb-5">
        <!-- Contact Information -->
        <div class="col-lg-4 mb-4">
          <div class="glass-card p-4 h-100">
            <h3 class="section-title mb-4">Informasi Kontak</h3>
            
            <div class="contact-item d-flex align-items-start mb-4">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h5 class="mb-2">Alamat Kantor</h5>
                <p class="info-value mb-0">Jl. Mastrip No.123, Sumbersari,<br>Jember, Jawa Timur 68121</p>
              </div>
            </div>

            <div class="contact-item d-flex align-items-start mb-4">
              <div class="contact-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div>
                <h5 class="mb-2">Telepon & WhatsApp</h5>
                <p class="info-value mb-1">
                  <a href="tel:+62331123456" class="text-link">(0331) 123456</a>
                </p>
                <p class="info-value mb-0">
                  <a href="https://wa.me/6281234567890" target="_blank" class="text-link">+62 812-3456-7890</a>
                </p>
              </div>
            </div>

            <div class="contact-item d-flex align-items-start mb-4">
              <div class="contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h5 class="mb-2">Email</h5>
                <p class="info-value mb-0">
                  <a href="mailto:info@wisatajember.com" class="text-link">info@wisatajember.com</a>
                </p>
                <p class="info-value mb-0">
                  <a href="mailto:cs@wisatajember.com" class="text-link">cs@wisatajember.com</a>
                </p>
              </div>
            </div>

            <div class="contact-item d-flex align-items-start">
              <div class="contact-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div>
                <h5 class="mb-2">Jam Operasional</h5>
                <p class="info-value mb-1">Senin - Jumat: 08:00 - 17:00</p>
                <p class="info-value mb-0">Sabtu: 08:00 - 15:00</p>
                <p class="info-value mb-0">Minggu: 09:00 - 14:00</p>
              </div>
            </div>

            <div class="mt-4">
              <h5 class="mb-3">Ikuti Kami</h5>
              <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-8 mb-4">
          <div class="glass-card p-4">
            <h3 class="section-title mb-4">Kirim Pesan</h3>
            
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

            <form action="{{ route('kontak.kirim') }}" method="POST">
              @csrf
              
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nama" class="form-label">Nama Lengkap *</label>
                  <input type="text" class="form-control" id="nama" name="nama" 
                         value="{{ old('nama') }}" required>
                </div>
                
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email *</label>
                  <input type="email" class="form-control" id="email" name="email" 
                         value="{{ old('email') }}" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="telepon" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" 
                       value="{{ old('telepon') }}" placeholder="+62...">
              </div>

              <div class="mb-3">
                <label for="subjek" class="form-label">Subjek *</label>
                <select class="form-select" id="subjek" name="subjek" required>
                  <option value="">-- Pilih Subjek --</option>
                  <option value="informasi" {{ old('subjek') == 'informasi' ? 'selected' : '' }}>Informasi Destinasi</option>
                  <option value="pemesanan" {{ old('subjek') == 'pemesanan' ? 'selected' : '' }}>Pemesanan Tiket</option>
                  <option value="kerjasama" {{ old('subjek') == 'kerjasama' ? 'selected' : '' }}>Kerjasama</option>
                  <option value="keluhan" {{ old('subjek') == 'keluhan' ? 'selected' : '' }}>Keluhan</option>
                  <option value="lainnya" {{ old('subjek') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan *</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="5" required>{{ old('pesan') }}</textarea>
                <div class="form-text text-white-50" id="charCount">Sisa karakter: 1000</div>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                  <label class="form-check-label text-white-50" for="newsletter">
                    Berlangganan newsletter
                  </label>
                </div>
                <button type="submit" class="btn btn-accent px-4">
                  <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Destinasi Contacts -->
      <div class="row fade-in mb-5">
        <div class="col-12">
          <div class="info-header mb-4">
            <i class="fas fa-address-book info-icon"></i>
            <h3 class="section-title mb-0">Kontak Destinasi Wisata</h3>
          </div>
          
          <div class="glass-card p-0 overflow-hidden">
            <!-- Pantai Papuma -->
            <div class="contact-item d-flex align-items-center">
              <div class="flex-shrink-0 ms-4">
                <span class="badge-category">Pantai</span>
              </div>
              <div class="flex-grow-1 ms-4">
                <h5 class="mb-1">Pantai Papuma</h5>
                <p class="text-white-50 mb-0">Desa Lojejer, Kecamatan Wuluhan</p>
              </div>
              <div class="flex-shrink-0 text-end me-4">
                <div class="mb-1">
                  <a href="tel:+62331111222" class="text-link me-3"><i class="fas fa-phone me-1"></i> (0331) 111222</a>
                  <a href="https://wa.me/62811223344" target="_blank" class="text-link"><i class="fab fa-whatsapp me-1"></i> +62 811-2233-44</a>
                </div>
                <a href="https://goo.gl/maps/xyz" target="_blank" class="text-link">
                  <i class="fas fa-map-marker-alt me-1"></i> Lihat di Maps
                </a>
              </div>
            </div>

            <!-- Taman Botani Sukorambi -->
            <div class="contact-item d-flex align-items-center">
              <div class="flex-shrink-0 ms-4">
                <span class="badge-category">Alam</span>
              </div>
              <div class="flex-grow-1 ms-4">
                <h5 class="mb-1">Taman Botani Sukorambi</h5>
                <p class="text-white-50 mb-0">Desa Sukorambi, Kecamatan Sukorambi</p>
              </div>
              <div class="flex-shrink-0 text-end me-4">
                <div class="mb-1">
                  <a href="tel:+62331122333" class="text-link me-3"><i class="fas fa-phone me-1"></i> (0331) 112333</a>
                  <a href="https://wa.me/62822334455" target="_blank" class="text-link"><i class="fab fa-whatsapp me-1"></i> +62 822-3344-55</a>
                </div>
                <a href="https://goo.gl/maps/abc" target="_blank" class="text-link">
                  <i class="fas fa-map-marker-alt me-1"></i> Lihat di Maps
                </a>
              </div>
            </div>

            <!-- Museum Jember -->
            <div class="contact-item d-flex align-items-center">
              <div class="flex-shrink-0 ms-4">
                <span class="badge-category">Budaya</span>
              </div>
              <div class="flex-grow-1 ms-4">
                <h5 class="mb-1">Museum Jember</h5>
                <p class="text-white-50 mb-0">Jl. Jawa No.1, Kaliwates</p>
              </div>
              <div class="flex-shrink-0 text-end me-4">
                <div class="mb-1">
                  <a href="tel:+62331133444" class="text-link me-3"><i class="fas fa-phone me-1"></i> (0331) 113444</a>
                  <a href="https://wa.me/62833445566" target="_blank" class="text-link"><i class="fab fa-whatsapp me-1"></i> +62 833-4455-66</a>
                </div>
                <a href="https://goo.gl/maps/def" target="_blank" class="text-link">
                  <i class="fas fa-map-marker-alt me-1"></i> Lihat di Maps
                </a>
              </div>
            </div>

            <!-- Watu Ulo -->
            <div class="contact-item d-flex align-items-center">
              <div class="flex-shrink-0 ms-4">
                <span class="badge-category">Pantai</span>
              </div>
              <div class="flex-grow-1 ms-4">
                <h5 class="mb-1">Pantai Watu Ulo</h5>
                <p class="text-white-50 mb-0">Desa Sumberejo, Kecamatan Ambulu</p>
              </div>
              <div class="flex-shrink-0 text-end me-4">
                <div class="mb-1">
                  <a href="tel:+62331144555" class="text-link me-3"><i class="fas fa-phone me-1"></i> (0331) 114555</a>
                  <a href="https://wa.me/62844556677" target="_blank" class="text-link"><i class="fab fa-whatsapp me-1"></i> +62 844-5566-77</a>
                </div>
                <a href="https://goo.gl/maps/ghi" target="_blank" class="text-link">
                  <i class="fas fa-map-marker-alt me-1"></i> Lihat di Maps
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Map & FAQ -->
      <div class="row fade-in">
        <!-- Map -->
        <div class="col-lg-7 mb-4">
          <div class="glass-card p-4 h-100">
            <h3 class="section-title mb-4">Lokasi Kantor Kami</h3>
            <div class="map-container">
              <div class="map-placeholder">
                <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                <h5>Peta Lokasi Kantor</h5>
                <p class="text-center px-3">Integrasikan dengan Google Maps API untuk menampilkan lokasi kantor</p>
                <a href="https://goo.gl/maps/example" target="_blank" class="btn btn-outline-accent mt-2">
                  <i class="fas fa-external-link-alt me-2"></i>Buka di Google Maps
                </a>
              </div>
            </div>
            <div class="mt-3">
              <div class="info-card mb-2">
                <div class="info-header">
                  <i class="fas fa-directions info-icon"></i>
                  <h6 class="info-label">Petunjuk Arah</h6>
                </div>
                <p class="info-value">Dari pusat kota Jember, arahkan ke Jl. Mastrip. Kantor kami berada di sebelah timur Gedung Bappelitbangda.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ -->
        <div class="col-lg-5 mb-4">
          <div class="glass-card p-4 h-100">
            <h3 class="section-title mb-4">FAQ</h3>
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item glass-card mb-3 border-0">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Bagaimana cara memesan tiket wisata?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Anda dapat memesan tiket melalui website kami, menghubungi call center, atau langsung ke lokasi destinasi.
                  </div>
                </div>
              </div>

              <div class="accordion-item glass-card mb-3 border-0">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Apakah ada diskon untuk rombongan?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Ya, tersedia diskon khusus untuk rombongan minimal 20 orang. Hubungi kami untuk informasi lebih lanjut.
                  </div>
                </div>
              </div>

              <div class="accordion-item glass-card mb-3 border-0">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Bagaimana jika ingin mengadakan acara di destinasi wisata?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Kami menyediakan paket khusus untuk acara seperti pernikahan, gathering, atau workshop. Hubungi kami minimal 2 minggu sebelumnya.
                  </div>
                </div>
              </div>

              <div class="accordion-item glass-card mb-3 border-0">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    Apakah ada tour guide yang tersedia?
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Ya, kami menyediakan tour guide profesional yang bisa dipesan melalui website atau langsung di lokasi.
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <div class="info-card">
                <div class="info-header">
                  <i class="fas fa-headset info-icon"></i>
                  <h6 class="info-label">Layanan Pelanggan 24/7</h6>
                </div>
                <p class="info-value">Untuk pertanyaan mendesak di luar jam operasional, hubungi hotline kami: <a href="tel:+628001234567" class="text-link">0800-1234-567</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p class="mb-2">&copy; 2025 Wisata Jember. Semua Hak Dilindungi.</p>
      <p class="text-white-50 small">Jelajahi keindahan alam Jember dengan panduan terpercaya</p>
    </div>
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

      // Karakter counter untuk pesan
      const pesanInput = document.getElementById('pesan');
      const charCount = document.getElementById('charCount');
      
      if (pesanInput && charCount) {
        function updateCharCount() {
          const remaining = 1000 - pesanInput.value.length;
          charCount.textContent = `Sisa karakter: ${remaining}`;
          charCount.style.color = remaining < 100 ? '#ff6b6b' : 'rgba(255, 255, 255, 0.5)';
        }
        
        pesanInput.addEventListener('input', updateCharCount);
        updateCharCount(); // Inisialisasi awal
      }

      // Auto-subject dari URL parameter
      const urlParams = new URLSearchParams(window.location.search);
      const subject = urlParams.get('subjek');
      if (subject) {
        const subjekSelect = document.getElementById('subjek');
        if (subjekSelect) {
          subjekSelect.value = subject;
        }
      }

      // Form validation enhancement
      const form = document.querySelector('form');
      if (form) {
        form.addEventListener('submit', function(e) {
          const nama = document.getElementById('nama').value.trim();
          const email = document.getElementById('email').value.trim();
          
          if (!nama || !email) {
            e.preventDefault();
            alert('Mohon lengkapi semua field yang wajib diisi.');
          }
        });
      }

      // Animate cards on scroll
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);

      // Observe all fade-in elements
      document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
      });
    });
  </script>
</body>
</html>
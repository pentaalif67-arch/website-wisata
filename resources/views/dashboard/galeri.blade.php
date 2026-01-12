<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="main-content">
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

  <!-- Modal untuk gambar -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background: rgba(0, 0, 0, 0.8); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.2);">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title text-white" id="modalTitle"></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <img id="modalImage" src="" class="img-fluid rounded" alt="" style="max-height: 70vh; object-fit: contain;">
          <div class="mt-3 text-white">
            <p id="modalDescription"></p>
            <div class="d-flex justify-content-center gap-3">
              <span class="category-badge" id="modalCategory"></span>
              <span class="date-badge" id="modalDate"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Data galeri
    const galeriData = [
      {
        'id': 1,
        'judul': 'Sunset di Pantai Papuma',
        'gambar': 'https://wisatakita.com/pariwisata/532/800-Pantai-Papuma.jpeg',
        'kategori': 'Pantai',
        'deskripsi': 'Pemandangan sunset yang menakjubkan di Pantai Papuma',
        'tanggal': '15 November 2024'
      },
      {
        'id': 2,
        'judul': 'Puncak Rembangan',
        'gambar': 'https://turisian.com/wp-content/uploads/2023/02/Wisata-Puncak-Rembangan-Jember.jpg',
        'kategori': 'Pegunungan',
        'deskripsi': 'Pemandangan kota Jember dari ketinggian',
        'tanggal': '10 November 2024'
      },
      {
        'id': 3,
        'judul': 'Air Terjun Tancak',
        'gambar': 'https://turisian.com/wp-content/uploads/2023/01/Air-Terjun-Tancak-Jember.jpg',
        'kategori': 'Air Terjun',
        'deskripsi': 'Air terjun tertinggi di Jawa Timur',
        'tanggal': '5 November 2024'
      },
      {
        'id': 4,
        'judul': 'Teluk Love',
        'gambar': 'https://asset.kompas.com/crops/hHvbTRkW_5N7F3lcya3JQIHvuRA=/0x0:780x520/750x500/data/photo/2019/02/08/3228997686.jpg',
        'kategori': 'Pantai',
        'deskripsi': 'Teluk berbentuk hati yang romantis',
        'tanggal': '1 November 2024'
      },
      {
        'id': 5,
        'judul': 'Kebun Teh Gunung Gambir',
        'gambar': 'https://www.topwisata.info/wp-content/uploads/2019/03/kebun2Bteh2Bgunung2Bgambir.jpg',
        'kategori': 'Perkebunan',
        'deskripsi': 'Hamparan kebun teh yang hijau',
        'tanggal': '28 Oktober 2024'
      },
      {
        'id': 6,
        'judul': 'Pantai Watu Ulo',
        'gambar': 'https://img.inews.co.id/media/600/files/networks/2022/11/22/388ae_pantai-watu-ulo.jpeg',
        'kategori': 'Pantai',
        'deskripsi': 'Pantai dengan batu besar berbentuk ular',
        'tanggal': '25 Oktober 2024'
      },
      
    ];

    // Fungsi untuk menampilkan galeri
    function renderGaleri(data = galeriData) {
      const galeriGrid = document.getElementById('galeriGrid');
      galeriGrid.innerHTML = '';

      data.forEach(item => {
        const col = document.createElement('div');
        col.className = 'col-md-4 mb-4 fade-in';
        col.setAttribute('data-kategori', item.kategori);
        
        col.innerHTML = `
          <div class="glass-card h-100">
            <div class="galeri-img" style="background-image: url('${item.gambar}');"></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="card-title">${item.judul}</h5>
                <span class="category-badge">${item.kategori}</span>
              </div>
              <p class="card-text">${item.deskripsi}</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="date-badge">
                  <i class="fas fa-calendar me-1"></i>${item.tanggal}
                </span>
                <button class="btn btn-outline-accent btn-sm" onclick="openModal(${item.id})">
                  <i class="fas fa-expand me-1"></i>Lihat Detail
                </button>
              </div>
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
        document.getElementById('modalTitle').textContent = item.judul;
        document.getElementById('modalImage').src = item.gambar;
        document.getElementById('modalImage').alt = item.judul;
        document.getElementById('modalDescription').textContent = item.deskripsi;
        document.getElementById('modalCategory').textContent = item.kategori;
        document.getElementById('modalDate').innerHTML = `<i class="fas fa-calendar me-1"></i>${item.tanggal}`;
        
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
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
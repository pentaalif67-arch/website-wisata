<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Wisata Jember</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2a9d8f;
            --secondary: #264653;
            --accent: #e9c46a;
            --danger: #e76f51;
            --light: #f8f9fa;
            --dark: #212529;
            --gradient: linear-gradient(135deg, #2a9d8f 0%, #264653 100%);
            --card-shadow: 0 10px 20px rgba(0,0,0,0.15);
            --hover-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .navbar {
            background: var(--gradient);
            box-shadow: var(--card-shadow);
        }
        
        .navbar-brand {
            color: var(--light) !important;
            font-weight: bold;
        }
        
        .nav-link {
            color: var(--light) !important;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--accent) !important;
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: var(--accent) !important;
            font-weight: bold;
        }
        
        body {
            padding-top: 70px;
        }
        
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            min-height: 100vh;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--card-shadow);
            transition: all 0.4s ease;
            overflow: hidden;
        }
        
        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--hover-shadow);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .dashboard-header {
            padding: 2.5rem 0;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .welcome-text {
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 2.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .subtitle {
            opacity: 0.9;
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        
        .stat-card {
            height: 100%;
            padding: 1.5rem;
            text-align: center;
        }
        
        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.8rem;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .destinasi .card-icon {
            background: rgba(42, 157, 143, 0.3);
            border-color: rgba(42, 157, 143, 0.5);
        }
        
        .pengunjung .card-icon {
            background: rgba(233, 196, 106, 0.3);
            border-color: rgba(233, 196, 106, 0.5);
        }
        
        .tiket .card-icon {
            background: rgba(231, 111, 81, 0.3);
            border-color: rgba(231, 111, 81, 0.5);
        }
        
        .stat-number {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }
        
        .stat-label {
            font-weight: 500;
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .trend-indicator {
            display: inline-flex;
            align-items: center;
            font-size: 0.9rem;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            margin-top: 0.8rem;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .trend-up {
            color: #90e0ef;
        }
        
        .trend-down {
            color: #ffafcc;
        }
        
        .section-title {
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--accent);
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
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
        
        .destinasi-populer {
            margin-top: 2rem;
        }
        
        .destinasi-item {
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            position: relative;
            transition: all 0.4s ease;
        }
        
        .destinasi-item:hover {
            transform: scale(1.03);
        }
        
        .destinasi-img {
            height: 180px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .destinasi-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            padding: 1rem;
            color: white;
        }
        
        .destinasi-name {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }
        
        .destinasi-location {
            font-size: 0.9rem;
            opacity: 0.9;
            display: flex;
            align-items: center;
        }
        
        .destinasi-location i {
            margin-right: 0.3rem;
        }
        
        .rating {
            display: flex;
            align-items: center;
            margin-top: 0.5rem;
        }
        
        .rating i {
            color: var(--accent);
            margin-right: 0.2rem;
        }
        
        .recent-activities {
            padding: 1.5rem;
            height: 100%;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-size: 1.1rem;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .activity-content {
            flex: 1;
        }
        
        .activity-title {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        
        .activity-time {
            font-size: 0.85rem;
            opacity: 0.8;
        }
        
        .chart-container {
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            height: 100%;
        }
        
        .chart-placeholder {
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .quick-actions {
            display: flex;
            gap: 1.2rem;
            margin-top: 2.5rem;
            flex-wrap: wrap;
        }
        
        .action-btn {
            flex: 1;
            min-width: 150px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 1.2rem;
            text-align: center;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            color: white;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .action-btn:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
            background: rgba(255, 255, 255, 0.15);
            color: white;
        }
        
        .action-icon {
            font-size: 1.8rem;
            margin-bottom: 0.8rem;
            color: var(--accent);
        }
        
        .date-badge {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            padding: 0.5rem 1.2rem;
            display: inline-flex;
            align-items: center;
            margin-top: 1rem;
        }
        
        @media (max-width: 768px) {
            .welcome-text {
                font-size: 2rem;
            }
            
            .quick-actions {
                flex-direction: column;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
            
            .action-btn {
                min-width: 100%;
            }
        }
        
        /* Animasi */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.2s; opacity: 0; }
        .delay-2 { animation-delay: 0.4s; opacity: 0; }
        .delay-3 { animation-delay: 0.6s; opacity: 0; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="fas fa-map-marked-alt me-2"></i>
                Wisata Jember
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('wisata.*') ? 'active' : '' }}" href="{{ route('wisata.index') }}">
                            <i class="fas fa-map-pin me-1"></i> Daftar Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('laporan.*') ? 'active' : '' }}" href="{{ route('laporan.index') }}">
                            <i class="fas fa-chart-bar me-1"></i> Laporan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="dashboard-header fade-in">
            <h1 class="welcome-text">Destinasi Wisata Jember 🌴</h1>
            <p class="subtitle">Kelola destinasi wisata, pantau pengunjung, dan optimalkan pengalaman pariwisata</p>
            <div class="date-badge">
                <i class="fas fa-calendar-alt me-2"></i>
                <span id="current-date">Senin, 15 Mei 2023</span>
            </div>
        </div>

        <div class="row">
            <!-- Statistik Utama -->
            <div class="col-md-4 mb-4 fade-in delay-1">
                <div class="glass-card stat-card destinasi">
                    <div class="card-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div class="stat-number">24</div>
                    <div class="stat-label">Jumlah Destinasi</div>
                    <div class="trend-indicator trend-up">
                        <i class="fas fa-arrow-up me-1"></i> 5 destinasi baru
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 fade-in delay-2">
                <div class="glass-card stat-card pengunjung">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">1,248</div>
                    <div class="stat-label">Jumlah Pengunjung</div>
                    <div class="trend-indicator trend-up">
                        <i class="fas fa-arrow-up me-1"></i> 22% meningkat
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 fade-in delay-3">
                <div class="glass-card stat-card tiket">
                    <div class="card-icon">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <div class="stat-number">893</div>
                    <div class="stat-label">Total Tiket Terjual</div>
                    <div class="trend-indicator trend-down">
                        <i class="fas fa-arrow-down me-1"></i> 8% menurun
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-2">
            <!-- Grafik Pengunjung -->
            <div class="col-lg-8 mb-4">
                <div class="glass-card chart-container fade-in">
                    <h3 class="section-title">Statistik Pengunjung 7 Hari Terakhir</h3>
                    <div class="chart-placeholder">
                        <p class="text-light mb-4">Grafik tren kunjungan wisatawan</p>
                        <div class="d-flex justify-content-around align-items-end mt-2" style="height: 160px;">
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-success rounded" style="width: 30px; height: 120px;"></div>
                                <small class="mt-2">Sen</small>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-success rounded" style="width: 30px; height: 150px;"></div>
                                <small class="mt-2">Sel</small>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-success rounded" style="width: 30px; height: 90px;"></div>
                                <small class="mt-2">Rab</small>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-success rounded" style="width: 30px; height: 180px;"></div>
                                <small class="mt-2">Kam</small>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-success rounded" style="width: 30px; height: 130px;"></div>
                                <small class="mt-2">Jum</small>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-success rounded" style="width: 30px; height: 200px;"></div>
                                <small class="mt-2">Sab</small>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-success rounded" style="width: 30px; height: 170px;"></div>
                                <small class="mt-2">Min</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Aktivitas Terbaru -->
            <div class="col-lg-4 mb-4">
                <div class="glass-card recent-activities fade-in">
                    <h3 class="section-title">Aktivitas Terbaru</h3>
                    
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Tiket baru terjual</div>
                            <div class="activity-time">5 menit yang lalu</div>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Pengunjung baru terdaftar</div>
                            <div class="activity-time">1 jam yang lalu</div>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Destinasi baru ditambahkan</div>
                            <div class="activity-time">2 jam yang lalu</div>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Ulasan baru diterima</div>
                            <div class="activity-time">5 jam yang lalu</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Destinasi Populer -->
        <div class="row destinasi-populer">
            <div class="col-12">
                <h3 class="section-title fade-in">Destinasi Populer Jember</h3>
            </div>
            
            <div class="col-md-3 col-sm-6 mb-4 fade-in delay-1">
                <div class="glass-card destinasi-item">
                    <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
                        <div class="destinasi-overlay">
                            <div class="destinasi-name">Pantai Papuma</div>
                            <div class="destinasi-location">
                                <i class="fas fa-map-marker-alt"></i> Jember, Jawa Timur
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">4.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 mb-4 fade-in delay-2">
                <div class="glass-card destinasi-item">
                    <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80')">
                        <div class="destinasi-overlay">
                            <div class="destinasi-name">Kawasan Gunung Pasang</div>
                            <div class="destinasi-location">
                                <i class="fas fa-map-marker-alt"></i> Jember, Jawa Timur
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="ms-1">4.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 mb-4 fade-in delay-1">
                <div class="glass-card destinasi-item">
                    <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1505142468610-359e7d316be0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80')">
                        <div class="destinasi-overlay">
                            <div class="destinasi-name">Teluk Love</div>
                            <div class="destinasi-location">
                                <i class="fas fa-map-marker-alt"></i> Jember, Jawa Timur
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-1">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 mb-4 fade-in delay-2">
                <div class="glass-card destinasi-item">
                    <div class="destinasi-img" style="background-image: url('https://images.unsplash.com/photo-1464822759844-4c0a1e8d5d7a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
                        <div class="destinasi-overlay">
                            <div class="destinasi-name">Puncak Rembangan</div>
                            <div class="destinasi-location">
                                <i class="fas fa-map-marker-alt"></i> Jember, Jawa Timur
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">4.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="quick-actions">
            <a href="#" class="action-btn fade-in delay-1">
                <div class="action-icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div>Tambah Destinasi</div>
            </a>
            
            <a href="#" class="action-btn fade-in delay-2">
                <div class="action-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div>Lihat Laporan</div>
            </a>
            
            <a href="#" class="action-btn fade-in delay-3">
                <div class="action-icon">
                    <i class="fas fa-cog"></i>
                </div>
                <div>Pengaturan</div>
            </a>
            
            <a href="#" class="action-btn fade-in delay-1">
                <div class="action-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div>Bantuan</div>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Menampilkan tanggal saat ini
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const today = new Date();
        document.getElementById('current-date').textContent = today.toLocaleDateString('id-ID', options);
        
        // Animasi hover untuk cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Animasi scroll
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
        
        // Terapkan animasi fade-in pada elemen
        document.querySelectorAll('.fade-in').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>
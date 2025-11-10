<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wisata Jember')</title>
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
            /* overlay gradient + background image */
            background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
                        url('{{ asset("image/dashboard-bg.jpg") }}') no-repeat center center fixed;
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

        @yield('additional-styles')
    </style>
    @stack('styles')
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

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Fix for navbar toggler icon color
        document.querySelector('.navbar-toggler').innerHTML = '<i class="fas fa-bars" style="color: var(--light)"></i>';
    </script>
    @stack('scripts')
</body>
</html>
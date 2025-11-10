<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Wisata</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">🌴 Wisata Admin</a>
    </div>
  </nav>

  <!-- Sidebar + Content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 bg-dark text-white p-3 vh-100">
        <h5>Menu</h5>
        <ul class="nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link text-white">🏝️ Destinasi</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">🎫 Tiket</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">🖼️ Galeri</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">⚙️ Pengaturan</a></li>
        </ul>
      </div>

      <div class="col-md-10 p-4">
        @yield('content')
      </div>
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

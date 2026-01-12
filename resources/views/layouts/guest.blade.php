<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            :root {
                --primary: #2a9d8f;
                --secondary: #264653;
                --accent: #e9c46a;
                --danger: #e76f51;
            }

            body {
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                            url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2100&q=80') no-repeat center center fixed;
                background-size: cover;
                font-family: 'Poppins', 'Segoe UI', sans-serif;
                color: white;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .auth-container {
                width: 100%;
                max-width: 450px;
                margin: 0 auto;
            }

            .glass-card {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border-radius: 16px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
                padding: 2.5rem;
            }

            .auth-logo {
                text-align: center;
                margin-bottom: 2rem;
            }

            .auth-logo a {
                color: var(--accent);
                font-size: 2rem;
                font-weight: 700;
                text-decoration: none;
            }

            .auth-title {
                color: var(--accent);
                font-weight: 600;
                margin-bottom: 1.5rem;
                text-align: center;
            }

            .form-label {
                color: white;
                font-weight: 500;
                margin-bottom: 0.5rem;
            }

            .form-control {
                background: rgba(255, 255, 255, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: white;
                border-radius: 8px;
                padding: 0.75rem;
            }

            .form-control:focus {
                background: rgba(255, 255, 255, 0.15);
                border-color: var(--accent);
                color: white;
                box-shadow: 0 0 0 0.2rem rgba(233, 196, 106, 0.25);
            }

            .form-control::placeholder {
                color: rgba(255, 255, 255, 0.6);
            }

            .btn-primary {
                background: var(--accent);
                border: none;
                color: var(--secondary);
                font-weight: 600;
                padding: 0.75rem 2rem;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .btn-primary:hover {
                background: #f4c430;
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(233, 196, 106, 0.4);
            }

            .text-link {
                color: var(--accent);
                text-decoration: none;
            }

            .text-link:hover {
                color: #f4c430;
                text-decoration: underline;
            }

            .text-danger {
                color: #ff6b6b !important;
                font-size: 0.875rem;
                margin-top: 0.25rem;
            }

            .form-check-label {
                color: rgba(255, 255, 255, 0.9);
            }

            .form-check-input:checked {
                background-color: var(--accent);
                border-color: var(--accent);
            }
        </style>
    </head>
    <body>
        <div class="auth-container">
            <div class="glass-card">
                <div class="auth-logo">
                    <a href="/">
                        <i class="fas fa-umbrella-beach me-2"></i>Wisata Jember
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

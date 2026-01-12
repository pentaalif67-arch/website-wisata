<x-guest-layout>
    <h2 class="auth-title">Lupa Password</h2>
    
    <p class="text-white-50 mb-4 text-center">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </p>

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan email Anda">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-envelope me-2"></i>{{ __('Email Password Reset Link') }}
            </button>
        </div>

        <div class="text-center">
            <a class="text-link" href="{{ route('login') }}">
                <i class="fas fa-arrow-left me-1"></i>{{ __('Back to Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>

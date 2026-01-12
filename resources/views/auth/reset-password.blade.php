<x-guest-layout>
    <h2 class="auth-title">Reset Password</h2>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" placeholder="Masukkan email Anda">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Masukkan password baru">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi password baru">
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-key me-2"></i>{{ __('Reset Password') }}
            </button>
        </div>

        <div class="text-center">
            <a class="text-link" href="{{ route('login') }}">
                <i class="fas fa-arrow-left me-1"></i>{{ __('Back to Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>

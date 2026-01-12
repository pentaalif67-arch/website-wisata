<section>
    <header class="mb-4">
        <h2 class="section-title" style="color: var(--accent); font-size: 1.5rem;">
            <i class="fas fa-user-edit me-2"></i>{{ __('Profile Information') }}
        </h2>
        <p class="text-white-50 mt-2">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label" style="color: white; font-weight: 500;">
                <i class="fas fa-user me-2"></i>{{ __('Name') }}
            </label>
            <input 
                id="name" 
                name="name" 
                type="text" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name', $user->name) }}" 
                required 
                autofocus 
                autocomplete="name"
                placeholder="Masukkan nama lengkap"
            >
            @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label" style="color: white; font-weight: 500;">
                <i class="fas fa-envelope me-2"></i>{{ __('Email') }}
            </label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email', $user->email) }}" 
                required 
                autocomplete="username"
                placeholder="Masukkan email"
            >
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-white-50" style="font-size: 0.875rem;">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="text-link" style="text-decoration: underline;">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-success" style="font-size: 0.875rem;">
                            <i class="fas fa-check-circle me-1"></i>{{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-2"></i>{{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p class="text-success mb-0" style="font-size: 0.875rem;">
                    <i class="fas fa-check-circle me-1"></i>{{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

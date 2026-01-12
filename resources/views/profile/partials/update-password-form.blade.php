<section>
    <header class="mb-4">
        <h2 class="section-title" style="color: var(--accent); font-size: 1.5rem;">
            <i class="fas fa-key me-2"></i>{{ __('Update Password') }}
        </h2>
        <p class="text-white-50 mt-2">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="update_password_current_password" class="form-label" style="color: white; font-weight: 500;">
                <i class="fas fa-lock me-2"></i>{{ __('Current Password') }}
            </label>
            <input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                class="form-control @if($errors->updatePassword->has('current_password')) is-invalid @endif" 
                autocomplete="current-password"
                placeholder="Masukkan password saat ini"
            >
            @if($errors->updatePassword->has('current_password'))
                <div class="text-danger mt-1">{{ $errors->updatePassword->first('current_password') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="update_password_password" class="form-label" style="color: white; font-weight: 500;">
                <i class="fas fa-lock-open me-2"></i>{{ __('New Password') }}
            </label>
            <input 
                id="update_password_password" 
                name="password" 
                type="password" 
                class="form-control @if($errors->updatePassword->has('password')) is-invalid @endif" 
                autocomplete="new-password"
                placeholder="Masukkan password baru"
            >
            @if($errors->updatePassword->has('password'))
                <div class="text-danger mt-1">{{ $errors->updatePassword->first('password') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label" style="color: white; font-weight: 500;">
                <i class="fas fa-lock me-2"></i>{{ __('Confirm Password') }}
            </label>
            <input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="form-control" 
                autocomplete="new-password"
                placeholder="Konfirmasi password baru"
            >
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-2"></i>{{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-success mb-0" style="font-size: 0.875rem;">
                    <i class="fas fa-check-circle me-1"></i>{{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

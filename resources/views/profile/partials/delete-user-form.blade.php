<section>
    <header class="mb-4">
        <h2 class="section-title" style="color: var(--danger); font-size: 1.5rem;">
            <i class="fas fa-exclamation-triangle me-2"></i>{{ __('Delete Account') }}
        </h2>
        <p class="text-white-50 mt-2">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button 
        type="button" 
        class="btn btn-outline-danger"
        data-bs-toggle="modal" 
        data-bs-target="#confirmUserDeletion"
        style="border-color: var(--danger); color: var(--danger);"
    >
        <i class="fas fa-trash-alt me-2"></i>{{ __('Delete Account') }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletion" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content glass-card" style="background: rgba(0, 0, 0, 0.95); border: 1px solid rgba(255, 255, 255, 0.2);">
                <div class="modal-header" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                    <h5 class="modal-title" id="confirmUserDeletionLabel" style="color: var(--danger);">
                        <i class="fas fa-exclamation-triangle me-2"></i>{{ __('Are you sure you want to delete your account?') }}
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-body">
                        <p class="text-white-50 mb-4">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: white; font-weight: 500;">
                                <i class="fas fa-lock me-2"></i>{{ __('Password') }}
                            </label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                class="form-control @if($errors->userDeletion->has('password')) is-invalid @endif"
                                placeholder="{{ __('Enter your password to confirm') }}"
                                required
                            >
                            @if($errors->userDeletion->has('password'))
                                <div class="text-danger mt-1">{{ $errors->userDeletion->first('password') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.2);">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>{{ __('Cancel') }}
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt me-2"></i>{{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

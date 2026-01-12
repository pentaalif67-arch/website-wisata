@extends('dashboard.layout')

@section('title', 'Profile - Wisata Jember')

@section('content')
<div class="container">
    <div class="dashboard-header fade-in text-center mb-4">
        <h1 class="welcome-text"><i class="fas fa-user-circle me-2"></i>Profile Saya</h1>
        <p class="subtitle">Kelola informasi profil dan keamanan akun Anda</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Profile Information -->
            <div class="glass-card mb-4 fade-in">
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="glass-card mb-4 fade-in">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="glass-card mb-4 fade-in">
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@if($errors->userDeletion->isNotEmpty())
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = new bootstrap.Modal(document.getElementById('confirmUserDeletion'));
        myModal.show();
    });
</script>
@endif
@endpush

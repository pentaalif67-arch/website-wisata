@extends('layouts.main')

@section('title', 'Daftar Wisata - Wisata Jember')

@section('additional-styles')
    .action-buttons .btn {
        transition: all 0.3s ease;
    }
    .action-buttons .btn:hover {
        transform: translateY(-2px);
    }
    .table {
        color: var(--light);
    }
    .table th {
        border-color: rgba(255, 255, 255, 0.2);
    }
    .table td {
        border-color: rgba(255, 255, 255, 0.1);
    }
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Daftar Wisata</h2>
                <a href="{{ route('wisata.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-1"></i> Tambah Wisata
                </a>
            </div>
            
            <div class="glass-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wisata</th>
                                    <th>Lokasi</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data wisata akan ditampilkan di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
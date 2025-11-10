@extends('dashboard.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Laporan</h2>
            <div class="card">
                <div class="card-body">
                    <form id="reportForm">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="reportType">Jenis Laporan</label>
                                    <select class="form-select" id="reportType" name="reportType">
                                        <option value="kunjungan">Laporan Kunjungan</option>
                                        <option value="pendapatan">Laporan Pendapatan</option>
                                        <option value="wisata">Laporan Wisata</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="startDate">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="startDate" name="startDate">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="endDate">Tanggal Selesai</label>
                                    <input type="date" class="form-control" id="endDate" name="endDate">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-file-export me-1"></i> Generate Laporan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.getElementById('reportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Implementation for report generation will be added here
    alert('Fungsi generate laporan akan diimplementasikan');
});
</script>
@endpush
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Staff - KARYAWAN JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Nunito', sans-serif; background-color: #f8f9fc; }
        .sidebar { background-color: #4e73df; min-height: 100vh; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); font-weight: 600; padding: 10px 15px; }
        .sidebar .active { color: white !important; background: rgba(255,255,255,0.1); border-radius: 5px; }
        .card { border: none; border-radius: 10px; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15); }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar p-3 shadow">
            <div class="sidebar-brand d-flex align-items-center mb-4 text-white fw-bold">
                <i class="fas fa-laugh-wink fa-2x me-2"></i> KARYAWAN <sup>JTI</sup>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link active" href="{{ route('staff.dashboard') }}"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
                </li>
                <p class="small text-uppercase fw-bold opacity-50 mt-3 mb-1">Menu Staff</p>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('staff.perizinan') }}"><i class="fas fa-file-export me-2"></i> Pengajuan Cuti</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('staff.slip_gaji') }}"><i class="fas fa-file-invoice-dollar me-2"></i> Slip Gaji</a>
                </li>
            </ul>
        </nav>

        <main class="col-md-10 ms-sm-auto px-md-4">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h3 text-gray-800">Ringkasan Kerja</h1>
                <div class="fw-bold">Douglas McGee <span class="badge bg-primary">Staff</span></div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-white border-bottom">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-history me-2"></i> Riwayat Pengajuan Cuti</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Rentang Cuti</th>
                                    <th>Jenis</th>
                                    <th>Durasi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($riwayatCuti as $cuti)
                                <tr>
                                    <td>{{ $cuti['tanggal_pengajuan'] }}</td>
                                    <td><small class="text-muted">{{ $cuti['tgl_mulai'] ?? '-' }} s/d {{ $cuti['tgl_selesai'] ?? '-' }}</small></td>
                                    <td>{{ $cuti['jenis'] }}</td>
                                    <td><span class="badge bg-info text-white">{{ $cuti['durasi'] }} Hari</span></td>
                                    <td><span class="badge bg-{{ $cuti['warna'] }}">{{ $cuti['status'] }}</span></td>
                                </tr>
                                @empty
                                <tr><td colspan="5" class="text-center text-muted">Belum ada riwayat.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
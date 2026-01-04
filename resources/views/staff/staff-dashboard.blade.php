@extends('layouts.app')

@section('content')

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
@endsection
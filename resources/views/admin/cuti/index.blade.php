@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
            <a href="{{ route('karyawan.create') }}"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Tambah Karyawan</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
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

    </div>
@endsection

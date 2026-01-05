@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Riwayat Cuti Saya</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tanggal Pengajuan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayatCuti as $cuti)
            <tr>
                <!-- Tanggal Pengajuan -->
                <td>{{ $cuti->created_at->format('d M Y') }}</td>

                <!-- Tanggal Mulai & Selesai -->
                <td>{{ $cuti->tanggal_mulai }}</td>
                <td>{{ $cuti->tanggal_selesai }}</td>

                

                <!-- Jenis Cuti -->
                <td>{{ $cuti->jenis }}</td>

                <!-- Status -->
                <td>
                    <span class="badge 
                        @if($cuti->status == 'Pending') bg-warning
                        @elseif($cuti->status == 'Approved') bg-success
                        @elseif($cuti->status == 'Rejected') bg-danger
                        @else bg-secondary
                        @endif">
                        {{ $cuti->status }}
                    </span>
                </td>

                <!-- File -->
                <td>
                    @if($cuti->file)
                        <a href="{{ asset('storage/cuti/' . $cuti->file) }}" target="_blank">Lihat File</a>
                    @else
                        -
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center text-muted">Belum ada riwayat cuti.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

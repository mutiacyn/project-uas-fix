@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Daftar Pengajuan Cuti</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Pegawai</th>
                <th>Tanggal Pengajuan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Durasi</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayatCuti as $cuti)
            <tr>
                <!-- Pegawai -->
                <td>{{ $cuti->user->name }}</td>

                <!-- Tanggal Pengajuan -->
                <td>{{ $cuti->created_at->format('d M Y') }}</td>

                <!-- Tanggal Mulai & Selesai -->
                <td>{{ $cuti->tanggal_mulai }}</td>
                <td>{{ $cuti->tanggal_selesai }}</td>

                <!-- Durasi dalam hari -->
                <td>
                    {{ \Carbon\Carbon::parse($cuti->tanggal_mulai)
                        ->diffInDays(\Carbon\Carbon::parse($cuti->tanggal_selesai)) + 1 }} Hari
                </td>

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

                <!-- Aksi (Approve / Reject) -->
                <td>
                    @if($cuti->status == 'Pending')
                        <form action="{{ route('admin.cuti.approve', $cuti->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success btn-sm">Approve</button>
                        </form>
                        <form action="{{ route('admin.cuti.reject', $cuti->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </form>
                    @else
                        -
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="text-center text-muted">Belum ada pengajuan cuti.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

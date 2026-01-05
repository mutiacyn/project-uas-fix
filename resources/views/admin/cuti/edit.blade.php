@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Edit Pengajuan Cuti</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('admin.cuti.update', $cuti->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Pilih Pegawai -->
        <div class="mb-3">
            <label for="user_id" class="form-label">Pilih Pegawai</label>
            <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $cuti->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
            @error('user_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Jenis Cuti -->
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Cuti</label>
            <select name="jenis" id="jenis" class="form-select @error('jenis') is-invalid @enderror" required>
                <option value="Tahunan" {{ $cuti->jenis == 'Tahunan' ? 'selected' : '' }}>Tahunan</option>
                <option value="Sakit" {{ $cuti->jenis == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                <option value="Lainnya" {{ $cuti->jenis == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>
            @error('jenis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tanggal Mulai -->
        <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" value="{{ $cuti->tanggal_mulai }}" required>
            @error('tanggal_mulai')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tanggal Selesai -->
        <div class="mb-3">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" value="{{ $cuti->tanggal_selesai }}" required>
            @error('tanggal_selesai')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Alasan -->
        <div class="mb-3">
            <label for="alasan" class="form-label">Alasan</label>
            <textarea name="alasan" id="alasan" class="form-control @error('alasan') is-invalid @enderror" rows="3">{{ $cuti->alasan }}</textarea>
            @error('alasan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- File -->
        <div class="mb-3">
            <label for="file" class="form-label">Upload File (opsional)</label>
            <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror" accept=".pdf,.jpg,.png,.doc,.docx">
            @if($cuti->file)
                <small>File saat ini: <a href="{{ asset('storage/cuti/' . $cuti->file) }}" target="_blank">{{ $cuti->file }}</a></small>
            @endif
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="Pending" {{ $cuti->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Approved" {{ $cuti->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                <option value="Rejected" {{ $cuti->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Pengajuan</button>
        <a href="{{ route('admin.cuti.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

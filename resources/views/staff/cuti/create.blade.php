@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Pengajuan Cuti</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('cuti.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Pilih Pegawai (Admin) / Hidden (Staff) -->
        @if(auth()->user()->hasRole('admin'))
            <div class="mb-3">
                <label for="user_id" class="form-label">Pilih Pegawai</label>
                <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror" required>
                    <option value="">-- Pilih Pegawai --</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }} ({{ $user->email }})
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        @else
            <!-- Untuk staff, otomatis pakai user login -->
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        @endif

        <!-- Tanggal Mulai -->
        <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" value="{{ old('tanggal_mulai') }}" required>
            @error('tanggal_mulai')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tanggal Selesai -->
        <div class="mb-3">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" value="{{ old('tanggal_selesai') }}">
            @error('tanggal_selesai')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <!-- Jenis Cuti -->
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Cuti</label>
            <input type="text" name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{ old('jenis') }}" required>
            @error('jenis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <!-- File -->
        <div class="mb-3">
            <label for="file" class="form-label">Upload File (Opsional)</label>
            <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pengajuan</button>
    </form>
</div>
@endsection

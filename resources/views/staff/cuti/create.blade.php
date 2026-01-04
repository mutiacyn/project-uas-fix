@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pengajuan Cuti / Izin</h2>

    <form action="{{ route('cuti.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Jenis</label>
            <select name="jenis" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Cuti">Cuti</option>
                <option value="Izin">Izin</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Sub-Jenis</label>
            <select name="sub_jenis" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Tahunan">Tahunan</option>
                <option value="Sakit">Sakit</option>
                <option value="Pernikahan">Pernikahan</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alasan</label>
            <textarea name="alasan" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Upload Berkas (opsional)</label>
            <input type="file" name="file" class="form-control" accept=".pdf,.jpg,.png,.jpeg">
        </div>

        <button class="btn btn-primary">Kirim Pengajuan</button>
    </form>
</div>
@endsection

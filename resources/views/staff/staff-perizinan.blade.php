<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Perizinan - KARYAWAN JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="{{ route('staff.dashboard') }}" class="btn btn-secondary mb-3">
                    <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
                </a>
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3 text-center">
                        <h5 class="mb-0">Form Pengajuan Izin Cuti</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('staff.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">Jenis Cuti</label>
                                <select name="jenis_cuti" class="form-select" required>
                                    <option value="" disabled selected>Pilih jenis cuti...</option>
                                    <option value="Cuti Tahunan">Cuti Tahunan</option>
                                    <option value="Izin Sakit">Izin Sakit</option>
                                    <option value="Izin Alasan Penting">Izin Alasan Penting</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Tanggal Mulai</label>
                                    <input type="date" name="tgl_mulai" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Tanggal Selesai</label>
                                    <input type="date" name="tgl_selesai" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Upload Surat Keterangan</label>
                                <input type="file" name="file_cuti" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Kirim Pengajuan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
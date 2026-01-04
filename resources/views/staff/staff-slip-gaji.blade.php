<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Slip Gaji - KARYAWAN JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="{{ route('staff.dashboard') }}" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                <div class="card shadow border-0">
                    <div class="card-header bg-success text-white py-3 text-center">
                        <h5 class="mb-0">SLIP GAJI KARYAWAN</h5>
                        <small>{{ $dataGaji['bulan'] }}</small>
                    </div>
                    <div class="card-body p-4">
                        <p class="mb-1"><strong>Nama:</strong> {{ $dataGaji['nama'] }}</p>
                        <p class="mb-3"><strong>Jabatan:</strong> {{ $dataGaji['jabatan'] }}</p>
                        <hr>
                        <div class="d-flex justify-content-between mb-2"><span>Gaji Pokok</span><span>Rp {{ number_format($dataGaji['gaji_pokok'], 0, ',', '.') }}</span></div>
                        <div class="d-flex justify-content-between mb-2"><span>Tunjangan</span><span>Rp {{ number_format($dataGaji['tunjangan'], 0, ',', '.') }}</span></div>
                        <div class="d-flex justify-content-between mb-2 text-danger"><span>Potongan</span><span>- Rp {{ number_format($dataGaji['potongan'], 0, ',', '.') }}</span></div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold h5 text-primary"><span>Total Diterima</span><span>Rp {{ number_format($totalGaji, 0, ',', '.') }}</span></div>
                        <button onclick="window.print()" class="btn btn-outline-dark w-100 mt-4"><i class="fas fa-print"></i> Cetak Slip</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
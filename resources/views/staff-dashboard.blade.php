<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Staff - KARYAWAN JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Nunito', sans-serif; background-color: #f8f9fc; }
        .sidebar { background-color: #4e73df; min-height: 100vh; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); font-weight: 600; margin-bottom: 5px; }
        .sidebar .nav-link:hover { color: white; background: rgba(255,255,255,0.1); border-radius: 5px; }
        .sidebar .active { color: white !important; }
        .card { border: none; border-radius: 10px; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15); }
        .card-header { background-color: #f8f9fc; border-bottom: 1px solid #e3e6f0; font-weight: bold; color: #4e73df; }
        .border-left-primary { border-left: 0.25rem solid #4e73df !important; }
        .border-left-success { border-left: 0.25rem solid #1cc88a !important; }
        .border-left-info { border-left: 0.25rem solid #36b9cc !important; }
        .border-left-warning { border-left: 0.25rem solid #f6c23e !important; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar p-3">
            <div class="sidebar-brand d-flex align-items-center mb-4">
                <div class="sidebar-brand-icon rotate-n-15 me-2">
                    <i class="fas fa-laugh-wink fa-2x"></i>
                </div>
                <div class="sidebar-brand-text fw-bold">KARYAWAN <sup>JTI</sup></div>
            </div>
            <hr class="text-white">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-fw fa-tachometer-alt me-2"></i> Dashboard</a></li>
                <p class="small text-uppercase fw-bold opacity-50 mt-3 mb-1">Menu Staff</p>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-user me-2"></i> Profil Saya</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-calendar-check me-2"></i> Presensi</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-tasks me-2"></i> Tugas Kerja</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-wallet me-2"></i> Slip Gaji</a></li>
            </ul>
        </nav>

        <main class="col-md-10 ms-sm-auto px-md-4">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom bg-white p-3 shadow-sm rounded">
                <form class="d-flex w-50">
                    <input class="form-control me-2" type="search" placeholder="Cari data..." aria-label="Search">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <div class="d-flex align-items-center">
                    <div class="me-3 position-relative">
                        <i class="fas fa-bell fa-fw text-gray-400"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3+</span>
                    </div>
                    <span class="me-2 text-gray-600 small">Douglas McGee (Staff)</span>
                    <img class="img-profile rounded-circle" width="30" src="https://ui-avatars.com/api/?name=Douglas+McGee">
                </div>
            </div>

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Ringkasan Kerja</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gaji (Bulan Ini)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 5.500.000</div>
                                </div>
                                <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Akumulasi Gaji (2024)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 66.000.000</div>
                                </div>
                                <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Target Tugas</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">75%</div>
                                        </div>
                                        <div class="col"><div class="progress ms-2" style="height: 8px;"><div class="progress-bar bg-info" role="progressbar" style="width: 75%"></div></div></div>
                                    </div>
                                </div>
                                <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Izin Menunggu</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                                </div>
                                <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="card mb-4">
                        <div class="card-header py-3">Produktivitas Kerja</div>
                        <div class="card-body">
                            <canvas id="myAreaChart" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="card mb-4">
                        <div class="card-header py-3">Sumber Tugas</div>
                        <div class="card-body">
                            <canvas id="myPieChart" height="230"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Area Chart (Produktivitas)
    const ctx = document.getElementById('myAreaChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Mar", "May", "Jul", "Sep", "Nov"],
            datasets: [{
                label: "Produktivitas",
                data: [5000, 15000, 10000, 25000, 20000, 40000],
                borderColor: "#4e73df",
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                tension: 0.3,
                fill: true
            }]
        }
    });

    // Pie Chart (Sumber Tugas)
    const ctxPie = document.getElementById('myPieChart');
    new Chart(ctxPie, {
        type: 'doughnut',
        data: {
            labels: ["Project A", "Project B", "Lainnya"],
            datasets: [{
                data: [55, 30, 15],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutout: '70%'
        }
    });
</script>

</body>
</html>
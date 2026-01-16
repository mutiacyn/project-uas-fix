@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
    </div>

    <div class="row">

        <!-- Total Karyawan -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Karyawan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $totalKaryawan }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Cuti -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Pengajuan Cuti
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $totalCuti }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cuti Pending -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Cuti Pending
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $cutiPending }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hourglass-half fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Gaji -->
        {{-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Gaji Bulan Ini
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Rp {{ number_format($totalGajiBulanan, 0, ',', '.') }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>

    <div class="row">

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Cuti</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">
                        Cuti Disetujui
                        <span class="float-right">{{ $cutiApproved }}</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated                        " role="progressbar"
                        style="width: {{ $barApproved }}%">
                        {{ number_format($barApproved, 1) }}%</div>
                    </div>

                    <h4 class="small font-weight-bold">
                        Cuti Menunggu
                        <span class="float-right">{{ $cutiPending }}</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated                        " role="progressbar"
                        style="width: {{ $barPending }}%">
                        {{ number_format($barPending, 1) }}%</div>
                    </div>

                    <h4 class="small font-weight-bold">
                        Cuti Batal
                        <span class="float-right">{{ $cutiRejected }}</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated                        " role="progressbar"
                        style="width: {{ $barRejected }}%">
                        {{ number_format($barRejected, 1) }}%</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Sistem</h6>
                </div>
                <div class="card-body">
                    <p>Sistem ini digunakan untuk mengelola:</p>
                    <ul>
                        <li>Data Karyawan</li>
                        <li>Pengajuan dan Persetujuan Cuti</li>
                        <li>Perhitungan Gaji Karyawan</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

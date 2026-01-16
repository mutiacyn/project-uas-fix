@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Dashboard Staff</h1>

    <div class="row">

        <!-- Total Cuti -->
        <div class="col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Pengajuan
                    </div>
                    <div class="h5 font-weight-bold text-gray-800">
                        {{ $totalCuti }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending -->
        <div class="col-md-3 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Menunggu
                    </div>
                    <div class="h5 font-weight-bold text-gray-800">
                        {{ $cutiPending }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Approved -->
        <div class="col-md-3 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Disetujui
                    </div>
                    <div class="h5 font-weight-bold text-gray-800">
                        {{ $cutiApproved }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Rejected -->
        <div class="col-md-3 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Ditolak
                    </div>
                    <div class="h5 font-weight-bold text-gray-800">
                        {{ $cutiRejected }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Info -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
        </div>
        <div class="card-body">
            <p>
                Halaman ini menampilkan status pengajuan cuti milik Anda.
                Silakan ajukan cuti dan pantau proses persetujuannya.
            </p>
        </div>
    </div>

</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
        <a href="{{ route('karyawan.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Tambah Karyawan
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
        </div>
        <div class="card-body">

            <!-- Filter Search -->
            <form action="{{ route('karyawan.index') }}" method="GET" class="mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Cari Nama atau Email..." value="{{ request('search') }}">
                    </div>

                    <div class="col-md-3">
                        <select name="divisi_id" class="form-control">
                            <option value="">-- Semua Divisi --</option>
                            @foreach($divisis as $divisi)
                                <option value="{{ $divisi->id }}" {{ request('divisi_id') == $divisi->id ? 'selected' : '' }}>
                                    {{ $divisi->nama_divisi }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select name="jabatan_id" class="form-control">
                            <option value="">-- Semua Jabatan --</option>
                            @foreach($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}" {{ request('jabatan_id') == $jabatan->id ? 'selected' : '' }}>
                                    {{ $jabatan->nama_jabatan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100 mb-2">Cari</button>
                        @if(request()->has('search') || request()->has('divisi_id') || request()->has('jabatan_id'))
                            <a href="{{ route('karyawan.index') }}" class="btn btn-danger w-100">Reset</a>
                        @endif
                    </div>
                </div>
            </form>

            <!-- Tabel Karyawan -->
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Birthday</th>
                            <th>Divisi</th>
                            <th>Jabatan</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($karyawans as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->user->name }}</td>
                            <td>{{ $k->birthday }}</td>
                            <td>{{ $k->divisi->nama_divisi }}</td>
                            <td>{{ $k->jabatan->nama_jabatan }} (Lv {{ $k->jabatan->level }})</td>
                            <td>{{ $k->gender }}</td>
                            <td>{{ $k->user->email }}</td>
                            <td>{{ $k->phone }}</td>
                            <td>{{ $k->alamat }}</td>
                            <td>
                                <a href="{{ route('karyawan.edit',$k) }}" class="btn btn-info btn-icon-split mb-1">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>

                                <form action="{{ route('karyawan.destroy',$k) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-split"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center">Data tidak ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3">
                {{ $karyawans->withQueryString()->links() }}
            </div>

        </div>
    </div>

</div>
@endsection

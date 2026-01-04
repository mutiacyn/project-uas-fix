@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
            <a href="{{ route('karyawan.create') }}"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Tambah Karyawan</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                {{-- <th>ID Karyawan</th> --}}
                                <th>Birthday</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Alamat</th>
                                {{-- <th>Status</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                        <tr>
                            <th>NO.</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Divisi</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> --}}
                        <tbody>
                            @foreach($karyawans as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->user->name }}</td>
                                {{-- <td>{{ $k->karyawan_id }}</td> --}}
                                <td>{{ $k->birthday }}</td>
                                <td>{{ $k->divisi->nama_divisi }}</td>
                                <td>{{ $k->jabatan->nama_jabatan }} (Lv {{ $k->jabatan->level }})</td>
                                <td>{{ $k->gender }}</td>
                                <td>{{ $k->user->email }}</td>
                                <td>{{ $k->phone }}</td>
                                <td>{{ $k->alamat }}</td>
                                    
                                    <td>

                                        <a href="{{ route('karyawan.edit',$k) }}"
                                            class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>


                                        <form action="{{ route('karyawan.destroy',$k) }}" method="POST"
                                            style="display:inline">

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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

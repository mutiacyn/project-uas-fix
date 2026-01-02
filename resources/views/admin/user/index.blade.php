@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
            <a href="{{ route('user.create') }}"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Tambah User</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>ID User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
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
                            @foreach ($dataUser as $index => $item)
                                <tr>
                                    <td>{{ $dataUser->firstItem() + $index }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if ($item->status == 'staff')
                                            <span class="badge badge-warning">Staff</span>
                                        @else
                                            <span class="badge badge-succes">Admin</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 'aktif')
                                            <span class="badge badge-primary">Aktif</span>
                                        @else
                                            <span class="badge badge-danger">Tidak Aktif</span>
                                        @endif
                                    </td>                                    
                                    <td>

                                        <a href="{{ route('user.edit', $item->user_id) }}"
                                            class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>


                                        <form action="{{ route('user.destroy', $item->user_id) }}" method="POST"
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

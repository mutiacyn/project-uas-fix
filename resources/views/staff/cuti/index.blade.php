@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Pengajuan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Staff</th>
                <th>Jenis</th>
                <th>Sub-Jenis</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Alasan</th>
                <th>Berkas</th>
                <th>Status</th>
                @role('admin')<th>Aksi</th>@endrole
            </tr>
        </thead>
        <tbody>
            @foreach($cuti as $c)
            <tr>
                <td>{{ $c->user->name }}</td>
                <td>{{ $c->jenis }}</td>
                <td>{{ $c->sub_jenis }}</td>
                <td>{{ $c->tanggal_mulai }}</td>
                <td>{{ $c->tanggal_selesai ?? '-' }}</td>
                <td>{{ $c->alasan }}</td>
                <td>
                    @if($c->file)
                        <a href="{{ asset('storage/cuti_files/'.$c->file) }}" target="_blank">Lihat Berkas</a>
                    @else
                        -
                    @endif
                </td>
                <td>{{ $c->status }}</td>
                @role('admin')
                <td>
                    <form action="{{ route('cuti.updateStatus', $c->id) }}" method="POST">
                        @csrf
                        <select name="status" onchange="this.form.submit()">
                            <option value="Pending" {{ $c->status=='Pending'?'selected':'' }}>Pending</option>
                            <option value="Approved" {{ $c->status=='Approved'?'selected':'' }}>Approved</option>
                            <option value="Rejected" {{ $c->status=='Rejected'?'selected':'' }}>Rejected</option>
                        </select>
                    </form>
                </td>
                @endrole
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

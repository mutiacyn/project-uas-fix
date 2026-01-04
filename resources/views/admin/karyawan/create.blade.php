@extends('layouts.app')

@section('content')
<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Tambah Karyawan</h1>
                                </div>

                                <!-- Form -->
                                <form action="{{ route('karyawan.store') }}" method="POST" class="user">
                                    @csrf

                                    <!-- Nama (dari tabel users) -->
                                    <div class="form-group">
                                        <label for="name" class="font-weight-bold">Nama Staff</label>
                                        <select name="user_id" class="form-control" required>
                                            <option value="">-- Pilih Staff --</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Birthday -->
                                    <div class="form-group">
                                        <label for="birthday" class="font-weight-bold">Birthday</label>
                                        <input type="date" id="birthday" name="birthday"
                                            class="form-control" value="{{ old('birthday') }}" required>
                                    </div>

                                    <!-- Divisi -->
                                    <div class="form-group">
                                        <label for="divisi_id" class="font-weight-bold">Divisi</label>
                                        <select name="divisi_id" class="form-control" required>
                                            <option value="">-- Pilih Divisi --</option>
                                            @foreach($divisions as $d)
                                                <option value="{{ $d->id }}">{{ $d->nama_divisi }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Jabatan -->
                                    <div class="form-group">
                                        <label for="jabatan_id" class="font-weight-bold">Jabatan</label>
                                        <select name="jabatan_id" class="form-control" required>
                                            <option value="">-- Pilih Jabatan --</option>
                                            @foreach($positions as $j)
                                                <option value="{{ $j->id }}">{{ $j->nama_jabatan }} (Lv {{ $j->level }})</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Gender -->
                                    <div class="form-group">
                                        <label for="gender" class="font-weight-bold">Gender</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>

                                    <!-- Phone -->
                                    <div class="form-group">
                                        <label for="phone" class="font-weight-bold">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Masukkan Nomor HP" value="{{ old('phone') }}">
                                    </div>

                                    <!-- Alamat -->
                                    <div class="form-group">
                                        <label for="alamat" class="font-weight-bold">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Tambah Karyawan
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</body>
@endsection

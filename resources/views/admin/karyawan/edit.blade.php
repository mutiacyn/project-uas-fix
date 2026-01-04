{{-- @extends('layouts.app')

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
                                <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form action="{{ route('karyawan.update', $dataKaryawan->karyawan_id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Nama</h6>
                                            <div class="form-group">
                                                <input type="text" name="nama" id="nama"
                                                    placeholder="Masukkan nama" class="form-control form-control-user rounded-pill px-3">
                                            </div>
                                            
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Birthday</h6>
                                            <div class="form-group">
                                                <input type="date" id="birthday" name="birthday" class="form-control form-control-user rounded-pill px-3"
                                                 value="{{ old('birthday') }}">
                                            </div>
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Divisi</h6>
                                            <div class="form-group">
                                                <input type="text" name="divisi" id="divisi"
                                                    placeholder="Masukkan Divisi" class="form-control form-control-user rounded-pill px-3">
                                            </div>
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Jabatan</h6>
                                            <div class="form-group">
                                                <input type="text" name="jabatan" id="jabatan"
                                                    placeholder="Masukkan Jabatan" class="form-control form-control-user rounded-pill px-3">
                                            </div>
                                            
                                            <div class="mb-4">
                                                <label for="gender" class="m-0 font-weight-bold text-gray-900 mb-2">
                                                    Gender
                                                </label>
                                                <select id="gender" name="gender"
                                                    class="form-control rounded-pill px-3"
                                                    required>
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                                        Male
                                                    </option>
                                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                        Female
                                                    </option>
                                                </select>
                                            </div>
                                            
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Email</h6>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user rounded-pill px-3"
                                                    id="email" aria-describedby="emailHelp" name="email"
                                                    placeholder="Enter Email Address...">
                                            </div>
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Phone</h6>
                                            <div class="form-group">
                                                <input type="text" name="phone" id="phone"
                                                    placeholder="Masukkan Jabatan" class="form-control form-control-user rounded-pill px-3">
                                            </div>


                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Edit Karyawan
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
@endsection --}}

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
                                <form action="{{ route('karyawan.update', $karyawan->karyawan_id) }}" method="POST" class="user">
                                    @csrf
                                    @method('PUT')
                                    
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

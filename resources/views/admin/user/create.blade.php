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
                                <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form action="{{ route('user.store') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" name="name" class="form-control form-control-user" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control form-control-user"
                                                    required>
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password"
                                                    class="form-control form-control-user" required>
                                            </div>

                                            <button class="btn btn-primary btn-user btn-block">
                                                Simpan User
                                            </button>
                                            <a href="{{ route('user.index') }}" class="btn btn-primary btn-user btn-block">Kembali</a>
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

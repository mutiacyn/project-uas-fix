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
                                        <form action="{{ route('jabatan.store') }}" method="POST"  class="user">
                                            @csrf
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Nama Jabatan</h6>
                                            <div class="form-group">
                                                <input type="text" name="nama_jabatan" placeholder="Nama Jabatan" class="form-control form-control-user">
                                            </div>
                                            
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Level</h6>
                                            <div class="form-group">
                                                <input type="text" name="level" placeholder="Level" class="form-control form-control-user">
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Simpan
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

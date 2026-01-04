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
                                        <form action="{{ route('divisi.update', $division->id) }}" method="POST"  class="user">
                                            @csrf
                                            @method('PUT')
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Nama Divisi</h6>
                                            <div class="form-group">
                                                <input type="text" name="nama_divisi" 
                                                value="{{ $division->nama_divisi }}" class="form-control form-control-user">
                                            </div>
                                            
                                            <h6 class="m-0 font-weight-bold text-gray-900 mb-2">Keterangan</h6>
                                            <div class="form-group">
                                                <textarea name="keterangan" id="keterangan" cols="30" rows="10"
                                                class="form-control"> {{ $division->keterangan }}</textarea>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Update
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

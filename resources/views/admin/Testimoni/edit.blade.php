@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">UPDATE TESTIMONIAL</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ Route('testimoni.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    <h6 class="mb-0 text-uppercase"> UPDATE TESTIMONIAL </h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('testimoni.update', $testimoni->id ) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="id_pengguna" class="form-label">id_pengguna</label>
                    <input class="form-control @error('id_pengguna') is-invalid @enderror" type="text" name="id_pengguna"
                        id="id_pengguna"  value="{{ $testimoni->id_pengguna }} ">
                    @error('id_pengguna')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"> Email </label>
                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                        id="email" value="{{ $testimoni->pengguna->email }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggapan" class="form-label"> Tangapan </label>
                    <input class="form-control @error('tanggapan') is-invalid @enderror" type="text" name="tanggapan"
                        id="tanggapan">
                    @error('tanggapan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="float-end">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ADD USERS</div>
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
                <a href="{{ Route('pengguna.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    <h6 class="mb-0 text-uppercase"> ADD PERTANYAAN </h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pertanyaan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <textarea class="form-control @error('pertanyaan') is-invalid @enderror" type="text" aria-label="With textarea" placeholder="Pertanyaan" dimensi="pertanyaan"
                    id="pertanyaan"></textarea>
                    @error('pertanyaan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}
                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <input class="form-control @error('pertanyaan') is-invalid @enderror" type="text" name="pertanyaan"
                    id="pertanyaan" placeholder="pertanyaan">
                    @error('pertanyaan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="dimensi" class="form-label">Dimensi</label>
                    <input class="form-control @error('dimensi') is-invalid @enderror" type="text" name="dimensi"
                    id="dimensi" placeholder="dimensi">
                    @error('dimensi')
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

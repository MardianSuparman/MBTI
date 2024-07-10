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
                <a href="{{ Route('jeniskepribadian.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    <h6 class="mb-0 text-uppercase"> ADD PERTANYAAN </h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jeniskepribadian.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <textarea class="form-control @error('pertanyaan') is-invalid @enderror" type="text" aria-label="With textarea" placeholder="Pertanyaan" pengertian="pertanyaan"
                    id="pertanyaan"></textarea>
                    @error('pertanyaan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}
                <div class="mb-3">
                    <label for="jenis_kepribadian" class="form-label">Jenis Kepribadian</label>
                    <input class="form-control @error('jenis_kepribadian') is-invalid @enderror" type="text" name="jenis_kepribadian"
                    id="jenis_kepribadian" placeholder="jenis kepribadian">
                    @error('jenis_kepribadian')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pengertian" class="form-label">Pengertian</label>
                    <input class="form-control @error('pengertian') is-invalid @enderror" type="text" name="pengertian"
                    id="pengertian" placeholder="pengertian">
                    @error('pengertian')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kelebihan" class="form-label">Kelebihan</label>
                    <input class="form-control @error('kelebihan') is-invalid @enderror" type="text" name="kelebihan"
                    id="kelebihan" placeholder="kelebihan">
                    @error('kelebihan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kekurangan" class="form-label">Kekurangan</label>
                    <input class="form-control @error('kekurangan') is-invalid @enderror" type="text" name="kekurangan"
                    id="kekurangan" placeholder="kekurangan">
                    @error('kekurangan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="karir" class="form-label">Karir</label>
                    <input class="form-control @error('karir') is-invalid @enderror" type="text" name="karir"
                    id="karir" placeholder="karir">
                    @error('karir')
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

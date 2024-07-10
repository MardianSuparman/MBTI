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
                <a href="{{ Route('hasil.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    <h6 class="mb-0 text-uppercase"> ADD HASIL </h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('hasil.store') }}" method="post" enctype="multipart/form-data">
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
                    <label for="id_pengguna">Pengguna</label>
                    <select name="id_pengguna" id="id_pengguna" class="form-control">
                        @foreach ($pengguna as $item)
                            <option value="{{$item->id}}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_jawaban">Jawaban</label>
                    <select name="id_jawaban" id="id_jawaban" class="form-control">
                        @foreach ($jawaban as $item)
                            <option value="{{$item->id}}">{{ $item->jawaban }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_jenis_kepribadian">Jenis Kepribadian</label>
                    <select name="id_jenis_kepribadian" id="id_jenis_kepribadian" class="form-control">
                        @foreach ($jeniskepribadian as $item)
                            <option value="{{$item->id}}">{{ $item->jenis_kepribadian }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="float-end">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection

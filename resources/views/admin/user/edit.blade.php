@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">UPDATE USERS</div>
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
                <a href="{{ Route('user.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    <h6 class="mb-0 text-uppercase"> UPDATE USERS </h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $user->id ) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                        id="name"  value="{{ $user->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"> Email </label>
                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                        id="email" value="{{ $user->email }}"">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"> Password </label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                        id="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"> Password confirmation </label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confimation"
                        id="password_confirmation" placeholder="Password Confirmation">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="isAdmin" class="form-label"> Role </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="isAdmin"
                            @error('isAdmin') is-invalid @enderror" name="isAdmin" value="0" checked>
                        <label class="form-check-label" for="isAdmin">
                            User
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="isAdmin"
                            @error('isAdmin') is-invalid @enderror" name="isAdmin" value="1">
                        <label class="form-check-label" for="isAdmin">
                            Admin
                        </label>
                    </div>
                </div>
                <div class="float-end">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection

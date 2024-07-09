@extends('layouts.user')
@section('content')
<!-- banner -->
<section class="banner_main">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-5">
                <div class="text-bg">
                    <h1>KNOW<br> YOUR TYPE</h1>
                    <span>Personality Test</span>
                    <p>MBTI (Myers-Briggs Type Indicator) adalah salah satu alat psikologi yang digunakan untuk
                        mengklasifikasikan kepribadian seseorang berdasarkan empat dimensi utama </p>
                    <a href="#" class="btn">Mulai Test</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="text-img">
                    {{-- <figure><img src="{{ asset('assets/front/images/mbti.png') }}" /></figure> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<div class="card">
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="isAdmin" class="form-label"> Role </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isAdmin"
                        @error('isAdmin') is-invalid @enderror" name="isAdmin" value="0" checked>
                    <label class="form-check-label" for="isAdmin">
                        User
                    </label>
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

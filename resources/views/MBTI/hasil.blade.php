@extends('layouts.user')
@section('content')
@php
$hasil = App\Models\Hasil::findOrFail($id)->get();
@endphp
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    {{-- <h2>Hallo, {{Auth::user('')->name}}</h2> --}}
                    <span>hasil test MBTI</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="mb-3">
                <h4><strong>Nama:</strong></h4>
                <p>{{ Auth::user()->name }}</p>
            </div>
            <div class="mb-3">
                <h4><strong>Email:</strong></h4>
                <p>{{ Auth::user()->email }}</p>
            </div>
            <div class="mb-3">
                <h4><strong>Deskripsi:</strong></h4>
                <p>{{ $hasil->jenis_kepribadian->pengertian }}</p>
            </div>
            <div class="mb-3">
                <h4><strong>Kekurangan:</strong></h4>
                <p>{{ $hasil->jenis_kepribadian->kekurangan }}</p>
            </div>
            <div class="mb-3">
                <h4><strong>Kelebihan:</strong></h4>
                <p>{{ $hasil->jenis_kepribadian->kelebihan }}</p>
            </div>
            <div class="mb-3">
                <h4><strong>Pekerjaan yang Cocok:</strong></h4>
                <p>{{ $hasil->jenis_kepribadian->karir }}</p>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ url('test') }}" class="btn btn-primary">Kembali ke Tes</a>
            <a href="{{ route('mbti.result.pdf', $mbtiResult->id) }}" class="btn btn-danger">Unduh PDF</a>
        </div>
    </div>
    </div>
</div>
@endsection

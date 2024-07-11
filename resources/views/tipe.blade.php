@extends('layouts.user')
@section('content')
@php
$tipe = App\Models\JenisKepribadian::orderBy('id', 'asc')->get();
@endphp
<div class="section">
    <div class="container">
        <div class="row">
            @foreach ($tipe as $item)
            <div class="col-md-4">
                <div class="container ">
                    <h2>{{$item->jenis_kepribadian}}</h2>
                    <p>
                        <h4>Penjelasan</h4>{{$item->pengertian}}
                        <br>
                        Kelebihan : {{$item->kelebihan}}
                        <br>
                        Kekurangan : {{$item->kekurangan}}
                        <br>
                        Saran Karir : {{$item->karir}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

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
   <!-- contact -->
   <div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 ">
                <form class="main_form">
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="contactus" placeholder="Name" type="text" name="Name">
                        </div>
                        <div class="col-sm-12">
                            <input class="contactus" placeholder="Email" type="text" name=" Email">
                        </div>
                        <div class="col-sm-12">
                            <input class="contactus" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-sm-12">
                            <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button class="send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
</div>
@endsection

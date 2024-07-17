@extends('layouts.user')
@section('content')

<!-- business -->
<div class="business">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <span>Ketahui dirimu lebih dalam</span>
                    <h2>Tentukan Titik Awal Untuk Menentukan Karir Anda</h2>
                    {{-- <p>It is a long established fact that a reader will be distracted by the readable content of a
                        page</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="business_box ">
                            <figure><img src="{{asset('assets/front/images/business_img.jpg')}}" alt="#" /></figure>
                            <p>Tes kepribadian dapat membantu individu dalam memilih karir yang sesuai dengan minat,
                                nilai, dan kecenderungan kepribadian mereka. Dengan Memahami kepribadian kita membantu
                                kita memahami preferensi dan cara terbaik untuk bekerja dan  memungkinkan
                                kita untuk mengidentifikasi keterampilan yang perlu ditingkatkan untuk meningkatkan
                                kinerja dalam karir</p>
                            {{-- <a class="read_more" href="#">Read more</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end business -->

<!-- Projects -->
<div class="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <span>Ketahui dirimu lebih dalam</span>
                    <h2>APA ITU PERSONALITY TEST</h2>
                    {{-- <p></p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="projects_box ">
                            <figure><img src="{{asset('assets/front/images/projects_img.png')}}" alt="#" /></figure>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="projects_box ">
                            <p>Tes MBTI bertujuan untuk membantu individu memahami preferensi mereka sendiri dalam
                                setiap dimensi ini, dan dari hasilnya, mereka diklasifikasikan ke dalam salah satu dari
                                16 tipe kepribadian yang berbeda (misalnya, INTJ, ENFP, ISTP, dsb.). Ini dapat
                                memberikan wawasan tentang gaya komunikasi, kecenderungan karir, dinamika hubungan, dan
                                cara individu berinteraksi dengan dunia di sekitarnya. Namun, penting untuk dicatat
                                bahwa MBTI bukanlah alat diagnostik, melainkan alat deskriptif yang membantu individu
                                memahami preferensi mereka sendiri dalam berbagai situasi</p>
                            {{-- <a class="read_more" href="#">Read more</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end projects -->

<!-- Testimonial -->
<div class="section">
    <div class="container">
        <div id="" class="Testimonial">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="Testimonial_box">
                        <i><img src="{{asset('assets/front/images/plan1.png')}}" alt="#" /></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="Testimonial_box">
                        <h4>Donals</h4>
                        <p>Tof Lorem Ipsum, you need to be There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration in some form, by injected humour, or
                            randomised words which don't look even slightly believable. If you are going to use a pass
                            <br>
                            age of Lorem Ipsum, you need to be
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Testimonial -->

<!-- contact -->
{{-- <div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contact us</h2>
                    <span>There are many variations of passages of Lorem Ipsum available, but the </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <form class="main_form ">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="form_contril" placeholder="Name " type="text" name="Name ">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="Phone Number" type="text" name=" Phone Number">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
<!-- end contact -->
@endsection

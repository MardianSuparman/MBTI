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
                        <a href="#">Mulai Test</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-img">
                        <figure><img src="{{ asset('assets/front/images/mbti.png') }}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- Hosting -->
    <div id="" class="hosting">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Apa Itu MBTI Test?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="web_hosting">
                        <figure><img src="{{ asset('assets/front/images/web.jpg') }}" alt="#" /></figure>
                        <p>MBTI (Myers-Briggs Type Indicator) adalah salah satu alat psikologi yang digunakan untuk
                            mengklasifikasikan kepribadian seseorang berdasarkan empat dimensi utama:

                            1. **Ekstrovert (E) vs Introvert (I)**: Bagaimana seseorang mendapatkan energi—dari interaksi
                            sosial dan lingkungan luar (Ekstrovert) atau dari waktu sendiri dan refleksi internal
                            (Introvert).

                            2. **Intuisi (N) vs Sensori (S)**: Cara seseorang mengumpulkan informasi—apakah mereka lebih
                            cenderung memperhatikan detail konkret dan fakta (Sensori) atau lebih terbuka terhadap ide-ide
                            baru dan melihat potensi (Intuisi).

                            3. **Pemikiran (T) vs Perasaan (F)**: Bagaimana seseorang membuat keputusan—apakah mereka lebih
                            cenderung menggunakan logika dan analisis obyektif (Pemikiran) atau mempertimbangkan nilai-nilai
                            dan dampak emosional (Perasaan).

                            4. **Menilai (J) vs Persepsi (P)**: Bagaimana seseorang merencanakan dan mengatur hidup
                            mereka—apakah mereka lebih suka mengatur waktu mereka dan mengambil keputusan (Menilai) atau
                            lebih suka fleksibel dan terbuka terhadap pengalaman baru (Persepsi).

                            Gabungan preferensi pada empat dimensi ini menghasilkan 16 tipe kepribadian yang berbeda.
                            Misalnya, seseorang bisa menjadi tipe INFP (Introvert, Intuisi, Perasaan, Persepsi) atau ESTJ
                            (Ekstrovert, Sensori, Pemikiran, Menilai), dan setiap tipe memiliki ciri-ciri unik yang
                            menggambarkan cara seseorang berinteraksi dengan dunia dan membuat keputusan.

                            MBTI sering digunakan dalam berbagai konteks, termasuk pengembangan diri, manajemen tim, dan
                            konseling, meskipun pendekatan ini juga memiliki kritik dan kontroversi. Penting untuk diingat
                            bahwa MBTI adalah alat yang membantu memahami preferensi kepribadian seseorang, bukan penentu
                            tunggal dari identitas atau perilaku mereka.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Hosting -->
    <!-- Services  -->
    <div id="service" class="Services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Best Services</h2>
                        <p>Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad <br>
                            teimpor sittem elit inuning ut sed.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                        <i><img src="{{ asset('assets/front/images/service1.png') }}" alt="#" /></i>
                        <h3> Shared Hosting</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                        <i><img src="{{ asset('assets/front/images/service2.png') }}" alt="#" /></i>
                        <h3>Dedicated Hosting</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                        <i><img src="{{ asset('assets/front/images/service3.png') }}" alt="#" /></i>
                        <h3>Domain Registration</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                        <i><img src="{{ asset('assets/front/images/service4.png') }}" alt="#" /></i>
                        <h3>VPS Hosting</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                        <i><img src="{{ asset('assets/front/images/service5.png') }}" alt="#" /></i>
                        <h3>Cloud Hosting</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                        <i><img src="{{ asset('assets/front/images/service6.png') }}" alt="#" /></i>
                        <h3>Reseller Hosting</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <a class="read_more" href="#">Read More</a>
            </div>
        </div>
    </div>
    <!-- end Servicess -->
    <!-- why -->
    <div id="why" class="why">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Why you should choose </h2>
                        <p>making it look like readable English. Many desktop publishing packages and web page editors now
                            use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many
                            web sites still </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div id="box_ho" class="why-box">
                        <i><img src="{{ asset('assets/front/images/why1.png') }}" alt="#" /></i>
                        <h3>Powerful Features</h3>
                        <p>making it look like readable English. Many desktop publishing packages and web page editors now
                            use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many
                            web sites still </p>
                    </div>
                    <a class="read_more bg" href="#">Read More</a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="why-box">
                        <i><img src="{{ asset('assets/front/images/why2.png') }}" alt="#" /></i>
                        <h3>Totaly Optimised</h3>
                        <p>making it look like readable English. Many desktop publishing packages and web page editors now
                            use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many
                            web sites still </p>
                    </div>
                    <a class="read_more bg" href="#">Read More</a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="why-box">
                        <i><img src="{{ asset('assets/front/images/why3.png') }}" alt="#" /></i>
                        <h3>Worldwide Support</h3>
                        <p>making it look like readable English. Many desktop publishing packages and web page editors now
                            use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many
                            web sites still </p>
                    </div>
                    <a class="read_more bg" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end why -->
    <!-- contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 ">
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
@endsection

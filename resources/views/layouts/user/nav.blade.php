<div class="head_top">
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                {{-- <a href="index.html"><img src="{{asset('assets/front/images/logo.png')}}" alt="#" /></a> --}}
                                <h1>Personality Test</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}"> Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('tipe')}}">Tipe</a>
                                {{-- </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
    <!-- end header -->

    <!-- banner -->
    <section class="banner_main">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-6">
                    <div class="text-bg">
                        <h1>Personality Test</h1>
                        <p>Alat test psikologis yang digunakan untuk mengukur dan mengevaluasi karakteristik kepribadian
                            seseorang. Dengan tujuan untuk memberikan pemahaman yang lebih dalam tentang bagaimana individu merespons,
                            berinteraksi, dan beradaptasi dengan lingkungan serta orang lain di sekitarnya</p>
                        <a href="{{url('test')}}">Mulai Test</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-img">
                        <figure><img src="{{asset('assets/front/images/box_img.png')}}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

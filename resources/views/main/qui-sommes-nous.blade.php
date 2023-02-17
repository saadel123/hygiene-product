@extends('master')
@section('title', 'Rana')

@section('description', 'TEST')
@section('stylesheet')
    <style>
        .header {
            position: unset !important;
            margin-top: -1px !important;
            padding: 20px 0;
        }

        .header-top {
            background: white url(assets/img/header-img.jpg) no-repeat right top;
            background-size: cover;
            padding: 10px 0 90px 0;

        }

        /*--------------------------------------------------------------
                                            # qui-sommes-nous
                                            --------------------------------------------------------------*/
        .qui-sommes-nous .content {
            padding: 40px;
        }

        .qui-sommes-nous h3 {
            font-size: 14px;
            font-weight: 700;
            color: #4154f1;
            text-transform: uppercase;
        }

        .qui-sommes-nous h2 {
            font-size: 40px;
            margin-bottom: 40px;
            font-weight: 700;
            color: #27427a;
        }

        .qui-sommes-nous p {
            margin: 15px 0 30px 0;
            line-height: 30px;
            font-weight: 600;
            color: #305092;
        }

        .services .service-box span {
            font-size: 33px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-left: 29px;
        }

        .services .service-box.blue span {}

        .icons-qsn {
            max-height: 70px;
        }

        #main {
            background: url(assets/img/elements/qui-soummes-nous-bg.jpg);
            background-position: left center;
            min-height: 366px;
            background-size: 120px;
            background-repeat: no-repeat;
        }

        .services .service-box.orange span {
            color: #fe7f00;
        }

        .services .service-box.pink span {
            color: #e41e5b;
        }

        .services .service-box.blue span {
            color: #114e95;
        }
    </style>
@endsection

@section('content')

    <!-- ======= Header ======= -->
    <header id="header" class="">
        <div class="header-top">
            <div class="container-fluid align-items-center justify-content-between">
                <!-- Navbar-->
                <nav class="navbar navbar-expand">
                    <div class="container-fluid">
                        <div class="navbar-collapse collapse" id="mynavbar">
                            <div class="col-lg-3 text-start text-white">
                                <span> <i class="bi bi-telephone-fill me-3"> </i> +(212)600000000</i> <span> <br>
                                        <span><i class="bi bi-envelope-fill me-3"> </i>ranaindustrie@gmail.com</i> </span>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-inline mx-auto" style="padding-right: 40px;">
                                    <a class="brand" href="#">
                                        <img src="{{ asset('assets/img/logo-rana.png') }}" height="100" alt="Rana Logo"
                                            loading="lazy" class="mt-4" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 text-end me-3">
                                <!-- Facebook -->
                                <button class="btn btn-primary icon" style="background-color: #fff;border: unset;"
                                    href="https://www.facebook.com/CIMRetraite/" target="blank" role="button">
                                    <i class="bi bi-facebook" style="color:#3b5998"></i>
                                </button>
                                <!-- Instagram -->
                                <button class="btn btn-primary icon" style="background-color: #fff;border: unset;"
                                    href="https://www.instagram.com/cimr_officiel" target="blank" role="button">
                                    <i class="bi bi-instagram" style="color:#ac2bac"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="pb-4">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/icone-accueil.png" alt="" />
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
                    <li><a class="nav-link scrollto" href="{{ url('/qui-sommes-nous') }}">Qui sommes-nous</a></li>
                    <li><a class="nav-link scrollto" href="#qui-sommes-nous">Produits</a></li>
                    <li><a class="nav-link scrollto" href="#services">Nos atouts</a></li>
                    <li>
                        <a class="nav-link scrollto" href="#portfolio">Distribution</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#team">Blog</a></li>
                    {{-- <li class="dropdown">
                <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Deep Drop Down</span>
                            <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="#">Deep Drop Down 1</a></li>
                            <li><a href="#">Deep Drop Down 2</a></li>
                            <li><a href="#">Deep Drop Down 3</a></li>
                            <li><a href="#">Deep Drop Down 4</a></li>
                            <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                </ul>
            </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">Contactez-nous</a></li>
                    {{-- <li>
                <a class="getstarted scrollto" href="#qui-sommes-nous">Get Started</a>
            </li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </div>

    <main id="main">
        <!-- ======= qui-sommes-nous Section ======= -->
        <section class="qui-sommes-nous">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>
                                        Qui sommes-nous
                                    </h2>
                                    <p>
                                        Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt
                                        et. Inventore et et dolor consequatur itaque ut voluptate sed
                                        et. Magnam nam ipsum tenetur suscipit voluptatum nam et est
                                        corrupti. <br>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nisi adipisci!
                                        Debitis nulla eaque quod maiores ut veritatis dicta doloremque quos culpa eum
                                        cumque, repudiandae in, voluptas accusamus minima temporibus?<br>
                                        Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt
                                        et. Inventore et et dolor consequatur itaque ut voluptate sed
                                        et. Magnam nam ipsum tenetur suscipit voluptatum nam et est
                                        corrupti. <br>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nisi adipisci!
                                        Debitis nulla eaque quod maiores ut veritatis dicta doloremque quos culpa eum
                                        cumque, repudiandae in, voluptas accusamus minima temporibus?<br>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, rem. Nemo
                                        tenetur ipsum officiis obcaecati, qui explicabo voluptatem doloremque, aspernatur
                                        nihil veniam ad quo omnis sapiente a. Sequi, dolore laborum....
                                    </p>
                                </div>
                                <div class="col-lg-4 bg-about">

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/qui-sommes-nous.jpg" class="img-fluid" alt="" />
                </div> --}}
                </div>
            </div>
        </section>
        <!-- End qui-sommes-nous Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box orange">
                            <div class="logo d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/img/elements/notre-mission.png') }}" class="icons-qsn"
                                    alt="">
                                <span>Notre mission</span>
                            </div>
                            <p>
                                Ut autem aut autem non a. Sint sint sit facilis nam iusto
                                sint. Libero corrupti neque eum hic non ut nesciunt dolorem.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box pink">
                            <div class="logo d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/img/elements/notre-vision.png') }}" class="icons-qsn"
                                    alt="">
                                <span>Notre vision</span>
                            </div>
                            <p>
                                Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.
                                Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box blue">
                            <div class="logo d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/img/elements/nos-valeur.png') }}" class="icons-qsn"
                                    alt="">
                                <span>Nos valeur</span>
                            </div>
                            <p>
                                Provident nihil minus qui consequatur non omnis maiores. Eos
                                accusantium minus dolores iure perferendis tempore et
                                consequatur.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Services Section -->
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Tets</h1>
                    </div>
                    <div class="col-lg-6">
                        <h1>Tets</h1>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

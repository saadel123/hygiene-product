@extends('master')
@section('title', 'Rana')
@section('description', 'TEST')

@section('stylesheet')
    <style>
        .header {
            position: absolute !important;
        }

        #main {
            background: #e6e6ff;
        }

        #hero::before {
            content: unset;
        }

        #hero p {
            width: 100% !important;
        }

        .bg-about {
            background: url('assets/img/elements/element-rana.png');
            background-position: right;
            min-height: 366px;
            background-repeat: no-repeat;
        }

        @media (max-width: 1000px) {
            .bg-about {
                background-position: center !important;
            }
        }

        .header {
            position: absolute !important;
        }

        @media (min-width: 1024px) {

            #hero .carousel-control-prev,
            #hero .carousel-control-next {
                width: 0%;
            }

            .about .col-lg-12 {
                padding: 0 80px;
            }
        }

        #hero p {
            text-align: start;
            width: 80%;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
            margin: 0 auto 0px auto;
            color: #fff;
        }



        .brand {
            position: relative;
            left: 50%;
            margin-left: -50px !important;
            display: block;
        }

        .text-slide {
            margin: 200px 0px 0px 100px;
        }

        #mynavbar {
            margin: -15px 30px;
        }

        .btn-comandez {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-size: 26px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 17px 40px;
            border-radius: 50px;
            border: 3px solid #fff;
            border-top: none;
            transition: 0.5s;
            line-height: 1;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
            background: linear-gradient(0deg, rgba(127, 5, 148, 1) 0%, rgba(165, 13, 194, 1) 100%);
            color: #fff;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        .icon-cmnd {
            max-height: 30px;
            margin-right: 20px;
        }

        .satisfaction {
            height: 100%;
            padding: 60px 45px;
            transition: 0.3s;
            background: #fff;
            color: #000000;
            border-radius: 30px;
        }

        .satisfaction-icon {
            max-height: 55px;
            margin-right: 20px;
        }

        .bg-pink {
            background: #e41e5b;
            padding: 250px;
            margin-top: -400px;
        }
    </style>
@endsection
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
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
                                <a class="brand" href="/">
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
            <!-- Navbar -->
            {{-- <!-- Navbar-->
            <nav class="navbar">
                <div class="container-fluid justify-content-between">
                    <!-- Left elements -->
                    <div class="d-flex">
                        <!-- Brand -->
                        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                            <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20"
                                alt="MDB Logo" loading="lazy" style="margin-top: 2px;" />
                        </a>

                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <ul class="navbar-nav flex-row d-none d-md-flex">
                        <li class="nav-item me-3 me-lg-1 active">
                            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20"
                                    alt="MDB Logo" loading="lazy" style="margin-top: 2px;" />
                            </a>
                        </li>
                    </ul>
                    <!-- Center elements -->

                    <!-- Right elements -->
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item me-3 me-lg-1">
                            <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" class="rounded-circle"
                                    height="22" alt="Black and White Portrait of a Man" loading="lazy" />
                                <strong class="d-none d-sm-block ms-1">John</strong>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-1">
                            <a class="nav-link" href="#">
                                <span><i class="fas fa-plus-circle fa-lg"></i></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown me-3 me-lg-1">
                            <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                                role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-comments fa-lg"></i>

                                <span class="badge rounded-pill badge-notification bg-danger">6</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Some news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-3 me-lg-1">
                            <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                                role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell fa-lg"></i>
                                <span class="badge rounded-pill badge-notification bg-danger">12</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Some news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-3 me-lg-1">
                            <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                                role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-chevron-circle-down fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Some news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Right elements -->
                </div>
            </nav>
            <!-- Navbar --> --}}
        </div>
    </header>
    <!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-6 text-start">
                            <div class="text-slide">
                                <h2 class="animate__animated animate__fadeInDown">Nettoyant Sol</h2>
                                <h3 class="animate__animated animate__fadeInUp text-white">Brillance & propreté</h3>
                                <a href="{{ url('/details-produit') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp">Lire plus</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-slide">
                                <img src="{{ asset('assets/img/slide/product1.png') }}"
                                    class="d-block m-auto w-100px animate__animated animate__fadeInRight" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-6 text-start">
                            <div class="text-slide">
                                <h2 class="animate__animated animate__fadeInDown">Nettoyant Sol</h2>
                                <h3 class="animate__animated animate__fadeInUp text-white">Brillance & propreté</h3>
                                <a href="{{ url('/details-produit') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp">Lire plus</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-slide">
                                <img src="{{ asset('assets/img/slide/product7.png') }}"
                                    class="d-block m-auto w-100px animate__animated animate__fadeInRight" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section><!-- End Hero -->
    <!-- ======= navbar ======= -->
    <div class="pb-4">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/icone-accueil.png" alt="" />
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
                    <li><a class="nav-link scrollto" href="{{ url('/qui-sommes-nous') }}">Qui sommes-nous</a></li>
                    <li><a class="nav-link scrollto" href="#about">Produits</a></li>
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
                    <a class="getstarted scrollto" href="#about">Get Started</a>
                </li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </div>

    <!-- End navbar -->
    <main id="main" class="bg-home">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
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
                                    <p style="max-width: 629px">
                                        Rana Industrie est une entreprise marocaine spécialisée dans les produits de grande
                                        consommation. <br><br>
                                        Rana Industrie opère dans les secteurs de l’hygiène : la formulation, la conception,
                                        la production et la commercialisation des produits d’hygiène domestique. <br><br>
                                        Rana Industrie dispose d’une unité de production à Casablanca et distribue ses
                                        produits sur l’ensemble du territoire national et à l’export.
                                    </p>
                                </div>
                                <div class="col-lg-4 bg-about">
                                    <div class="" data-aos="zoom-out" data-aos-delay="200">
                                        {{-- <img src="assets/img/about.jpg" class="img-fluid" alt="" /> --}}
                                        <div class="text-center text-lg-center" style="margin-top: 155px;">
                                            <a href="{{ url('/qui-sommes-nous') }}"
                                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                                <span>Lire plus</span>
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="" />
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- ======= Products Section ======= -->
        <section id="pricing" class="products">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    {{-- <h2>Nos Produits</h2> --}}
                    <p>Nos Produits</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/7.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/26.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/2.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/6.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            {{-- <div class="price"><sup>$</sup>0<span> / mo</span></div> --}}
                            <img src="{{ asset('assets/img/products/12.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/35.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/25.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/16.png') }}" class="img-fluid" alt="" />
                            <h3>Netoyant Sol</h3>
                            <a href="{{ url('/details-produit') }}" class="btn-buy">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Products Section -->
        <!-- ======= Values Section ======= -->
        <section id="values" class="values">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 justify-content-center text-center">
                        <div class="" data-aos="zoom-out" data-aos-delay="200">
                            <div class="text-center text-lg-center">
                                <a href="#"
                                    class="btn-comandez d-inline-flex align-items-center justify-content-center align-self-center">
                                    <img src="{{ asset('assets/img/commandez.png') }}" class="icon-cmnd" alt="">
                                    <span>Comandez</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Values Section -->

        <!-- ======= Team Section ======= -->
        <div id="features" class="features" style="margin-top: -80px;">
            <div class="container" data-aos="fade-up">
                <div class="row feture-tabs aos-init aos-animate" data-aos="fade-up">
                    <div class="container">
                        <div class="col-lg-10 col-11 mx-auto">
                            <div class="row satisfaction">
                                <header class="section-header">
                                    <div class="logo d-flex align-items-center">
                                        <img src="{{ asset('assets/img/elements/satisfaction-icon.png') }}"
                                            class="satisfaction-icon" alt="satisfaction icon">
                                        <p>Satisfaction des clients</p>
                                    </div>
                                </header>
                                <!-- Tab Content -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab1">
                                        <p>
                                            La satisfaction de nos clients constitue notre objectif premier ! <br>
                                            Nous responsabilisons et formons nos collaborateurs à donner une entière
                                            satisfaction à nos clients et à leur proposer des produits et services de
                                            qualité. <br>
                                            Nous responsabilisons et formons nos collaborateurs à donner une entière
                                            satisfaction à nos clients et à leur proposer des produits et services de
                                            qualité. <br>
                                        </p>
                                        <h4>Nous nous engageons :</h4> <br>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>
                                                Au respect des délais, des coûts et de la conformité de la demande.
                                            </h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>Au respect des délais, des coûts et de la conformité de la demande.
                                            </h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>À faire évoluer nos prestations.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Section -->
            <section class="bg-pink">

            </section>

        </div>
    </main>
@endsection

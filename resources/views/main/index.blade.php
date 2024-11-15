@extends('master')
@section('title', 'Produits d hygiène ')
@section('description', '')

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
            background: url('assets/img/elements/element-shape.png');
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
            margin: 135px 0px 0px 100px;
        }

        #mynavbar {
            margin: -15px 30px;
        }

        .btn-commandez {
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
            background: linear-gradient(0deg, #0e315b 0%, #124e96 100%);
            color: #fff;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        .btn-commandez:hover {
            color: #fff;
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

        .bg-blue {
            background: #124e96;
            padding: 250px;
            margin-top: -400px;
        }

        #header {
            direction: ltr !important;
        }


        @media (max-width: 575px) {
            #hero .img-slide-mobile {
                max-height: 330px;
            }

        }

        @media screen and (max-width: 580px) {
            .mn-mobile {
                justify-content: space-around !important;
            }
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
                    <div class="navbar-collapse collapse" id="mynavbar" style="justify-content: space-between;">
                        <div class="col-lg-3 text-start text-white">
                            <span> <i class="bi bi-telephone-fill me-3"> </i> +(212)6 00 00 00 00</i> <span> <br>
                                    <span><i class="bi bi-envelope-fill me-3"> </i>elghanemysaad@gmail.com</i> </span>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-inline mx-auto" style="padding-right: 40px;">
                                <a class="brand" href="/">
                                    <img src="{{ asset('assets/img/logo-saad.png') }}" height="100" alt="Saad Logo"
                                        loading="lazy" class="mt-4" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 text-end me-3 pe-4" style="z-index: 2">
                            <ul class="language-list">
                                <li>
                                    <a href="{{ route('changeLang') }}?lang=fr"
                                        class="language-link {{ session()->get('locale', 'fr') == 'fr' ? 'active' : '' }}">Français
                                        <span class="text-white fw-bold ms-2">/</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('changeLang') }}?lang=ar"
                                        class="language-link {{ session()->get('locale') == 'ar' ? 'active' : '' }}">العربية
                                        <span class="text-white fw-bold ms-2">/</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('changeLang') }}?lang=en"
                                        class="language-link {{ session()->get('locale') == 'en' ? 'active' : '' }}">English</a>
                                </li>
                            </ul>
                            {{-- <button class="btn btn-primary icon" style="background-color: #fff;border: unset;"
                                onclick="window.location.href='https://www.facebook.com/Jaim.morocco/'" formtarget="_blank"
                                role="button">
                                <i class="bi bi-facebook" style="color:#3b5998"></i>
                            </button>
                            <button class="btn btn-primary icon" style="background-color: #fff;border: unset;"
                            onclick="window.location.href='https://www.instagram.com/jaim.maroc'" formtarget="_blank" role="button">
                                <i class="bi bi-instagram" style="color:#ac2bac"></i>
                            </button> --}}
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            @foreach ($slides as $slide)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6 text-start">
                                <div class="text-slide">
                                    <h2 class="animate__animated animate__fadeInDown">
                                        {{ $slide->{'title_' . app()->getLocale()} }}</h2>
                                    <h3 class="animate__animated animate__fadeInUp text-white">
                                        {{ $slide->{'uses_' . app()->getLocale()} }}</h3>
                                    <a href="{{ url('produits/' . $slide->slug) }}"
                                        class="btn-get-started animate__animated animate__fadeInUp">{{ __('partials.buttons.read_more') }}</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="img-slide">
                                    <img src="{{ Voyager::image($slide->image) }}"
                                        class="d-block m-auto w-100px animate__animated animate__fadeInRight img-slide-mobile"
                                        alt="{{ $slide->{'title_' . app()->getLocale()} }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section><!-- End Hero -->
    <!-- ======= navbar ======= -->
    <div class="pb-4 menu-mobile">
        {{-- Use this style to add z-index to this menu
        z-index: 11;
        position: relative; --}}
        <div class="container-fluid container-xl d-flex align-items-md-center justify-content-md-center mn-mobile">
            <a href="/" class="logo-nav d-flex align-items-center">
                <img src="{{ asset('assets/img/icone-accueil.png') }}" alt="" />
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
                    <li><a class="nav-link scrollto"
                            href="{{ url('/qui-sommes-nous') }}">{{ __('partials.navbar.qui-sommes-nous') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ url('/produits') }}">{{ __('partials.navbar.produits') }}</a>
                    </li>
                    <li><a class="nav-link scrollto"
                            href="{{ url('/nos-atouts') }}">{{ __('partials.navbar.nos_atouts') }}</a></li>
                    <li>
                        <a class="nav-link scrollto"
                            href="{{ route('distribution.index') }}">{{ __('partials.navbar.distribution') }}</a>
                    </li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('blogs.index') }}">{{ __('partials.navbar.blog') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ url('/contactez-nous') }}">{{ __('partials.navbar.contact') }}</a></li>
                    <li class="ms-4 me-4">
                        <select class="form-control changeLang ">
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                                {{ __('partials.languages.fr') }}</option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                                {{ __('partials.languages.en') }}</option>
                            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                                {{ __('partials.languages.ar') }}</option>
                        </select>
                    </li>
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
                                    <h2 class="mb-5">
                                        {{ __('about.qui-sommes-nous') }}
                                    </h2>
                                    <p>
                                        {!! __('about.description') !!}
                                    </p>
                                </div>
                                <div class="col-lg-4 bg-about">
                                    <div class="" data-aos="zoom-out" data-aos-delay="200">
                                        {{-- <img src="assets/img/about.jpg" class="img-fluid" alt="" /> --}}
                                        <div class="text-center text-lg-center" style="margin-top: 155px;">
                                            <a href="{{ url('/qui-sommes-nous') }}"
                                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                                <span>{{ __('partials.buttons.read_more') }}</span>
                                                <i
                                                    class="me-2 ms-2 bi bi-arrow-{{ session()->get('locale') == 'fr' ? 'right' : 'left' }}"></i>
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
                <div class="row gy-4" data-aos="fade-left">
                    @php
                        $delay = 200;
                    @endphp
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
                            <div class="box">
                                <img src="{{ Voyager::image($product->image) }}" class="img-fluid"
                                    alt="{{ $product->{'title_' . app()->getLocale()} }}" />
                                <h3>{{ $product->{'title_' . app()->getLocale()} }}</h3>
                                <p>{{ $product->{'size_' . app()->getLocale()} }}</p>
                                <a href="{{ url('produits/' . $product->category->slug . '/' . $product->slug) }}"
                                    class="btn-buy">{{ __('partials.buttons.see_more') }}</a>
                            </div>
                        </div>
                        @php
                            $delay += 100;
                        @endphp
                    @endforeach
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
                                <a href="{{ route('distribution.index') }}"
                                    class="btn-commandez d-inline-flex align-items-center justify-content-center align-self-center">
                                    <img src="{{ asset('assets/img/commandez.png') }}" class="icon-cmnd" alt="">
                                    <span>{{ __('partials.buttons.order') }}</span>
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
                                        <p>{{ __('partials.satisfaction-clients.title') }}</p>
                                    </div>
                                </header>
                                <!-- Tab Content -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab1">
                                        {!! __('partials.satisfaction-clients.description') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Section -->
            <section class="bg-blue">
            </section>
        </div>
    </main>
@endsection

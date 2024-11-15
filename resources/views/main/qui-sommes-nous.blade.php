@extends('master')
@section('title', 'Produits d Hygiène')
@section('description', '')



@section('stylesheet')
    <style>
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
            color: #388ccc;
        }

        .qui-sommes-nous p {
            margin: 15px 0 30px 0;
            line-height: 30px;
            font-weight: 600;
            color: #305092;
            line-height: 1.9;
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
            color: #388ccc;
        }

        .services .service-box.pink span {
            color: #388ccc;
        }

        .services .service-box.blue span {
            color: #388ccc;
        }

        .shape-integrite {
            position: relative;
            overflow: hidden;
            padding: 80px;
        }

        .shape-integrite:after {
            content: '';
            position: absolute;
            width: 370px;
            height: 100%;
            background: #fbbc19;
            top: 0;
            right: 0;
            z-index: -1;
            /* change value as required */
            left: -20%;
        }

        .shape-pro {
            position: relative;
            overflow: hidden;
            padding: 80px;
        }

        .shape-pro:after {
            content: '';
            position: absolute;
            width: 304px;
            height: 65%;
            background: #fbbc19;
            bottom: 45px;
            right: 0;
            z-index: -1;
        }

        h3 {
            margin: 0px 0 10px 0px;
            font-size: 34px;
            line-height: 42px;
            font-weight: 700;
            color: #388ccc;
        }




        @media (min-width: 1199px) {
            .img-confiance {
                max-height: 660px !important;
                margin-left: 120px;
                object-fit: cover !important;
                object-position: center center !important;
            }

            .text-confiance {
                padding: 24px 28px;
                text-align: start;
                position: relative;
                width: 43%;
                background: #fff;
                bottom: 300px;
                z-index: 1;
                float: right;
            }

        }
    </style>
@endsection

@section('content')
    <main id="main">
        <!-- ======= qui-sommes-nous Section ======= -->
        <section class="qui-sommes-nous">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>
                                        {{ __('about.qui-sommes-nous') }}
                                    </h2>
                                    <p>
                                        {!! __('about.description') !!}
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
                                <span>
                                    {{ __('about.mission.title') }}
                                </span>
                            </div>
                            <p>
                                {{ __('about.mission.description') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box pink">
                            <div class="logo d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/img/elements/notre-vision.png') }}" class="icons-qsn"
                                    alt="">
                                <span>
                                    {{ __('about.vision.title') }}
                                </span>
                            </div>
                            <p>
                                {{ __('about.vision.description') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box blue">
                            <div class="logo d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/img/elements/nos-valeur.png') }}" class="icons-qsn"
                                    alt="">
                                <span>
                                    {{ __('about.valeur.title') }}
                                </span>
                            </div>
                            <p>
                                {{ __('about.valeur.description') }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Services Section -->
        <section style="margin-bottom: -100px">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <h3>{{ __('about.integrite.title') }}</h3>
                            <p>
                                {{ __('about.integrite.description') }}
                            </p>
                        </div>
                        <div class="col-md-12">
                            <img src="{{ asset('assets/img/about/integrite1.jpg') }}" class="img-fluid" alt=""
                                style="float: right;
                            max-height: 270px;
                            margin-top: 80px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shape-integrite">
                            <img src="{{ asset('assets/img/about/integrite2.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row aos-init aos-animate pt-5" data-aos="fade-up">
                        <div class="col-lg-6">
                            <div class="shape-pro">
                                <img src="{{ asset('assets/img/about/professionnalisme1.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300"
                                style="margin-top: 9rem">
                                <h3> {{ __('about.professionnalisme.title') }}</h3>
                                <p>
                                    {{ __('about.professionnalisme.description') }}
                                </p>
                            </div>
                            <div class="col-md-12">
                                <img src="{{ asset('assets/img/about/professionnalisme2.jpg') }}"
                                    style="max-height: 190px;" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row aos-init aos-animate pt-5" data-aos="fade-up">
                        <div class="col-xl-12 col-md-12 d-flex aos-init aos-animate align-items-center justify-content-center confiance-qsn" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('assets/img/about/confiance.jpg') }}" class="img-confiance"
                                        alt="">
                                </div>
                                <div class="text-confiance">
                                    <h3>{{ __('about.confiance.title') }}</h3>
                                    <p>
                                        {{ __('about.confiance.description') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@extends('master')
@section('title', 'Rana')

@section('description', 'TEST')
@section('stylesheet')
    <style>
        .contact span {
            color: red;
            margin-left: 15px;
        }

        .page-qualite.qualite-bg {
            background-image: url('assets/img/satisfaction/slide-qualite.jpg');
        }

        .page-qualite {
            background-position: center center;
            background-size: cover;
            padding-top: 55px;
            padding-bottom: 55px;
            position: relative;
            z-index: 1;
            text-align: start;
            overflow: hidden;
            color: #ffffff;
        }

        .page-qualite::before {
            position: absolute;
            content: '';
            background: rgba(204, 15, 103, 0.6);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .qualite p {
            font-size: 20px;
        }

        .qualite h1 {
            margin-bottom: 20px;
            font-weight: 700;
        }

        .satisfaction-client h3 {
            margin: 0px 0 20px 0px;
            font-size: 34px;
            line-height: 42px;
            font-weight: 700;
            color: #305095;
        }

        .satisfaction-client p {
            font-size: 19px;
        }

        /* .environnement .bg-environnement {
                                        padding: 35px 0px 20px 65px;
                                        border-radius: 60px 0px 60px 0px;
                                        margin-left: 100px;
                                        margin-right: -35px;
                                        background: #07b228;
                                    }

                                    @media (max-width: 1000px) {
                                        .environnement p {
                                            max-width: 555px !important;
                                        }
                                    }

                                    .environnement p {
                                        margin: 15px 0 30px 0;
                                        line-height: 26px;
                                        max-width: 637px;
                                        font-size: 21px;
                                        color: #000;
                                    }

                                    .environnement h3 {
                                        color: white;
                                        font-weight: 600;
                                    } */
        .disponibilite .content {
            background-color: #305095;
            padding: 50px;
        }

        .disponibilite h3 {
            margin: 0px 0 21px 0px;
            font-size: 34px;
            line-height: 42px;
            font-weight: 700;
            color: #ffffff;
        }

        .disponibilite p {
            font-size: 20px;
            color: #fff;
        }

        .disponibilite img {
            max-width: 300px
        }

        @media (min-width: 1024px) {
            .disponibilite .col-lg-12 {
                padding: 0 50px;
            }
        }
    </style>
@endsection
@section('content')
    <main id="main">
        <section class="page-qualite qualite-bg qualite  mt-5" data-aos="fade-up">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-10">
                        <h1> {{ __('advantages.qualite.title') }} </h1>
                        <p>
                            {!! __('advantages.qualite.description') !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5 satisfaction-client">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/satisfaction/babble.jpg') }}" style="max-height: 500px;"
                                class="img-fluid" alt="{{ __('advantages.satisfaction.title') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <h3>{{ __('advantages.satisfaction.title') }}</h3>
                            <p>
                                {!! __('advantages.satisfaction.description') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="disponibilite">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-12 d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3>
                                    {{ __('advantages.disponibilite.title') }}
                                </h3>
                                <p>
                                    {!! __('advantages.disponibilite.description') !!}
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <img src="{{ asset('assets/img/satisfaction/disponibilite.png') }}" class=""
                                    alt="{{ __('advantages.satisfaction.title') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="environnement">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-9 mt-5" style="margin-right: -130px;">
                        <div class="bg-environnement">
                            <h3>Environnement</h3>
                            <p>
                                Les enjeux environnementaux se multiplient. Les risques liés au changement climatique, à la
                                surexploitation des ressources naturelles, à l’érosion de la biodiversité et à la pollution
                                sont des préoccupations centrales pour nos sociétés. Pour Rana Industrie, répondre aux
                                enjeux environnementaux est un élément clé de la viabilité de son business model sur le
                                long-terme.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/satisfaction/environnement.png') }}" class="img"
                                style="max-height: 380px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section> --}}
    </main>
@endsection

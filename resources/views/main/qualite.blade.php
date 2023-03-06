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

        .environnement .bg-environnement {
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
        }
    </style>
@endsection
@section('content')
    <main id="main">
        <section class="page-qualite qualite-bg qualite  mt-5" data-aos="fade-up">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-10">
                        <h1>Qualité</h1>
                        <p>
                            Nous veillons à mener les différents tests et études afin de vous garantir une qualité de
                            produits et de services irréprochables. <br> <br>
                            Tous les produits fabriqués au sein de nos usines répondent aux normes de qualité et de sécurité
                            internationales.
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
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <h3>Satisfaction des clients</h3>
                            <p>
                                La satisfaction de nos clients constitue notre objectif premier ! <br> <br>
                                Nous responsabilisons et formons nos collaborateurs à donner une entière satisfaction à nos
                                clients et à leur proposer des produits et services de qualité. <br> <br>
                                Nous sommes constamment à l’écoute des attentes de nos clients afin de répondre au mieux à
                                leurs besoins. <br> <br>
                                Nous nous engageons : <br> <br>
                                Au respect des délais, des coûts et de la conformité de la demande. <br> <br>
                                À adapter notre organisation en tenant compte des besoins de nos clients. <br> <br>
                                À faire évoluer nos prestations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="environnement">
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
        </section>
    </main>
@endsection

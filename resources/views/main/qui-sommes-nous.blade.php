@extends('master')
@section('title', 'Rana')

@section('description', 'TEST')
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
            color: #305095;
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
                                        Qui sommes-nous
                                    </h2>
                                    <p>
                                        Rana Industrie est une entreprise marocaine spécialisée dans les produits de grande
                                        consommation. <br>
                                        Rana Industrie opère dans les secteurs de l’hygiène : la formulation, la conception,
                                        la production et la commercialisation des produits d’hygiène domestique. <br>
                                        Rana Industrie dispose d’une unité de production à Casablanca et distribue ses
                                        produits sur l’ensemble du territoire national et à l’export.

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
                                Nous mettons en commun nos énergies pour fournir à nos clients des produits et services de
                                qualité et de valeur supérieure insufflant de l’aisance dans leur vie de tous les jours.
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
                                Notre entreprise vise à contribuer au développement économique du pays et à renforcer la
                                position de l’industrie marocaine sur le marché national et international.
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
                                Nos valeurs reflètent les comportements qui donnent le ton de nos interactions entre
                                collaborateurs, avec nos clients et avec nos partenaires.
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
                        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <h3>Intégrité</h3>
                            <p>
                                Nos valeurs reflètent les comportements qui donnent le ton de nos interactions entre
                                collaborateurs, avec nos clients et avec nos partenaires.
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
                                <h3>Professionnalisme</h3>
                                <p>
                                    Nous exerçons nos métiers avec l'ambition de progresser et d'accroître durablement nos
                                    compétences. Ceci implique un effort de formation permanent et une recherche constante
                                    de progrès en qualifications, certifications et démarche qualité.
                                </p>
                            </div>
                            <div class="col-md-12">
                                <img src="{{ asset('assets/img/about/professionnalisme2.jpg') }}" style="max-height: 190px;"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row aos-init aos-animate pt-5" data-aos="fade-up">
                        <div class="col-xl-12 col-md-12 d-flex aos-init aos-animate" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('assets/img/about/confiance.jpg') }}" class="img-confiance"
                                        alt="">
                                </div>
                                <div class="text-confiance">
                                    <h3>Confiance</h3>
                                    <p>
                                        Nous établissons des relations de confiance avec nos clients en démontrant notre
                                        capacité à respecter nos engagements. Grâce à notre gestion rigoureuse et à la
                                        stabilité de notre entreprise, nous sommes en mesure de bâtir des relations durables
                                        avec nos clients, fondées sur la confiance.
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

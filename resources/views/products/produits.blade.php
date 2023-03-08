@extends('master')
@section('title', 'Rana')

@section('description', 'TEST')
@section('stylesheet')
    <style>
        .category .category-btn {
            padding: 8px;
            text-align: center;
            transition: 0.3s;
            border: 1px solid;
            border-radius: 80px;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .category .category-btn:hover {
            background: #0086d8;
            color: #ffffff;
            text-decoration: none;
            border: unset;
            box-shadow: rgb(30, 160, 241) 0px 13px 27px -5px, rgb(30, 160, 241) 0px 8px 16px -8px;
        }

        .category .category-btn h4 {
            /* color: #444444; */
            font-weight: 600;
        }

        .category .category-btn .title {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            padding: 5px 20px;
            margin-top: 5px;
        }
        .category .col-lg-12{
            padding: 105px;
        }
    </style>
@endsection

@section('content')
    <!-- ======= category Section ======= -->
    <section id="category" class="category">
        <div class="container text-center" data-aos="fade-up">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row gy-4">
                    <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="category-btn d-md-block">
                            <div class=" title">
                                <h4>Détergent liquide</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="category-btn d-md-block">
                            <div class=" title">
                                <h4>Adoucissant</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="category-btn d-md-block">
                            <div class=" title">
                                <h4>Nettoyant Sol</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="category-btn d-md-block">
                            <div class=" title">
                                <h4>Eau de Javel</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Section -->
@endsection

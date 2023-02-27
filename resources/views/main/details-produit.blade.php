@extends('master')
@section('title', 'Rana')

@section('description', 'TEST')
@section('stylesheet')
    <style>
        .score {
            display: block;
            max-width: 5em;
            height: 1em;
            margin: auto;
            background: #eee;
            background: linear-gradient(90deg, #fc0 var(--_score, 50%), #eee 0);
            mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" ><path fill="%23000" d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"/></svg>') 0 0/1em 1em;
        }

        .ratings {
            margin-right: 10px;
        }

        .ratings i {

            color: #fbc634;
            font-size: 32px;
        }

        .rating-color {
            color: #fbc634 !important;
        }

        .img-thumbnail {
            padding: 7.25rem;
            background-color: #fff;
            border: 3px solid var(--bs-border-color);
            border-radius: 3rem;
            max-width: 100%;
            width: 65%;
            height: auto;
        }

        .btn-achtez {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-size: 25px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 55px;
            border-radius: 50px;
            border: unset;
            transition: 0.5s;
            line-height: 1;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
            background: linear-gradient(0deg, rgba(127, 5, 148, 1) 0%, rgba(165, 13, 194, 1) 100%);
            color: #fff;
        }
        .product-detail .uses-text{
            color: #305095;
            font-size: 18px;
        }
    </style>
@endsection

@section('content')
    <!-- ======= Products Section ======= -->
    <section class="padding-y bg-white product-detail">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <aside class="col-lg-6">
                    <article class="gallery-wrap d-flex">
                        <div class="img-big-wrap text-center mx-auto img-thumbnail">
                            <img class="" src="{{ asset('assets/img/products/7.png') }}"
                                style="max-width: 110px; height: auto;">
                        </div>
                        <!-- img-big-wrap.// -->
                        {{-- <div class="thumbs-wrap"> <a href="#" class="item-thumb"> <img width="60" height="60"
                                    src="bootstrap5-ecommerce/images/items/detail1/thumb1.webp"> </a> <a href="#"
                                class="item-thumb"> <img width="60" height="60"
                                    src="bootstrap5-ecommerce/images/items/detail1/thumb2.webp"> </a> <a href="#"
                                class="item-thumb"> <img width="60" height="60"
                                    src="bootstrap5-ecommerce/images/items/detail1/thumb3.webp"> </a> <a href="#"
                                class="item-thumb"> <img width="60" height="60"
                                    src="bootstrap5-ecommerce/images/items/detail1/thumb4.webp"> </a> <a href="#"
                                class="item-thumb"> <img width="60" height="60"
                                    src="bootstrap5-ecommerce/images/items/detail1/thumb1.webp"> </a> </div> --}}
                        <!-- thumbs-wrap.// -->
                    </article>
                </aside>
                <div class="col-lg-6">
                    <article class="ps-lg-3">
                        <header class="section-header text-start">
                            <h1 class="fw-bold">Netoyant Sol</h1>
                            <span class="uses-text">Cleans,disinfects,perfumes</span>
                        </header>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="ratings">
                                <i class="bi bi-star-fill rating-color"></i>
                                <i class="bi bi-star-fill rating-color"></i>
                                <i class="bi bi-star-fill rating-color"></i>
                                <i class="bi bi-star-fill rating-color"></i>
                                <i class="bi bi-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            {{-- <h5 class="review-count">12 Reviews</h5> --}}
                        </div>
                        <div class="mb-3"> <span class="price h5">20 MAD</span> <span class="text-muted">/1L</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae amet impedit rerum
                            voluptatum, corporis sed porro fuga quaerat est ab tempora, odio laudantium neque earum!
                            Doloribus tempore dolorum voluptatem.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur voluptatem quaerat
                            consectetur rem accusantium assumenda sequi itaque, vitae ipsa incidunt architecto! Aspernatur,
                            voluptatum itaque magnam recusandae suscipit nemo ipsa?</p>
                        {{-- <dl class="row">
                            <dt class="col-3">Model#</dt>
                            <dd class="col-9">Hugo Boss</dd>
                            <dt class="col-3">Color</dt>
                            <dd class="col-9">Brown</dd>
                            <dt class="col-3">Material</dt>
                            <dd class="col-9">Cotton, Jeans </dd>
                            <dt class="col-3">Delivery</dt>
                            <dd class="col-9">Russia, USA, and Europe </dd>
                        </dl> --}}
                        <div class="mt-5">
                            <a href="#" class="btn btn-warning btn-achtez animate__animated animate__fadeInUp"> Acheter
                            </a>

                        </div>
                    </article> <!-- product-info-aside .// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container .// -->
    </section>
    <section id="pricing" class="products">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4" data-aos="fade-left">
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{ asset('assets/img/products/7.png') }}" class="img-fluid" alt="" />
                        <h3>Netoyant Sol</h3>
                        <a href="#" class="btn-buy">Voir plus</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <img src="{{ asset('assets/img/products/26.png') }}" class="img-fluid" alt="" />
                        <h3>Netoyant Sol</h3>
                        <a href="#" class="btn-buy">Voir plus</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <img src="{{ asset('assets/img/products/2.png') }}" class="img-fluid" alt="" />
                        <h3>Netoyant Sol</h3>
                        <a href="#" class="btn-buy">Voir plus</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <img src="{{ asset('assets/img/products/6.png') }}" class="img-fluid" alt="" />
                        <h3>Netoyant Sol</h3>
                        <a href="#" class="btn-buy">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Section -->
@endsection

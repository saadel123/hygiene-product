@extends('master')


@section('stylesheet')
    <style>
        .product-detail .ratings {
            margin-right: 10px;
            color: #fbc634;
        }

        .product-detail .ratings i {

            color: #fbc634;
            font-size: 30px;
        }

        .product-detail .img-thumbnail {
            padding: 7.25rem;
            background-color: #fff;
            border: 3px solid var(--bs-border-color);
            border-radius: 3rem;
            max-width: 100%;
            min-width: 70%;
            height: auto;
        }

        .product-detail .btn-achtez {
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
            background: linear-gradient(0deg, #0e315b 0%, #124e96 100%);
            color: #fff;
        }

        .product-detail .uses-text {
            color: #305095;
            font-size: 18px;
        }

        .img-produit {
            max-height: 310px;
            overflow: hidden;
            margin: auto;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    @include('partials.categories-list')
    <!-- ======= Products Section ======= -->
    <section class="product padding-y bg-white product-detail">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <aside class="col-lg-6">
                    <article class="gallery-wrap d-flex">
                        <div class="img-big-wrap text-center mx-auto img-thumbnail">
                            <img class="img-produit" src="{{ Voyager::image($product->image) }}">
                        </div>
                    </article>
                </aside>
                <div class="col-lg-6">
                    <article class="ps-lg-3">
                        <header class="section-header">
                            <h1 class="fw-bold">{{ $product->{'title_' . app()->getLocale()} }}</h1>
                            <span class="uses-text">{{ $product->{'uses_' . app()->getLocale()} }}</span>
                        </header>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="ratings">
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="bi bi-star{{ $i < $product->stars ? '-fill rating-color' : '' }}"></i>
                                @endfor
                            </div>
                            {{-- <h5 class="review-count">12 Reviews</h5> --}}
                        </div>
                        <div class="mb-3"> <span class="price h5">
                                {{-- {{ $product->price }}
                                {{ __('partials.info.dh') }}</span> <span class="text-muted">/ --}}
                                {{ $product->{'size_' . app()->getLocale()} }}</span>
                        </div>
                        <p>{!! $product->{'description_' . app()->getLocale()} !!}</p>
                        <p>
                            <strong>{{ __('partials.info.instructions') }}</strong>
                            {{ $product->{'mode_emploi_' . app()->getLocale()} }}
                        </p>
                        <p>
                            <strong>{{ __('partials.info.caution') }}</strong>
                            {{ $product->{'precaution_emploi_' . app()->getLocale()} }}
                        </p>
                        <p>
                            <strong>{{ __('partials.info.parfums') }}</strong>
                            {{ $product->{'parfums_' . app()->getLocale()} }}
                        </p>


                        {{-- <dl class="row">
                            <dt class="col-2">Model#</dt>
                            <dd class="col-9">Hugo Boss</dd>
                            <dt class="col-3">Color</dt>
                            <dd class="col-9">Brown</dd>
                            <dt class="col-3">Material</dt>
                            <dd class="col-9">Cotton, Jeans </dd>
                            <dt class="col-3">Delivery</dt>
                            <dd class="col-9">Russia, USA, and Europe </dd>
                        </dl> --}}
                        <div class="mt-5">
                            <a href="{{ url('/distribution') }}"
                                class="btn btn-warning btn-achtez animate__animated animate__fadeInUp">
                                {{ __('partials.buttons.buy') }}
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="products">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4" data-aos="fade-left">
                @php
                    $i = 200;
                @endphp
                @foreach ($relatedProducts as $product)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $i }}">
                        <div class="box">
                            <img src="{{ Voyager::image($product->image) }}" class="img-fluid"
                                alt="{{ $product->{'title_' . app()->getLocale()} }}" />
                            <h3>{{ $product->{'title_' . app()->getLocale()} }}</h3>
                            <p>{{ $product->{'size_' . app()->getLocale()} }}</p>
                            <a href="{{ url('produits/' . $name_cat . '/' . $product->slug) }}"
                                class="btn-buy">{{ __('partials.buttons.see_more') }}</a>
                        </div>
                    </div>
                    @php
                        $i += 100;
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
@endsection

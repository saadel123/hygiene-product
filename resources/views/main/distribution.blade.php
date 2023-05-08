@extends('master')
@section('title', 'Distribution')

@section('description', 'TEST')
@section('stylesheet')
    <style>
        .contact span {
            color: red;
            margin-left: 15px;
        }

        .bg-distribution {
            background: rgb(3, 157, 217);
            background: radial-gradient(circle, rgba(3, 157, 217, 1) 0%, rgba(12, 81, 156, 1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-control {
            border: 1px solid #a29191 !important;
        }

        .distribution .php-email-form {
            background: unset !important;
            /* padding: 30px;
                                                                                                                    height: 100%; */
        }

        .section-header h1 {
            text-align: start;
        }

        .select2-selection {
            display: block;
            width: 100%;
            padding: .375rem 2.25rem .375rem .75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: .375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 20px !important;
            padding: 10px 15px;
        }

        .contact span {
            color: #000;
            margin-left: unset !important;
        }

        .distribution-image {
            background-image: url('{{ asset('assets/img/distribustion/' . __('partials.distribution.image')) }}');

            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width: 100%;
            height: 0;
            padding-bottom: 52.7%;
            /* Set the aspect ratio of the image (665/590 * 100) */
        }

        @media (max-width: 900px) {
            .distribution-image {
                /* background-image: url('{{ asset('assets/img/distribustion/' . __('partials.distribution.image-mobile')) }}'); */
                background-image: url('assets/img/distribustion/distribustion-mobile.jpg');
                padding-bottom: 99.6%;
                /* Set the aspect ratio of the image (666/931 * 100) */
            }
        }
    </style>
@endsection
@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="distribution" class="distribution">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h1>{{ __('partials.distribution.title') }}</h1>
                </header>
                <div class="row gy-4">
                    <p>{{ __('partials.distribution.description') }}</p>
                    <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="distribution-image"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact distribution">
            <div class="" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-5 bg-distribution">
                        <img src="{{ asset('assets/img/distribustion/distribustion-products.png') }}" class=""
                            style="max-height: 450px;" alt="distribution">
                    </div>
                    <div class="col-lg-5">
                        <form action="{{ route('distribution.store') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                @include('partials.messages-alert')
                                @include('partials.contact-form')
                                <div class="col-md-12">
                                    <label for="ville"
                                        class="form-label">{{ __('partials.forms.contact.ville') }}*</label>
                                    <select class="form-select" name="ville_id" id="ville_id"
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="produit"
                                        class="form-label">{{ __('partials.forms.contact.requested_products') }}*</label>
                                    <select class="form-select select2" name="produits_id[]" id="produits_id"
                                        aria-label="Default select example" multiple>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->slug }}">{{ $product->slug }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="adresse"
                                        class="form-label">{{ __('partials.forms.contact.message') }}*</label>
                                    <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" rows="6"
                                        placeholder="Message" required> {{ old('message') }}</textarea>
                                    @error('message')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">{{ __('partials.buttons.send') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    @endsection

    @section('javascripts')
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    @endsection

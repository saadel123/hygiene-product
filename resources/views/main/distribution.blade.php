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
    </style>
@endsection
@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="distribution" class="distribution">
            <div class="container" data-aos="fade-up">
                <header class="section-header text-start">
                    <h1>Distribution</h1>
                </header>
                <div class="row gy-4">
                    <p>Notre flotte comporte une variété de formats de véhicules permettant de distribuer les marchandises
                        dans tout le Royaume.</p>
                    <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="{{ asset('assets/img/distribustion/distribustion.jpg') }}" class=""
                            alt="distribution">
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
                        <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                            @include('partials.messages-alert')
                            @csrf
                            <div class="row gy-4">
                                @include('partials.contact-form')
                                <div class="col-md-12">
                                    <label for="ville" class="form-label">{{ __('partials.forms.contact.ville') }}*</label>
                                    <select class="form-select" name="ville" id=""
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="ville" class="form-label">{{ __('partials.forms.contact.requested_products') }}*</label>
                                    <select class="form-select" name="ville" id=""
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Hello Which kind of post you want</option>
                                        Thanks mate will do the same for the flyer
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="adresse" class="form-label">{{ __('partials.forms.contact.message') }}*</label>
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

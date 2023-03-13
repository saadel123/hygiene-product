@extends('master')
@section('title', 'Distribution')

@section('description', 'TEST')
@section('stylesheet')
    <style>
        .contact span {
            color: red;
            margin-left: 15px;
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
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/distribustion/distribustion-products.jpg') }}" class=""
                                    style="max-height: 700px;" alt="distribution">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                            @include('partials.messages-alert')
                            @csrf
                            <div class="row gy-4">
                                @include('partials.contact-form')
                                <div class="col-md-12">
                                    <label for="ville" class="form-label">Ville*</label>
                                    <select class="form-select" name="ville" id=""
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="ville" class="form-label">Produit demandé*</label>
                                    <select class="form-select" name="ville" id=""
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="adresse" class="form-label">Message*</label>
                                    <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" rows="6"
                                        placeholder="Message" required> {{ old('message') }}</textarea>
                                    @error('message')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    @endsection
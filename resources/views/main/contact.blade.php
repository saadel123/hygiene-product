@extends('master')
@section('title', 'Rana')

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
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h1>Contactez-nous</h1>
                </header>

                <div class="row gy-4">
                    {{-- <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street,<br />New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br />+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br />contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                            @include('layouts.messages-alert')
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="nom"
                                        class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
                                        value="{{ old('nom') }}" placeholder="Nom*" required />
                                    @error('nom')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="prenom"
                                        class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}"
                                        value="{{ old('prenom') }}" placeholder="Prénom*" required />
                                    @error('prenom')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="number"
                                        class="form-control {{ $errors->has('tele') ? 'is-invalid' : '' }}" name="tele"
                                        value="{{ old('tele') }}" placeholder="Tél*" required />
                                    @error('tele')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                        value="{{ old('email') }}" placeholder="Email*" required />
                                    @error('email')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input type="text"
                                        class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}"
                                        name="adresse" value="{{ old('adresse') }}" placeholder="Adresse" required />
                                    @error('adresse')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" rows="6"
                                        placeholder="Message" required> {{ old('message') }}</textarea>
                                    @error('message')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    {{-- <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Your message has been sent. Thank you!
                                    </div> --}}

                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
@endsection

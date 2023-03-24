<header id="header" class="">
    <div class="header-top">
        <div class="container-fluid align-items-center justify-content-between">
            <!-- Navbar-->
            <nav class="navbar navbar-expand">
                <div class="container-fluid">
                    <div class="navbar-collapse collapse" id="mynavbar">
                        <div class="col-lg-3 text-start text-white">
                            <span> <i class="bi bi-telephone-fill me-3"> </i> +(212)600000000</i> <span> <br>
                                    <span><i class="bi bi-envelope-fill me-3"> </i>ranaindustrie@gmail.com</i> </span>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-inline mx-auto" style="padding-right: 40px;">
                                <a class="brand" href="/">
                                    <img src="{{ asset('assets/img/logo-rana.png') }}" height="100" alt="Rana Logo"
                                        loading="lazy" class="mt-4" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 text-end me-3">
                            <!-- Facebook -->
                            <button class="btn btn-primary icon" style="background-color: #fff;border: unset;"
                                href="https://www.facebook.com/CIMRetraite/" target="blank" role="button">
                                <i class="bi bi-facebook" style="color:#3b5998"></i>
                            </button>
                            <!-- Instagram -->
                            <button class="btn btn-primary icon" style="background-color: #fff;border: unset;"
                                href="https://www.instagram.com/cimr_officiel" target="blank" role="button">
                                <i class="bi bi-instagram" style="color:#ac2bac"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="pb-4">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
        <a href="/" class="logo-nav d-flex align-items-center">
            <img src="{{ asset('assets/img/icone-accueil.png') }}" alt="" />
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
                <li><a class="nav-link scrollto" href="{{ url('/qui-sommes-nous') }}">{{ __('partials.navbar.qui-sommes-nous') }}</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/produits') }}">{{ __('partials.navbar.produits') }}</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/nos-atouts') }}">{{ __('partials.navbar.nos_atouts') }}</a></li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('/distribution') }}">{{ __('partials.navbar.distribution') }}</a>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('blogs.index') }}">{{ __('partials.navbar.blog') }}</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/contactez-nous') }}">{{ __('partials.navbar.contact') }}</a></li>
                <li class="ms-4 me-4">
                    <select class="form-control changeLang ">
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>{{ __('partials.languages.fr') }}</option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>{{ __('partials.languages.en') }}</option>
                            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>{{ __('partials.languages.ar') }}</option>
                    </select>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</div>

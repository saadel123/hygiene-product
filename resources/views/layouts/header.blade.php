<header id="header" class="">
    <div class="header-top">
        <div class="container-fluid align-items-center justify-content-between">
            <!-- Navbar-->
            <nav class="navbar navbar-expand">
                <div class="container-fluid">
                    <div class="navbar-collapse collapse" id="mynavbar" style="justify-content: space-between;">
                        <div class="col-lg-3 text-start text-white">
                            <span> <i class="bi bi-telephone-fill me-3"> </i> +(212)6 00 00 00 00</i> <span> <br>
                                    <span><i class="bi bi-envelope-fill me-3"> </i>elghanemysaad@gmail.com</i> </span>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-inline mx-auto" style="padding-right: 40px;">
                                <a class="brand" href="/">
                                    <img src="{{ asset('assets/img/logo-saad.png') }}" height="100" alt="Saad Logo"
                                        loading="lazy" class="mt-4" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 text-end me-3" style="z-index: 2">
                               <ul class="language-list">
                                <li>
                                    <a href="{{ route('changeLang') }}?lang=fr"
                                        class="language-link {{ session()->get('locale', 'fr') == 'fr' ? 'active' : '' }}">Français
                                        <span class="text-white fw-bold ms-2">/</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('changeLang') }}?lang=ar"
                                        class="language-link {{ session()->get('locale') == 'ar' ? 'active' : '' }}">العربية
                                        <span class="text-white fw-bold ms-2">/</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('changeLang') }}?lang=en"
                                        class="language-link {{ session()->get('locale') == 'en' ? 'active' : '' }}">English</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="pb-4 menu-mobile">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center mn-mobile">
        <a href="/" class="logo-nav d-flex align-items-center">
            <img src="{{ asset('assets/img/icone-accueil.png') }}" alt="" />
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
                <li><a class="nav-link scrollto {{ request()->is('qui-sommes-nous') ? 'active' : '' }}"
                        href="{{ url('/qui-sommes-nous') }}">{{ __('partials.navbar.qui-sommes-nous') }}</a></li>
                <li><a class="nav-link scrollto {{ request()->is('produits*') ? 'active' : '' }}"
                        href="{{ url('/produits') }}">{{ __('partials.navbar.produits') }}</a></li>
                <li><a class="nav-link scrollto {{ request()->is('nos-atouts') ? 'active' : '' }}"
                        href="{{ url('/nos-atouts') }}">{{ __('partials.navbar.nos_atouts') }}</a></li>
                <li>
                    <a class="nav-link scrollto {{ request()->is('distribution') ? 'active' : '' }}"
                        href="{{ route('distribution.index') }}">{{ __('partials.navbar.distribution') }}</a>
                </li>
                <li><a class="nav-link scrollto {{ request()->is('blogs') ? 'active' : '' }}"
                        href="{{ route('blogs.index') }}">{{ __('partials.navbar.blog') }}</a></li>
                <li><a class="nav-link scrollto {{ request()->is('contactez-nous') ? 'active' : '' }}"
                        href="{{ url('/contactez-nous') }}">{{ __('partials.navbar.contact') }}</a></li>
                <li class="ms-4 me-4">
                    <select class="form-control changeLang ">
                        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                            {{ __('partials.languages.fr') }}</option>
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                            {{ __('partials.languages.en') }}</option>
                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                            {{ __('partials.languages.ar') }}</option>
                    </select>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</div>

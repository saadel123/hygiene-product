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
        <a href="/" class="logo d-flex align-items-center">
            <img src="assets/img/icone-accueil.png" alt="" />
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
                <li><a class="nav-link scrollto" href="{{ url('/qui-sommes-nous') }}">Qui sommes-nous</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/produits') }}">Produits</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/nos_atouts') }}">Nos atouts</a></li>
                <li>
                    <a class="nav-link scrollto" href="#portfolio">Distribution</a>
                </li>
                <li><a class="nav-link scrollto" href="#team">Blog</a></li>
                {{-- <li class="dropdown">
        <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown">
                <a href="#"><span>Deep Drop Down</span>
                    <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
        </ul>
    </li> --}}
                <li><a class="nav-link scrollto" href="{{url('/contactez-nous')}}">Contactez-nous</a></li>
                {{-- <li>
        <a class="getstarted scrollto" href="#qui-sommes-nous">Get Started</a>
    </li> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</div>

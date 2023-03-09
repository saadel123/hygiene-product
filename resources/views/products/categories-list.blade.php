<section id="category" class="category">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12 d-flex flex-column">
            <div class="row gy-4 align-items-center justify-content-center">
                @php
                    $i = 200;
                @endphp
                @foreach ($categories as $categorie)
                    <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="{{ $i }}">
                        <a href="{{ route('produits.show', $categorie->slug) }}"
                            class="category-btn d-md-block {{ request()->is('produits/'.$categorie->slug.'*') ? 'active' : '' }}">
                            <div class=" title">
                                <h4>{{ $categorie->name }}</h4>
                            </div>
                        </a>
                    </div>
                    @php
                        $i += 100;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
</section>

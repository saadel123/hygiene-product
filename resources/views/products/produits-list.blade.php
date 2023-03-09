<!--  Products Section -->
<section id="pricing" class="products">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-left">
            @php
                $i = 200;
            @endphp
            @foreach ($category as $products)
                @foreach ($products->products as $product)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $i }}">
                        <div class="box">
                            <img src="{{ Voyager::image($product->image) }}" class="img-fluid"
                                alt="{{ $product->title }}" />
                            <h3>{{ $product->title }}</h3>
                            <a href="{{ url('produits/'. $products->slug . '/' . $product->slug) }}" class="btn-buy">Voir
                                plus</a>
                        </div>
                    </div>
                    @php
                        $i += 100;
                    @endphp
                @endforeach
            @endforeach
        </div>
    </div>
</section>
<!-- End Products Section -->

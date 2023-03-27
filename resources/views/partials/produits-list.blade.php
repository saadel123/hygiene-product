<!--  Products Section -->
<section id="pricing" class="products">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-left">
            @php
                $delay  = 200;
            @endphp
            @if($category)
                @foreach ($category->products as $product)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $delay  }}">
                        <div class="box">
                            <img src="{{ Voyager::image($product->image) }}" class="img-fluid"
                                alt="{{ $product->{'title_' . app()->getLocale()} }}" />
                            <h3>{{ $product->{'title_' . app()->getLocale()} }}</h3>
                            <a href="{{ url('produits/'. $category->slug . '/' . $product->slug) }}" class="btn-buy">{{ __('partials.buttons.see_more') }}</a>
                        </div>
                    </div>
                    @php
                        $delay  += 100;
                    @endphp
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Products Section -->

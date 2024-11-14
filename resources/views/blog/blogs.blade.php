@extends('master')
@section('title', 'Derniers articles de blog | Blog Rana Industrie')
@section('description', 'Explorez nos derniers articles de blog couvrant divers sujets liés aux produits de consommation, à l hygiène, aux informations sur l industrie et plus encore. Restez informé et obtenez des informations précieuses du blog de Rana Industrie.')

@section('stylesheet')
    <style>
        .blog .img-fluid {
            max-height: 300px;
        }

        .blog .blog-pagination a,
        .blog .blog-pagination span {
            border-radius: 50% !important;
            margin: 0 5px !important;
            padding: 7px 16px;
        }

        .active>.page-link,
        .page-link.active {
            background: #388ccc;
        }
    </style>

@endsection

@section('content')
    <main id="main">
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                                        <h1 style="display:none;">{{ __('partials.navbar.blog') }}</h1>
                </header>
                <div class="row">
                    <div class="col-lg-12 entries">
                        @foreach ($blogs as $blog)
                           @php
                                $translatedTitle = $blog->title;
                                $translatedBody = $blog->body;
                                $locale = session()->get('locale');

                                if ($locale == 'ar' && !empty($blog->title_ar)) {
                                    $translatedTitle = $blog->title_ar;
                                    $translatedBody = $blog->body_ar;
                                } elseif ($locale == 'en' && !empty($blog->title_en)) {
                                    $translatedTitle = $blog->title_en;
                                    $translatedBody = $blog->body_en;
                                }
                            @endphp
                            @if (!empty($translatedTitle))
                                <div class="row entry">
                                    <div class="col-md-4">
                                        <div class="">
                                            <img src="{{ Voyager::image($blog->image) }}" alt="{{ $translatedTitle }}"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h2 class="entry-title">
                                            <a href="{{ route('blogs.show', $blog->slug) }}">{{ $translatedTitle }}</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <ul>
                                                <i class="bi bi-clock"></i>
                                                <time>
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}
                                                </time>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>
                                                {!! Str::limit($translatedBody, 320, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li>{!! $blogs->links() !!}</li>
                            </ul>
                        </div>
                    </div><!-- End blog entries list -->
                </div>
            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@endsection

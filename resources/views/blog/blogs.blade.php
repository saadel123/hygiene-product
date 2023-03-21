@extends('master')
@section('title', 'Rana')

@section('description', 'TEST')
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
    </style>

@endsection

@section('content')

    <main id="main">


        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 entries">
                        @foreach ($blogs as $blog)
                            <div class="row entry">
                                <div class="col-md-4">
                                    {{-- entry-img --}}
                                    <div class="">
                                        <img src="{{ Voyager::image($blog->image) }}" alt="{{ $blog->title }}"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2 class="entry-title">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
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
                                            {!! Str::limit($blog->body, 320, '...') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
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

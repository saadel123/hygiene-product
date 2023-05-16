@extends('master')

@section('stylesheet')
    <style>
        /* .blog .img-fluid {
                                max-height: 300px;
                            } */

        .blog p {
            white-space: pre-line;
        }
    </style>

@endsection

@section('content')
    <!-- ======= Blog Single Section ======= -->
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ Voyager::image($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                        </div>

                        <h1 class="entry-title">
                            {{ $blog->title }}
                        </h1>

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
                                {!! $blog->body !!}
                            </p>
                        </div>

                    </article><!-- End blog entry -->
                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="mb-4">
                            <a href="#" onclick="history.back()">
                                <img src="{{ asset('assets/img/retour.png') }}" style="max-height: 40px;" alt="retour">
                            </a>
                        </div>
                        <h3 class="sidebar-title">Les dernières blogs</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($relatedBlogs as $relatedBlog)
                                <div class="post-item clearfix">
                                    <img src="{{ Voyager::image($relatedBlog->image) }}" alt="">
                                    <h4><a href="{{ route('blogs.show', $relatedBlog->slug) }}">
                                            {{ $relatedBlog->title }}</a></h4>
                                    <time datetime="2020-01-01">
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</time>
                                </div>
                            @endforeach


                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->
            </div>
        </div>
    </section><!-- End Blog Single Section -->
@endsection

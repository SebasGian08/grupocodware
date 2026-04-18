<section class="news-two">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title_two">
            <div class="sec-title_two-title">Blog ~</div>
            <h2 class="sec-title_two-heading">Últimas <span>noticias</span></h2>
        </div>

        <div class="news-carousel owl-carousel owl-theme" data-loop="false">

            @foreach($blogs as $blog)

            <div class="news-block">
                <div class="inner-box">

                    <!-- IMAGE -->
                    <div class="image">
                        <a href="{{ route('blog.show', $blog->slug) }}">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        </a>
                    </div>

                    <!-- CONTENT -->
                    <div class="lower-content">

                        <div class="post-date">
                            {{ $blog->created_at->format('d M Y') }}
                        </div>

                        <h5>
                            <a href="{{ route('blog.show', $blog->slug) }}">
                                {{ $blog->title }}
                            </a>
                        </h5>

                        <div class="text">
                            {{ \Illuminate\Support\Str::limit($blog->excerpt, 90) }}
                        </div>

                        <div class="lower-box">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">

                                <div class="author">
                                    <span class="author-image">
                                        <img src="{{ asset('assets/images/icons/news-icon.png') }}" alt="">
                                    </span>
                                    Codware Informa
                                </div>

                                <a href="{{ route('blog.show', $blog->slug) }}" class="detail">
                                    Ver
                                </a>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>
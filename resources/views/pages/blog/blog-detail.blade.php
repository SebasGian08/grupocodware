@extends('layouts.appweb')

@section('title', $blog->title)

@section('content')

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- CONTENT -->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">

                <div class="blog-single">
                    <div class="inner-box">

                        <!-- IMAGE -->
                        <div class="image">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        </div>

                        <!-- CONTENT -->
                        <div class="lower-content">

                            <ul class="post-meta">
                                <li>
                                    <span class="icon fa-solid fa-clock fa-fw"></span>
                                    {{ $blog->created_at->format('d M Y') }}
                                </li>

                               <!--  <li>
                                    <span class="icon fa-solid fa-user fa-fw"></span>
                                    por <strong>{{ $blog->user->name ?? 'Admin' }}</strong>
                                </li> -->

                                <li>
                                    <span class="icon fa-solid fa-tag fa-fw"></span>
                                    {{ $blog->category->name ?? 'General' }}
                                </li>
                            </ul>

                            <p>{{ $blog->excerpt }}</p>

                            <h4>{{ $blog->title }}</h4>


                            {!! strip_tags($blog->content, '<p><strong><br><ul><li>') !!}

                        </div>

                    </div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">

                <aside class="sidebar sticky-top">

                    <!-- SEARCH -->
                    <div class="sidebar-widget search-box">
                        <form method="GET" action="{{ route('blog.index') }}">
                            <input type="search" name="q" placeholder="Buscar..." value="{{ request('q') }}">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- CATEGORÍAS -->
                    <!-- <div class="sidebar-widget sidebar-blog-category">
                        <h4>Categorías</h4>
                        <ul>
                            <li><a href="#">Tecnología</a></li>
                            <li><a href="#">Negocios</a></li>
                            <li><a href="#">Diseño</a></li>
                        </ul>
                    </div> -->

                    <!-- 🔥 RECIENTES -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Noticias recientes</h4>
                        </div>

                        @foreach($recentBlogs as $item)

                        <article class="post">

                            <figure class="post-thumb">
                                <img src="{{ asset($item->image) }}">
                            </figure>

                            <div class="text">
                                <a href="{{ route('blog.show', $item->slug) }}">
                                    {{ Str::limit($item->title, 50) }}
                                </a>
                            </div>

                            <div class="post-info">
                                {{ $item->created_at->format('d M Y') }}
                            </div>

                        </article>

                        @endforeach

                    </div>

                    <!-- TAGS -->
                    <!-- <div class="sidebar-widget popular-tags">
                        <h4>Etiquetas</h4>
                        <a href="#">Tech</a>
                        <a href="#">Cloud</a>
                        <a href="#">Business</a>
                    </div> -->

                </aside>

            </div>

        </div>
    </div>
</div>

@include('sections.contact')

@endsection
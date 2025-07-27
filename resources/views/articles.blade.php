@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->

    <section class="blog-grid section-space">
        <div class="container">
            <div class="row mb-60 mb-md-100 mb-sm-100 mb-xs-40 justify-content-center align-items-center">
                <div class="">
                    <div class="section__title-wrapper mb-20">
                        <span class="section__subtitle text-third">Artikel</span>
                        <h2 class="section__title title-animation">Kabar Terkini Desa Talun</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                @foreach ($articles as $article)    
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="{{ route('artikel-detail', ['slug' => $article->slug]) }}" class="blog-grid__media">
                            <img src="{{ asset('uploads') }}/{{ $article->image }}" alt="image not found">
                        </a>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li>{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}</li>
                                <li><a href="{{ route('artikel-kategori', ['slug' => $article->category->slug]) }}">{{ $article->category->name }}</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="{{ route('artikel-detail', ['slug' => $article->slug]) }}">{{ $article->title }}</a></h6>
                            {!! Str::limit($article->content, 100) !!}

                            <a class="read-more" href="{{ route('artikel-detail', ['slug' => $article->slug]) }}">Selengkapnya
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                @endforeach

                {{ $articles->links('pagination::fe-default') }}
            </div>
        </div>
    </section>    
</main>
@endsection
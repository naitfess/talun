@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- "banner-2 area start -->
    <section class="banner-2">
        <div class="swiper banner-2__slider">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="banner-2__item" data-background="{{ asset('uploads') }}/{{ $slider->image }}">
                        <div class="container">
                            <div class="banner-2__content">
                                <div class="banner-2__shape">
                                    <img src="{{ asset('artima') }}/imgs/banner-2/shape.png" alt="image not found">
                                </div>
                                <h6 class="banner-2__content-subtitle">
                                    Desa Talun                                                                           
                                </h6>
                                <h1 class="banner-2__content-title">{{ $slider->title }}</h1>
                                <p class="description mb-0">{{ $slider->subtitle }}</p>
                                <div class="banner-2__btn-box mt-40">
                                    <a href="#sejarah-desa-talun" class="rr-btn rr-btn__border">
                                        <span class="btn-wrap">
                                            <span class="text-one">Telurusi
                                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            <span class="text-two">Telurusi
                                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                    
                                    <div class="banner-2__btn-box-wrapper">
                                        <a href="#video-profil" class="popup-video" data-effect="mfp-move-from-top vertical-middle">
                                            <div class="icon zooming">
                                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0V17.5L13.75 8.75L0 0Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <span>Lihat Video</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class=" banner-2__slider__arrow d-flex justify-content-lg-end justify-content-start">
                <button class=" banner-2__slider__arrow-prev d-flex align-items-center justify-content-center">
                    PREV
                    
                </button>
                
                <button class=" banner-2__slider__arrow-next d-flex align-items-center justify-content-center">
                    NEXT                   
                </button>
            </div>
        </div>
    </section>
    <!-- "banner-2 area end -->
    
    
    <!-- "about-company area start -->
    <section class="about-us-2 section-space__top pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-us-2__media">
                        <img src="{{ asset('uploads') }}/{{ $village_head->image }}" alt="image not found">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-us-2__content">
                        <div class="section__title-wrapper mb-40 mb-xs-35">
                            <span class="section-2__subtitle mb-10 text-third"><img class="rightLeft" src="{{ asset('artima') }}/imgs/update/section-title/left-shape.svg" alt="arrow not found">Kepala Desa Talun</span>
                            <h2 class="section__title mb-25 title-animation">{{ $village_head->name }}</h2>
                            <p class="mb-0 text-justify">{{ $content['kd_description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- "about-company area end -->
    
    <section class="latest-service latest-service__bg section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-2__title-wrapper align-items-center mb-55 mb-xs-40">
                        <span class="section-2__subtitle justify-content-center mb-10 text-third"><img class="rightLeft" src="{{ asset('artima') }}/imgs/update/section-title/left-shape.svg" alt="arrow not found">Tentang Talun <img class="rightLeft" src="{{ asset('artima') }}/imgs/update/section-title/right-shape.svg" alt="arrow not found"></span>
                        <h2 class="section-2__title title-animation">{{ $content['tt_subtitle'] }}</h2>
                    </div>
                </div>
            </div>
            
            <div class="row mb-minus-30 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-service__item">
                        <div class="latest-service__media">
                            <img src="{{ asset('artima') }}/imgs/update/latest-service/latest-service.png" alt="">
                        </div>
                        <div class="latest-service__content">
                            <div class="latest-service__icon mb-25">
                                <img src="{{ asset('artima') }}/imgs/update/latest-service/latest-service-1.svg" alt="image not found">
                            </div>
                            <h6 class="title-animation mb-10"><a href="{{ $content['tt_url_1'] }}">{{ $content['tt_title_1'] }}</a></h6>
                            
                            <p class="mb-15 text-justify">{{ $content['tt_description_1'] }}</p>
                            
                            <a class="read-more" href="{{ $content['tt_url_1'] }}">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-service__item">
                        <div class="latest-service__media">
                            <img src="{{ asset('artima') }}/imgs/update/latest-service/latest-service.png" alt="">
                        </div>
                        <div class="latest-service__content">
                            <div class="latest-service__icon mb-25">
                                <img src="{{ asset('artima') }}/imgs/update/latest-service/latest-service-2.svg" alt="image not found">
                            </div>
                            <h6 class="title-animation mb-10"><a href="{{ $content['tt_url_2'] }}">{{ $content['tt_title_2'] }}</a></h6>
                            
                            <p class="mb-15 text-justify">{{ $content['tt_description_2'] }}</p>
                            
                            <a class="read-more" href="{{ $content['tt_url_2'] }}">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-service__item">
                        <div class="latest-service__media">
                            <img src="{{ asset('artima') }}/imgs/update/latest-service/latest-service.png" alt="">
                        </div>
                        <div class="latest-service__content">
                            <div class="latest-service__icon mb-25">
                                <img src="{{ asset('artima') }}/imgs/update/latest-service/latest-service-3.svg" alt="image not found">
                            </div>
                            <h6 class="title-animation mb-10"><a href="{{ $content['tt_url_3'] }}">{{ $content['tt_title_3'] }}</a></h6>
                            
                            <p class="mb-15 text-justify">{{ $content['tt_description_3'] }}</p>
                            
                            <a class="read-more" href="{{ $content['tt_url_3'] }}">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--choose-us area start -->
    <section class="choose-us section-space overflow-hidden" id="sejarah-desa-talun">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-us__content">
                        <div class="section-2__title-wrapper mb-20">
                            <span class="section-2__subtitle mb-10 text-third"><img class="rightLeft" src="{{ asset('artima') }}/imgs/update/section-title/left-shape.svg" alt="arrow not found">Sejarah Desa Talun</span>
                            <h2 class="section-2__title text-capitalize title-animation">{{ $content['sdt_subtitle'] }}</h2>
                        </div>
                        <p class="text-justify">{{ $content['sdt_description'] }}</p>
                        <a href="#" class="rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Selengkapnya</span>
                                <span class="text-two">Selengkapnya</span>
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="choose-us__media">
                        <div class="choose-us__shape rr-upDown"><img src="{{ asset('artima') }}/imgs/update/choose-us/choose-us-shape.png" alt="image not found"></div>
                        <img class="wow clip-a-z" src="{{ asset('artima') }}/imgs/update/choose-us/choose-us.jpg" alt="image not found">
                        
                        <div class="choose-us__box">
                            <div class="choose-us__icon mb-10"><img src="{{ asset('artima') }}/imgs/update/choose-us/choose-us-1.png" alt="image not found"></div>
                            <h4><span class="odometer" data-count="{{ $content['sdt_population'] }}">0</span></h4>
                            <p class="mb-0">Penduduk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--choose-us area end -->
    
    <!--csolutions-video area start -->
    <section class="solutions-video zoom-in-section overflow-x-hidden" id="video-profil">
        <div class="row">
            <div class="col-12">
                <div class="solutions-video__media overflow-hidden">
                    <img src="{{ asset('uploads') }}/{{ $content['vp_thumbnail'] }}" alt="image not found">
                    <a href="{{ $content['vp_video_url'] }}" class="popup-video zooming  d-flex align-items-center" data-effect="mfp-move-from-top vertical-middle">
                        <div class="icon"> <i class="fa-sharp-duotone fa-solid fa-play"></i> </div>
                    </a>
                    
                    <h2 class="text-white title-animation   homepage-halfwidth">{{ $content['vp_subtitle'] }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!--csolutions-video are1a end -->
    
    <!-- "blog-2 area start -->
    <section class="blog-2 section-space">
        <div class="container">
            <div class="row mb-60 mb-md-100 mb-sm-100 mb-xs-40 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper mb-20">
                        <span class="section__subtitle text-third">Artikel Terbaru</span>
                        <h2 class="section__title title-animation">Kabar Terkini Desa Talun</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="blog-details.html" class="rr-btn blog-btn ">
                        <span class="btn-wrap">
                            <span class="text-one">Lihat Semua Artikel
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="text-two">Lihat Semua Artikel
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="row mb-minus-30">
                @foreach ($articles as $article)
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{ asset('uploads') }}/{{ $article->image }}" alt="image not found">
                        </a>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a>{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">{{ $article->title }}</a></h6>
                            
                            {!! Str::limit($article->content, 100, '...') !!}
                            
                            <a class="read-more" href="#">Selengkapnya
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- "blog-2 area end -->
    
    <section class="contact section-space__bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact__from">
                        <span class="section__subtitle text-third">Hubungi Kami</span>
                        <h4 class="title-animation mb-20">{{ $content_hk['subtitle'] }}</h4>
                        <p class="text-justify mw-100">{{ $content_hk['description'] }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe src="{{ $content_hk['maps_url'] }}"
                        width="100%" height="555" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
@endsection
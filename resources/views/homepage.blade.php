@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- "banner-2 area start -->
    <section class="banner-2">
        <div class="swiper banner-2__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-2__item" data-background="{{ asset('artima') }}/imgs/banner-2/banner-1.jpg">
                        <div class="container">
                            <div class="banner-2__content">
                                <div class="banner-2__shape">
                                    <img src="{{ asset('artima') }}/imgs/banner-2/shape.png" alt="image not found">
                                </div>
                                <h6 class="banner-2__content-subtitle">
                                    Desa Talun                                                                           
                                </h6>
                                <h1 class="banner-2__content-title">Bangga Menjadi Bagian Dari Desa Talun</h1>
                                <p class="description mb-0">Take your business to the next level with Breeza Business agency for business Idea management tools for you</p>

                                <div class="banner-2__btn-box mt-40">
                                    <a href="#" class="rr-btn rr-btn__border">
                                        <span class="btn-wrap">
                                            <span class="text-one">Get In Touch
                                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            <span class="text-two">Get In Touch
                                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
        
                                    <div class="banner-2__btn-box-wrapper">
                                        <a href="https://www.youtube.com/watch?v=vkew-1KK3Sc" class="popup-video" data-effect="mfp-move-from-top vertical-middle">
                                            <div class="icon zooming">
                                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0V17.5L13.75 8.75L0 0Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <span>Watch Video</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <section class="about-us-2 section-space__top">
        <div class="container">
            <div class="about-us-2__shape">
                <img src="{{ asset('artima') }}/imgs/about-us-2/about-shape.png" alt="image not found">
            </div>
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-us-2__media">
                        <img src="{{ asset('artima') }}//imgs/about-us-2/about.jpg" alt="image not found">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-us-2__content">
                        <div class="section__title-wrapper mb-40 mb-xs-35">
                            <span class="section-2__subtitle mb-10 text-third"><img class="rightLeft" src="{{ asset('artima') }}/imgs/update/section-title/left-shape.svg" alt="arrow not found">Kepala Desa Talun</span>
                            <h2 class="section__title mb-25 title-animation">SRI WIDODO</h2>
                            <p class="mb-0">You can align your image to the left, right, or center with a caption, link and alt text New Journey. You can align your image to the left, right, or center with a caption, link and alt text New Journey.</p>
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
                        <h2 class="section-2__title title-animation">Sekilas Statistik Desa Talun</h2>
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
                            <h6 class="title-animation mb-10"><a href="service-details.html">5 Dusun di Desa Talun</a></h6>

                            <p class="mb-15">Desa Talun terdiri dari 5 dusun yang menjadi bagian dari struktur wilayah administratif. Setiap dusun memiliki karakteristik dan potensi tersendiri yang berkontribusi dalam pembangunan desa secara menyeluruh.</p>

                            <a class="read-more" href="service-details.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
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
                            <h6 class="title-animation mb-10"><a href="service-details.html">15 RT dan 5 RW</a></h6>

                            <p class="mb-15">Struktur pemerintahan di Desa Talun terbagi ke dalam 15 Rukun Tetangga (RT) dan 5 Rukun Warga (RW). Pembagian ini memudahkan koordinasi antarwarga serta pelaksanaan program kerja dan pelayanan masyarakat.</p>

                            <a class="read-more" href="service-details.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
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
                            <h6 class="title-animation mb-10"><a href="service-details.html">12,5 Kilometer Persegi</a></h6>

                            <p class="mb-15">Dengan luas wilayah sekitar 12,5 km², Desa Talun memiliki beragam topografi yang meliputi pemukiman, lahan pertanian, dan kawasan potensial lainnya untuk dikembangkan sebagai sumber ekonomi desa.</p>

                            <a class="read-more" href="service-details.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--choose-us area start -->
    <section class="choose-us section-space overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-us__content">
                        <div class="section-2__title-wrapper mb-20">
                            <span class="section-2__subtitle mb-10 text-third"><img class="rightLeft" src="{{ asset('artima') }}/imgs/update/section-title/left-shape.svg" alt="arrow not found">Sejarah Desa Talun</span>
                            <h2 class="section-2__title text-capitalize title-animation">Perjalanan Panjang Menuju Kemajuan</h2>
                        </div>
                        <p class="text-justify">Desa Talun memiliki sejarah panjang sebagai daerah pertanian yang subur. Sejak masa kolonial, wilayah ini telah menjadi pusat aktivitas pertanian dengan sistem irigasi tradisional yang masih dipertahankan hingga saat ini. Melalui gotong royong dan semangat kebersamaan, masyarakat Desa Talun terus membangun dan mengembangkan desanya menjadi komunitas yang maju dan sejahtera. Tradisi pertanian yang diwariskan secara turun-temurun tetap dijaga, sambil perlahan-lahan beradaptasi dengan perkembangan teknologi dan kebutuhan zaman. Kini, Desa Talun tidak hanya dikenal sebagai lumbung pangan lokal, tetapi juga sebagai contoh desa yang berhasil menjaga kearifan lokal di tengah modernisasi.</p>
                        <a href="contact-us.html" class="rr-btn">
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
                            <h4><span class="odometer" data-count="1945">0</span></h4>
                            <p class="mb-0">Penduduk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--choose-us area end -->

    <!--csolutions-video area start -->
    <section class="solutions-video zoom-in-section overflow-x-hidden">
        <div class="row">
            <div class="col-12">
                <div class="solutions-video__media overflow-hidden">
                    <img src="{{ asset('artima') }}/imgs/update/solutions-video/solutions-video.jpg" alt="image not found">
                    <a href="https://www.youtube.com/watch?v=vkew-1KK3Sc" class="popup-video zooming  d-flex align-items-center" data-effect="mfp-move-from-top vertical-middle">
                        <div class="icon"> <i class="fa-sharp-duotone fa-solid fa-play"></i> </div>
                    </a>

                    <h2 class="text-white title-animation   homepage-halfwidth">Jelajahi Keindahan dan Potensi dari Desa Talun</h2>
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
                @for ($i = 0; $i < 3; $i++)    
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{ asset('artima') }}/imgs/blog-grid/blog-1.png" alt="image not found">
                        </a>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">26 January 2024</a></li>
                                <li><a href="blog-details.html">Architecture</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">Five Quick Tips Regarding Architecture.</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                @endfor
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
                        <h4 class="title-animation mb-10">Mari Terhubung dengan Desa Talun</h4>
                        <p>Kami selalu terbuka untuk mendengar aspirasi, saran, dan masukan dari masyarakat. Bersama-sama kita bangun Desa Talun yang lebih maju dan sejahtera untuk generasi mendatang.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.14085946552!2d110.54!3d-7.71!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6e8b7c3e7e7f%3A0x4027a76e352e240!2sTalun%2C%20Kemalang%2C%20Klaten%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1689012345678!5m2!1sen!2sid"
                            width="100%" height="555" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
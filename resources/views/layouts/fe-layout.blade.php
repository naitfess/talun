@php
$setting = \App\Helpers\AppHelper::getSetting();
@endphp
<!doctype html>
<html class="no-js" lang="id">


<!-- Mirrored from html.rrdevs.net/artima/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jul 2025 12:09:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desa Talun</title>
    <meta name="description" content="Desa Talun">
    <meta name="keywords" content="desa, talun, kabupaten, website desa, desa talun, website desa talun, desa talun kabupaten, website desa talun kabupaten">
    <meta name="author" content="KKN UPNVY AD.83.290">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
     <!-- Open Graph -->
    <meta property="og:title" content="{{ $setting->site_title ?? 'Desa Talun' }}">
    <meta property="og:description" content="{{ $setting->meta_description ?? 'Desa Talun' }}">
    <meta property="og:image" content="{{ asset('uploads') }}/{{ $setting->logo_footer }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $setting->site_title ?? 'Desa Talun' }}">
    <meta name="twitter:description" content="{{ $setting->meta_description ?? 'Desa Talun' }}">
    <meta name="twitter:image" content="{{ asset('uploads') }}/{{ $setting->logo_footer }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('common') }}/img/favicon.ico">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('artima') }}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('artima') }}/css/vendor/animate.min.css">
    <link rel="stylesheet" href="{{ asset('artima') }}/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('artima') }}/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('artima') }}/css/vendor/fontawesome-pro.css">
    <link rel="stylesheet" href="{{ asset('artima') }}/css/vendor/spacing.css"> 
    <link rel="stylesheet" href="{{ asset('artima') }}/css/plugins/odometer-theme-default.css">
    <link rel="stylesheet" href="{{ asset('artima') }}/css/plugins/carouselTicker.css">
    <link rel="stylesheet" href="{{ asset('artima') }}/css/main.css">
    <link rel="stylesheet" href="{{ asset('common') }}/css/style.css">
</head>

<body class="body-1">
    
    <!-- preloader start -->
    <!-- style 1 -->
    <div id="preloader" data-preloader="active" data-loaded="doted">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    
    <!-- style 2 -->
    <div class="preloader" data-preloader="deactive" data-loaded="progress">
        <div class="wrapper w-100 text-center">
            <div id="progress-bar" class="preloader-text" data-text="RIBUILD"></div>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
    
    <!-- preloader start -->
    <div class="loading-form">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- preloader end -->
    
    <!-- Backtotop start -->
    <div id="scroll-percentage">
        <span id="scroll-percentage-value"></span>
    </div>
    <!-- Backtotop end -->
    
    <!-- cursorAnimation start -->
    <div class="cursor-wrapper relative">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <!-- cursorAnimation end -->
    
    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__area sidebar-fixed">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{ asset('uploads') }}/{{ $setting->logo_footer }}" alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix"></div>
                    <div class="offcanvas__social"><ul class="header-top-socail-menu d-flex">
                        <li>
                            <a href="{{ $setting->facebook_url }}"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="{{ $setting->twitter_url }}"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="{{ $setting->instagram_url }}"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!-- Header area start -->
@include('inc.fe-header')
<!-- Header area end -->

@yield('content')

@include('inc.fe-footer')
<!-- Footer-2 area end -->

<!-- JS here -->
<script src="{{ asset('artima') }}/js/vendor/jquery-3.7.1.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/waypoints.min.js"></script>
<script src="{{ asset('artima') }}/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/meanmenu.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/odometer.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/swiper.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/wow.js"></script>
<script src="{{ asset('artima') }}/js/vendor/magnific-popup.min.js"></script>
<script src="{{ asset('artima') }}/js/vendor/type.js"></script>
<script src="{{ asset('artima') }}/js/plugins/nice-select.min.js"></script>
<script src="{{ asset('artima') }}/js/vendor/jquery-ui.min.js"></script>
<script src="{{ asset('artima') }}/js/vendor/jquery.appear.js"></script>
<script src="{{ asset('artima') }}/js/plugins/isotope.pkgd.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/gsap.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/ScrollTrigger.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/SplitText.js"></script>
<script src="{{ asset('artima') }}/js/plugins/tween-max.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/draggable.min.js"></script>
<script src="{{ asset('artima') }}/js/plugins/jquery.carouselTicker.js"></script>
<script src="{{ asset('artima') }}/js/vendor/ajax-form.js"></script>
<script src="{{ asset('artima') }}/js/plugins/TextPlugin.min.js"></script>
<script src="{{ asset('artima') }}/js/main.js"></script>
<script src="{{ asset('artima') }}/js/plugins/magiccursor.js"></script>
</body>

</html>
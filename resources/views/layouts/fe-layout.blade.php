<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.rrdevs.net/artima/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jul 2025 12:09:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Artima – Modern Architecture & Interior HTML5 Template</title>
    <meta name="description" content="Artima – Modern Architecture & Interior HTML5 Template">
    <meta name="author" content="ranaahmead">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('artima') }}/imgs/favicon.svg">
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
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="{{ asset('artima') }}/imgs/logo/logo-white.svg" alt="logo not found">
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
                <div class="offcanvas__social">
                    <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                    <p class="mb-30">The scallops were perfectly cooked, tender, and flavorful, paired beautifully with a creamy risotto and seasonal vegetables. The presentation was artful, showcasing the chef's attention to detail.</p>
                    <ul class="header-top-socail-menu d-flex">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                        <li><a href="https://vimeo.com/"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>
                </div>
                <div class="offcanvas__btn">
                    <div class="header__btn-wrap">
                        <a href="contact.html" class="rr-btn__header d-sm-none mb-10 w-100">
                            <span class="btn-wrap">
                                <span class="text-one">Get In Touch</span>
                                <span class="text-two">Get In Touch</span>
                            </span>
                        </a>
                        <a href="https://themeforest.net/user/rrdevs/portfolio" class="rr-btn__header w-100">
                            <span class="btn-wrap">
                                <span class="text-one">Purchase Now</span>
                                <span class="text-two">Purchase Now</span>
                            </span>
                        </a>
                    </div>
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
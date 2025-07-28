<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <title>Desa Talun</title>
    <meta charset="utf-8" />
    <meta name="description" content="Desa Talun" />
    <meta name="keywords" content="Desa Talun" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Desa Talun" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="http://preview.keenthemes.comauthentication/layouts/overlay/sign-in.html" />
    <link rel="shortcut icon" href="{{ asset('common') }}/img/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('metronic') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>body { background-image: url('{{ asset('metronic') }}/media/auth/bg10.jpeg'); } [data-bs-theme="dark"] body { background-image: url('{{ asset('metronic') }}/media/auth/bg10-dark.jpeg'); }</style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('metronic') }}/media/auth/agency.png" alt="" />
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('metronic') }}/media/auth/agency-dark.png" alt="" />
                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Portal Desa Talun</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-gray-600 fs-base text-center fw-semibold">
                        Sistem Informasi Desa Talun, Kemalang, Klaten. 
                        <br />Silakan login untuk mengakses layanan administrasi,
                        <br />informasi, dan komunikasi desa secara digital.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--begin::Aside-->
                <!--begin::Body-->
                <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                    <!--begin::Wrapper-->
                    <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                        <!--begin::Content-->
                        <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                                <!--begin::Form-->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form class="form w-100" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <!--begin::Heading-->
                                    <div class="text-center mb-11">
                                        <!--begin::Title-->
                                        <h1 class="text-gray-900 fw-bolder mb-3">Sign In</h1>
                                        <!--end::Title-->
                                        <!--begin::Subtitle-->
                                        <div class="text-gray-500 fw-semibold fs-6">Portal Desa Talun</div>
                                        <!--end::Subtitle=-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-7">
                                        @error('email')
                                        <div class="mb-2 text-center">
                                            <small class="text-danger mb-2 text-center">{{ $message }}</small>
                                        </div>
                                        @enderror
                                        <!--begin::Email-->
                                        <x-text-input id="email" class="form-control bg-transparent" type="email" name="email" :value="old('email')" required placeholder="Email" autocomplete="off" />
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Input group=-->
                                    <div class="fv-row mb-3">
                                        <!--begin::Password-->
                                        <x-text-input id="password" class="form-control bg-transparent" type="password" name="password" required placeholder="Password" autocomplete="off" />
                                        <!--end::Password-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10 mt-10">
                                        <button type="submit" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Sign In</span>
                                        </button>
                                    </div>
                                    <!--end::Submit button-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack justify-content-center"> 
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold fs-base">
                                    <a href="https://instagram.com/we.talun" class="text-gray-800 text-hover-primary " target="_blank">KKN UPNVY AD.83.290</a>
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        <!--begin::Javascript-->
        <script>var hostUrl = "{{ asset('metronic') }}/";</script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('metronic') }}/plugins/global/plugins.bundle.js"></script>
        <script src="{{ asset('metronic') }}/js/scripts.bundle.js"></script>
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
    </html>
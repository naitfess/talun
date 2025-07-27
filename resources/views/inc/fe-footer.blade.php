<footer>
    <section class="footer-3__area-common theme-bg-heading-primary overflow-hidden">
        <div class="footer-3__main-wrapper">
            <div class="container">
                <div class="row mb-minus-50">
                    <div class="col-lg-4 col-12">
                        <div class="footer-3__widget footer-3__widget-item-1">
                            <div class="footer-3__logo mb-15">
                                <a href="{{ route('beranda') }}">
                                    <img class="logo-footer" src="{{ asset('uploads') }}/{{ $setting->logo_footer }}" alt="logo not found">
                                </a>
                            </div>

                            <div class="footer-3__content mb-30 mb-xs-35">
                                <p class="mb-0">
                                    {{ $setting->description }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=" col-sm-6 col-md-4 col-lg-3 col-12">
                        <div class="footer-3__widget footer-3__widget-item-2">
                            <div class="footer-3__widget-title">
                                <h6>Tentang Talun</h6>
                            </div>
                            <div class="footer-3__company">
                                <ul>
                                    <li><a href="{{ route('sejarah-desa') }}">Sejarah Desa</a></li>
                                    <li><a href="{{ route('visi-misi') }}">Visi Misi</a></li>
                                    <li><a href="{{ route('monografi-desa') }}">Monografi Desa</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=" col-sm-6 col-md-4 col-lg-2 col-12">
                        <div class="footer-3__widget footer-3__widget-item-3">
                            <div class="footer-3__widget-title">
                                <h6>Lainnya</h6>
                            </div>

                            <ul class="footer-3__resources">
                                <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ route('perangkat-desa') }}">Perangkat Desa</a></li>
                                <li><a href="{{ route('lembaga-desa') }}">Lembaga Desa</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=" col-sm-6 col-md-4 col-lg-3 col-12">
                        <div class="footer-3__widget footer-3__widget-item-4">
                            <div class="footer-3__widget-title">
                                <h6>Hubungi Kami</h6>
                            </div>

                            <div class="footer-3__contact">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('artima') }}/imgs/icon/call.svg" alt="">
                                        </span>
                                        <span class="text">
                                            <a class="location" href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('artima') }}/imgs/icon/mail.svg" alt="">
                                        </span>
                                        <span class="text">
                                            <a class="location" href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                        </span>
                                    </li>
                                    <li class="address">
                                        <span class="icon">
                                            <img src="{{ asset('artima') }}/imgs/icon/map.svg" alt="">
                                        </span>
                                        <span class="text">
                                            <a class="location" target="_blank" href="{{ $setting->maps_url }}">{{ $setting->address }}</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-3__bottom">
            <div class="container">
                <div class="footer-3__bottom-wrapper">
                    <div class="footer-3__copyright text-lg-start text-center">
                        <p class="mb-0">{{ $setting->copyright }}. Dikembangkan oleh <a href="https://www.instagram.com/we.talun/">KKN UPNVY AB.83.290</a></p>
                    </div>
    
                    <div class="footer-3__social">
                        <a href="{{ $setting->facebook_url }}"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="{{ $setting->twitter_url }}"><i class="fa-brands fa-twitter"></i></a>
                        <a href="{{ $setting->instagram_url }}"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
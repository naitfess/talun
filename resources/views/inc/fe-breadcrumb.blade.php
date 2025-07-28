<div class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background" data-background="{{ asset('artima') }}/imgs/breadcrumb/page-header-1.png"></div>
        <div class="container">
            <div class="breadcrumb__bg-left"></div>
            <div class="breadcrumb__bg-right"></div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">{{ $page->title }}</h2>
                        @if (request()->is('sejarah-desa') || request()->is('visi-misi') || request()->is('monografi-desa'))
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span>Tentang Talun</span></li>
                                    <li class="active"><span>{{ $page->title }}</span></li>
                                </ul>
                            </nav>
                        </div>
                        @endif
                        @if (request()->is('struktur-organisasi') || request()->is('perangkat-desa') || request()->is('badan-permusyawaratan-desa'))
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span>Pemerintahan</span></li>
                                    <li class="active"><span>{{ $page->title }}</span></li>
                                </ul>
                            </nav>
                        </div>
                        @endif
                        @if (request()->is('kesehatan') || request()->is('dukuh'))
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span>Data Desa</span></li>
                                    <li class="active"><span>{{ $page->title }}</span></li>
                                </ul>
                            </nav>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
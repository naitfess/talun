@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->

    <section class="blog-4 section-space pb-75">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-2__title-wrapper align-items-center mb-55">
                        <span class="section-2__subtitle text-center mb-10">Pembagian Wilayah</span>
                        <h2 class="section-2__title text-capitalize text-center title-animation">Dukuh di Desa Talun</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                @for ($i = 0; $i < 5; $i++)    
                <div class="col-lg-3 col-md-6">
                    <div class="blog-4__item">
                        <a href="blog-list.html" class="blog-4__item-media">
                            <img src="{{ asset('artima') }}/imgs/update/blog-4/blog-1.jpg" alt="image not found">
                        </a>

                        <div class="blog-4__item-content">
                            <h6 class="text-white mt-10 sub-village-title"><a href="blog-list.html">Dukuh Ngagrong</a></h6>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
</main>
@endsection
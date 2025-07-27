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
                        <span class="section-2__subtitle text-center text-third">Pembagian Wilayah</span>
                        <h2 class="section-2__title text-capitalize text-center title-animation">Dukuh di Desa Talun</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                @foreach ($subVillages as $subVillage)
                <div class="col-lg-3 col-md-6">
                    <div class="blog-4__item">
                        <a href="{{ route('dukuh-detail', ['slug' => $subVillage->slug]) }}" class="blog-4__item-media">
                            <img src="{{ asset('uploads') }}/{{ $subVillage->image }}" alt="image not found">
                        </a>
                        <div class="blog-4__item-content">
                            <h6 class="text-white mt-10 sub-village-title"><a href="{{ route('dukuh-detail', ['slug' => $subVillage->slug]) }}">{{ $subVillage->name }}</a></h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->

    <section class="service-details section-space__top">
        <div class="container">
            <div class="row pb-5">
                <div class="col-xl-8">
                    <div class="service-details__content">
                        <div class="service-details__media">
                            <img class="dukuh-img" src="{{ asset('uploads') }}/{{ $villageInstitution->image }}" alt="image not found">
                        </div>
                        <h4 class="title-animation">{{ $villageInstitution->name }}</h4>
                        {!! $villageInstitution->content !!}
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar sidebar-rr-sticky pb-3">
                        <div class="sidebar__widget has--service">
                            <div class="sidebar__widget-service">
                                @foreach ($AllVillageInstitutions as $item)
                                    <a href="{{ route('lembaga-desa-detail', $item->slug) }}">{{ $item->name }}<i class="fa-regular fa-angle-right"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-details  area end -->
</main>
@endsection
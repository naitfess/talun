@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->

    <section class="protfolio-details section-space__top pb-75">
        <div class="container">
            <div class="protfolio-details__content">
                <div class="protfolio-details__media">
                    <img class="dukuh-img" src="{{ asset('uploads') }}/{{ $subVillage->image }}" alt="image not found">
                </div>

                <h4>{{ $subVillage->name }}</h4>

                {!! $subVillage->content !!}
            </div>
        </div>
    </section>
</main>
@endsection
@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->

    <section class="our-featured-service background-gay  section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-55 mb-xs-35">
                        <span class="section__subtitle text-center text-third">What We Offer</span>
                        <h2 class="section__title title-animation">We Are Experts In</h2>
                    </div>
                </div>
            </div>
            <div>
                @include('inc.fe-village-officials')
                {{-- content --}}
            </div>
        </div>
    </section>
</main>
@endsection
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
                            <img src="{{ asset('artima') }}/imgs/service-details/service-1.jpg" alt="image not found">
                        </div>
                        <h4 class="title-animation">Home with Stunning Interior Design</h4>
                        <p class="mb-45">Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere they a lobortis viverra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere they a lobortis viverra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar sidebar-rr-sticky pb-3">
                        <div class="sidebar__widget has--service">
                            <div class="sidebar__widget-service">
                                <a href="blog-details.html">Business Planning<i class="fa-regular fa-angle-right"></i></a>
                                <a href="blog-details.html">Interior Harmony<i class="fa-regular fa-angle-right"></i></a>
                                <a href="blog-details.html">The Style Studio<i class="fa-regular fa-angle-right"></i></a>
                                <a href="blog-details.html">Ambiance Interiors<i class="fa-regular fa-angle-right"></i></a>
                                <a href="blog-details.html">Inner Sanctum Designs<i class="fa-regular fa-angle-right"></i></a>
                                <a href="blog-details.html">The Design Collective<i class="fa-regular fa-angle-right"></i></a>
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
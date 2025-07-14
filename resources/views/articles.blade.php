@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->

    <section class="blog-grid section-space">
        <div class="container">
            <div class="row mb-60 mb-md-100 mb-sm-100 mb-xs-40 justify-content-center align-items-center">
                <div class="">
                    <div class="section__title-wrapper mb-20">
                        <span class="section__subtitle text-third">Artikel</span>
                        <h2 class="section__title title-animation">Kabar Terkini Desa Talun</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                @for ($i = 0; $i<6; $i++)    
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{ asset('artima') }}/imgs/blog-grid/blog-1.png" alt="image not found">
                        </a>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">26 January 2024</a></li>
                                <li><a href="blog-details.html">Architecture</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">Five Quick Tips Regarding Architecture.</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                @endfor

                <ul class="blog-3__pagination d-flex flex-wrap align-items-center justify-content-center mt-30">
                    <li>
                        <a class="active" href="#">
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 11L1 6L6 1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 11L8 6L13 1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a  class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="blog-details.html">
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 11L13 6L8 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 11L6 6L1 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                    </a></li>
                </ul>
            </div>
        </div>
    </section>    
</main>
@endsection
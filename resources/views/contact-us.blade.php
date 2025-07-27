@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->

    <section class="contact-us section-space">
            <div class="container">
                <div class="row mb-minus-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-us__info-item">
                            <div class="contact-us__icon">
                                <img src="{{ asset('artima') }}/imgs/contact-us/location.svg" alt="image not found">
                            </div>
                            <div class="contact-us__text">
                                <h6>Kunjungi Talun</h6>
                                <a href="#">{{ $contact->address }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-us__info-item">
                            <div class="contact-us__icon">
                                <img src="{{ asset('artima') }}/imgs/contact-us/email.svg" alt="image not found">
                            </div>
                            <div class="contact-us__text">
                                <h6>Alamat Email</h6>
                                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-us__info-item">
                            <div class="contact-us__icon">
                                <img src="{{ asset('artima') }}/imgs/contact-us/phone.svg" alt="image not found">
                            </div>
                            <div class="contact-us__text">
                                <h6>Nomor Telepon</h6>
                                <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- "error  area end -->

        <section class="contact section-space__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact__from">
                            <h4 class="title-animation mb-10">{{ $content['subtitle'] }}</h4>
                            <p class="text-justify mw-100">{{ $content['description'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="map">
                            <iframe src="{{ $content['maps_url'] }}"
                                width="100%" height="555" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
</main>
@endsection
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
                                <h6>Visit our office</h6>
                                <a href="#">93X Hilgard Ave, Los Angeles, CA 900XX, United States.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-us__info-item">
                            <div class="contact-us__icon">
                                <img src="{{ asset('artima') }}/imgs/contact-us/email.svg" alt="image not found">
                            </div>
                            <div class="contact-us__text">
                                <h6>email address</h6>
                                <a href="mailto:example@exdosstudio.com">example@exdosstudio.com</a>
                                <a href="mailto:info@exdosstudio.com">info@exdosstudio.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-us__info-item">
                            <div class="contact-us__icon">
                                <img src="{{ asset('artima') }}/imgs/contact-us/phone.svg" alt="image not found">
                            </div>
                            <div class="contact-us__text">
                                <h6>Phone number</h6>
                                <a href="tel:123534352555">+1-2353-4352-555</a>
                                <a href="tel:01541258360">01 (541) 258 360</a>
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
                            <h4 class="title-animation mb-10">Get in touch</h4>
                            <p>Select layout follower boolean editor flows. Scrolling variant move font group variant layout device share.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.14085946552!2d110.54!3d-7.71!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6e8b7c3e7e7f%3A0x4027a76e352e240!2sTalun%2C%20Kemalang%2C%20Klaten%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1689012345678!5m2!1sen!2sid"
                                width="100%" height="555" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
</main>
@endsection
@extends('frontend.main_master')
@section('main')
@section('title')
About | EasyLearning Website
@endsection
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Me</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    @include('frontend.home_all.home_about')
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section__title text-center">
                        <span class="sub-title">02 - my Services</span>
                        <h2 class="title">Provide awesome service</h2>
                    </div>
                </div>
            </div>
            <div class="services__style__two__wrap">
                <div class="row gx-0">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon03.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon05.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Animation</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon06.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Marketing</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon05.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Brand strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon04.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Graphic Design</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ asset('frontend/assets/img/icons/services_light_icon07.png') }}" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial testimonial__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="testimonial__wrap">
                        <div class="section__title text-center">
                            <span class="sub-title">06 - Client Feedback</span>
                            <h2 class="title">Some happy clients feedback</h2>
                        </div>
                        <div class="testimonial__two__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>WPBakery/ uSA</span>
                                        <div class="testi__avatar__img">
                                            <img src="{{ asset('frontend/assets/img/images/testi_avatar01.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Adobe Photoshop</span>
                                        <div class="testi__avatar__img">
                                            <img src="{{ asset('frontend/assets/img/images/testi_avatar02.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__two__icons">
            <ul>
                <li><img src="{{ asset('frontend/assets/img/icons/testi_shape01.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/testi_shape02.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/testi_shape03.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/testi_shape04.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/testi_shape05.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/testi_shape06.png') }}" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    @include('frontend.home_all.home_blog')
    <!-- blog-area-end -->

    <!-- contact-area -->
    @include('frontend.home_all.home_contact')
    <!-- contact-area-end -->

</main>

@endsection
@extends('front.layouts.app')
@section('title', 'DIGITAL | DECODER')
@section('contents')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">
                @php
                    $i = 1;
                @endphp
                @foreach ($sliderItem as $item)
                    <!-- Slide 1 -->
                    <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                        @php
                            $i++;
                        @endphp
                        <img src="{{ asset('uploads/slider/' . $item->image) }}" class="d-block w-100" alt="Slider Image">
                        {{-- style="background-image: url({{ asset('uploads/slider/'.$item->image) }});"> --}}
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2>{{ $item->title }}</h2>
                                <p>{{ Str::limit($item->description, 200) }}</p>
                                <div class="text-center"><a href="{{ route('read.more', $item->slug) }}"
                                        class="btn-get-started">Read More</a></div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>{{ $quoteItem->title }}</h3>
                        <p> {{ Str::limit($quoteItem->description, 200) }}
                        </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Request a quote</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="row">
                    @foreach ($serviceItem as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="{{ $item->icon }}"></i></div>
                                <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                                <p class="description">{{ Str::limit($item->description,300) }}</p>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-app">App</li>
                            {{-- <li data-filter=".filter-card">Card</li> --}}
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets/front/img/portfolio/1615392340.png') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Mobile App</h4>
                            <p>App</p>
                            <a href="{{ asset('assets/front/img/portfolio/1615392340.png') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('assets/front/img/portfolio/dokansheba.PNG') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Dokan Sheba</h4>
                            <p>Web</p>
                            <a href="{{ asset('assets/front/img/portfolio/dokansheba.PNG') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets/front/img/portfolio/1615392340.webp') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>IOS App</h4>
                            <p>App</p>
                            <a href="{{ asset('assets/img/portfolio/1615392340.webp') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/front/img/portfolio/jhorna.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="assets/front/img/portfolio/jhorna.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div> --}}

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('assets/front/img/portfolio/jhorna.PNG') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Hotel Management System</h4>
                            <p>Web</p>
                            <a href="{{ asset('assets/front/img/portfolio/jhorna.PNG') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('assets/front/img/portfolio/helpdesk.PNG') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>SF Management System</h4>
                            <p>App</p>
                            <a href="{{ asset('assets/front/img/portfolio/helpdesk.PNG') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/front/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="assets/front/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div> --}}

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/front/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="assets/front/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div> --}}

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('assets/front/img/portfolio/school.PNG') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>School Management System</h4>
                            <p>Web</p>
                            <a href="{{ asset('assets/img/portfolio/school.PNG') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Clients</strong></h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                    ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-5.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-6.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-7.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/front/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Clients Section -->

    </main><!-- End #main -->
@endsection

@extends('front.layouts.app')
@section('title', 'DIGITAL | DECODER')
@section('contents')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portolio</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Portolio</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

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
                    <img src="{{ asset('assets/front/img/portfolio/1615392340.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Mobile App</h4>
                        <p>App</p>
                        <a href="{{ asset('assets/front/img/portfolio/1615392340.png') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('assets/front/img/portfolio/dokansheba.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Dokan Sheba</h4>
                        <p>Web</p>
                        <a href="{{ asset('assets/front/img/portfolio/dokansheba.png') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('assets/front/img/portfolio/1615392340.webp') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>IOS App</h4>
                        <p>App</p>
                        <a href="{{ asset('assets/img/portfolio/1615392340.webp') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 2"><i
                                class="bx bx-plus"></i></a>
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
                    <img src="{{ asset('assets/front/img/portfolio/jhorna.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Hotel Management System</h4>
                        <p>Web</p>
                        <a href="{{ asset('assets/front/img/portfolio/jhorna.png') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('assets/front/img/portfolio/helpdesk.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>SF Management System</h4>
                        <p>App</p>
                        <a href="{{ asset('assets/front/img/portfolio/helpdesk.png') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 3"><i
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
                    <img src="{{ asset('assets/front/img/portfolio/school.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>School Management System</h4>
                        <p>Web</p>
                        <a href="{{ asset('assets/img/portfolio/school.png') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection

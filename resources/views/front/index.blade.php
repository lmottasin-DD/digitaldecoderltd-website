@extends('front.layouts.app')
@section('title', 'DIGITAL | DECODER')
@section('contents')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/front/img/slide/slide-1.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Welcome to <span>Digital Decoder Limited.</span></h2>
                        <p>A Private Software Technology Park. Transform your ideas into custom business applicaitons. Build your Software and Mobile Apps with us.</p>
                        <div class="text-center"><a href="#" class="btn-get-started">Read More</a></div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/front/img/slide/slide-2.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Make The World Easier</h2>
                        <p>If future generations are to remember us more with gratitude than sorrow, we must achieve more than just the miracles of technology. We must also leave them a glimpse of the world as it was created, not just as it looked when we got through with it.</p>
                        <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/front/img/slide/slide-3.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Wear Mask, Stay Safe</h2>
                        <p>In the light of the current situation, We want our customers, partners & employees to know that Digital Decoder Limited  is by your side at all times.</p>
                        <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                    </div>
                </div>
            </div>
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
                    <h3>We've created more than <span>10 E-commerce</span> this year!</h3>
                    <p> Digital Decoder Limited with its dedicated teams render high quality IT solutions with professional management services of excellence,quality assurance & on time turnkey automation.</p>
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
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-exclude"></i></div>
                        <h4 class="title"><a href="">All in One Solution</a></h4>
                        <p class="description">Eliminate stress with one complete, strong solution. Total system from just one unique system.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Independent Platform</a></h4>
                        <p class="description">With software that can run independently on any platform, real-time activity monitoring becomes easy.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">Data Consolidation</a></h4>
                        <p class="description"> Gather vast amounts of data in one central place. Stress-free, hassle-free, easy; the perfect solution to human cost management.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Web Applicaiton</a></h4>
                        <p class="description">Our custom tailored web applications and e-Commerce fits with client business needs and increase operational efficiency</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-phone-fill"></i></div>
                        <h4 class="title"><a href="">Moblie Applicaiotn</a></h4>
                        <p class="description">We Don't Make Good Apps We Make Apps That Leave Influence.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-apple"></i></div>
                        <h4 class="title"><a href="">IOS Application</a></h4>
                        <p class="description">We Don't Make Good Apps We Make Apps That Leave Influence.</p>
                    </div>
                </div>
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
                    <img src="assets/front/img/portfolio/1615392340.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Mobile App</h4>
                        <p>App</p>
                        <a href="assets/front/img/portfolio/1615392340.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/front/img/portfolio/dokansheba.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Dokan Sheba</h4>
                        <p>Web</p>
                        <a href="assets/front/img/portfolio/dokansheba.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/front/img/portfolio/1615392340.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>IOS App</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/1615392340.webp" data-gallery="portfolioGallery"
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
                    <img src="assets/front/img/portfolio/jhorna.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Hotel Management System</h4>
                        <p>Web</p>
                        <a href="assets/front/img/portfolio/jhorna.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/front/img/portfolio/helpdesk.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>SF Management System</h4>
                        <p>App</p>
                        <a href="assets/front/img/portfolio/helpdesk.png" data-gallery="portfolioGallery"
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
                    <img src="assets/front/img/portfolio/school.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>School Management System</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/school.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i
                                class="bx bx-plus"></i></a>
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
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

                @foreach($all_data as $data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $data -> type }}">
                    <img src="{{ asset('media/portfolio_image/'.$data->photo) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data ->title }}</h4>
                        <p>{{ $data -> type }}</p>
                        <a href="{{ asset('media/portfolio_image/'.$data->photo) }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="{{ $data->title }}"><i
                                class="bx bx-plus"></i></a>
                        <a href="{{ $data->link }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                @endforeach

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('assets/front/img/portfolio/dokansheba.PNG') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Dokan Sheba</h4>
                        <p>Web</p>
                        <a href="{{ asset('assets/front/img/portfolio/dokansheba.PNG') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>-->









            </div>

        </div>
    </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection

@extends('front.layouts.app')
@section('title', 'DIGITAL | DECODER')
@section('contents')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

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

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Some <strong>Features</strong> we do provide</h2>
          <p>Our software supports integrating with various modules of ERP like human resource, finance, sales, and supply chain management to manage your business in a better way. It is customized according to the needs of your enterprise.</p>
        </div>

        {{-- <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Modi sit est</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Unde praesentium sed</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Pariatur explicabo vel</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>Nostrum qui quasi</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div> --}}

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

@endsection
@extends('front.layouts.app')
@section('title', 'DIGITAL | DECODER')
@section('contents')
<main id="main">





    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Testimonials</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Testimonials</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="row">

                @foreach($testimonial_data as $data)
                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item">
                            <h3>{{ $data->name }}</h3>
                            <h4>{{ $data ->designation }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              {{ $data->quote }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
 <!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection

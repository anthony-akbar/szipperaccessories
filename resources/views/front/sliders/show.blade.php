@extends('front.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Sliders</h2>
            <ol>
                <li><a href="{{route('homepage')}}">{{ __('front.Home') }}</a></li>
                <li>Sliders</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="projects" class="projects testimonials section-bg recent-blog-posts">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>{{__('front.Our Products')}}</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                 data-portfolio-sort="original-order">

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($products as $product)
                        <div
                            class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100 mb-4">
                                <div
                                    style="background-image: url({{'storage/'. $product->image }}); background-size: cover; background-position: center;"
                                >
                                    <img class="img-fluid" style="opacity: 0;"
                                         src="{{ asset('assets/img/projects/construction-1.jpg') }}"
                                         alt="img">
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{$product->title}}</h4>
                                    <p>{{$product->size}}</p>
                                    <a href="{{'storage/'. $product->image }}"
                                       title="{{$product->title}}"
                                       data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>

                        </div><!-- End Projects Item -->
                    @endforeach
                </div><!-- End Projects Container -->

            </div>

        </div>

    </section>

@endsection

@extends('front.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/footer-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>{{__('front.Products')}}</h2>
            <ol>
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li>{{__('front.Products')}}</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects testimonials section-bg recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{__('front.Our Products')}}</h2>
            </div>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                 data-portfolio-sort="original-order">
                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">{{__('front.All')}}</li>
                    @foreach($categories as $category)
                        <li data-filter=".filter-{{ str_replace(array(' ', '(', ')'), '_' , strtolower($category['title_en'])) }}"
                            class="">{{ $category['title_'.$lang] }}</li>
                    @endforeach
                </ul><!-- End Projects Filters -->
                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($categories as $category)
                        @foreach($category->products as $product)
                            <div
                                class="col-lg-4 col-md-6 portfolio-item filter-{{ str_replace(array(' ', '(', ')'), '_' , strtolower($category['title_en'])) }}">
                                <div class="portfolio-content h-100 mb-4">
                                    <div>
                                        <img class="img-fluid"
                                             src="{{ asset('storage/'. $product->image ) }}"
                                             alt="img">
                                    </div>
                                    <div class="portfolio-info">
                                        <h4>{{$product->title}}</h4>
                                        <p>{{$product->size}}</p>
                                        <a href="{{'storage/'. $product->image }}"
                                           title="{{$product->title}}"
                                           data-gallery="portfolio-gallery-construction" class="glightbox preview-link">
                                            <i class="bi bi-zoom-in"></i></a>
                                    </div>
                                </div>

                            </div><!-- End Projects Item -->
                        @endforeach
                    @endforeach
                </div><!-- End Projects Container -->
            </div>
        </div>
    </section>
    <!-- End Our Projects Section -->
@endsection

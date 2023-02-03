@extends('front.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Products</h2>
            <ol>
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li>Products</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects testimonials section-bg recent-blog-posts">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Products</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                 data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    @foreach($categories as $category)
                        <li data-filter=".filter-{{ str_replace(' ', '_' , strtolower($category->title)) }}">{{ $category->title }}</li>
                    @endforeach
                    <li class="filter-active" data-filter=".filter-pullers">Pullers</li>
                    <li data-filter=".filter-sliders">Sliders</li>
                </ul><!-- End Projects Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($categories as $category)
                        @foreach($category->products as $product)
                            <div
                                class="col-lg-4 col-md-6 portfolio-item filter-{{ str_replace(' ', '_' , strtolower($category->title)) }}">
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
                                        <a href="" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>

                            </div><!-- End Projects Item -->
                        @endforeach
                            <div class="filter-pullers">
                                {{$categories->withQueryString()->links()}}
                            </div>
                    @endforeach
                    @foreach($pullers as $puller)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-pullers">
                            <div class="portfolio-content h-100 mb-4">
                                <div
                                    style="background-image: url({{'storage/'. $puller->image }}); background-size: cover; background-position: center;"
                                >
                                    <img class="img-fluid" style="opacity: 0;"
                                         src="{{ asset('assets/img/projects/construction-1.jpg') }}"
                                         alt="img">
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{$puller->title}}</h4>
                                    <p>{{$puller->size}}</p>
                                    <a href="{{'storage/'. $puller->image }}" title="{{$puller->title}}"
                                       data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                            <div class="filter-pullers">
                                {{$pullers->withQueryString()->links()}}
                            </div>
                        </div><!-- End Projects Item -->
                    @endforeach

                    @foreach($sliders as $slider)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-sliders">
                            <div class="portfolio-content h-100 mb-4">
                                <div
                                    style="background-image: url({{'storage/'. $slider->image }}); background-size: cover; background-position: center;">
                                    <img class="img-fluid" style="opacity: 0;"
                                         src="{{ asset('assets/img/projects/construction-1.jpg') }}"
                                         alt="img">
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{$slider->title}}</h4>
                                    <p>{{$slider->size}}</p>
                                    <a href="{{'storage/'. $slider->image }}" title="{{$slider->title}}"
                                       data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                            <div class="filter-sliders">
                                {{$sliders->withQueryString()->links()}}
                            </div>
                        </div><!-- End Projects Item -->
                    @endforeach
                </div><!-- End Projects Container -->

            </div>

        </div>

    </section>
    <!-- End Our Projects Section -->
@endsection

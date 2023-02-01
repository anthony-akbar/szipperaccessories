<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects testimonials section-bg recent-blog-posts">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Products</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
             data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-metalzippers">Metal zippers</li>
                <li data-filter=".filter-nelonzippers">Nelon zippers</li>
                <li data-filter=".filter-pullers">Pullers</li>
                <li data-filter=".filter-sliders">Sliders</li>
            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($pullers as $puller)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-pullers">
                        <div class="portfolio-content h-100">
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
                                <a href="{{'storage/'. $puller->image }}" title="Construction 1"
                                   data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->
                @endforeach
                <div class="col-lg-4 col-md-6 portfolio-item filter-nelonzippers">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/construction-1.jpg" title="Construction 1"
                               data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-sliders">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Repairs 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1"
                               data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-metalzippers">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Remodeling 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2"
                               data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

            </div><!-- End Projects Container -->

        </div>

    </div>
</section>
<!-- End Our Projects Section -->

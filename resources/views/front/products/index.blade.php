<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects testimonials section-bg recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="section-header"><h2>{{__('front.Our Products')}}</h2></div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
             data-portfolio-sort="original-order">
            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach($categories as $category)
                    <li data-filter=".filter-{{ str_replace(array(' ', '(', ')'), '_' , strtolower($category['title_en'])) }}">{{ $category['title_' . $lang] }}</li>
                @endforeach
            </ul>
            <!-- End Projects Filters -->
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($categories as $category)
                    @for($i=0; $i< $o=count($category->products) < 3 ? count($category->products) : 3; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ str_replace(array(' ', '(', ')'), '_' , strtolower($category['title_en'])) }}">
                            <div class="portfolio-content h-100">
                                <div style="background-image: url({{'storage/'. $category->products[$i]->image }}); background-size: cover; background-position: center;">
                                    <img class="img-fluid" style="opacity: 0;" src="{{ asset('assets/img/projects/construction-1.jpg') }}">
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{$category->products[$i]->title}}</h4>
                                    <p>{{$category->products[$i]->size}}</p>
                                    <a href="{{'storage/'. $category->products[$i]->image }}"
                                       title="{{$category->products[$i]->title}}"
                                       data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    @endfor
                @endforeach
            </div><!-- End Projects Container -->
        </div>
    </div>
</section>
<!-- End Our Projects Section -->

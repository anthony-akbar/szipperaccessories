@extends('front.master')
@section('content')

    @include('front.slider.index')

    <main id="main">
        @include('front.categories.index')

        @include('front.contact.index')

        @include('front.products.index')

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
                        autem uia reprehenderit sunt deleniti</p>
                </div>

                <div
                    class="slides-2 swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-bc836971ec66edfa" aria-live="off"
                         style="transform: translate3d(-3948px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                             data-swiper-slide-index="3" style="width: 638px; margin-right: 20px;" role="group"
                             aria-label="4 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                             data-swiper-slide-index="4" style="width: 638px; margin-right: 20px;" role="group"
                             aria-label="5 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                             style="width: 638px; margin-right: 20px;" role="group" aria-label="1 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide" data-swiper-slide-index="1" style="width: 638px; margin-right: 20px;"
                             role="group" aria-label="2 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide" data-swiper-slide-index="2" style="width: 638px; margin-right: 20px;"
                             role="group" aria-label="3 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                        sint minim.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3"
                             style="width: 638px; margin-right: 20px;" role="group" aria-label="4 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4"
                             style="width: 638px; margin-right: 20px;" role="group" aria-label="5 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0"
                             style="width: 638px; margin-right: 20px;" role="group" aria-label="1 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                             aria-label="2 / 5" style="width: 638px; margin-right: 20px;">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet" tabindex="0" role="button"
                              aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                                                                      role="button"
                                                                      aria-label="Go to slide 2"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 4"></span><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                            aria-label="Go to slide 5" aria-current="true"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>
        </section>        <!-- End Testimonials Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">


                <div class=" section-header">
                    <h2>Recent Blog Posts</h2>
                    <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia
                        consequuntu</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                                <span class="post-date">December 12</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div>

                    <!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                                <span class="post-date">July 17</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                                <span class="post-date">September 05</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div>

                    <!-- End post item -->

                </div>

            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->

@endsection

<!-- ======= Testimonials Section ======= -->
@if($partners->isEmpty())
@else
    <section id="testimonials" class="testimonials section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-header">
                <h2>{{__('front.Partners')}}</h2>
                <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
                    autem uia reprehenderit sunt deleniti</p>
            </div>

            <div
                class="slides-2 swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-bc836971ec66edfa" aria-live="off"
                     style="transform: translate3d(-3948px, 0px, 0px); transition-duration: 0ms;">

                    @foreach($partners as $partner)
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                             style="width: 638px; margin-right: 20px;" role="group" aria-label="1 / 5">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{'storage/'.$partner->image}}" class="testimonial-img"
                                         alt="">
                                    <h3>{{$partner['title_'.$lang]}}</h3>
                                    <h4>{{$partner['subtitle_'.$lang]}}</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        {{$partner['description_'.$lang]}}
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    @endforeach
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
    </section>
@endif
<!-- End Testimonials Section -->

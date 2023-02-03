<!-- ======= Constructions Section ======= -->
@if($categories->isEmpty())
@else
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{__('front.Categories')}}</h2>
            </div>
            <div class="row gy-4">
                @foreach($categories as $category)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                         style="background-image: url({{'storage/'.$category->image}});"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$category['title_'.$lang]}}</h4>
                                        <p>{{substr($category['description_'.$lang] ,0,200).'...'}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                @endforeach
            </div>
        </div>
    </section><!-- End Constructions Section -->
@endif

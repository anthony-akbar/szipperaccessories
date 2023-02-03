<section id="get-started" class="get-started section-bg">
    <div class="container">
        <div class="section-header">
            <h2>{{__('front.Contacts')}}</h2>
        </div>
        <div class="row justify-content-between gy-4">

            <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="fade-up">
                <div class="content">
                    <h3>Minus hic non reiciendis ea possimus at quia.</h3>
                    <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum
                        nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi
                        possimus ut delectus dicta.
                    </p>
                    <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos.
                        Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                </div>
            </div>

            <div class="col-lg-5 aos-init aos-animate" data-aos="fade">
                <form action="{{ route('front.contact') }}" method="post">
                    <div class="php-email-form">
                    @csrf
                    <h3>{{__('front.Contact us')}}</h3>
                    <p>{{__('front.Contact us for cooperation.')}}</p>
                    <div class="row gy-3">
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="{{__('front.Name')}}" required="">
                        </div>
                        <div class="col-md-12 ">
                            <input type="email" class="form-control" name="email" placeholder="{{__('front.Email')}}" required="">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="phone_number" placeholder="{{__('front.Phone Number')}}"
                                   required="">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="company_name" placeholder="{{__('front.Company Name')}}"
                                   required="">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="{{__('front.Message')}}"
                                      required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center" style="max-height: 200px;">
                            <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>
                            <button type="submit">{{__('front.Submit')}}</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div><!-- End Quote Form -->

        </div>

    </div>
</section>

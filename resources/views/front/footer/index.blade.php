<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">
                @foreach($abouts as $about)
                <div class="col-lg-4 col-md-3">
                    <div class="footer-info">
                        <h3>{{$about['title_'.$lang]}}</h3>
                        <p>{{__('front.Address')}}: <br>
                            {{$about['address_'.$lang]}}
                            <br><br>
                            <strong>{{__('front.Telephone')}}: </strong>{{$about->phone}}<br>
                            <strong>Электронная почта:</strong> info@szipperaccessories.uz<br>
                        </p>
                        <div class="social-links d-flex mt-3">
                            @if($about->facebook != null)
                            <a href="{{$about->facebook}}" class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-facebook"></i></a>
                            @endif
                            @if($about->instagram != null)
                            <a href="{{$about->instagram}}"
                               class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-instagram"></i></a>
                                @endif
                                @if($about->telegram != null)
                                    <a href="{{$about->telegram}}" class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-telegram"></i></a>
                                @endif
                        </div>
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-2 footer-links">
                    <h4>{{__('front.Useful links')}}:</h4>
                    <ul>
                        <li><a href="{{ route('front.category') }}">{{__('front.Categories')}}</a></li>
                        <li><a href="{{ route('productpage') }}">{{__('front.Products')}}</a></li>
                    </ul>
                </div><!-- End footer links column-->
                <div class="col-lg-3 col-md-3 footer-links">
                    <h4>{{__('front.Categories')}}:</h4>
                    <ul>

                        @foreach ($categories as $category)
                            <li><a href="{{ route('admin.zipper.categories.show', $category->id) }}">{{ $category['title_' . $lang] }}</a></li>
                        @endforeach
                    </ul>
                </div><!-- End footer links column-->
                <div class="col-lg-3 col-md-3 footer-links">
                    <ul>
                        <li><h4>{{__('front.Schedule')}}:</h4><span style="color: rgba(255, 255, 255, 0.6);transition: 0.3s;
                        display: inline-block;line-height: 1;">{{$about->schedule}}</span></li>

                        <li><a href="#get-started">{{__('front.Contacts')}}</a></li>
                        <li><a href="#get-started">{{__('front.Contact us')}}</a></li>
                    </ul>
                </div><!-- End footer links column-->
                @endforeach
            </div>
        </div>
    </div>

    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="credits">
                Designed by <a href="https://royale.uz/">Royal</a>
                <div class="text-center opacity-50 py-2">
                    <span>Copyright</span>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

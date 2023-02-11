<!DOCTYPE html>
<html lang="en">
<head>
    <title>S. Zipper Accessories</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="s-zipper">
    <meta name="title" content="s zipper">
    <meta name="title" content="s zipper">
    <meta name="title" content="s zipper">
    <meta name="title" content="s zipper">
    <meta name="title" content="s zipper">
    <meta name="title" content="szipper">
    <meta name="title" content="szipper">
    <meta name="title" content="szipper">
    <meta name="title" content="szipper">
    <meta name="title" content="szipper">
    <meta name="title" content="s-zipper">
    <meta name="title" content="s-zipper">
    <meta name="title" content="s-zipper">
    <meta name="title" content="s-zipper">
    <meta name="title" content="s-zipper">
    <meta name="title" content="s-zipper">
    <meta name="title" content="textile">
    <meta itemprop="og:image" content="{{asset('logo.svg')}}">
    <meta name="title" content="textile uz">
    <meta name="description" content="Первое производство молний в Узбекистане. Мы не посредники. Мы гарантируем:
- стабильно высокое качество продукции;
- широкий ассортимент предлагаемых застежек молний и сырья;
    - высокое качество обслуживания и сопровождения заказов.
    Основным направлением нашей деятельности является оптовая продажа застежек молний и бегунков. А основными клиентами - швейные производства.
    У нас размещают заказы крупнейшие производители одежды, кожгалантереи, обуви. Лидеры легкой промышленности Узбекистана, России, Украины, Белоруссии и Казахстана.
    От фирм, занимающихся поставками фурнитуры, нас отличает:
    - Прямые поставки без посредников;
    - Высокий стабильный уровень качества;
    - Контроль качества производимой продукции и ответственность перед покупателями.
    Клиенту мы предлагаем:
    - Возможность изготовления застежки-молнии различных видов: потайная молния, тракторная молния, спиральная молния;
    - Возможность нанесения Вашего логотипа на ленту молнии и на бегунок для молнии;
    - Возможность производства застежки-молнии разных конструкций: неразъемные, разъемные, 2-х замковые, разъемные 2-х замковые с двумя разъемами.
    - Богатую цветовую гамму изделий;
    - Подбор цвета тесьмы, ленты, бегунка молнии исходя из ваших желаний.

    Тип бизнеса: Производитель
    Год основания: 2019
    Количество сотрудников: 11 - 50 чел."/>
    <meta property='og:site_name' content='s-zipper.uz'>
    <meta property='og:type' content='website'>
    <!-- Favicons -->
    <link href="{{asset('logo-black.svg')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
</head>

<body>


@include('front.partials.navbar')
@yield('content')

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
                                <a href="{{$about->facebook}}" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="{{$about->instagram}}"
                                   class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="{{$about->telegram}}" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-telegram"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-4 col-md-3 footer-links">
                        <h4>{{__('front.Useful links')}}:</h4>
                        <ul>
                            <li><a href="{{ route('front.zippers.show') }}">{{__('front.Zippers')}}</a></li>
                            <li><a href="{{ route('front.sliders.show') }}">{{__('front.Sliders')}}</a></li>
                            <li><a href="{{ route('front.pullers.show') }}">{{__('front.Pullers')}}</a></li>
                            <li><a href="{{ route('front.category') }}">{{__('front.Categories')}}</a></li>
                            <li><a href="{{ route('productpage') }}">{{__('front.Products')}}</a></li>
                        </ul>
                    </div><!-- End footer links column-->
                    <div class="col-lg-2 col-md-3 footer-links">
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
                <span>Copyright</span>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

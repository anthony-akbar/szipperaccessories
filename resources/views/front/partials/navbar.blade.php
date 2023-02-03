<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>UpConstruction<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('homepage')}}" class="active">{{__('front.Home')}}</a></li>
                <li><a href="{{route('productpage')}}">{{__('front.Products')}}</a></li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown" id="navbarDropdownMenuLink"
                       aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li> <a class="dropdown-item"
                                        href="{{ route('lang.switch', $lang) }}">
                                        {{ $language }}</a></li>
                            @endif
                        @endforeach
                    </ul><!-- .dropdown-menu end -->
                </li><!-- .dropdown end -->
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

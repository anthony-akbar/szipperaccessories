<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('logo.svg') }}">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('homepage')}}" class="{{ request()->is('/') ? 'active' : '' }}">{{__('front.Home')}}</a></li>
                <li><a href="{{route('productpage')}}" class="{{ request()->is('/product') || request()->is('/product/*') ? 'active' : '' }}">{{__('front.Products')}}</a></li>
                <li><a href="{{route('front.category')}}" class="{{ request()->is('/categories') ? 'active' : '' }}">{{__('front.Categories')}}</a></li>
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
                <li><a href="#">+996 (755) 99 99 29</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

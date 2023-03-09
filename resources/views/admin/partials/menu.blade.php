<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('admin') }}"
               class="side-menu side-menu{{ request()->is("admin") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route("admin.slider") }}"
               class="side-menu side-menu{{ request()->is("admin/slider") || request()->is("admin/slider/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="align-justify"></i></div>
                <div class="side-menu__title">Sliders</div>
            </a>
        </li>
        <li>
            <a href="{{ route("admin.zipper.categories") }}"
               class="side-menu side-menu{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="archive"></i></div>
                <div class="side-menu__title">Categories</div>
            </a>
        </li>
        <li>
            <a href="{{ route("admin.zipper.products") }}"
               class="side-menu side-menu{{ request()->is("admin/products") || request()->is("admin/products/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="archive"></i></div>
                <div class="side-menu__title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.partners') }}"
               class="side-menu side-menu{{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="briefcase"></i></div>
                <div class="side-menu__title">Partners</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.about') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-lucide="phone-call"></i>
                </div>
                <div class="side-menu__title">
                    About Us
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.contactus') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-lucide="phone-call"></i>
                </div>
                <div class="side-menu__title">
                    About Us
                </div>
            </a>
        </li>
    </ul>
</nav>

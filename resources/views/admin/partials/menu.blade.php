<nav class="side-nav">
    <ul>
        <li>
            <a {{--href="{{ route('admin') }}"--}}
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
            <a href="javascript:;"
               class="side-menu side-menu{{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? "--active" : "" }}">
                <div class="side-menu__icon">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 512.000000 512.000000"
                         preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                           fill="#617590" stroke="none">
                            <path d="M1983 5105 c-57 -24 -63 -52 -63 -264 l0 -191 -189 -95 c-105 -52
-199 -104 -210 -117 -13 -14 -21 -35 -21 -58 0 -20 61 -239 135 -486 l135
-449 -110 -545 c-138 -684 -160 -807 -160 -879 0 -188 182 -270 665 -302 94
-6 172 -13 174 -15 2 -2 -75 -4 -173 -4 -198 0 -216 -5 -236 -66 -9 -25 -9
-43 0 -68 20 -62 34 -65 282 -68 215 -3 222 -4 192 -20 -74 -41 -68 -157 10
-188 13 -5 -64 -9 -192 -9 -236 -1 -259 -6 -288 -62 -22 -43 -11 -91 27 -123
l31 -26 221 0 222 0 -32 -20 c-38 -23 -53 -48 -53 -90 0 -42 15 -67 53 -90
l32 -20 -222 0 -221 0 -31 -26 c-38 -32 -49 -80 -27 -123 29 -56 52 -61 288
-62 128 0 205 -4 192 -9 -32 -13 -64 -59 -64 -92 0 -39 25 -85 50 -93 57 -18
3 -25 -195 -25 -241 0 -255 -3 -275 -66 -9 -25 -9 -43 0 -68 20 -61 39 -66
232 -67 188 -1 280 -9 240 -23 -55 -19 -68 -108 -23 -158 l29 -33 351 -3 c388
-3 395 -2 427 59 22 43 11 91 -27 123 l-31 26 -221 0 -222 0 32 20 c38 23 53
48 53 90 0 42 -15 67 -53 90 l-32 20 222 0 221 0 31 26 c38 32 49 80 27 123
-29 56 -52 61 -288 62 -128 0 -205 4 -192 9 32 13 64 59 64 92 0 40 -25 85
-52 95 -14 5 62 10 192 13 147 4 222 9 237 18 27 15 53 62 53 94 0 35 -36 87
-67 95 -15 5 -119 8 -231 8 -189 0 -231 5 -182 20 25 8 50 54 50 93 0 33 -32
79 -64 92 -13 5 64 9 192 9 236 1 259 6 288 62 22 43 11 91 -27 123 l-31 26
-221 0 -222 0 32 20 c39 23 53 48 53 92 0 42 -23 76 -64 94 -30 13 -27 13 49
14 44 0 148 5 230 10 452 31 637 118 636 301 0 66 -42 292 -171 931 l-99 491
134 448 c74 247 135 465 135 486 0 21 -8 48 -18 60 -9 11 -104 64 -209 117
l-193 96 0 191 c0 210 -6 236 -60 264 -41 21 -1107 22 -1157 0z m1007 -374 c0
-166 1 -180 21 -205 13 -17 91 -62 201 -117 142 -71 179 -94 176 -107 -29
-107 -123 -410 -128 -406 -2 3 -19 73 -36 154 -17 82 -39 160 -48 174 -24 37
-73 46 -248 46 l-158 0 0 125 c0 91 -4 136 -16 163 -57 137 -231 175 -337 74
-54 -51 -62 -76 -67 -227 l-5 -140 -178 -3 c-143 -2 -183 -6 -203 -18 -27 -18
-41 -60 -75 -229 -12 -60 -25 -113 -29 -118 -5 -6 -130 392 -130 415 0 5 80
48 179 97 109 55 187 100 200 117 20 25 21 39 21 205 l0 179 430 0 430 0 0
-179z m-640 -816 c5 -151 13 -176 67 -227 106 -101 280 -63 337 74 12 27 16
72 16 163 l0 125 120 0 c66 0 120 -2 120 -4 0 -2 45 -221 101 -487 176 -848
299 -1475 299 -1524 0 -65 -246 -103 -725 -112 -460 -8 -779 15 -921 68 l-57
21 7 62 c10 104 385 1951 401 1976 4 7 48 10 118 8 l112 -3 5 -140z"/>
                            <path d="M2181 2983 c-39 -8 -69 -32 -80 -66 -18 -53 -131 -629 -131 -664 0
-22 9 -43 28 -64 26 -29 35 -32 118 -40 117 -12 785 -12 894 0 76 8 87 12 112
40 19 21 28 42 28 64 0 57 -126 664 -143 691 -10 14 -33 30 -54 35 -37 11
-720 14 -772 4z m693 -400 c21 -104 40 -198 43 -210 l5 -23 -361 0 c-199 0
-361 3 -361 8 0 4 19 98 42 210 l41 202 277 0 277 0 37 -187z"/>
                        </g>
                    </svg>

                </div>
                <div class="side-menu__title">
                    Zipper
                    <div class="side-menu__sub-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            <ul class="{{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? "side-menu__sub-open" : "" }}" {{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? 'style="display: none;"' : "" }}>
                <li>
                    <a href="#" class="side-menu">
                        <div class="side-menu__icon">
                        </div>
                        <div class="side-menu__title">
                            Zippers
                        </div>
                    </a>
                </li>
                <li>
                    <a {{--href="{{ route('admin.zipper.puller') }}"--}} class="side-menu">
                        <div class="side-menu__icon">
                            {{--ICON--}}
                        </div>
                        <div class="side-menu__title">
                            Pullers
                        </div>
                    </a>
                </li>
                <li>
                    <a {{--href="{{ route('admin.zipper.slider') }}"--}} class="side-menu">
                        <div class="side-menu__icon">
                            {{--ICON--}}
                        </div>
                        <div class="side-menu__title">
                            Sliders
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a {{--href="{{ route('admin.categories') }}"--}}
               class="side-menu side-menu{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="image"></i></div>
                <div class="side-menu__title">Categories</div>
            </a>
        </li>
        <li>
            <a {{--href="{{ route('admin.products') }}"--}}
               class="side-menu side-menu{{ request()->is("admin/products") || request()->is("admin/products/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="camera"></i></div>
                <div class="side-menu__title">Products</div>
            </a>
        </li>
        <li>
            <a {{--href="{{ route('admin.partners') }}"--}}
               class="side-menu side-menu{{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="briefcase"></i></div>
                <div class="side-menu__title">Partners</div>
            </a>
        </li>
    </ul>
</nav>

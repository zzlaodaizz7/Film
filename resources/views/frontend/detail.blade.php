<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phim: abc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300;1,500&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style/app.css') }}">
</head>
<body
    x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
        searchButton: true
    }"
    class="language-php h-full w-full font-sans text-gray-900 antialiased"
>

<header
    class="relative z-50"
    @keydown.window.escape="navIsOpen = false"
    @click.away="navIsOpen = false"
>
    <div class="relative max-w-screen-2xl mx-auto w-full py-10 bg-white transition duration-200">
        <div class="max-w-screen-xl mx-auto px-8 flex items-center justify-between">
            <a href="/" class="flex items-center">
                <img style="width: 50px"
                     src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232586_15275641_174487356357898_219921850476527616_n.jpg"
                     alt="Phim">
            </a>
            <ul class="relative hidden lg:ml-6 lg:pt-3 lg:flex lg:items-end lg:space-x-6 xl:ml-14 xl:space-x-10">
                <li><a href="/the-loai/phim-moi">Phim mới</a></li>
                <li><a href="/the-loai/phim-le">Phim lẻ</a></li>
                <li><a href="/the-loai/phim-hoat-hinh">Phim hoạt hình</a></li>
                <li><a href="/the-loai/phim-chieu-rap">Phim chiếu rạp</a></li>
            </ul>
            <div class="flex-1 flex items-center justify-end">
                <form
                    class="ml-4 relative flex-1 flex justify-end max-w-xs w-full lg:absolute lg:right-0 lg:max-w-xxs lg:ml-10 xl:max-w-xs">
                    <div
                        class="w-full w-6 relative w-6 border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 lg:w-full hover:w-full focus-within:border-gray-600">
                        <svg class="absolute inset-y-0 left-0 z-10 mt-1 w-5 h-5 text-gray-900 pointer-events-none"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input
                            x-model.debouce.200ms="search"
                            class="flex-1 w-full pl-8 pr-4 py-1 placeholder-gray-900 tracking-wide bg-white focus:outline-none"
                            placeholder="Tìm kiếm phim..."
                            aria-label="Tìm kiếm phim..."
                        >
                    </div>
                    <div class="absolute w-full mt-8 pt-px divide-y divide-gray-200 shadow-sm z-30">
                        <div>
                            <a class="search-result block px-4 py-3 bg-gray-100 transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:bg-gray-200"
                               href="###">
                                <div>Get started</div>
                                <div class="mt-2">
                                    <div class="text-sm">
                                        <span class="text-red-600 opacity-75">#</span>TAG</span>
                                    </div>
                                    <div class="text-sm">Thể loại</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button
                        style="color:#fff;background-color:#f972a9;border-radius:4px;font-weight:700; min-width: 100px">
                        <span x-show="searchButton">Tìm kiếm</span></button>
                </form>
                <button
                    class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline"
                    aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                    <svg x-show.transition.opacity="! navIsOpen" class="absolute inset-0 mt-2 ml-2 w-6 h-6"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <svg x-show.transition.opacity="navIsOpen" x-cloak class="absolute inset-0 mt-2 ml-2 w-6 h-6"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
        <span :class="{ 'shadow-sm': navIsOpen }" class="absolute inset-0 z-20 pointer-events-none"></span>
    </div>
    <div
        x-show="navIsOpen"
        class="lg:hidden"
        x-transition:enter="duration-150"
        x-transition:leave="duration-100 ease-in"
        x-cloak
    >
        <nav
            x-show="navIsOpen"
            x-cloak
            class="absolute w-full transform origin-top shadow-sm z-10"
            x-transition:enter="duration-150 ease-out"
            x-transition:enter-start="opacity-0 -translate-y-8 scale-75"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="duration-100 ease-in"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 -translate-y-8 scale-75"
        >
            <div class="relative py-8 px-8 bg-white">
                <ul>
                    <li><a class="block w-full py-2 text-center" href="/">Documentation</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<section class="py-12 md:py-20 lg:py-32">
    <div class="max-w-screen-xl mt-12 mx-auto px-8 md:pr-0 md:mt-16 lg:mt-24 xl:pr-8">
        <div class="md:grid md:grid-cols-5 md:gap-x-8 lg:gap-12">
            <div class="mt-8 md:mt-0 md:col-span-2">
                <img
                    src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232589_23032609_2010316629239876_7899792449471609542_n.jpg"
                    alt="Dev Squad">
                <div class="max-w-screen-xl mt-8">
                    <div class="flex items-center space-x-4 lg:mt-0">
                        <a class="group relative h-12 inline-flex w-64 border border-red-600 sm:w-56 focus:outline-none"
                           href="#Xem-phim">
                            <p
                                class="absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-white text-center font-medium bg-red-600 ring-1 ring-red-600 ring-offset-1 ring-offset-red-600 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Xem phim
                            </p>
                        </a>

                        <a class="group relative h-12 inline-flex w-64 border border-red-600 sm:w-56 focus:outline-none"
                           href="#trailer">
                            <p
                                class="absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-red-600 text-center font-medium bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Trailer
                            </p>
                        </a>

                    </div>
                </div>
            </div>
            <div class="md:col-span-3">
                <h1 class="text-xl font-medium md:text-3xl">
                    Cổng tâm tựa ngọc
                </h1>
                <p>Thời lượng: <span>45 phút</span></p>
                <p>Số tập: <span>N/A</span></p>
                <p>Quốc gia: <span>Trung Quốc</span></p>
                <p>Năm xuất bản: <span>2021</span></p>
                <p>Ngày công chiếu: <span>26/02/2021</span></p>
                <p>Thể loại: <span>Cổ trang, tình cảm - lãng mạn</span></p>
                <p>Diễn viên: <span>Đàm Tùng Vận, Chung Hán Lương</span></p>
            </div>
        </div>
    </div>
</section>


<div class="relative">
    <div class="max-w-screen-xl mx-auto px-8 py-12 lg:py-24">
        <div style="width: 130%;z-index: -9998"
             class="hidden md:transform md:-translate-x-1/2 md:absolute md:inset-y-0 md:left-0 md:w-full md:flex md:items-center xl:left-16 2xl:left-32">
            <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>
                <source src="/img/blocks/blocks_2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="md:w-3/4 md:ml-auto lg:grid lg:gap-6 lg:grid-cols-5 xl:gap-16 xl:grid-cols-12">
            <div class="space-y-12 text-gray-600 md:text-lg lg:col-span-3 xl:col-span-7">
                <p>Giới thiệu phim aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.</p>
                <p>Instead of the bug-filled code, you may have received in the past, we write robust software and test
                    the hell out of it. But instead of just testing manually, we write additional code to test your
                    code. This ensures bugs are spotted quickly and automatically before your employees or customers
                    ever touch the software. And it prevents bigger problems down the road when you try to scale usage
                    or add new features.</p>
                <p>DevSquad gives you the proven proves and all the experience you need to build your software better,
                    faster, and right the first time.</p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2 xl:col-span-5">
                <div class="p-12 bg-white shadow-lg xl:p-16">
                    <h3 class="text-xl font-medium md:text-2xl">Chọn tập phim gần nhất</h3>
                    <ul class="mt-3 grid grid-cols-1 gap-4 list-custom font-medium text-sm text-gray-600 leading-4 md:grid-cols-2 lg:grid-cols-1">
                        <li>Tập 12</li>
                        <li>Tập 11</li>
                        <li>Tập 10</li>
                        <li>Tập 9</li>
                        <li>Tập 8</li>
                    </ul>
                </div>
                <ul class="mt-12 flex items-center space-x-4">
                    <li>
                        <a href="">
                            <img class="opacity-25" src="/img/social/linkedin.min.svg" alt="Telegram">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img class="opacity-25" src="/img/social/facebook.min.svg" alt="Facebook">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<footer style="background: linear-gradient(0deg,#fff 90%,hsla(0,0%,100%,0))" class="relative z-30">
    <div class="relative z-20 overflow-x-hidden">
        <div class="relative max-w-screen-2xl mx-auto sm:px-8">
            <div class="absolute inset-0 flex flex-col px-4 lg:px-12 xl:px-16">
                <div class="flex-1"></div>
                <div class="flex-1 bg-gray-100"></div>
            </div>
            <section class="relative z-10 p-6 bg-white shadow-lg md:flex md:items-center md:p-12 lg:p-16">
                <div class="content md:pr-12">
                    <h2 class="text-3xl tracking-tight sm:text-4xl md:mt-4 xl:text-5xl">Có thể bạn muốn xem</h2>
                    <div class="lg:grid lg:gap-6 lg:grid-cols-5 xl:gap-16 xl:grid-cols-12">
                        @for($i = 0; $i<=3; $i++)
                            <div class="mt-12 lg:mt-0 lg:col-span-2 xl:col-span-3">
                                <div class="p-12 bg-white shadow-lg xl:p-16">
                                    <h3 class="text-xl font-medium md:text-2xl">Chọn tập phim gần nhất</h3>
                                    <ul class="mt-3 grid grid-cols-1 gap-4 list-custom font-medium text-sm text-gray-600 leading-4 md:grid-cols-2 lg:grid-cols-1">
                                        <li>Tập 12</li>
                                        <li>Tập 11</li>
                                        <li>Tập 10</li>
                                        <li>Tập 9</li>
                                        <li>Tập 8</li>
                                    </ul>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>
        </div>

        <div class="max-w-screen-2xl mx-auto px-4 lg:px-12 xl:px-16">
            <div class="px-8 py-8 pb-12 bg-gray-100 xl:px-20 ">
                <div class="mt-6 sm:mt-12 md:flex">
                    <div class="divide-y divide-gray-600 divide-opacity-25 sm:hidden">
                        <div
                            x-data="{ expanded: false }"
                            class="py-4"
                        >
                            <button class="-mx-2 px-2 w-full flex items-center justify-between py-2 font-bold"
                                    @click="expanded = ! expanded">
                                <span>Highlights</span>
                                <span class="transform transition-transform"
                                      :class="{ 'rotate-45': expanded }">&plus;</span>
                            </button>
                            <div
                                x-show="expanded"
                                x-cloak
                                class="py-2 transition transform"
                                x-transition:enter="duration-250 ease-out"
                                x-transition:enter-start="opacity-0 -translate-y-8"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="duration-250 ease-in"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-8"
                            >
                                <ul class="space-y-2 text-gray-600 text-sm">
                                    <li><a href="###">Release Notes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div
                            x-data="{ expanded: false }"
                            class="py-4"
                        >
                            <button class="-mx-2 px-2 w-full flex items-center justify-between py-2 font-bold"
                                    @click="expanded = ! expanded">
                                <span>Resources</span>
                                <span class="transform transition-transform"
                                      :class="{ 'rotate-45': expanded }">&plus;</span>
                            </button>
                            <div
                                x-show="expanded"
                                x-cloak
                                class="py-2 transition transform"
                                x-transition:enter="duration-250 ease-out"
                                x-transition:enter-start="opacity-0 -translate-y-8"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="duration-250 ease-in"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-8"
                            >
                                <ul class="space-y-2 text-gray-600 text-sm">
                                    <li><a href="###">Laracasts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div
                            x-data="{ expanded: false }"
                            class="py-4"
                        >
                            <button class="-mx-2 px-2 w-full flex items-center justify-between py-2 font-bold"
                                    @click="expanded = ! expanded">
                                <span>Partners</span>
                                <span class="transform transition-transform"
                                      :class="{ 'rotate-45': expanded }">&plus;</span>
                            </button>
                            <div
                                x-show="expanded"
                                x-cloak
                                class="py-2 transition transform"
                                x-transition:enter="duration-250 ease-out"
                                x-transition:enter-start="opacity-0 -translate-y-8"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="duration-250 ease-in"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-8"
                            >
                                <ul class="space-y-2 text-gray-600 text-sm">
                                    <li><a href="https://vehikl.com">Vehikl</a></li>
                                </ul>
                            </div>
                        </div>
                        <div
                            x-data="{ expanded: false }"
                            class="py-4"
                        >
                            <button class="-mx-2 px-2 w-full flex items-center justify-between py-2 font-bold"
                                    @click="expanded = ! expanded">
                                <span>Ecosystem</span>
                                <span class="transform transition-transform"
                                      :class="{ 'rotate-45': expanded }">&plus;</span>
                            </button>
                            <div
                                x-show="expanded"
                                x-cloak
                                class="py-2 transition transform"
                                x-transition:enter="duration-250 ease-out"
                                x-transition:enter-start="opacity-0 -translate-y-8"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="duration-250 ease-in"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-8"
                            >
                                <ul class="space-y-2 text-gray-600 text-sm">
                                    <li><a href="###">Vapor</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:grid sm:grid-cols-2 sm:gap-x-4 sm:gap-y-8 md:w-1/2 lg:w-3/4 lg:grid-cols-4">
                        <div>
                            <span class="font-bold">Highlights</span>
                            <div class="mt-6">
                                <ul class="space-y-3 text-gray-600 text-sm">
                                    <li>
                                        <a href="/" class="transition-colors hover:text-gray-700">Release
                                            Notes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Resources</span>
                            <div class="mt-6">
                                <ul class="space-y-3 text-gray-600 text-sm">
                                    <li>
                                        <a href="###" class="transition-colors hover:text-gray-700">Laracasts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Partners</span>
                            <div class="mt-6">
                                <ul class="space-y-3 text-gray-600 text-sm">
                                    <li>
                                        <a href="###" class="transition-colors hover:text-gray-700">Vehikl</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Ecosystem</span>
                            <div class="mt-6">
                                <ul class="space-y-3 text-gray-600 text-sm">
                                    <li>
                                        <a href="###"
                                           class="transition-colors hover:text-gray-700">Vapor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 max-w-md md:mt-0 md:w-1/2 lg:w-1/4">
                        <p class="text-xs text-gray-600 sm:text-sm">Giới thiệu qua về trang.</p>
                        <p class="mt-6 text-xs text-gray-600 text-opacity-75 sm:text-sm">
                            ABC.<br>Copyright &copy; 2021-2021.
                        </p>
                        <ul class="mt-6 flex items-center space-x-3">
                            <li>
                                <a href="https://twitter.com/laravelphp">
                                    <img class="w-6 h-6" src="/img/social/twitter.min.svg" alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/laravel">
                                    <img class="w-6 h-6" src="/img/social/github.min.svg" alt="GitHub">
                                </a>
                            </li>
                            <li>
                                <a href="https://discord.gg/mPZNm7A">
                                    <img class="w-6 h-6" src="/img/social/discord.min.svg" alt="Discord">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/laravelphp">
                                    <img class="w-6 h-6" src="/img/social/youtube.min.svg" alt="YouTube">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center py-6">
            <a href="/" class="logomark">
                <img class="w-9 h-9"
                     src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232583_14372314_1798299803774894_1698740605240530432_o.jpg"
                     alt="Laravel">
            </a>
        </div>
    </div>
</footer>

<script>
    var algolia_app_id = 'BH4D9OD16A';
    var algolia_search_key = '7dc4fe97e150304d1bf34f5043f178c4';
    var version = '8.x';
</script>

<script src="{{asset('assets/js/app.js')}}"></script>

</body>
</html>

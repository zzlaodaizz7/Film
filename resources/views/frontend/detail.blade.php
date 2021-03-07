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
                <img class="" src="/img/logomark.min.svg" alt="Laravel">
                <img class="hidden ml-5 sm:block" src="/img/logotype.min.svg" alt="Laravel">
            </a>
            <ul class="relative hidden lg:ml-6 lg:pt-3 lg:flex lg:items-end lg:space-x-6 xl:ml-14 xl:space-x-10">
                <li><a href="/docs">Documentation</a></li>
                <li><a href="https://forge.laravel.com">Forge</a></li>
                <li x-data="{ expanded: false }" class="relative" @keydown.window.escape="expanded = false">
                    <button class="flex items-center justify-center focus:outline-none" @click="expanded = !expanded">
                        Ecosystem<span class="ml-3 flex-shrink-0"><img :class="{ 'rotate-180': expanded }"
                                                                       class="w-2.5 h-2.5 transform transition-transform"
                                                                       src="/img/icons/nav_arrow.min.svg" alt="Expand"></span>
                    </button>
                    <div
                        x-show="expanded"
                        x-cloak
                        class="absolute left-0 z-20 transition transform"
                        x-transition:enter="duration-250 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="duration-250 ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                    >
                        <div
                            class="mt-4 ml-8 w-224 -translate-x-1/2 p-8 bg-white shadow-lg transform transition-transform origin-top"
                            @click.away="expanded = false">
                            <ul class="grid gap-3 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="https://vapor.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-vapor flex items-center justify-center">
                                            <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Vapor</div>
                                            <span class="text-gray-600 text-xs">Serverless Platform</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-forge flex items-center justify-center">
                                            <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Forge</div>
                                            <span class="text-gray-600 text-xs">Server Management</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-envoyer flex items-center justify-center">
                                            <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Envoyer</div>
                                            <span class="text-gray-600 text-xs">Zero Downtime Deployment</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/horizon" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-horizon flex items-center justify-center">
                                            <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Horizon</div>
                                            <span class="text-gray-600 text-xs">Queue Monitoring</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-nova flex items-center justify-center">
                                            <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Nova</div>
                                            <span class="text-gray-600 text-xs">Administration Panel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/broadcasting" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-echo flex items-center justify-center">
                                            <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Echo</div>
                                            <span class="text-gray-600 text-xs">Realtime Events</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://lumen.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-lumen flex items-center justify-center">
                                            <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Lumen</div>
                                            <span class="text-gray-600 text-xs">Micro-Framework</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/sail" class="flex items-center p-4 shadow-lg">
                                        <div class="bg-sail flex items-center justify-center w-14 h-14">
                                            <img src="/img/ecosystem/sail.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Sail</div>
                                            <span class="text-xs text-gray-600">Local Docker environment</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-spark flex items-center justify-center">
                                            <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Spark</div>
                                            <span class="text-gray-600 text-xs">SaaS App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/valet" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-valet flex items-center justify-center">
                                            <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Valet</div>
                                            <span class="text-gray-600 text-xs">Dev Environment for Macs</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/mix" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-mix flex items-center justify-center">
                                            <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Mix</div>
                                            <span class="text-gray-600 text-xs">Webpack Asset Compilation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/billing" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-cashier flex items-center justify-center">
                                            <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Cashier</div>
                                            <span class="text-gray-600 text-xs">Subscription Billing Integration</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/dusk" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-dusk flex items-center justify-center">
                                            <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Dusk</div>
                                            <span class="text-gray-600 text-xs">Browser Testing and Automation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/sanctum" class="flex items-center p-4 shadow-lg">
                                        <div class="bg-sanctum flex items-center justify-center w-14 h-14">
                                            <img src="/img/ecosystem/sanctum.min.svg" alt="Laravel Sanctum logomark"
                                                 class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Sanctum</div>
                                            <span class="text-xs text-gray-600">API / Mobile Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/scout" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-scout flex items-center justify-center">
                                            <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Scout</div>
                                            <span class="text-gray-600 text-xs">Full-Text Search</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/socialite" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-socialite flex items-center justify-center">
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Socialite</div>
                                            <span class="text-gray-600 text-xs">OAuth Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/telescope" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-telescope flex items-center justify-center">
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Telescope</div>
                                            <span class="text-gray-600 text-xs">Debug Assistant</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-jetstream flex items-center justify-center">
                                            <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Jetstream</div>
                                            <span class="text-gray-600 text-xs">App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="https://laravel-news.com">News</a></li>
                <li><a href="/partners">Partners</a></li>
            </ul>
            <div class="flex-1 flex items-center justify-end">
                <div x-data="searchComponent()" x-init="init()"
                     class="ml-4 relative flex-1 flex justify-end max-w-xs w-full lg:absolute lg:right-0 lg:max-w-xxs lg:ml-10 xl:max-w-xs">
                    <div
                        class="relative w-6 border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 lg:w-full hover:w-full focus-within:border-gray-600"
                        :class="{ 'w-6': !searchIsOpen, 'w-full': searchIsOpen }"
                        @click="searchIsOpen = true"
                        @click.away="clear"
                        @keydown.window.escape="clear"
                        @keydown.arrow-up.prevent="focusPreviousResult()"
                        @keydown.arrow-down.prevent="focusNextResult()"
                        @keydown.window="handleSlashKey"
                    >
                        <svg class="absolute inset-y-0 left-0 z-10 mt-1 w-5 h-5 text-gray-900 pointer-events-none"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input
                            x-model.debouce.200ms="search"
                            x-ref="searchInput"
                            class="flex-1 w-full pl-8 pr-4 py-1 placeholder-gray-900 tracking-wide bg-white focus:outline-none"
                            placeholder="Search Docs"
                            aria-label="Search in the documentation"
                        >
                    </div>
                    <div x-show="hits.length" x-cloak
                         class="absolute w-full mt-8 pt-px divide-y divide-gray-200 shadow-sm z-30">
                        <template x-for="(hit, index) in hits" :key="index">
                            <a
                                :id="'search-result-' + index"
                                :href="hit.url"
                                class="search-result block px-4 py-3 bg-gray-100 transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:bg-gray-200"
                                @keydown.arrow-up.prevent="focusPreviousResult(index)"
                                @keydown.arrow-down.prevent="focusNextResult(index)"
                            >
                                <div x-show="hit._highlightResult.hierarchy.lvl0" class="text-sm font-medium"
                                     x-html="hit._highlightResult.hierarchy.lvl0 ? hit._highlightResult.hierarchy.lvl0.value : ''"></div>
                                <div class="mt-2">
                                    <div x-show="hit._highlightResult.hierarchy.lvl1" class="text-sm">
                                        <span class="text-red-600 opacity-75">#</span> <span
                                            x-html="hit._highlightResult.hierarchy.lvl1 ? hit._highlightResult.hierarchy.lvl1.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl2" class="text-sm">
                                        > <span
                                            x-html="hit._highlightResult.hierarchy.lvl2 ? hit._highlightResult.hierarchy.lvl2.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl3" class="text-sm">
                                        > <span
                                            x-html="hit._highlightResult.hierarchy.lvl3 ? hit._highlightResult.hierarchy.lvl3.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl4" class="text-sm">
                                        > <span
                                            x-html="hit._highlightResult.hierarchy.lvl4 ? hit._highlightResult.hierarchy.lvl4.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl5" class="text-sm">
                                        > <span
                                            x-html="hit._highlightResult.hierarchy.lvl5 ? hit._highlightResult.hierarchy.lvl5.value : ''"></span>
                                    </div>
                                </div>
                            </a>
                        </template>
                        <div class="bg-gray-100 flex justify-end">
                            <a class="px-4 py-2 inline-block" target="_blank"
                               href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
                                <img width="105" src="/img/icons/algolia.min.svg" alt="Algolia">
                            </a>
                        </div>
                    </div>

                    <div x-show="search && ! hits.length" x-cloak
                         class="absolute w-full mt-8 pt-px divide-y divide-gray-200 shadow-sm z-30">
                        <div class="px-4 py-2 bg-gray-100">
                            <div class="text-sm" x-text="`We didn't find any result for '${search}'. Sorry!`"></div>
                        </div>
                        <div class="bg-gray-100 flex justify-end">
                            <a class="px-4 py-2 inline-block" target="_blank"
                               href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
                                <img width="105" src="/img/icons/algolia.min.svg" alt="Algolia">
                            </a>
                        </div>
                    </div>
                </div>
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
                    <li><a class="block w-full py-2 text-center" href="/docs">Documentation</a></li>
                    <li><a class="block w-full py-2 text-center" href="https://forge.laravel.com">Forge</a></li>
                    <li x-data="{ expanded: false }" @keydown.window.escape="expanded = false"
                        @click.away="expanded = false">
                        <button class="flex items-center justify-center w-full py-2 text-center"
                                @click="expanded = !expanded">
                            Ecosystem
                            <span class="ml-3 flex-shrink-0">
                                <img :class="{ 'rotate-180': expanded }"
                                     class="w-2.5 h-2.5 transform transition-transform"
                                     src="/img/icons/nav_arrow.min.svg" alt="Expand">
                            </span>
                        </button>
                        <div
                            x-show="expanded"
                            x-cloak
                            class="pt-1 pb-8 transform transition-transform origin-top"
                            x-transition:enter="duration-250 ease-out"
                            x-transition:enter-start="opacity-0 -translate-y-8"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="duration-250 ease-in"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 -translate-y-8"
                        >
                            <ul class="grid gap-3 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="https://vapor.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-vapor flex items-center justify-center">
                                            <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Vapor</div>
                                            <span class="text-gray-600 text-xs">Serverless Platform</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-forge flex items-center justify-center">
                                            <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Forge</div>
                                            <span class="text-gray-600 text-xs">Server Management</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-envoyer flex items-center justify-center">
                                            <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Envoyer</div>
                                            <span class="text-gray-600 text-xs">Zero Downtime Deployment</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/horizon" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-horizon flex items-center justify-center">
                                            <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Horizon</div>
                                            <span class="text-gray-600 text-xs">Queue Monitoring</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-nova flex items-center justify-center">
                                            <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Nova</div>
                                            <span class="text-gray-600 text-xs">Administration Panel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/broadcasting" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-echo flex items-center justify-center">
                                            <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Echo</div>
                                            <span class="text-gray-600 text-xs">Realtime Events</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://lumen.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-lumen flex items-center justify-center">
                                            <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Lumen</div>
                                            <span class="text-gray-600 text-xs">Micro-Framework</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/homestead" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-homestead flex items-center justify-center">
                                            <img src="/img/ecosystem/homestead.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Homestead</div>
                                            <span class="text-gray-600 text-xs">Pre-Packaged Vagrant Box</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-spark flex items-center justify-center">
                                            <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Spark</div>
                                            <span class="text-gray-600 text-xs">SaaS App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/valet" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-valet flex items-center justify-center">
                                            <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Valet</div>
                                            <span class="text-gray-600 text-xs">Dev Environment for Macs</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/mix" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-mix flex items-center justify-center">
                                            <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Mix</div>
                                            <span class="text-gray-600 text-xs">Webpack Asset Compilation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/billing" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-cashier flex items-center justify-center">
                                            <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Cashier</div>
                                            <span class="text-gray-600 text-xs">Subscription Billing Integration</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/dusk" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-dusk flex items-center justify-center">
                                            <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Dusk</div>
                                            <span class="text-gray-600 text-xs">Browser Testing and Automation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/passport" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-passport flex items-center justify-center">
                                            <img src="/img/ecosystem/passport.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Passport</div>
                                            <span class="text-gray-600 text-xs">Painless OAuth2 Implementation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/scout" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-scout flex items-center justify-center">
                                            <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Scout</div>
                                            <span class="text-gray-600 text-xs">Full-Text Search</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/socialite" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-socialite flex items-center justify-center">
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Socialite</div>
                                            <span class="text-gray-600 text-xs">OAuth Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/8.x/telescope" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-telescope flex items-center justify-center">
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Telescope</div>
                                            <span class="text-gray-600 text-xs">Debug Assistant</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-jetstream flex items-center justify-center">
                                            <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Jetstream</div>
                                            <span class="text-gray-600 text-xs">App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="block w-full py-2 text-center" href="https://laravel-news.com">News</a></li>
                    <li><a class="block w-full py-2 text-center" href="/partners">Partners</a></li>
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
            <div class="relative max-w-screen-xl mx-auto px-8">
                <section class="relative z-10 p-6 bg-white shadow-lg md:flex md:items-center md:p-12 lg:p-16">
                    <div class="content md:pr-12">
                        <h2 class="text-3xl tracking-tight sm:text-4xl md:mt-4 xl:text-5xl">Có thể bạn muốn xem</h2>
                        <div class="md:grid">
                            @for($i = 0; $i<=10; $i++)
                                <div class="md:col-span-3">
                                    <div class="flex" style="text-align: justify;">
                                        <div>
                                            <img class="rounded-lg block mx-auto"
                                                 style="width: 168px; height: 256px; object-fit: cover"
                                                 src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232589_23032609_2010316629239876_7899792449471609542_n.jpg">
                                        </div>
                                        <div>
                                            <div>
                                                <a href="#">Đừng Chọc Giận Con Gái - Don’t Mess With Girl</a>
                                            </div>
                                            <div>
                                                <a href="#">Thể loại</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="max-w-screen-2xl mx-auto px-4 lg:px-12 xl:px-16">
            <div class="px-8 pb-12 bg-gray-100 xl:px-20">
                <div>
                    <img class="-mt-2 max-w-4xl w-full transform -translate-x-12 lg:-translate-x-24 xl:-translate-x-40"
                         src="/img/logotype.min.svg" alt="Laravel">
                </div>
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
                                    <li><a href="/docs/8.x/releases">Release Notes</a></li>
                                    <li><a href="/docs/8.x/installation">Getting Started</a></li>
                                    <li><a href="/docs/8.x/routing">Routing</a></li>
                                    <li><a href="/docs/8.x/blade">Blade Templates</a></li>
                                    <li><a href="/docs/8.x/authentication">Authentication</a></li>
                                    <li><a href="/docs/8.x/authorization">Authorization</a></li>
                                    <li><a href="/docs/8.x/artisan">Artisan Console</a></li>
                                    <li><a href="/docs/8.x/database">Database</a></li>
                                    <li><a href="/docs/8.x/eloquent">Eloquent ORM</a></li>
                                    <li><a href="/docs/8.x/testing">Testing</a></li>
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
                                    <li><a href="https://laracasts.com">Laracasts</a></li>
                                    <li><a href="https://laravel-news.com">Laravel News</a></li>
                                    <li><a href="https://laracon.us">Laracon</a></li>
                                    <li><a href="https://laracon.eu/">Laracon EU</a></li>
                                    <li><a href="https://laracon.com.au/">Laracon AU</a></li>
                                    <li><a href="https://larajobs.com">Jobs</a></li>
                                    <li><a href="https://certification.laravel.com/">Certification</a></li>
                                    <li><a href="https://laracasts.com/discuss">Forums</a></li>
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
                                    <li><a href="https://tighten.co">Tighten</a></li>
                                    <li><a href="https://64robots.com/">64 Robots</a></li>
                                    <li><a href="https://kirschbaumdevelopment.com/">Kirschbaum</a></li>
                                    <li><a href="https://www.byte5.net/">Byte 5</a></li>
                                    <li><a href="https://www.a2design.biz/">A2 Design</a></li>
                                    <li>
                                        <a href="https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&amp;utm_medium=socialgroups&amp;utm_campaign=tech">ABOUT
                                            YOU</a></li>
                                    <li><a href="https://cubettech.com/">Cubet</a></li>
                                    <li>
                                        <a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&amp;utm_medium=Sponsorship">Cyber-Duck</a>
                                    </li>
                                    <li><a href="https://devsquad.com/">DevSquad</a></li>
                                    <li><a href="https://www.ideil.com/">Ideil</a></li>
                                    <li><a href="https://jump24.co.uk/">Jump24</a></li>
                                    <li><a href="https://romegadigital.com/">Romega Software</a></li>
                                    <li><a href="https://www.worksome.com/">Worksome</a></li>
                                    <li>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform">Become
                                            A Partner</a></li>
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
                                    <li><a href="https://vapor.laravel.com">Vapor</a></li>
                                    <li><a href="https://forge.laravel.com">Forge</a></li>
                                    <li><a href="https://envoyer.io">Envoyer</a></li>
                                    <li><a href="/docs/8.x/horizon">Horizon</a></li>
                                    <li><a href="https://lumen.laravel.com">Lumen</a></li>
                                    <li><a href="https://nova.laravel.com">Nova</a></li>
                                    <li><a href="/docs/8.x/broadcasting">Echo</a></li>
                                    <li><a href="/docs/8.x/valet">Valet</a></li>
                                    <li><a href="/docs/8.x/mix">Mix</a></li>
                                    <li><a href="https://spark.laravel.com">Spark</a></li>
                                    <li><a href="/docs/8.x/billing">Cashier</a></li>
                                    <li><a href="/docs/8.x/homestead">Homestead</a></li>
                                    <li><a href="/docs/8.x/dusk">Dusk</a></li>
                                    <li><a href="/docs/8.x/passport">Passport</a></li>
                                    <li><a href="/docs/8.x/scout">Scout</a></li>
                                    <li><a href="/docs/8.x/socialite">Socialite</a></li>
                                    <li><a href="/docs/8.x/telescope">Telescope</a></li>
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
                                        <a href="/docs/8.x/releases" class="transition-colors hover:text-gray-700">Release
                                            Notes</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/installation" class="transition-colors hover:text-gray-700">Getting
                                            Started</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/routing" class="transition-colors hover:text-gray-700">Routing</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/blade" class="transition-colors hover:text-gray-700">Blade
                                            Templates</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/authentication"
                                           class="transition-colors hover:text-gray-700">Authentication</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/authorization" class="transition-colors hover:text-gray-700">Authorization</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/artisan" class="transition-colors hover:text-gray-700">Artisan
                                            Console</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/database" class="transition-colors hover:text-gray-700">Database</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/eloquent" class="transition-colors hover:text-gray-700">Eloquent
                                            ORM</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/testing" class="transition-colors hover:text-gray-700">Testing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Resources</span>
                            <div class="mt-6">
                                <ul class="space-y-3 text-gray-600 text-sm">
                                    <li>
                                        <a href="https://laracasts.com" class="transition-colors hover:text-gray-700">Laracasts</a>
                                    </li>
                                    <li>
                                        <a href="https://laravel-news.com"
                                           class="transition-colors hover:text-gray-700">Laravel News</a>
                                    </li>
                                    <li>
                                        <a href="https://laracon.us" class="transition-colors hover:text-gray-700">Laracon</a>
                                    </li>
                                    <li>
                                        <a href="https://laracon.eu/" class="transition-colors hover:text-gray-700">Laracon
                                            EU</a>
                                    </li>
                                    <li>
                                        <a href="https://laracon.com.au/" class="transition-colors hover:text-gray-700">Laracon
                                            AU</a>
                                    </li>
                                    <li>
                                        <a href="https://larajobs.com" class="transition-colors hover:text-gray-700">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="https://certification.laravel.com/"
                                           class="transition-colors hover:text-gray-700">Certification</a>
                                    </li>
                                    <li>
                                        <a href="https://laracasts.com/discuss"
                                           class="transition-colors hover:text-gray-700">Forums</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Partners</span>
                            <div class="mt-6">
                                <ul class="space-y-3 text-gray-600 text-sm">
                                    <li>
                                        <a href="https://vehikl.com" class="transition-colors hover:text-gray-700">Vehikl</a>
                                    </li>
                                    <li>
                                        <a href="https://tighten.co" class="transition-colors hover:text-gray-700">Tighten</a>
                                    </li>
                                    <li>
                                        <a href="https://64robots.com/" class="transition-colors hover:text-gray-700">64
                                            Robots</a>
                                    </li>
                                    <li>
                                        <a href="https://kirschbaumdevelopment.com/"
                                           class="transition-colors hover:text-gray-700">Kirschbaum</a>
                                    </li>
                                    <li>
                                        <a href="https://www.byte5.net/" class="transition-colors hover:text-gray-700">Byte
                                            5</a>
                                    </li>
                                    <li>
                                        <a href="https://www.a2design.biz/"
                                           class="transition-colors hover:text-gray-700">A2 Design</a>
                                    </li>
                                    <li>
                                        <a href="https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&amp;utm_medium=socialgroups&amp;utm_campaign=tech"
                                           class="transition-colors hover:text-gray-700">ABOUT YOU</a>
                                    </li>
                                    <li>
                                        <a href="https://cubettech.com/" class="transition-colors hover:text-gray-700">Cubet</a>
                                    </li>
                                    <li>
                                        <a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&amp;utm_medium=Sponsorship"
                                           class="transition-colors hover:text-gray-700">Cyber-Duck</a>
                                    </li>
                                    <li>
                                        <a href="https://devsquad.com/" class="transition-colors hover:text-gray-700">DevSquad</a>
                                    </li>
                                    <li>
                                        <a href="https://www.ideil.com/" class="transition-colors hover:text-gray-700">Ideil</a>
                                    </li>
                                    <li>
                                        <a href="https://jump24.co.uk/" class="transition-colors hover:text-gray-700">Jump24</a>
                                    </li>
                                    <li>
                                        <a href="https://romegadigital.com/"
                                           class="transition-colors hover:text-gray-700">Romega Software</a>
                                    </li>
                                    <li>
                                        <a href="https://www.worksome.com/"
                                           class="transition-colors hover:text-gray-700">Worksome</a>
                                    </li>
                                    <li>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform"
                                           class="transition-colors hover:text-gray-700">Become A Partner</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Ecosystem</span>
                            <div class="mt-6">
                                <ul class="space-y-3 text-gray-600 text-sm">
                                    <li>
                                        <a href="https://vapor.laravel.com"
                                           class="transition-colors hover:text-gray-700">Vapor</a>
                                    </li>
                                    <li>
                                        <a href="https://forge.laravel.com"
                                           class="transition-colors hover:text-gray-700">Forge</a>
                                    </li>
                                    <li>
                                        <a href="https://envoyer.io" class="transition-colors hover:text-gray-700">Envoyer</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/horizon" class="transition-colors hover:text-gray-700">Horizon</a>
                                    </li>
                                    <li>
                                        <a href="https://lumen.laravel.com"
                                           class="transition-colors hover:text-gray-700">Lumen</a>
                                    </li>
                                    <li>
                                        <a href="https://nova.laravel.com"
                                           class="transition-colors hover:text-gray-700">Nova</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/broadcasting" class="transition-colors hover:text-gray-700">Echo</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/valet"
                                           class="transition-colors hover:text-gray-700">Valet</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/mix" class="transition-colors hover:text-gray-700">Mix</a>
                                    </li>
                                    <li>
                                        <a href="https://spark.laravel.com"
                                           class="transition-colors hover:text-gray-700">Spark</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/billing" class="transition-colors hover:text-gray-700">Cashier</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/homestead" class="transition-colors hover:text-gray-700">Homestead</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/dusk" class="transition-colors hover:text-gray-700">Dusk</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/passport" class="transition-colors hover:text-gray-700">Passport</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/scout"
                                           class="transition-colors hover:text-gray-700">Scout</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/socialite" class="transition-colors hover:text-gray-700">Socialite</a>
                                    </li>
                                    <li>
                                        <a href="/docs/8.x/telescope" class="transition-colors hover:text-gray-700">Telescope</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 max-w-md md:mt-0 md:w-1/2 lg:w-1/4">
                        <p class="text-xs text-gray-600 sm:text-sm">Laravel is a web application framework with
                            expressive, elegant syntax. We believe development must be an enjoyable and creative
                            experience to be truly fulfilling. Laravel attempts to take the pain out of development by
                            easing common tasks used in most web projects.</p>
                        <p class="mt-6 text-xs text-gray-600 text-opacity-75 sm:text-sm">
                            Laravel is a Trademark of Taylor Otwell.<br>Copyright &copy; 2011-2021 Laravel LLC.
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
                <img class="w-9 h-9" src="/img/logomark.min.svg" alt="Laravel">
            </a>
        </div>
    </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script>
    var algolia_app_id = 'BH4D9OD16A';
    var algolia_search_key = '7dc4fe97e150304d1bf34f5043f178c4';
    var version = '8.x';
</script>

<script src="{{asset('assets/js/app.js')}}"></script>

<script>
    var _gaq = [['_setAccount', 'UA-23865777-1'], ['_trackPageview']];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
</body>
</html>

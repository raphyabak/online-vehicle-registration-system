<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        [x-cloak] {
            display: none
        }

    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white" x-data="{mobileOpen:false}" @click.away="mobileOpen = false"
        @close.stop="mobileOpen = false">
        <div class="px-4 mx-auto max-w-7xl sm:px-6">
            <div
                class="flex items-center justify-between py-6 border-b-2 border-gray-100 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <img class="w-auto h-8 sm:h-10"
                            src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                    </a>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <button @click="mobileOpen = ! mobileOpen" type="button"
                        class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden space-x-10 md:flex">
                    <div x-data="{solutions:false}" class="relative" @click.away="solutions = false"
                        @close.stop="solutions = false">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button @click="solutions = ! solutions" type="button"
                            class="inline-flex items-center text-base font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            aria-expanded="false">
                            <span>Solutions</span>
                            <!--
                Heroicon name: solid/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
                            <svg class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
              'Solutions' flyout menu, show/hide based on flyout menu state.

              Entering: "transition ease-out duration-200"
                From: "opacity-0 translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 translate-y-1"
            -->
                        <div x-show="solutions" x-cloak
                            class="absolute z-20 w-screen max-w-md px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/chart-bar -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Analytics
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Get a better understanding of where your traffic is coming from.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/cursor-click -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Engagement
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Speak directly to your customers in a more meaningful way.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/shield-check -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Security
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Your customers&#039; data will be safe and secure.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/view-grid -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Integrations
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Connect with third-party tools that you&#039;re already using.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/refresh -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Automations
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Build strategic funnels that will drive your customers to convert
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-5 py-5 space-y-6 bg-gray-50 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                    <div class="flow-root">
                                        <a href="#"
                                            class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100">
                                            <!-- Heroicon name: outline/play -->
                                            <svg class="flex-shrink-0 w-6 h-6 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span class="ml-3">Watch Demo</span>
                                        </a>
                                    </div>

                                    <div class="flow-root">
                                        <a href="#"
                                            class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100">
                                            <!-- Heroicon name: outline/phone -->
                                            <svg class="flex-shrink-0 w-6 h-6 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                            <span class="ml-3">Contact Sales</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Pricing
                    </a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Docs
                    </a>

                    <div x-data="{more:false}" class="relative" @click.away="more = false"
                        @close.stop="more = false">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button @click="more = ! more" type="button"
                            class="inline-flex items-center text-base font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            aria-expanded="false">
                            <span>More</span>
                            <!--
                Heroicon name: solid/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
                            <svg class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
              'More' flyout menu, show/hide based on flyout menu state.

              Entering: "transition ease-out duration-200"
                From: "opacity-0 translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 translate-y-1"
            -->
                        <div x-show="more" x-cloak
                            class="absolute z-20 w-screen max-w-md px-2 mt-3 transform -translate-x-1/2 left-1/2 sm:px-0">
                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/support -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Help Center
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Get all of your questions answered in our forums or contact support.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/bookmark-alt -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Guides
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Learn how to maximize our platform to get the most out of it.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/calendar -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Events
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                See what meet-ups and other events we might be planning near you.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/shield-check -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Security
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Understand how we take your privacy seriously.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                                    <div>
                                        <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">
                                            Recent Posts
                                        </h3>
                                        <ul role="list" class="mt-4 space-y-4">
                                            <li class="text-base truncate">
                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                    Boost your conversion rate
                                                </a>
                                            </li>

                                            <li class="text-base truncate">
                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                    How to use search engine optimization to drive traffic to your site
                                                </a>
                                            </li>

                                            <li class="text-base truncate">
                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                    Improve your customer experience
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5 text-sm">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all
                                            posts <span aria-hidden="true">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
                    <a href="#" class="text-base font-medium text-gray-500 whitespace-nowrap hover:text-gray-900">
                        Sign in
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm whitespace-nowrap hover:bg-indigo-700">
                        Sign up
                    </a>
                </div>
            </div>
        </div>

        <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
        <div x-show="mobileOpen" x-cloak
            class="absolute inset-x-0 top-0 z-20 p-2 transition origin-top-right transform md:hidden">
            <div class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50">
                <div class="px-5 pt-5 pb-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="w-auto h-8"
                                src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button @click="mobileOpen = ! mobileOpen" type="button"
                                class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Analytics
                                </span>
                            </a>

                            <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Engagement
                                </span>
                            </a>

                            <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Security
                                </span>
                            </a>

                            <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/view-grid -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Integrations
                                </span>
                            </a>

                            <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/refresh -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Automations
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="px-5 py-6 space-y-6">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Pricing
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Docs
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Help Center
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Guides
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Events
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Security
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                            Sign up
                        </a>
                        <p class="mt-6 text-base font-medium text-center text-gray-500">
                            Existing customer?
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative overflow-hidden bg-white">
        <div class="max-w-full mx-auto bg-white">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="absolute inset-y-0 right-0 hidden w-48 h-full text-white transform translate-x-1/2 lg:block"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div>
                    <div class="relative px-4 pt-6 sm:px-6 lg:px-8">
                    </div>
                </div>

                <main class="px-4 mx-auto mt-10 lg:ml-3 max-w-7xl sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Data to enrich your</span>
                            <span class="block text-indigo-600 xl:inline">online business</span>
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                            Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Live demo
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="swiper-container lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="object-cover w-full h-56 sm:h-72 md:h-96 lg:w-full lg:h-full"
                        src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                        alt="">
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full h-56 sm:h-72 md:h-96 lg:w-full lg:h-full"
                        src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Services Section --}}
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="py-12 bg-white">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-lg font-semibold tracking-wide text-indigo-600 uppercase">our</h2>
                <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">Services</p>
                <p class="max-w-2xl mt-4 text-xl text-gray-500 lg:mx-auto">we offer the following amazing services.</p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-indigo-600 bg-indigo-100 rounded-xl">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <p class="ml-16 text-2xl font-semibold leading-6 text-gray-900">Consultancy</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">What ever idea you have for a business
                            investment or upgrade, We offer proven guide to issues you might have from our pool of
                            experience, be it a new laundry business or you require an upgrade for an existing laundry
                            business, equipment recommendation & supply; more efficient workflow, feasibility study,
                            Occupational Health & Safety(OH&S), Human Resource, etc. We provide strong results and we
                            know the market. We are here to unravel solutions.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-indigo-600 bg-indigo-100 rounded-xl">
                                <!-- Heroicon name: outline/scale -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-2xl font-semibold leading-6 text-gray-900">Design & Concept</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">Once there is a brief from a client and/or their
                            stake holders, we begin action steps by carrying out a feasibility analysis for the
                            intending business venture; develop a well detailed business plan with the customer's
                            objectives in mind. We are detail-oriented and we pride ourselves on the level of personal
                            service that we offer.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-indigo-600 bg-indigo-100 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-2xl font-semibold leading-6 text-gray-900">Equipments & Installation
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">We do not just sell Industrial Equipment and
                            their spare parts, we love to know the intent of our customers to give them recommendations
                            on what range and size of equipment to buy that's cost effective, functional, durable and
                            tailored to their budget. We also offer installation and after sale maintenance of
                            Industrial equipment to ensure the best experience buying from Quip Kraft Solutions. We aim
                            to improve work output and overall efficiency.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-indigo-600 bg-indigo-100 rounded-xl">
                                <!-- Heroicon name: outline/annotation -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-2xl font-semibold leading-6 text-gray-900">Training</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">Looking to upgrade your staff as part of your
                            organizational KPI's? We offer practical training on Professional Laundry and Drycleaning
                            from the front desk operations to garment delivery. Also, we offer engaging soft skills
                            training for individuals and corporate organizations to boost staff competence at work.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>


{{-- End of services --}}
@livewire('coin-pay')

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            // direction: 'horizontal',
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            loop: true,

            // If we need pagination
            //   pagination: {
            //     el: '.swiper-pagination',
            //   },

            // Navigation arrows
            //   navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            //   },

            // And if we need scrollbar
            //   scrollbar: {
            //     el: '.swiper-scrollbar',
            //   },
        })
    </script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>

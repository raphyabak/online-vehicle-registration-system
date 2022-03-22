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

                    <a href="{{url('register-vehicle')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                       Vehicle License Registration
                    </a>
                    <a href="{{url('renew-license')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        License Renewal
                    </a>
                    <a href="{{url('change-vehicle-ownership')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Change of Ownership
                    </a>
                    <a href="{{url('admin/vehicles-registration-requests')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Admin Access
                    </a>


                </nav>
                <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
                    <a href="{{url('login')}}" class="text-base font-medium text-gray-500 whitespace-nowrap hover:text-gray-900">
                       Log In
                    </a>
                    <a href="{{url('register')}}"
                        class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm whitespace-nowrap hover:bg-indigo-700">
                        Register
                    </a>
                </div>
            </div>
        </div>


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
                            <a href="{{url('register-vehicle')}}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Vehicle License Registration
                                </span>
                            </a>

                            <a href="{{url('renew-license')}}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    License Renewal
                                </span>
                            </a>

                            <a href="{{url('change-vehicle-ownership')}}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Change of Ownership
                                </span>
                            </a>

                            <a href="{{url('admin/vehicles-registration-requests')}}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/view-grid -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Admin Access
                                </span>
                            </a>


                        </nav>
                    </div>
                </div>
                <div class="px-5 py-6 space-y-6">

                    <div>
                        <a href="{{url('register')}}"
                            class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                            Register
                        </a>
                        <p class="mt-6 text-base font-medium text-center text-gray-500">
                            Existing customer?
                            <a href="{{url('login')}}" class="text-indigo-600 hover:text-indigo-500">
                              Login
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
                            <span class="block xl:inline">Online</span>
                            <span class="block text-indigo-600 xl:inline">Vehicle License Registration</span>
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Register for your vehicle license online.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{url('register-vehicle')}}"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                   Register Vehicle
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{url('renew-license')}}"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    License Renewal
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="object-cover w-full h-56 sm:h-72 md:h-96 lg:w-full lg:h-full"
            src="{{asset('carr.jpg')}}"
            alt="">
        </div>
        {{-- <div class="swiper-container lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="object-cover w-full h-56 sm:h-72 md:h-96 lg:w-full lg:h-full"
                        src="{{asset('car.jpg')}}"
                        alt="">
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full h-56 sm:h-72 md:h-96 lg:w-full lg:h-full"
                        src="{{asset('carr.jpg')}}"
                        alt="">
                </div>
            </div>
        </div> --}}
    </div>



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

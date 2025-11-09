<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || window.matchMedia('(prefers-color-scheme: dark)').matches }"
    x-init="$watch('darkMode', val => localStorage.setItem('theme', val ? 'dark' : 'light'))"
    :class="{'dark': darkMode}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .bg-whatsapp-teal-green {
            --tw-bg-opacity: 1;
            background-color: rgb(18 140 126 / var(--tw-bg-opacity));
        }

        .brand-green {
            color: #16a34a !important;
            /* Tailwind green-600 */
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="min-h-screen bg-gray-50 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300 flex flex-col">
    <!-- Navigation -->
    <header class="bg-white dark:bg-black shadow-sm fixed w-full top-0 z-50 transition-colors duration-300"
        x-data="{ mobileMenuOpen: false }">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20">
            <div class="flex items-center justify-between h-full">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center">
                        @php
                        $logoPath = public_path('images/logo.png');
                        $logoExists = file_exists($logoPath);
                        @endphp

                        @if($logoExists)
                        <img src="{{ asset('images/logo.png') }}" alt="Binco Ran Indofarm Logo"
                            class="h-10 w-10 object-contain">
                        @else
                        <div
                            class="h-10 w-10 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        @endif
                        <span class="ml-3 text-xl font-bold text-gray-900 dark:text-white">
                            Binco Ran <span class="brand-green">Indofarm</span>
                        </span>



                    </a>
                </div>


                <!-- Navigation Links (Desktop) -->
                <div class="hidden sm:flex items-center space-x-8">
                    <a href="/"
                        class="{{ Request::is('/') ? 'text-emerald-500 dark:text-white' : 'text-gray-600 dark:text-gray-300' }} hover:text-white dark:hover:text-white transition-all duration-300 font-semibold">Home</a>
                    <a href="{{ route('about') }}"
                        class="{{ Request::is('about') ? 'text-emerald-500 dark:text-white' : 'text-gray-600 dark:text-gray-300' }} hover:text-white dark:hover:text-white transition-all duration-300 font-semibold">About
                        Us</a>
                    <a href="{{ route('product') }}"
                        class="{{ Request::is('product') ? 'text-emerald-500 dark:text-white' : 'text-gray-600 dark:text-gray-300' }} hover:text-white dark:hover:text-white transition-all duration-300 font-semibold">Products</a>
                    <a href="{{ route('blogs') }}"
                        class="{{ Request::is('blogs') ? 'text-emerald-500 dark:text-white' : 'text-gray-600 dark:text-gray-300' }} hover:text-white dark:hover:text-white transition-all duration-300 font-semibold">Blogs</a>
                    <a href="{{ route('contact') }}"
                        class="{{ Request::is('contact') ? 'text-emerald-500 dark:text-white' : 'text-gray-600 dark:text-gray-300' }} hover:text-white dark:hover:text-white transition-all duration-300 font-semibold">Contact
                        Us</a>
                </div>

                <!-- Search & Auth (Desktop) + Hamburger Button (Mobile) -->
                <div class="flex items-center">
                    <div class="hidden sm:flex items-center space-x-6">
                        <!-- Dark Mode Toggle -->
                        <button @click="darkMode = !darkMode"
                            class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-emerald-500 hover:text-white transition">
                            <template x-if="!darkMode">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v1m0 16v1m8.485-8.485h1M3.515 12.515h1M17.657 6.343l.707-.707M5.636 18.364l.707-.707M6.343 6.343l-.707-.707M18.364 18.364l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                                </svg>
                            </template>
                            <template x-if="darkMode">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                                </svg>
                            </template>
                        </button>

                        <!-- Cart -->
                        <a href="/cart"
                            class="relative text-gray-600 dark:text-gray-300 hover:text-emerald-500 transition"
                            aria-label="View Cart">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span id="cart-count"
                                class="cart-badge absolute -top-2 -right-2 bg-emerald-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">0</span>
                        </a>

                        <!-- Auth Links -->
                        @guest
                        <a href="{{ route('login') }}"
                            class="text-gray-600 dark:text-gray-300 hover:text-emerald-500 transition font-semibold">Login</a>
                        <a href="{{ route('register') }}"
                            class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-4 py-2 rounded-xl hover:opacity-90 transition font-semibold">Register</a>
                        @else
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="flex items-center space-x-2 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg shadow-sm hover:bg-emerald-100 dark:hover:bg-emerald-600 hover:text-emerald-600 dark:hover:text-white focus:outline-none transition duration-200">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-700 border border-whitetext-white dark:border-gray-600 rounded-lg shadow-lg overflow-hidden z-50"
                                style="display: none;">
                                <form method="POST" action="{{ route('logout') }}" class="py-2">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-emerald-100 dark:hover:bg-emerald-600 hover:text-emerald-600 dark:hover:text-white transition duration-200">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endguest
                    </div>

                    <!-- Hamburger Button (Mobile) -->
                    <div class="sm:hidden flex items-center">
                        <button @click="mobileMenuOpen = !mobileMenuOpen"
                            class="p-2 rounded-md text-gray-700 dark:text-gray-300 focus:outline-none"
                            aria-label="Toggle Menu">

                            <!-- Ikon Hamburger -->
                            <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <!-- Ikon 'X' (Close) -->
                            <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </nav>

        <!-- BARU: Mobile Menu Panel -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" {{-- MODIFIKASI: Mengubah top-16 menjadi top-20 --}}
            class="sm:hidden absolute top-20 left-0 right-0 bg-white dark:bg-black shadow-lg border-t border-whitetext-white dark:border-gray-700"
            @click.away="mobileMenuOpen = false" style="display: none;">

            <!-- Nav Links -->
            <div class="px-4 pt-4 pb-3 space-y-1">
                <a href="/"
                    class="flex items-center px-3 py-2 rounded-md text-base font-medium {{ Request::is('/') ? 'text-emerald-500 dark:text-emerald-400' : 'text-gray-700 dark:text-white' }} hover:text-emerald-500 dark:hover:text-emerald-400 transition-colors duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span>Home</span>
                </a>

                <a href="{{ route('about') }}"
                    class="flex items-center px-3 py-2 rounded-md text-base font-medium {{ Request::is('about') ? 'text-emerald-500 dark:text-emerald-400' : 'text-gray-700 dark:text-white' }} hover:text-emerald-500 dark:hover:text-emerald-400 transition-colors duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                    </svg>
                    <span>About Us</span>
                </a>

                <a href="{{ route('product') }}"
                    class="flex items-center px-3 py-2 rounded-md text-base font-medium {{ Request::is('product') ? 'text-emerald-500 dark:text-emerald-400' : 'text-gray-700 dark:text-white' }} hover:text-emerald-500 dark:hover:text-emerald-400 transition-colors duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <span>Products</span>
                </a>

                <a href="{{ route('blogs') }}"
                    class="flex items-center px-3 py-2 rounded-md text-base font-medium {{ Request::is('blogs') ? 'text-emerald-500 dark:text-emerald-400' : 'text-gray-700 dark:text-white' }} hover:text-emerald-500 dark:hover:text-emerald-400 transition-colors duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                    <span>Blogs</span>
                </a>

                <a href="{{ route('contact') }}"
                    class="flex items-center px-3 py-2 rounded-md text-base font-medium {{ Request::is('contact') ? 'text-emerald-500 dark:text-emerald-400' : 'text-gray-700 dark:text-white' }} hover:text-emerald-500 dark:hover:text-emerald-400 transition-colors duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    <span>Contact Us</span>
                </a>

            </div>

            <div class="border-t border-white text-white dark:border-gray-700 mt-5"></div>

            <div class="px-4 py-4 space-y-4">
                <!-- Cart -->
                <a href="/cart"
                    class="flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <span class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Cart
                    </span>
                    <!-- Pastikan JS Anda juga mengupdate ID ini jika ada -->
                    <span id="mobile-cart-count"
                        class="cart-badge absolute -top-2 -right-2 bg-emerald-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs"
                        style="display: none;">0</span>
                </a>

                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode"
                    class="w-full flex items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg x-show="!darkMode" class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m8.485-8.485h1M3.515 12.515h1M17.657 6.343l.707-.707M5.636 18.364l.707-.707M6.343 6.343l-.707-.707M18.364 18.364l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <svg x-show="darkMode" style="display: none;" class="w-6 h-6 mr-3" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>
                    <span x-show="!darkMode">Switch Mode</span>
                    <span x-show="darkMode" style="display: none;">Switch Mode</span>
                </button>
            </div>

            <!-- Divider -->
            <div class="border-t border-whitetext-white dark:border-gray-700"></div>

            <!-- Auth Links -->
            <div class="px-4 py-4 space-y-2">
                @guest
                <a href="{{ route('login') }}"
                    class="block w-full text-center px-3 py-2 rounded-md text-base font-medium bg-gradient-to-r from-emerald-500 to-teal-500 text-white hover:opacity-90 transition">Login</a>
                {{-- <a href="{{ route('register') }}"                    
                    class="block w-full text-center px-3 py-2 rounded-md text-base font-medium bg-gradient-to-r from-emerald-500 to-teal-500 text-white hover:opacity-90 transition">Register</a>
                                --}}
                @else
                <div class="flex items-center px-3 pt-2">
                    <span class="text-base font-medium text-gray-700 dark:text-white">Welcome, {{ Auth::user()->name
                        }}</span>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        Logout
                    </button>
                </form>
                @endguest
            </div>

        </div> <!-- End Mobile Menu Panel -->
    </header>


    <!-- component -->


    <!-- Main Content -->
    <main class="flex-grow">
        <div class="">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-black border-t border-gray-100 dark:border-gray-700 transition-colors duration-300">
        <div class="fixed bottom-4 right-4 z-[60]">
            <a href="https://wa.me/628985531212" target="_blank"
                class="bg-whatsapp-teal-green text-white rounded-full p-3 flex items-center justify-center shadow-lg">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                    <path
                        d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
                    </path>
                </svg>
            </a>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">PT Binco
                        Ran Indofarm</h3>
                    <p class="text-gray-500 dark:text-gray-400 mt-2">Perusahaan agribisnis modern yang berfokus pada
                        pengolahan sabut kelapa dan penyediaan media tanam alami untuk pertanian berkelanjutan.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">Quick Links
                    </h3>
                    <a href="/" class="block text-gray-500 dark:text-gray-400 hover:text-emerald-500 mt-2">Home</a>
                    <a href="/about" class="block text-gray-500 dark:text-gray-400 hover:text-emerald-500 mt-2">Tentang
                        Kami</a>
                    <a href="/products"
                        class="block text-gray-500 dark:text-gray-400 hover:text-emerald-500 mt-2">Produk</a>
                    <a href="/contact"
                        class="block text-gray-500 dark:text-gray-400 hover:text-emerald-500 mt-2">Kontak</a>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">Contact
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400 mt-2">bincoranindofarm@gmail.com</p>
                    <p class="text-gray-500 dark:text-gray-400 mt-1">+62 898-5531-212</p>
                    <p class="text-gray-500 dark:text-gray-400 mt-1 text-sm">Jl. Suruh, Kayuapak, Polokarto, Sukoharjo,
                        Jawa Tengah 57555</p>
                </div>

                <!-- Follow Us -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">Follow Us
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400 mt-2">@binco.indofarm</p>
                    <div class="flex space-x-3 mt-2">
                        <a href="https://instagram.com/binco.indofarm" target="_blank"
                            class="text-gray-400 hover:text-emerald-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@binco.indofarm" target="_blank"
                            class="text-gray-400 hover:text-emerald-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.589 6.686a4.793 4.793 0 01-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 01-5.201 1.743l-.002-.001.002.001a2.895 2.895 0 113.183-4.51v-3.5a6.329 6.329 0 105.414 6.183V9.159a8.793 8.793 0 004.773 1.421V7.871a4.831 4.831 0 01-1.003-.179l.003-.002.003.002z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com/@binco.indofarm" target="_blank"
                            class="text-gray-400 hover:text-emerald-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-gray-100 dark:border-gray-700 pt-8">
                <p class="text-center text-gray-400 dark:text-gray-500">© {{ date('Y') }} PT Binco Ran Indofarm. All
                    rights reserved.</p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ config('midtrans.payment_url') }}" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
    {{--
       
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"        
        data-client-key="SB-Mid-client-PS1I8nolVogAFXyg"></script> --}}
</body>

</html>
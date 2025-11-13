@extends('layouts.layouts-landing')

@section('title', 'Home')

@section('content')

@php
// helper kecil: jika file ada di public/images pakai asset(), jika tidak gunakan placeholder dari picsum
$exists = '\Illuminate\Support\Facades\File' . '::exists';
// Kenapa memilih kami image
$whyPath = public_path('images/why-choose.jpg');
$whyImg = \Illuminate\Support\Facades\File::exists($whyPath) ? asset('images/why-choose.jpg') :
'https://picsum.photos/800/500?random=1';

// Testimoni images
$client1Path = public_path('images/client1.jpg');
$client1Img = \Illuminate\Support\Facades\File::exists($client1Path) ? asset('images/client1.jpg') :
'https://picsum.photos/60/60?random=2';

$client2Path = public_path('images/client2.jpg');
$client2Img = \Illuminate\Support\Facades\File::exists($client2Path) ? asset('images/client2.jpg') :
'https://picsum.photos/60/60?random=3';

// Gallery images
$gal1Path = public_path('images/gal1.jpg');
$gal2Path = public_path('images/gal2.jpg');
$gal3Path = public_path('images/gal3.jpg');
$gal4Path = public_path('images/gal4.jpg');

$gal1Img = \Illuminate\Support\Facades\File::exists($gal1Path) ? asset('images/gal1.jpg') :
'https://picsum.photos/600/400?random=11';
$gal2Img = \Illuminate\Support\Facades\File::exists($gal2Path) ? asset('images/gal2.jpg') :
'https://picsum.photos/600/400?random=12';
$gal3Img = \Illuminate\Support\Facades\File::exists($gal3Path) ? asset('images/gal3.jpg') :
'https://picsum.photos/600/400?random=13';
$gal4Img = \Illuminate\Support\Facades\File::exists($gal4Path) ? asset('images/gal4.jpg') :
'https://picsum.photos/600/400?random=14';
@endphp

<!-- Premium Hero Section -->
<div id="hero-section" class="relative w-full h-screen overflow-hidden pt-0 bg-gray-900">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/30 via-gray-900 to-slate-900 z-0"></div>

    <!-- Subtle Pattern -->
    <div class="absolute inset-0 opacity-10 z-0">
        <div class="absolute top-0 left-0 w-full h-full"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\" 60\" height=\"60\" viewBox=\"0 0 60 60\"
            xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\"
            fill-opacity=\"0.05\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"1\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="w-full h-full overflow-hidden relative z-10">
        <div id="carousel-track" class="flex w-full h-full transition-transform duration-700 ease-out">
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('images/hero1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1"
                    loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-l from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('images/img2.jpg') }}" class="w-full h-full object-cover" alt="Slide 2"
                    loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('images/img3.jpg') }}" class="w-full h-full object-cover" alt="Slide 3"
                    loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('/images/produk_unggulan/cocopeat4.jpg') }}" class="w-full h-full object-cover" alt="Slide 3"
                    loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('/images/produk_unggulan/cocopot1.jpg') }}" class="w-full h-full object-cover" alt="Slide 3"
                    loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('/images/produk_unggulan/cocorope2.jpg') }}" class="w-full h-full object-cover" alt="Slide 3"
                    loading="lazy">
            </div>
        </div>

        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 z-30 h-full">
            <!-- Premium Badge -->
            <div
                class="mb-6 px-5 py-2.5 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full inline-flex items-center shadow-lg">
                <span class="text-white text-sm font-medium tracking-wider">
                    {{ __('messages.hero_badge') }}
                </span>
            </div>

            <h1 class="text-4xl sm:text-3xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                <span class="block uppercase">{{ __('messages.hero_title_1') }}</span>
                <span class="block uppercase">{{ __('messages.hero_title_2') }}</span>
                <span class="block text-emerald-400 mt-2 uppercase font-extrabold">
                    {{ __('messages.hero_title_3') }}
                </span>
            </h1>

            <div class="w-24 h-1 bg-emerald-500 rounded-full mb-6 mx-auto"></div>

            <p class="mt-4 max-w-3xl text-xl text-gray-200 font-light leading-relaxed">
                {{ __('messages.hero_description') }}
            </p>

            <p class="mt-4 max-w-3xl sm:text-xl text-xl text-gray-200 leading-relaxed font-bold uppercase">
                {{ __('messages.company_name') }}
            </p>

            <div class="mt-8 flex gap-4 flex-wrap justify-center">
                <a href="#produk"
                class="group inline-flex items-center px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-emerald-500/30">
                    <span class="font-semibold tracking-wide">{{ __('messages.btn_products') }}</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>

                <a href="#siapa-kami"
                class="group inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 border border-white/30 text-white rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <span class="font-semibold tracking-wide">{{ __('messages.btn_about') }}</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
        </div>


        <!-- Carousel Controls -->
        <button id="carousel-prev" aria-label="Previous" class="absolute left-6 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-12 h-12 rounded-full
        bg-black/40 hover:bg-black/70 backdrop-blur-sm text-white shadow-lg transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="carousel-next" aria-label="Next" class="absolute right-6 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-12 h-12 rounded-full
        bg-black/40 hover:bg-black/70 backdrop-blur-sm text-white shadow-lg transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div id="carousel-indicators" class="absolute bottom-8 left-1/2 -translate-x-1/2 z-40 flex gap-3"></div>

        <!-- Scroll Indicator -->
        {{-- <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-40 flex flex-col items-center">
            <span class="text-white text-sm mb-2 opacity-70">Scroll</span>
            <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div> --}}
    </div>
</div>

<!-- Premium Siapa Kami + Video + Stats -->
<section id="siapa-kami" class="py-20 bg-white dark:bg-gray-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute -top-20 -right-20 w-40 h-40 bg-emerald-100 dark:bg-emerald-900/20 rounded-full blur-xl"></div>
    <div class="absolute -bottom-20 -left-20 w-60 h-60 bg-amber-100 dark:bg-amber-900/20 rounded-full blur-xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ __('messages.Tentang') }} <span class="text-emerald-600">{{ __('messages.Perusahaan Kami') }}</span>
            </h2>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white leading-tight">PT Binco Indofarm: <span
                        class="text-emerald-600">{{ __('messages.Inovasi Agribisnis') }}</span> {{ __('messages.untuk Masa Depan') }}</h3>

                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    {{ __('messages.Kami menghadirkan solusi agribisnis komprehensif — dari benih unggul, pupuk formulasi canggih, hingga layanan pascapanen terintegrasi.') }}
                </p>

                <!-- Enhanced Feature List -->
                <div class="grid grid-cols-1 gap-4 mt-6">
                    <div
                        class="flex items-start gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-800 shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.Pengalaman Industri') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                {{ __('messages.Lebih dari dua dekade mengembangkan solusi pertanian terdepan') }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex items-start gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-800 shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.Tim R&D & QC Profesional') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                {{ __('messages.Inovasi berbasis penelitian dengan standar kualitas tertinggi') }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex items-start gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-800 shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.Jaringan Distribusi Luas') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                {{ __('messages.Akses produk kami tersedia di seluruh Indonesia dengan dukungan logistik terintegrasi') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="h-full flex flex-col justify-start">
                <!-- Video Container -->
                <div class="relative rounded-xl overflow-hidden shadow-lg group mb-8">
                    <div class="aspect-[4/3]">
                        <iframe src="https://www.youtube.com/embed/uOZokZWQWy0" title="Binco Indofarm Video"
                            allowfullscreen class="w-full h-full"></iframe>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none">
                    </div>
                </div>

                <!-- Enhanced Stats -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white counter" data-target="2025">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{ __('messages.Tahun Berdiri') }}</div>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white counter" data-target="125">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{ __('messages.Proyek') }}</div>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white counter" data-target="300">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{ __('messages.Klien') }}</div>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl text-gray-900 dark:text-white counter font-bold" data-target="45">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{ __('messages.Kolaborasi') }}</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Premium Why Choose Us -->
<section class="py-20 bg-gray-50 dark:bg-gray-800 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5 dark:opacity-10">
        <div class="absolute top-0 left-0 w-full h-full"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"%2334d399\" fill-opacity=\"0.4\" fill-rule=\"evenodd\"%3E%3Ccircle cx=\"3\" cy=\"3\" r=\"3\"/%3E%3Ccircle cx=\"13\" cy=\"13\" r=\"3\"/%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <!-- Section Header -->
                <div class="mb-2">
                    <span class="text-emerald-600 font-semibold">{{ __('messages.MENGAPA MEMILIH KAMI') }}</span>
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mt-2">
                        {{ __('messages.Keunggulan') }} <span class="text-emerald-600">{{ __('messages.Solusi Agribisnis') }}</span> {{ __('messages.Kami') }}
                    </h3>
                    <div class="w-20 h-1 bg-emerald-500 rounded-full mt-4"></div>
                </div>

                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                    {{ __('messages.Kami menghadirkan pendekatan terintegrasi yang menggabungkan penelitian mutakhir, kontrol kualitas laboratorium, dan dukungan teknis lapangan untuk memastikan produk yang konsisten, aman, dan efektif bagi mitra kami.') }}
                </p>

                <!-- Enhanced Feature List -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-emerald-600 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-lg">
                                {{ __('messages.Standar QC Ketat & Uji Laboratorium') }}
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">
                                {{ __('messages.Setiap produk melalui proses quality control multi-tahap dengan teknologi laboratorium modern untuk memastikan kualitas terbaik.') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-amber-600 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-lg">{{ __('messages.Solusi Terpersonalisasi') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">
                                {{ __('messages.Kami menyediakan solusi yang dapat disesuaikan dengan kebutuhan spesifik berbagai komoditas dan kondisi geografis.') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-emerald-600 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-lg">{{ __('messages.Dukungan Teknis & Pelatihan') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">
                                {{ __('messages.Tim ahli kami memberikan pendampingan teknis dan program pelatihan untuk memastikan keberhasilan implementasi di lapangan.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2 relative">
                <div class="relative">
                    <div
                        class="absolute -top-6 -left-6 w-full h-full bg-emerald-200 dark:bg-emerald-900/30 rounded-2xl transform rotate-3 z-0">
                    </div>
                    <div
                        class="relative rounded-2xl overflow-hidden shadow-xl z-10 transform hover:-translate-y-2 transition-transform duration-500 border border-gray-200 dark:border-gray-700">
                        <img src="{{ asset('/images/cocopeat_20250201_110118_0000.jpg') }}" alt="{{ __('messages.Kenapa memilih kami') }}"
                            class="w-full h-96 object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>

                        <div
                            class="absolute top-6 right-6 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-full px-4 py-2 shadow-lg">
                            <span class="text-emerald-700 dark:text-emerald-400 font-bold text-sm">{{ __('messages.QUALITY FIRST') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="py-20 bg-white dark:bg-gray-900 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Carousel Gambar --}}
            <div x-data="{ activeSlide: 0, slides: [
                '{{ asset('/images/greenhouse/greenhouse1.jpg') }}',
                '{{ asset('/images/greenhouse/greenhouse2.jpg') }}',
                '{{ asset('/images/greenhouse/greenhouse3.jpg') }}'
            ],
            nextSlide() {
                this.activeSlide = (this.activeSlide + 1) % this.slides.length;
            },
            prevSlide() {
                this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
            },
            startAutoplay() {
                this.autoplayInterval = setInterval(() => {
                    this.nextSlide();
                }, 5000); // Ganti gambar setiap 5 detik
            },
            stopAutoplay() {
                clearInterval(this.autoplayInterval);
            }
            }" x-init="startAutoplay()" @mouseover="stopAutoplay()" @mouseleave="startAutoplay()"
                class="relative rounded-2xl shadow-2xl overflow-hidden group">

                {{-- Container untuk slide --}}
                <div class="relative h-[450px] overflow-hidden">
                    @foreach (range(0,2) as $index) {{-- Sesuaikan range dengan jumlah slide Anda --}}
                    <img x-show="activeSlide === {{ $index }}" x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300 absolute w-full"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" :src="slides[{{ $index }}]"
                        alt="Greenhouse slide {{ $index + 1 }}"
                        class="absolute top-0 left-0 w-full h-full object-cover">
                    @endforeach
                </div>

                {{-- Indikator Inovasi Terbaru --}}
                <div
                    class="absolute top-6 right-6 px-4 py-2 bg-emerald-600 text-white text-sm font-semibold rounded-lg shadow-lg">
                    <svg class="w-5 h-5 inline-block mr-1 -mt-1" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    Inovasi Terbaru
                </div>

                {{-- Navigasi Carousel (panah) --}}
                <button @click="prevSlide()"
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 text-white p-3 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button @click="nextSlide()"
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 text-white p-3 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                {{-- Indikator Slide (dots) --}}
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index"
                            :class="{ 'bg-emerald-600': activeSlide === index, 'bg-gray-300 dark:bg-gray-600': activeSlide !== index }"
                            class="w-3 h-3 rounded-full transition-colors duration-300"></button>
                    </template>
                </div>

            </div>

            <div class="space-y-6">
                <p class="text-emerald-600 font-semibold tracking-wide uppercase">
                    {{ __('messages.Inovasi & Edukasi') }}
                </p>
                <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
                    {{ __('messages.Greenhouse Smart Plant & Wisata Edukasi Petik Melon') }}
                </h3>
                <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">
                    {{ __('messages.innovation_paragraph1') }}
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">
                    {{ __('messages.innovation_paragraph2') }}
                </p>

                <h4 class="text-2xl font-bold text-gray-900 dark:text-white pt-4">
                    {{ __('messages.education_title') }}
                </h4>

                <ul class="space-y-3">
                    @foreach (__('messages.education_features') as $feature)
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 pt-1">
                                <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg text-gray-600 dark:text-gray-300">{{ $feature }}</p>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</section>



<section class="py-20 bg-gray-50 dark:bg-gray-800" x-data="{ activeTab: 'cocopeat' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ __('messages.produk_unggulan_judul') }}
                <span class="text-emerald-600">{{ __('messages.produk_unggulan_highlight') }}</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                {{ __('messages.produk_unggulan_deskripsi') }}
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <!-- Tabs -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            @foreach ([
                'cocopeat' => __('messages.tab_cocopeat'),
                'cocopot' => __('messages.tab_cocopot'),
                'cocorope' => __('messages.tab_cocorope'),
                'pendukung' => __('messages.tab_pendukung')
            ] as $tab => $label)
                <button @click="activeTab = '{{ $tab }}'"
                    :class="{
                        'bg-emerald-600 text-white shadow-lg': activeTab === '{{ $tab }}',
                        'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600': activeTab !== '{{ $tab }}'
                    }"
                    class="px-6 py-3 font-semibold rounded-lg transition-all duration-300">
                    {{ $label }}
                </button>
            @endforeach
        </div>

        <!-- Content -->
        <div class="relative">

            <!-- Cocopeat -->
            <div x-show="activeTab === 'cocopeat'">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="space-y-5">
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('messages.cocopeat_judul') }}</h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">
                            {{ __('messages.cocopeat_deskripsi') }}
                        </p>
                        <ul class="space-y-2">
                            <li><strong class="dark:text-white">{{ __('messages.cocopeat_block') }}</strong></li>
                            <li><strong class="dark:text-white">{{ __('messages.cocopeat_loose') }}</strong></li>
                        </ul>
                        <h4 class="text-2xl font-bold text-gray-900 dark:text-white pt-2">{{ __('messages.keunggulan') }}</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            @foreach (__('messages.cocopeat_features') as $feature)
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>{{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <img src="{{ asset('/images/produk_unggulan/cocopeat4.jpg') }}" alt="Cocopeat"
                            class="w-full h-auto rounded-2xl shadow-2xl object-cover" style="aspect-ratio: 4/3;">
                    </div>
                </div>
            </div>

            <!-- Cocopot -->
            <div x-show="activeTab === 'cocopot'">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="space-y-5">
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('messages.cocopot_judul') }}</h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">
                            {{ __('messages.cocopot_deskripsi') }}
                        </p>
                        <h4 class="text-2xl font-bold text-gray-900 dark:text-white pt-2">{{ __('messages.keunggulan') }}</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            @foreach (__('messages.cocopot_features') as $feature)
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>{{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <img src="{{ asset('/images/produk_unggulan/cocopot1.jpg') }}" alt="Cocopot"
                            class="w-full h-auto rounded-2xl shadow-2xl object-cover" style="aspect-ratio: 4/3;">
                    </div>
                </div>
            </div>

            <!-- Cocorope -->
            <div x-show="activeTab === 'cocorope'">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="space-y-5">
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('messages.cocorope_judul') }}</h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">
                            {{ __('messages.cocorope_deskripsi') }}
                        </p>
                        <h4 class="text-2xl font-bold text-gray-900 dark:text-white pt-2">{{ __('messages.varian') }}</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            @foreach (__('messages.cocorope_features') as $feature)
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>{{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <img src="{{ asset('/images/produk_unggulan/cocorope2.jpg') }}" alt="Cocorope"
                            class="w-full h-auto rounded-2xl shadow-2xl object-cover" style="aspect-ratio: 4/3;">
                    </div>
                </div>
            </div>

            <!-- Pendukung -->
            <div x-show="activeTab === 'pendukung'">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="space-y-5">
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('messages.pendukung_judul') }}</h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">
                            {{ __('messages.pendukung_deskripsi') }}
                        </p>
                        <h4 class="text-2xl font-bold text-gray-900 dark:text-white pt-2">{{ __('messages.produk_lainnya') }}</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            @foreach (__('messages.pendukung_features') as $feature)
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>{{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <img src="{{ asset('/images/produk_unggulan/cocomat1.jpg') }}" alt="Produk Pendukung"
                            class="w-full h-auto rounded-2xl shadow-2xl object-cover" style="aspect-ratio: 4/3;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<div class="w-full bg-white py-12 dark:bg-gray-950">
    <div id="multi-slide" data-carousel='{
           "loadingClasses": "opacity-0",
           "slidesQty": { "xs": 1, "lg": 3 },
           "autoplay": { "enabled": true, "delay": 5000, "stopOnInteraction": true }
         }' class="relative max-w-7xl mx-auto mb-10 px-4 sm:px-6 lg:px-0">

        <div class="text-center mb-16">
            <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">{{ __('messages.katalog_judul') }}<span
                    class="text-emerald-600">{{ __('messages.katalog_highlight') }} </span></h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                {{ __('messages.katalog_deskripsi') }}
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <div class="carousel h-[600px]">
            <div class="carousel-body h-full space-x-4 opacity-0">
                <div class="carousel-slide h-full">
                    <div
                        class="relative h-full bg-white border-2 border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden group">
                        <img src="{{ asset('/images/produk_unggulan/cocopeat3.PNG') }}" alt="Slide 1"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 flex items-end justify-center p-6 transition-opacity duration-300 group-hover:bg-opacity-10">
                            <span class="text-3xl font-bold text-slate-600">Cocopeat</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide h-full">
                    <div
                        class="relative h-full bg-white border-2 border-gray-100 dark:border-gray-800 rounded-lg overflow-hidden group">
                        <img src="{{ asset('/images/produk_unggulan/Cocobristle.png') }}" alt="Slide 2"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 flex items-end justify-center p-6 transition-opacity duration-300 group-hover:bg-opacity-10">
                            <span class="text-3xl font-bold text-slate-600">Cocobristle</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide h-full">
                    <div
                        class="relative h-full bg-white border-2 border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden group">
                        <img src="{{ asset('/images/produk_unggulan/Cocopot.png') }}" alt="Slide 3"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 flex items-end justify-center p-6 transition-opacity duration-300 group-hover:bg-opacity-10">
                            <span class="text-3xl font-bold text-slate-600">Cocopot</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide h-full">
                    <div
                        class="relative h-full bg-white border-2 border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden group">
                        <img src="{{ asset('/images/produk_unggulan/Cocorope0.png') }}" alt="Slide 4"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 flex items-end justify-center p-6 transition-opacity duration-300 group-hover:bg-opacity-10">
                            <span class="text-3xl font-bold text-slate-600">Cocorope</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide h-full">
                    <div
                        class="relative h-full bg-white border-2 border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden group">
                        <img src="{{ asset('/images/produk_unggulan/Cocopeat_Block.png') }}" alt="Slide 5"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 flex items-end justify-center p-6 transition-opacity duration-300 group-hover:bg-opacity-10">
                            <span class="text-3xl font-bold text-slate-600">Cocopeat Block</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide h-full">
                    <div
                        class="relative h-full bg-white border-2 border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden group">
                        <img src="{{ asset('/images/produk_unggulan/Cocomat.png') }}" alt="Slide 6"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 flex items-end justify-center p-6 transition-opacity duration-300 group-hover:bg-opacity-10">
                            <span class="text-3xl font-bold text-slate-600">Cocomat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <button type="button"
            class="absolute left-4 top-1/2 -translate-y-1/2 carousel-prev start-5 max-sm:start-3 carousel-disabled:opacity-50 size-9.5 bg-white/50 hover:bg-gray-100 border border-gray-200 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
            <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">{{ __('messages.prev') }}</span>
        </button>
        <button type="button"
            class="absolute top-1/2 -translate-y-1/2 carousel-next end-5 max-sm:end-3 carousel-disabled:opacity-50 size-9.5 bg-white/50 hover:bg-gray-100 border border-gray-200 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
            <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">{{ __('messages.next') }}</span>
        </button>
    </div>

    <div class="mt-16 text-center">
        <a href="{{ route('product') }}"
            class="group inline-flex items-center px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-emerald-500/30">
            <span class="font-semibold tracking-wide">{{ __('messages.katalog_button') }}</span>
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
            </svg>
        </a>
    </div>
</div>


<section id="testimoni" class="py-20 bg-gray-50 dark:bg-gray-800 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 dark:opacity-10">
        <div class="absolute top-0 left-0 w-full h-full"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"%2334d399\" fill-opacity=\"0.2\" fill-rule=\"evenodd\"%3E%3Cpath d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                    </path>
                </svg>
            </div>
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ __('messages.testimoni_judul') }} <span class="text-emerald-600">{{ __('messages.testimoni_highlight') }}</span>
            </h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                {{ __('messages.testimoni_deskripsi') }}
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <div id="testi-wrapper" class="relative overflow-hidden">
            <div id="testi-track" class="flex transition-transform duration-500 ease-out">

                <!-- Testimoni 1 -->
                <div
                    class="min-w-full testimonial p-8 bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-lg text-gray-700 dark:text-gray-200 leading-relaxed italic">
                        {{ __('messages.testimoni_1_isi') }}
                    </p>
                    <div class="flex items-center gap-4 mt-6">
                        <div class="relative">
                            <img src="{{ $client1Img ?? 'https://picsum.photos/60/60?random=2' }}" alt="client1"
                                class="w-14 h-14 rounded-full object-cover border-2 border-emerald-200 dark:border-emerald-700"
                                loading="lazy">
                            <div
                                class="absolute -bottom-1 -right-1 w-5 h-5 bg-emerald-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 dark:text-white text-lg">
                                {{ __('messages.testimoni_1_nama') }}
                            </div>
                            <div class="text-sm text-emerald-600 dark:text-emerald-400">
                                {{ __('messages.testimoni_1_jabatan') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div
                    class="min-w-full testimonial p-8 bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-lg text-gray-700 dark:text-gray-200 leading-relaxed italic">
                        {{ __('messages.testimoni_2_isi') }}
                    </p>
                    <div class="flex items-center gap-4 mt-6">
                        <div class="relative">
                            <img src="{{ $client2Img ?? 'https://picsum.photos/60/60?random=3' }}" alt="client2"
                                class="w-14 h-14 rounded-full object-cover border-2 border-amber-200 dark:border-amber-700"
                                loading="lazy">
                            <div
                                class="absolute -bottom-1 -right-1 w-5 h-5 bg-amber-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 dark:text-white text-lg">
                                {{ __('messages.testimoni_2_nama') }}
                            </div>
                            <div class="text-sm text-amber-600 dark:text-amber-400">
                                {{ __('messages.testimoni_2_jabatan') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button id="testi-prev" aria-label="Previous testimonial"
                class="absolute top-1/2 -translate-y-1/2 left-4 bg-white/80 hover:bg-white dark:bg-gray-700/80 dark:hover:bg-gray-700 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-600 z-20">
                <svg class="w-3 h-3 text-gray-700 dark:text-white" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button id="testi-next" aria-label="Next testimonial"
                class="absolute top-1/2 -translate-y-1/2 right-4 bg-white/80 hover:bg-white dark:bg-gray-700/80 dark:hover:bg-gray-700 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-600 z-20">
                <svg class="w-3 h-3 text-gray-700 dark:text-white" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</section>


<!-- Premium Product & QC Gallery -->
<section id="galeri" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
            </div>
                <div class="text-center mb-12">
                    <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                        {{ __('messages.galeri_judul') }}
                        <span class="text-emerald-600">{{ __('messages.galeri_highlight') }}</span>
                    </h3>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        {{ __('messages.galeri_deskripsi') }}
                    </p>
                </div>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (1).jpg') }}" alt="g1"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (8).jpg') }}" alt="g2"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (9).JPG') }}" alt="g3"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (10).JPG') }}" alt="g4"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (11).JPG') }}" alt="g1"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (12).JPG') }}" alt="g2"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (13).JPG') }}" alt="g3"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="{{ asset('/images/galeri/galeri (14).jpg') }}" alt="g4"
                    class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy">
                {{-- <div
                    class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div> --}}
            </div>
        </div>
    </div>
</section>




<!-- Premium FAQ Section -->
<section id="faq" class="py-20 bg-white dark:bg-gray-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute -top-20 -right-20 w-40 h-40 bg-emerald-100 dark:bg-emerald-900/20 rounded-full blur-xl"></div>
    <div class="absolute -bottom-20 -left-20 w-60 h-60 bg-amber-100 dark:bg-amber-900/20 rounded-full blur-xl"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">{!! __('messages.faq_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                {{ __('messages.faq_description') }}
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <!-- FAQ Accordion -->
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div
                class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 overflow-hidden">
                <button
                    class="faq-question w-full flex justify-between items-center p-6 text-left focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-xl">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_question_1') }}</span>
                    <svg class="w-6 h-6 text-emerald-600 transform group-[.active]:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 pb-6 pt-2 border-t border-gray-100 dark:border-gray-700">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-justify">
                            {{ __('messages.faq_answer_1_part1') }}
                        </p>
                        <p class="mt-3 text-gray-600 dark:text-gray-300 text-justify">
                            {{ __('messages.faq_answer_1_part2') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div
                class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 overflow-hidden">
                <button
                    class="faq-question w-full flex justify-between items-center p-6 text-left focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-xl">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_question_2') }}</span>
                    <svg class="w-6 h-6 text-emerald-600 transform group-[.active]:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 pb-6 pt-2 border-t border-gray-100 dark:border-gray-700">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ __('messages.faq_answer_2_lead') }}
                        </p>

                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-emerald-50 dark:bg-emerald-900/20 rounded-lg p-4">
                                <h4 class="font-bold text-emerald-700 dark:text-emerald-400 mb-2">{{ __('messages.faq_answer_2_block_title') }}</h4>
                                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 mr-2 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ __('messages.faq_answer_2_block_point1') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 mr-2 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ __('messages.faq_answer_2_block_point2') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 mr-2 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ __('messages.faq_answer_2_block_point3') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-amber-50 dark:bg-amber-900/20 rounded-lg p-4">
                                <h4 class="font-bold text-amber-700 dark:text-amber-400 mb-2">{{ __('messages.faq_answer_2_loose_title') }}</h4>
                                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-amber-500 mt-0.5 mr-2 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ __('messages.faq_answer_2_loose_point1') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-amber-500 mt-0.5 mr-2 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ __('messages.faq_answer_2_loose_point2') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-amber-500 mt-0.5 mr-2 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ __('messages.faq_answer_2_loose_point3') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div
                class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 overflow-hidden">
                <button
                    class="faq-question w-full flex justify-between items-center p-6 text-left focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-xl">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_question_3') }}</span>
                    <svg class="w-6 h-6 text-emerald-600 transform group-[.active]:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 pb-6 pt-2 border-t border-gray-100 dark:border-gray-700">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ __('messages.faq_answer_3_lead') }}
                        </p>
                        <ul class="mt-3 space-y-2 text-gray-600 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>{!! __('messages.faq_answer_3_point1') !!}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>{!! __('messages.faq_answer_3_point2') !!}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>{!! __('messages.faq_answer_3_point3') !!}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>{!! __('messages.faq_answer_3_point4') !!}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>{!! __('messages.faq_answer_3_point5') !!}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div
                class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 overflow-hidden">
                <button
                    class="faq-question w-full flex justify-between items-center p-6 text-left focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-xl">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_question_4') }}</span>
                    <svg class="w-6 h-6 text-emerald-600 transform group-[.active]:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 pb-6 pt-2 border-t border-gray-100 dark:border-gray-700">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-justify">
                            {!! __('messages.faq_answer_4_part1') !!}
                        </p>

                        <div class="mt-4">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-3">{{ __('messages.faq_answer_4_program_title') }}</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start p-4 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_answer_4_program1_title') }}</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">{{ __('messages.faq_answer_4_program1_desc') }}</p>
                                    </div>
                                </div>

                                <div class="flex items-start p-4 bg-amber-50 dark:bg-amber-900/20 rounded-lg">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_answer_4_program2_title') }}</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">{{ __('messages.faq_answer_4_program2_desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mt-4 text-gray-600 dark:text-gray-300">
                            {{ __('messages.faq_answer_4_part2') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div
                class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 overflow-hidden">
                <button
                    class="faq-question w-full flex justify-between items-center p-6 text-left focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-xl">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_question_5') }}</span>
                    <svg class="w-6 h-6 text-emerald-600 transform group-[.active]:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 pb-6 pt-2 border-t border-gray-100 dark:border-gray-700">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ __('messages.faq_answer_5_lead') }}
                        </p>

                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">{{ __('messages.faq_answer_5_partnership_title') }}</h4>
                                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_5_partnership1') }}
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_5_partnership2') }}
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_5_partnership3') }}
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_5_partnership4') }}
                                    </li>
                                </ul>
                            </div>

                            <div class="p-4 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">{{ __('messages.faq_answer_5_process_title') }}</h4>
                                <ol class="text-sm text-gray-600 dark:text-gray-300 space-y-2 list-decimal list-inside">
                                    <li>{{ __('messages.faq_answer_5_step1') }}</li>
                                    <li>{{ __('messages.faq_answer_5_step2') }}</li>
                                    <li>{{ __('messages.faq_answer_5_step3') }}</li>
                                    <li>{{ __('messages.faq_answer_5_step4') }}</li>
                                    <li>{{ __('messages.faq_answer_5_step5') }}</li>
                                </ol>
                            </div>
                        </div>

                        <div class="mt-4 p-4 bg-amber-50 dark:bg-amber-900/20 rounded-lg">
                            <p class="text-sm text-gray-600 dark:text-gray-300">
                                {!! __('messages.faq_answer_5_contact') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div
                class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 overflow-hidden">
                <button
                    class="faq-question w-full flex justify-between items-center p-6 text-left focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-xl">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.faq_question_6') }}</span>
                    <svg class="w-6 h-6 text-emerald-600 transform group-[.active]:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 pb-6 pt-2 border-t border-gray-100 dark:border-gray-700">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ __('messages.faq_answer_6_lead') }}
                        </p>

                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">{{ __('messages.faq_answer_6_agriculture_title') }}</h4>
                                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_6_agriculture1') }}
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_6_agriculture2') }}
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_6_agriculture3') }}
                                    </li>
                                </ul>
                            </div>

                            <div class="p-4 bg-amber-50 dark:bg-amber-900/20 rounded-lg">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">{{ __('messages.faq_answer_6_household_title') }}</h4>
                                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-amber-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_6_household1') }}
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-amber-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_6_household2') }}
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-amber-500 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ __('messages.faq_answer_6_household3') }}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p class="mt-4 text-gray-600 dark:text-gray-300">
                            {{ __('messages.faq_answer_6_conclusion') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-12 text-center">
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                {{ __('messages.faq_cta_text') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/628985531212" target="_blank"
                    class="inline-flex items-center px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl border border-emerald-500/30">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.189-3.553-8.436" />
                    </svg>
                    {{ __('messages.faq_cta_whatsapp') }}
                </a>
                <a href="mailto:bincoranindofarm@gmail.com"
                    class="inline-flex items-center px-6 py-3 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-900 dark:text-white font-medium rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl border border-gray-200 dark:border-gray-600">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    {{ __('messages.faq_cta_email') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        /* ENHANCED HERO CAROUSEL */
        const track = document.getElementById('carousel-track');
        const slides = Array.from(track.children);
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        const indicatorsWrapper = document.getElementById('carousel-indicators');
        const total = slides.length;
        let current = 0;
        slides.forEach(slide => slide.style.minWidth = '100%');

        function updateSlidePosition() {
            track.style.transform = `translateX(-${current * 100}%)`;
            updateIndicators(current);
        }

        function updateIndicators(index) {
            const dots = indicatorsWrapper.querySelectorAll('button');
            dots.forEach((d, i) => {
                d.classList.toggle('scale-125', i === index);
                d.classList.toggle('bg-white', i === index);
                d.classList.toggle('bg-white/50', i !== index);
            });
        }

        function nextSlide() {
            current = (current + 1) % total;
            updateSlidePosition();
        }

        function prevSlide() {
            current = (current - 1 + total) % total;
            updateSlidePosition();
        }

        function goToSlide(i) {
            current = i;
            updateSlidePosition();
        }

        function createIndicators() {
            indicatorsWrapper.innerHTML = '';
            for (let i = 0; i < total; i++) {
                const dot = document.createElement('button');
                dot.className = 'w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 focus:outline-none';
                if (i === 0) dot.classList.add('scale-125', 'bg-white');
                dot.addEventListener('click', () => goToSlide(i));
                indicatorsWrapper.appendChild(dot);
            }
        }

        let startX = 0;
        let isDragging = false;
        track.addEventListener('mousedown', (e) => { isDragging = true; startX = e.pageX; });
        track.addEventListener('mouseup', (e) => { if (!isDragging) return; handleSwipe(e.pageX - startX); isDragging = false; });
        track.addEventListener('mouseleave', () => { isDragging = false; });
        track.addEventListener('touchstart', (e) => { isDragging = true; startX = e.touches[0].clientX; });
        track.addEventListener('touchend', (e) => { if (!isDragging) return; handleSwipe(e.changedTouches[0].clientX - startX); isDragging = false; });

        function handleSwipe(distance) {
            const threshold = 80;
            if (distance > threshold) prevSlide();
            else if (distance < -threshold) nextSlide();
        }

        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        createIndicators();
        updateSlidePosition();

        let autoplay = setInterval(nextSlide, 6000);
        track.addEventListener('mouseenter', () => clearInterval(autoplay));
        track.addEventListener('mouseleave', () => autoplay = setInterval(nextSlide, 6000));

        /* ENHANCED COUNTERS */
        const counters = document.querySelectorAll('.counter');
        const speed = 120;
        counters.forEach(counter => {
            const runCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = Math.ceil(target / speed);
                if (count < target) {
                    counter.innerText = Math.min(count + inc, target);
                    requestAnimationFrame(runCounter);
                } else {
                    counter.innerText = target;
                }
            };

            const obs = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        runCounter();
                        obs.unobserve(counter);
                    }
                });
            }, { threshold: 0.4 });
            obs.observe(counter);
        });

        /* ENHANCED TESTIMONIAL SLIDER */
        const testiTrack = document.getElementById('testi-track');
        const testiItems = Array.from(testiTrack.children);
        const testiPrev = document.getElementById('testi-prev');
        const testiNext = document.getElementById('testi-next');
        let testiCurrent = 0;
        testiItems.forEach(item => item.style.minWidth = '100%');

        function updateTesti() {
            testiTrack.style.transform = `translateX(-${testiCurrent * 100}%)`;
        }

        testiPrev.addEventListener('click', () => {
            testiCurrent = (testiCurrent - 1 + testiItems.length) % testiItems.length;
            updateTesti();
        });

        testiNext.addEventListener('click', () => {
            testiCurrent = (testiCurrent + 1) % testiItems.length;
            updateTesti();
        });

        let testiAuto = setInterval(() => { testiNext.click(); }, 8000);
        document.getElementById('testi-wrapper').addEventListener('mouseenter', () => clearInterval(testiAuto));
        document.getElementById('testi-wrapper').addEventListener('mouseleave', () => testiAuto = setInterval(() => { testiNext.click(); }, 8000));

        /* FAQ ACCORDION FUNCTIONALITY */
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', function () {
                const parent = this.parentElement;
                const answer = this.nextElementSibling;

                // Toggle active class
                parent.classList.toggle('active');

                // Toggle answer visibility
                if (parent.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = '0';
                }

                // Close other open FAQs
                faqQuestions.forEach(otherQuestion => {
                    if (otherQuestion !== this) {
                        const otherParent = otherQuestion.parentElement;
                        const otherAnswer = otherQuestion.nextElementSibling;

                        if (otherParent.classList.contains('active')) {
                            otherParent.classList.remove('active');
                            otherAnswer.style.maxHeight = '0';
                        }
                    }
                });
            });
        });

        /* SCROLL ANIMATIONS */
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('section, .products-section').forEach((section) => {
            observer.observe(section);
        });

    });
</script>

<style>
    /* Custom Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Enhanced hover effects */
    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
    }

    /* Consistent focus styles */
    button:focus,
    a:focus,
    input:focus,
    select:focus {
        outline: 2px solid #10b981;
        outline-offset: 2px;
    }

    /* Dark mode transitions */
    * {
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    /* FAQ Accordion Transitions */
    .faq-answer {
        transition: max-height 0.3s ease-out;
    }
</style>
@endpush
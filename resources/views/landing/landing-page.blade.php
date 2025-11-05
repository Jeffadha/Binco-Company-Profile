@extends('layouts.layouts-landing')

@section('title', 'Home')

@section('content')

@php
    // helper kecil: jika file ada di public/images pakai asset(), jika tidak gunakan placeholder dari picsum
    $exists = '\Illuminate\Support\Facades\File' . '::exists';
    // Kenapa memilih kami image
    $whyPath = public_path('images/why-choose.jpg');
    $whyImg = \Illuminate\Support\Facades\File::exists($whyPath) ? asset('images/why-choose.jpg') : 'https://picsum.photos/800/500?random=1';

    // Testimoni images
    $client1Path = public_path('images/client1.jpg');
    $client1Img = \Illuminate\Support\Facades\File::exists($client1Path) ? asset('images/client1.jpg') : 'https://picsum.photos/60/60?random=2';

    $client2Path = public_path('images/client2.jpg');
    $client2Img = \Illuminate\Support\Facades\File::exists($client2Path) ? asset('images/client2.jpg') : 'https://picsum.photos/60/60?random=3';

    // Gallery images
    $gal1Path = public_path('images/gal1.jpg');
    $gal2Path = public_path('images/gal2.jpg');
    $gal3Path = public_path('images/gal3.jpg');
    $gal4Path = public_path('images/gal4.jpg');

    $gal1Img = \Illuminate\Support\Facades\File::exists($gal1Path) ? asset('images/gal1.jpg') : 'https://picsum.photos/600/400?random=11';
    $gal2Img = \Illuminate\Support\Facades\File::exists($gal2Path) ? asset('images/gal2.jpg') : 'https://picsum.photos/600/400?random=12';
    $gal3Img = \Illuminate\Support\Facades\File::exists($gal3Path) ? asset('images/gal3.jpg') : 'https://picsum.photos/600/400?random=13';
    $gal4Img = \Illuminate\Support\Facades\File::exists($gal4Path) ? asset('images/gal4.jpg') : 'https://picsum.photos/600/400?random=14';
@endphp

<!-- Premium Hero Section -->
<div id="hero-section" class="relative w-full h-screen overflow-hidden pt-0 bg-gray-900">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/30 via-gray-900 to-slate-900 z-0"></div>
    
    <!-- Subtle Pattern -->
    <div class="absolute inset-0 opacity-10 z-0">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.05\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"1\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="w-full h-full overflow-hidden relative z-10">
        <div id="carousel-track" class="flex w-full h-full transition-transform duration-700 ease-out">
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('images/img1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1" loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-l from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('images/img2.jpg') }}" class="w-full h-full object-cover" alt="Slide 2" loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full relative">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-gray-900/40 z-10"></div>
                <img src="{{ asset('images/img3.jpg') }}" class="w-full h-full object-cover" alt="Slide 3" loading="lazy">
            </div>
        </div>

        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 z-30 h-full">
            <!-- Premium Badge -->
            <div class="mb-6 px-5 py-2.5 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full inline-flex items-center shadow-lg">
                <span class="text-white text-sm font-medium tracking-wider">PREMIUM AGRIBUSINESS SOLUTIONS</span>
            </div>
            
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                <span class="block">Solusi Nutrisi</span>
                <span class="block text-emerald-400 mt-2">& Agribisnis Unggul</span>
            </h1>
            
            <!-- Subtle underline -->
            <div class="w-24 h-1 bg-emerald-500 rounded-full mb-6 mx-auto"></div>
            
            <p class="mt-4 max-w-3xl text-xl text-gray-200 font-light leading-relaxed">
                PT Binco Indofarm — <span class="font-semibold text-emerald-300">anak perusahaan BINCO NUSANTARA</span> — menghadirkan 
                produk pertanian premium dengan standar tertinggi, didukung R&D mutakhir.
            </p>
            
            <div class="mt-8 flex gap-4 flex-wrap justify-center">
                <a href="#produk" class="group inline-flex items-center px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-emerald-500/30">
                    <span class="font-semibold tracking-wide">Lihat Produk</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
                <a href="#siapa-kami" class="group inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 border border-white/30 text-white rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <span class="font-semibold tracking-wide">Pelajari Kami</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button id="carousel-prev" aria-label="Previous"
            class="absolute left-6 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-12 h-12 rounded-full
        bg-black/40 hover:bg-black/70 backdrop-blur-sm text-white shadow-lg transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="carousel-next" aria-label="Next"
            class="absolute right-6 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-12 h-12 rounded-full
        bg-black/40 hover:bg-black/70 backdrop-blur-sm text-white shadow-lg transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div id="carousel-indicators" class="absolute bottom-8 left-1/2 -translate-x-1/2 z-40 flex gap-3"></div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-40 flex flex-col items-center">
            <span class="text-white text-sm mb-2 opacity-70">Scroll</span>
            <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
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
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Tentang <span class="text-emerald-600">Perusahaan Kami</span></h2>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white leading-tight">PT Binco Indofarm: <span class="text-emerald-600">Inovasi Agribisnis</span> untuk Masa Depan</h3>
                
                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    Sebagai anak perusahaan <span class="font-semibold text-emerald-700 dark:text-emerald-400">BINCO NUSANTARA</span>, 
                    kami menghadirkan solusi agribisnis komprehensif — dari benih unggul, pupuk formulasi canggih, hingga layanan pascapanen terintegrasi.
                </p>

                <!-- Enhanced Feature List -->
                <div class="grid grid-cols-1 gap-4 mt-6">
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-800 shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Pengalaman Industri</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">Lebih dari dua dekade mengembangkan solusi pertanian terdepan</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-800 shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Tim R&D & QC Profesional</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">Inovasi berbasis penelitian dengan standar kualitas tertinggi</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-800 shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Jaringan Distribusi Luas</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">Akses produk kami tersedia di seluruh Indonesia dengan dukungan logistik terintegrasi</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <!-- Video Container -->
                <div class="relative rounded-xl overflow-hidden shadow-lg group">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/uOZokZWQWy0" title="Binco Indofarm Video" allowfullscreen class="w-full h-full"></iframe>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                </div>

                <!-- Enhanced Stats -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white counter" data-target="1998">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">Tahun Berdiri</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white counter" data-target="125">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">Proyek</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white counter" data-target="300">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">Klien</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white counter" data-target="45">0</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">Kolaborasi</div>
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
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"%2334d399\" fill-opacity=\"0.4\" fill-rule=\"evenodd\"%3E%3Ccircle cx=\"3\" cy=\"3\" r=\"3\"/%3E%3Ccircle cx=\"13\" cy=\"13\" r=\"3\"/%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <!-- Section Header -->
                <div class="mb-2">
                    <span class="text-emerald-600 font-semibold">MENGAPA MEMILIH KAMI</span>
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mt-2">Keunggulan <span class="text-emerald-600">Solusi Agribisnis</span> Kami</h3>
                    <div class="w-20 h-1 bg-emerald-500 rounded-full mt-4"></div>
                </div>
                
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                    Kami menghadirkan pendekatan terintegrasi yang menggabungkan penelitian mutakhir, kontrol kualitas laboratorium, 
                    dan dukungan teknis lapangan untuk memastikan produk yang konsisten, aman, dan efektif bagi mitra kami.
                </p>
                
                <!-- Enhanced Feature List -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-emerald-600 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-lg">Standar QC Ketat & Uji Laboratorium</h4>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">Setiap produk melalui proses quality control multi-tahap dengan teknologi laboratorium modern untuk memastikan kualitas terbaik.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-amber-600 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-lg">Solusi Terpersonalisasi</h4>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">Kami menyediakan solusi yang dapat disesuaikan dengan kebutuhan spesifik berbagai komoditas dan kondisi geografis.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-emerald-600 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-lg">Dukungan Teknis & Pelatihan</h4>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">Tim ahli kami memberikan pendampingan teknis dan program pelatihan untuk memastikan keberhasilan implementasi di lapangan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2 relative">
                <!-- Floating Image with Decorative Elements -->
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-full h-full bg-emerald-200 dark:bg-emerald-900/30 rounded-2xl transform rotate-3 z-0"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-xl z-10 transform hover:-translate-y-2 transition-transform duration-500 border border-gray-200 dark:border-gray-700">
                        <img src="{{ $whyImg }}" alt="Kenapa memilih kami" class="w-full h-96 object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute top-6 right-6 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-full px-4 py-2 shadow-lg">
                            <span class="text-emerald-700 dark:text-emerald-400 font-bold text-sm">QUALITY FIRST</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Products Section -->
<div id="featured-products" class="products-section py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Premium Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Produk <span class="text-emerald-600">Unggulan Kami</span></h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Temukan solusi agribisnis terbaik kami yang dirancang untuk meningkatkan produktivitas dan hasil panen Anda
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>
        
        <!-- Enhanced Filter Form -->
        <div class="mb-12 bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-100 dark:border-gray-700">
            <form id="filter-form" action="{{ route('home') }}" method="GET"
                class="flex flex-col md:flex-row gap-4 items-center">
                <div class="w-full md:flex-1">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari produk..."
                            class="w-full px-4 py-3 pl-12 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:text-white transition-all duration-300" />
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-auto">
                    <select name="category"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:text-white transition-all duration-300">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category')==$category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full md:w-auto">
                    <select name="sort"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:text-white transition-all duration-300">
                        <option value="newest" {{ request('sort')=='newest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="price_low" {{ request('sort')=='price_low' ? 'selected' : '' }}>Harga: Rendah ke Tinggi</option>
                        <option value="price_high" {{ request('sort')=='price_high' ? 'selected' : '' }}>Harga: Tinggi ke Rendah</option>
                    </select>
                </div>
                <div class="w-full md:w-auto">
                    <button type="submit"
                        class="w-full md:w-auto px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center gap-2 border border-emerald-500/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                        </svg>
                        Terapkan Filter
                    </button>
                </div>
            </form>
        </div>

        <!-- Products Grid -->
        <div id="products-container">
            @include('partials.product-user', ['products' => $products])
        </div>
    </div>
</div>

<!-- Premium Testimonials -->
<section id="testimoni" class="py-20 bg-gray-50 dark:bg-gray-800 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5 dark:opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"%2334d399\" fill-opacity=\"0.2\" fill-rule=\"evenodd\"%3E%3Cpath d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
            </div>
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Apa Kata <span class="text-emerald-600">Klien Kami</span></h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Dengarkan pengalaman langsung dari mitra dan pelanggan yang telah merasakan manfaat solusi agribisnis kami
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <div id="testi-wrapper" class="relative">
            <div id="testi-track" class="flex gap-8 transition-transform duration-500 ease-out">
                <!-- Testimonial 1 -->
                <div class="min-w-full testimonial p-8 bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                        </svg>
                    </div>
                    <p class="text-lg text-gray-700 dark:text-gray-200 leading-relaxed italic">"Produk benih dari Binco Indofarm telah meningkatkan hasil panen kami secara signifikan. Dukungan teknis yang responsif dan solutif membuat kami semakin percaya dengan kualitas layanan mereka."</p>
                    <div class="flex items-center gap-4 mt-6">
                        <div class="relative">
                            <img src="{{ $client1Img }}" alt="client1" class="w-14 h-14 rounded-full object-cover border-2 border-emerald-200 dark:border-emerald-700" loading="lazy">
                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-emerald-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 dark:text-white text-lg">Pak Santoso</div>
                            <div class="text-sm text-emerald-600 dark:text-emerald-400">Petani Tembakau, Grobogan</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="min-w-full testimonial p-8 bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                        </svg>
                    </div>
                    <p class="text-lg text-gray-700 dark:text-gray-200 leading-relaxed italic">"Kerjasama distribusi dengan Binco Indofarm berjalan sangat lancar. Stok selalu tersedia tepat waktu dan kualitas produk terjaga konsisten. Mereka adalah mitra bisnis yang andal dan profesional."</p>
                    <div class="flex items-center gap-4 mt-6">
                        <div class="relative">
                            <img src="{{ $client2Img }}" alt="client2" class="w-14 h-14 rounded-full object-cover border-2 border-amber-200 dark:border-amber-700" loading="lazy">
                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-amber-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 dark:text-white text-lg">PT AgroLog Indonesia</div>
                            <div class="text-sm text-amber-600 dark:text-amber-400">Distributor Utama</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Navigation -->
            <button id="testi-prev" aria-label="Previous testimonial" 
                class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white/80 hover:bg-white dark:bg-gray-700/80 dark:hover:bg-gray-700 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-600">
                <svg class="w-6 h-6 text-gray-700 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="testi-next" aria-label="Next testimonial" 
                class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white/80 hover:bg-white dark:bg-gray-700/80 dark:hover:bg-gray-700 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-600">
                <svg class="w-6 h-6 text-gray-700 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Galeri <span class="text-emerald-600">Produk & QC</span></h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Dokumentasi proses produksi, quality control, dan produk jadi yang menjamin kualitas terbaik untuk Anda
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <img src="{{ $gal1Img }}" alt="g1" class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                <div class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Proses Produksi</h4>
                    <p class="text-sm opacity-90">Teknologi modern untuk hasil terbaik</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <img src="{{ $gal2Img }}" alt="g2" class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                <div class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Quality Control</h4>
                    <p class="text-sm opacity-90">Standar ketat untuk kualitas premium</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <img src="{{ $gal3Img }}" alt="g3" class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                <div class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Produk Jadi</h4>
                    <p class="text-sm opacity-90">Siap untuk distribusi</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <img src="{{ $gal4Img }}" alt="g4" class="w-full h-60 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                <div class="absolute bottom-0 left-0 right-0 p-4 text-white z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-bold text-lg">Tim Ahli</h4>
                    <p class="text-sm opacity-90">Profesional berpengalaman</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Newsletter Section -->
<div id="newsletter-section" class="relative py-20 bg-gray-900 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"2\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-10 left-10 w-32 h-32 bg-emerald-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-40 h-40 bg-amber-500/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-emerald-600 text-white mb-6 shadow-2xl">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-white mb-4">Tetap Terhubung dengan Kami</h2>
            <p class="text-xl text-emerald-100 mb-8 max-w-2xl mx-auto">
                Dapatkan update terbaru tentang produk inovatif, penawaran spesial, dan insight agribisnis langsung ke inbox Anda
            </p>
            
            <!-- Enhanced Form -->
            <form id="newsletter-form" class="max-w-2xl mx-auto bg-white/10 backdrop-blur-sm rounded-xl p-2 border border-white/20">
                <div class="flex flex-col sm:flex-row gap-2">
                    <input type="email" name="email" placeholder="Masukkan email Anda"
                        class="flex-1 px-6 py-4 rounded-lg border-0 bg-white/5 text-white placeholder-emerald-200 focus:ring-2 focus:ring-emerald-500 focus:bg-white/10 transition-all duration-300">
                    <button type="submit"
                        class="px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center gap-2 border border-emerald-500/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                        Berlangganan
                    </button>
                </div>
            </form>
            
            <p class="text-emerald-200/70 text-sm mt-4">
                Kami menghormati privasi Anda. Tidak ada spam, janji!
            </p>
        </div>
    </div>
</div>

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
        }, {threshold: 0.4});
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

    // Add scroll animations
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
button:focus, a:focus, input:focus, select:focus {
    outline: 2px solid #10b981;
    outline-offset: 2px;
}

/* Dark mode transitions */
* {
    transition: background-color 0.3s ease, border-color 0.3s ease;
}
</style>
@endpush
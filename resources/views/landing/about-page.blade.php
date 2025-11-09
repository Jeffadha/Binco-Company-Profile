@extends('layouts.layouts-landing')

@section('title', 'About Our Company')

@section('content')

<section class="py-20 bg-gray-50 dark:bg-gray-800 mt-12" x-data="{ inView: false }"
    x-init="setTimeout(() => inView = true, 500)">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-16 text-center">
            <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }"
                class="transition-all duration-1000 ease-out">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
                    Tentang Kami
                </h2>
                <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
                {{-- <p class="mx-auto text-xl text-gray-600 dark:text-gray-300 max-w-2xl">
                    We're passionate about creating innovative solutions that help businesses thrive in the
                    digital
                    age.
                </p> --}}
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Column -->
            <div class="space-y-8">
                <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }"
                    class="transition-all duration-1000 ease-out delay-200">
                    <h3 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">
                        Sekilas Tentang PT Binco Ran Indofarm
                    </h3>
                    <p class="mb-6 text-lg text-gray-600 leading-relaxed dark:text-gray-300 text-justify">
                        PT Binco Ran Indofarm adalah perusahaan agribisnis modern yang berfokus
                        pada pengolahan sabut kelapa dan penyediaan media tanam alami untuk mendukung
                        pertanian berkelanjutan. Kami mengembangkan berbagai berbagai produk unggulan
                        berbasis serabut kelapa seperti cocopeat, cocopot, dan cocorope, yang digunakan secara
                        luas di sektor pertanian, florikultura, dan industri.
                    </p>
                    <p class="mb-6 text-lg text-gray-600 leading-relaxed dark:text-gray-300 text-justify">
                        Selain itu, kami juga memproduksi produk turunan alami lainnya seperti
                        cocomat, sikat, kuas, dan kemoceng teleskopik berbahan cocobristle, serta
                        menyediakan media tanam tambahan berupa sekam bakar dan kohe (pupuk kandang
                        fermentasi).
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed dark:text-gray-300 text-justify">
                        Didukung dengan fasilitas produksi modern, sistem greenhouse pintar, dan
                        program wisata edukatif, PT Binco Ran Indofarm berkomitmen menghadirkan solusi
                        pertanian yang inovatif, ramah lingkungan, dan bernilai global.
                    </p>
                </div>

                {{-- <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }"
                    class="transition-all duration-1000 ease-out delay-300 space-y-4">
                    <!-- Feature Items -->
                    @php
                    $features = [
                    ['title' => 'Expert Team', 'desc' => '50+ skilled professionals with years of experience'],
                    ['title' => 'Global Reach', 'desc' => 'Serving clients across 25+ countries worldwide'],
                    ['title' => 'Innovation Focus', 'desc' => 'Always adopting the latest technologies and
                    methodologies'],
                    ];
                    @endphp

                    @foreach ($features as $feature)
                    <div class="flex items-start space-x-4 rtl:space-x-reverse">
                        <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-blue-600">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $feature['title']
                                }}
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div> --}}
            </div>

            <!-- Image Column -->
            <div class="relative">
                <div :class="{ 'opacity-100 scale-100': inView, 'opacity-0 scale-95': !inView }"
                    class="transition-all duration-1000 ease-out delay-300">
                    <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                        <img src="{{ asset('/images/about/img2.jpg') }}" alt="Our team at work"
                            class="object-cover w-full h-[384px]" />
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="backdrop-blur-sm p-6 rounded-xl bg-white shadow-lg dark:bg-gray-800">
                                <div class="grid grid-cols-3 gap-4 text-center">
                                    <div>
                                        <div class="text-2xl font-bold text-gray-900 dark:text-white">5+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Years</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-900 dark:text-white">50+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Team</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-900 dark:text-white">25+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Countries</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-20 bg-white dark:bg-gray-900" x-data="{ inView: false }"
    x-init="setTimeout(() => inView = true, 500)">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-16 text-center">
            <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }"
                class="transition-all duration-1000 ease-out">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
                    Visi & Misi
                </h2>
                {{-- <p class="mx-auto text-xl text-gray-600 dark:text-gray-300 max-w-2xl">
                    Panduan kami dalam bertindak dan berinovasi untuk masa depan agribisnis.
                </p> --}}
                <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <div :class="{ 'opacity-100 translate-x-0': inView, 'opacity-0 -translate-x-12': !inView }"
                class="transition-all duration-1000 ease-out delay-200 p-8 bg-gray-50 dark:bg-gray-800 rounded-3xl shadow-xl h-full">
                <div class="flex items-center justify-start gap-4 mb-6">
                    <div
                        class="flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white shadow-lg">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white">
                        Visi
                    </h3>
                </div>
                <p class="text-lg text-gray-600 leading-relaxed dark:text-gray-300 text-justify">
                    Menjadi Perusahaan terdepan dalam pengolahan sabut kelapa dan penyedia
                    media tanam berkelanjutan yang menginspirasi pertanian dan mendukung ekonomi
                    hijau di Indonesia
                </p>
            </div>

            <div :class="{ 'opacity-100 translate-x-0': inView, 'opacity-0 translate-x-12': !inView }"
                class="transition-all duration-1000 ease-out delay-400 p-8 bg-gray-50 dark:bg-gray-800 rounded-3xl shadow-xl h-full">

                <div class="flex items-center justify-start gap-4 mb-6">
                    <div
                        class="flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white shadow-lg">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21v-4m0 0V5a2 2 0 012-2h7l-1 4h-6v8m0-8h6l1-4h3l-1 4h-3m-6 8v4m0 0h12v-4m0 0H3" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white">
                        Misi
                    </h3>
                </div>
                <ul class="space-y-5">
                    <li class="flex items-start space-x-3 rtl:space-x-reverse">
                        <div class="flex-shrink-0 pt-1">
                            <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">Mengolah limbah kelapa menjadi
                            produk bernilai tinggi seperti cocopeat, cocopot,
                            dan cocorope berkualitas ekspor.</p>
                    </li>
                    <li class="flex items-start space-x-3 rtl:space-x-reverse">
                        <div class="flex-shrink-0 pt-1">
                            <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">Menyediakan media tanam alami
                            (cocopeat, sekam, kohe) untuk mendukung sistem
                            pertanian ramah lingkungan dan efisien.</p>
                    </li>
                    <li class="flex items-start space-x-3 rtl:space-x-reverse">
                        <div class="flex-shrink-0 pt-1">
                            <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">Mengembangkan <strong>inovasi
                                pertanian
                                berbasis teknologi</strong> melalui Greenhouse Smart
                            Plant sebagai pusat riset dan edukasi.</p>
                    </li>

                    <li class="flex items-start space-x-3 rtl:space-x-reverse">
                        <div class="flex-shrink-0 pt-1">
                            <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">Mendorong <strong>pariwisata
                                edukatif
                                pertanian (agro-education)</strong> melalui program
                            Wisata Petik Melon dan pelatihan open farm.</p>
                    </li>

                    <li class="flex items-start space-x-3 rtl:space-x-reverse">
                        <div class="flex-shrink-0 pt-1">
                            <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-justify">Menjaga <strong>kualitas dan
                                kredibilitas</strong> produk melalui proses produksi terstandar dan
                            kontrol mutu berkelanjutan.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection

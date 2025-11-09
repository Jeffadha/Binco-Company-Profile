@extends('layouts.layouts-landing')

@section('title', 'Shopping Cart')

@section('content')

{{--
<!-- Products Section -->
<div id="featured-products" class="products-section bg-white py-12 dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
        <!-- Header -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-black dark:text-white mb-6">Featured Products</h2>
            <form id="filter-form" action="" method="GET" class="flex flex-col sm:flex-row gap-4 items-center">
                <!-- Search Input -->
                <div class="w-full sm:flex-1">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..."
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-300 focus:border-emerald-500 dark:bg-slate-900 dark:text-white" />
                </div>
                <!-- Category Filter -->
                <div class="w-full sm:w-auto">
                    <select name="category"
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-300 focus:border-emerald-500 dark:bg-slate-900 dark:text-white">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category')==$category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <!-- Sort Filter -->
                <div class="w-full sm:w-auto">
                    <select name="sort"
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-300 focus:border-emerald-500 dark:bg-slate-900 dark:text-white">
                        <option value="newest" {{ request('sort')=='newest' ? 'selected' : '' }}>Newest</option>
                        <option value="price_low" {{ request('sort')=='price_low' ? 'selected' : '' }}>Price: Low to
                            High</option>
                        <option value="price_high" {{ request('sort')=='price_high' ? 'selected' : '' }}>Price: High
                            to Low</option>
                    </select>
                </div>
                <div class="w-full sm:w-auto">
                    <button type="submit"
                        class="w-full sm:w-auto px-6 py-2 bg-emerald-500 text-white font-medium rounded-lg hover:bg-emerald-600 transition-colors">
                        Apply Filters
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
--}}

<!-- Premium Products Section -->
<div id="featured-products" class="products-section py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Premium Section Header -->
        <div class="text-center mb-16">
            {{-- <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-4 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div> --}}
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mt-6 mb-4">Produk <span
                    class="text-emerald-600">Kami</span></h2>
            {{-- <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Temukan solusi agribisnis terbaik kami yang dirancang untuk meningkatkan produktivitas dan hasil panen
                Anda
            </p> --}}
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <!-- Enhanced Filter Form -->
        <div
            class="mb-12 bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-100 dark:border-gray-700">
            <form id="filter-form" action="" method="GET" class="flex flex-col md:flex-row gap-4 items-center">
                <div class="w-full md:flex-1">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari produk..."
                            class="w-full px-4 py-3 pl-12 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:text-white transition-all duration-300" />
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
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
                        <option value="price_low" {{ request('sort')=='price_low' ? 'selected' : '' }}>Harga: Rendah ke
                            Tinggi</option>
                        <option value="price_high" {{ request('sort')=='price_high' ? 'selected' : '' }}>Harga: Tinggi
                            ke Rendah</option>
                    </select>
                </div>
                <div class="w-full md:w-auto">
                    <button type="submit"
                        class="w-full md:w-auto px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center gap-2 border border-emerald-500/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                            </path>
                        </svg>
                        Terapkan Filter
                    </button>
                </div>
                <div class="w-full md:w-auto">
                    <a href="{{ asset('/files/Specification Product of PT Binco Ran Nusantara.docx') }}"
                        class="w-full md:w-auto px-6 py-3 bg-white dark:bg-gray-800 text-emerald-600 border border-emerald-600 rounded-lg font-medium transition-all duration-300 hover:bg-emerald-50 dark:hover:bg-gray-700 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Katalog
                    </a>
                </div>
            </form>
        </div>

        <!-- Products Grid -->
        <div id="products-container">
            @include('partials.product-user', ['products' => $products])
        </div>
    </div>
</div>



@endsection
@extends('layouts.layouts-landing')

@section('title', __('messages.products_title'))

@section('content')

<!-- Premium Products Section -->
<div id="featured-products" class="products-section py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Premium Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mt-6 mb-4">{!! __('messages.products_hero_title') !!}</h2>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <!-- Enhanced Filter Form -->
        <div
            class="mb-12 bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-100 dark:border-gray-700">
            <form id="filter-form" action="" method="GET" class="flex flex-col md:flex-row gap-4 items-center">
                <div class="w-full md:flex-1">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="{{ __('messages.search_placeholder') }}"
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
                        <option value="">{{ __('messages.all_categories') }}</option>
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
                        <option value="newest" {{ request('sort')=='newest' ? 'selected' : '' }}>{{ __('messages.sort_newest') }}</option>
                        <option value="price_low" {{ request('sort')=='price_low' ? 'selected' : '' }}>{{ __('messages.sort_price_low') }}</option>
                        <option value="price_high" {{ request('sort')=='price_high' ? 'selected' : '' }}>{{ __('messages.sort_price_high') }}</option>
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
                        {{ __('messages.apply_filters') }}
                    </button>
                </div>
                <div class="w-full md:w-auto">
                    <a href="{{ asset('/files/Specification Product of PT Binco Ran Nusantara.docx') }}"
                        class="w-full md:w-auto px-6 py-3 bg-white dark:bg-gray-800 text-emerald-600 border border-emerald-600 rounded-lg font-medium transition-all duration-300 hover:bg-emerald-50 dark:hover:bg-gray-700 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        {{ __('messages.download_catalog') }}
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
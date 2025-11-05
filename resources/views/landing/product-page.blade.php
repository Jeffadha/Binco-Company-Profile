@extends('layouts.layouts-landing')

@section('title', 'Shopping Cart')

@section('content')

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


@endsection

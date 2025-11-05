@extends('layouts.layouts-landing')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<div id="hero-section" class="swiper hero-swiper relative w-full h-screen overflow-hidden pt-0">

    <div class="w-full h-full overflow-hidden">

        <div id="carousel-track" class="swiper-wrapper flex w-full h-full">

            <div class="swiper-slide flex-shrink-0 w-full h-full">
                <img src="{{ asset('images/img1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1">
            </div>

            <div class="swiper-slide flex-shrink-0 w-full h-full">
                <img src="{{ asset('images/img2.jpg') }}" class="w-full h-full object-cover" alt="Slide 2">
            </div>

            <div class="swiper-slide flex-shrink-0 w-full h-full">
                <img src="{{ asset('images/img3.jpg') }}" class="w-full h-full object-cover" alt="Slide 3">
            </div>
        </div>

        <div class="absolute inset-0 bg-black/40 z-10"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 z-30 h-full">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight">
                <span class="block">Welcome to Our</span>
                <span class="block text-emerald-300">Online Store</span>
            </h1>
            <p class="mt-4 max-w-xl text-lg text-gray-200">
                Discover amazing products at great prices. Quality for every need.
            </p>
            <a href="#featured-products"
                class="mt-6 inline-block px-8 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md">
                Shop Now
            </a>
        </div>

        <button id="carousel-prev" class="absolute left-4 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-10 h-10 rounded-full
        bg-black/40 hover:bg-black/70 text-white shadow-lg transition duration-300">
        </button>
        <button id="carousel-next" class="absolute right-4 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-10 h-10 rounded-full
        bg-black/40 hover:bg-black/70 text-white shadow-lg transition duration-300">
        </button>

        <div id="carousel-indicators" class="absolute bottom-6 left-1/2 -translate-x-1/2 z-40 flex gap-3"></div>
    </div>
</div>


<!-- Products Section -->
<div id="featured-products" class="products-section bg-white py-12 dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold dark:text-white text-gray-900 mb-6">Featured Products</h2>
            <form id="filter-form" action="{{ route('home') }}" method="GET"
                class="flex flex-col sm:flex-row gap-4 items-center">
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



<!-- Newsletter Section -->
<div id="newsletter-section" class="bg-emerald-50 py-12 dark:bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-gray-600 dark:text-white mb-6">Get the latest updates about our products and offers.</p>
            <form id="newsletter-form" class="max-w-md mx-auto">
                @csrf
                <div class="flex gap-4">
                    <input type="email" name="email" placeholder="Enter your email"
                        class="flex-1 px-4 py-2 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200">
                    <button type="submit"
                        class="px-6 py-2 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 transition-colors">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.getElementById('carousel-track');
        const slides = Array.from(track.children);
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        const indicatorsWrapper = document.getElementById('carousel-indicators');
        const total = slides.length;

        let current = 0;

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
                dot.className =
                    'w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 focus:outline-none';
                if (i === 0) dot.classList.add('scale-125', 'bg-white');
                dot.addEventListener('click', () => {
                    goToSlide(i);
                });
                indicatorsWrapper.appendChild(dot);
            }
        }

        // === Tambahkan gesture drag/swipe ===
        let startX = 0;
        let isDragging = false;

        // Mouse gesture
        track.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX;
        });

        track.addEventListener('mouseup', (e) => {
            if (!isDragging) return;
            const endX = e.pageX;
            handleSwipe(endX - startX);
            isDragging = false;
        });

        track.addEventListener('mouseleave', () => {
            isDragging = false;
        });

        // Touch gesture
        track.addEventListener('touchstart', (e) => {
            isDragging = true;
            startX = e.touches[0].clientX;
        });

        track.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            const endX = e.changedTouches[0].clientX;
            handleSwipe(endX - startX);
            isDragging = false;
        });

        function handleSwipe(distance) {
            const threshold = 100; // minimal 100px baru dianggap geser
            if (distance > threshold) {
                prevSlide();
            } else if (distance < -threshold) {
                nextSlide();
            }
        }

        // === Tombol prev / next ===
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        // === Init ===
        createIndicators();
        updateSlidePosition();
    });
</script>
@endpush

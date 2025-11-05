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

<!-- Hero Section (tetap sama) -->
<div id="hero-section" class="relative w-full h-screen overflow-hidden pt-0">
    <div class="w-full h-full overflow-hidden">
        <div id="carousel-track" class="flex w-full h-full transition-transform duration-500">
            <div class="flex-shrink-0 w-full h-full">
                <img src="{{ asset('images/img1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1" loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full">
                <img src="{{ asset('images/img2.jpg') }}" class="w-full h-full object-cover" alt="Slide 2" loading="lazy">
            </div>
            <div class="flex-shrink-0 w-full h-full">
                <img src="{{ asset('images/img3.jpg') }}" class="w-full h-full object-cover" alt="Slide 3" loading="lazy">
            </div>
        </div>

        <div class="absolute inset-0 bg-black/40 z-10"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 z-30 h-full">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                <span class="block">Solusi Nutrisi & Agribisnis</span>
                <span class="block text-emerald-300">untuk Masa Depan Pertanian</span>
            </h1>
            <p class="mt-4 max-w-2xl text-lg text-gray-200">
                PT Binco Indofarm — anak perusahaan BINCO NUSANTARA — menyediakan produk pertanian berkualitas, dukungan R&D,
                dan layanan QC untuk meningkatkan produktivitas dan keamanan pasokan pangan.
            </p>
            <div class="mt-6 flex gap-3">
                <a href="#produk" class="inline-block px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md shadow">Lihat Produk</a>
                <a href="#siapa-kami" class="inline-block px-6 py-3 bg-white/10 hover:bg-white/20 text-white rounded-md shadow">Pelajari Kami</a>
            </div>
        </div>

        <button id="carousel-prev" aria-label="Previous"
            class="absolute left-4 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-10 h-10 rounded-full
        bg-black/40 hover:bg-black/70 text-white shadow-lg transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="carousel-next" aria-label="Next"
            class="absolute right-4 top-1/2 -translate-y-1/2 z-40 flex items-center justify-center w-10 h-10 rounded-full
        bg-black/40 hover:bg-black/70 text-white shadow-lg transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div id="carousel-indicators" class="absolute bottom-6 left-1/2 -translate-x-1/2 z-40 flex gap-3"></div>
    </div>
</div>

<!-- Siapa Kami + Video + Stats -->
<section id="siapa-kami" class="py-12 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Siapa Kami?</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    PT Binco Indofarm adalah perusahaan agribisnis yang berfokus pada pengembangan produk berkualitas — mulai dari
                    benih unggul, pupuk formulasi, hingga layanan pascapanen. Kami menerapkan standar pengendalian mutu dan dukungan lapangan
                    untuk memastikan solusi tepat guna bagi petani dan mitra distribusi.
                </p>

                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-gray-700 dark:text-gray-200">
                    <li class="flex items-start gap-2"><span class="text-emerald-500">✓</span> Pengalaman industri</li>
                    <li class="flex items-start gap-2"><span class="text-emerald-500">✓</span> Tim R&D & QC profesional</li>
                    <li class="flex items-start gap-2"><span class="text-emerald-500">✓</span> Jaringan distribusi luas</li>
                    <li class="flex items-start gap-2"><span class="text-emerald-500">✓</span> Dukungan teknis lapangan</li>
                </ul>
            </div>

            <div class="space-y-6">
                <div class="ratio ratio-16x9 rounded shadow-lg overflow-hidden">
                    <iframe src="https://www.youtube.com/embed/uOZokZWQWy0" title="Binco Indofarm Video" allowfullscreen class="w-full h-full"></iframe>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="1998">0</div>
                        <div class="text-sm text-gray-500">Founded</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="125">0</div>
                        <div class="text-sm text-gray-500">Projects</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="300">0</div>
                        <div class="text-sm text-gray-500">Clients</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="45">0</div>
                        <div class="text-sm text-gray-500">Collaboration</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us (perbaikan gambar fallback) -->
<section class="py-12 bg-emerald-50 dark:bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div class="order-2 lg:order-1">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Kenapa Memilih Kami?</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Kami menggabungkan penelitian, kontrol mutu laboratorium, dan dukungan lapangan untuk menghadirkan produk yang konsisten, aman, dan efektif.
                    Solusi kami disesuaikan untuk meningkatkan produktivitas dan nilai ekonomis mitra.
                </p>
                <ul class="list-disc pl-5 text-gray-700 dark:text-gray-200 space-y-2">
                    <li>Standar QC ketat & uji laboratorium</li>
                    <li>Solusi yang dapat disesuaikan untuk komoditas berbeda</li>
                    <li>Support teknis dan training lapangan</li>
                </ul>
            </div>

            <div class="order-1 lg:order-2">
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <!-- pakai variable fallback -->
                    <img src="{{ $whyImg }}" alt="Kenapa memilih kami" class="w-full h-64 object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section (tetap) -->
<div id="featured-products" class="products-section bg-white py-12 dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="text-2xl font-bold dark:text-white text-gray-900 mb-6">Produk Kami</h2>
            <form id="filter-form" action="{{ route('home') }}" method="GET"
                class="flex flex-col sm:flex-row gap-4 items-center">
                <div class="w-full sm:flex-1">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..."
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-300 focus:border-emerald-500 dark:bg-slate-900 dark:text-white" />
                </div>
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
                <div class="w-full sm:w-auto">
                    <select name="sort"
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-300 focus:border-emerald-500 dark:bg-slate-900 dark:text-white">
                        <option value="newest" {{ request('sort')=='newest' ? 'selected' : '' }}>Newest</option>
                        <option value="price_low" {{ request('sort')=='price_low' ? 'selected' : '' }}>Price: Low to High</option>
                        <option value="price_high" {{ request('sort')=='price_high' ? 'selected' : '' }}>Price: High to Low</option>
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

<!-- Testimonials (pakai fallback image) -->
<section id="testimoni" class="py-12 bg-gray-50 dark:bg-slate-900">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl font-bold text-center mb-6 dark:text-white">Client Testimonial</h3>

        <div id="testi-wrapper" class="relative">
            <div id="testi-track" class="flex gap-6 transition-transform duration-500">
                <div class="min-w-full testimonial p-6 bg-white dark:bg-slate-800 rounded-lg shadow">
                    <p class="text-gray-700 dark:text-gray-200">"Produk benih dari Binco Indofarm meningkatkan hasil panen kami secara signifikan. Support teknis mereka juga cepat dan solutif."</p>
                    <div class="flex items-center gap-3 mt-4">
                        <img src="{{ $client1Img }}" alt="client1" class="w-12 h-12 rounded-full object-cover" loading="lazy">
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white">Pak Santoso</div>
                            <div class="text-sm text-gray-500">Petani, Grobogan</div>
                        </div>
                    </div>
                </div>

                <div class="min-w-full testimonial p-6 bg-white dark:bg-slate-800 rounded-lg shadow">
                    <p class="text-gray-700 dark:text-gray-200">"Kerjasama distribusi berjalan lancar, stok selalu tersedia dan kualitas terjaga."</p>
                    <div class="flex items-center gap-3 mt-4">
                        <img src="{{ $client2Img }}" alt="client2" class="w-12 h-12 rounded-full object-cover" loading="lazy">
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white">PT AgroLog</div>
                            <div class="text-sm text-gray-500">Distributor</div>
                        </div>
                    </div>
                </div>
            </div>

            <button id="testi-prev" aria-label="Previous testimonial" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow">
                ‹
            </button>
            <button id="testi-next" aria-label="Next testimonial" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow">
                ›
            </button>
        </div>
    </div>
</section>

<!-- Product & QC Gallery (fallback) -->
<section id="galeri" class="py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold dark:text-white">Product & QC</h3>
            <small class="text-gray-500">Dokumentasi produksi, QC, dan produk jadi</small>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="overflow-hidden rounded-lg"><img src="{{ $gal1Img }}" alt="g1" class="w-full h-40 object-cover" loading="lazy"></div>
            <div class="overflow-hidden rounded-lg"><img src="{{ $gal2Img }}" alt="g2" class="w-full h-40 object-cover" loading="lazy"></div>
            <div class="overflow-hidden rounded-lg"><img src="{{ $gal3Img }}" alt="g3" class="w-full h-40 object-cover" loading="lazy"></div>
            <div class="overflow-hidden rounded-lg"><img src="{{ $gal4Img }}" alt="g4" class="w-full h-40 object-cover" loading="lazy"></div>
        </div>
    </div>
</section>

<!-- Newsletter Section (tetap) -->
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
    /* HERO CAROUSEL (same script as before) */
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
    function nextSlide() { current = (current + 1) % total; updateSlidePosition(); }
    function prevSlide() { current = (current - 1 + total) % total; updateSlidePosition(); }
    function goToSlide(i) { current = i; updateSlidePosition(); }

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

    /* COUNTERS */
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

    /* TESTIMONIAL SLIDER */
    const testiTrack = document.getElementById('testi-track');
    const testiItems = Array.from(testiTrack.children);
    const testiPrev = document.getElementById('testi-prev');
    const testiNext = document.getElementById('testi-next');
    let testiCurrent = 0;
    testiItems.forEach(item => item.style.minWidth = '100%');
    function updateTesti() { testiTrack.style.transform = `translateX(-${testiCurrent * 100}%)`; }
    testiPrev.addEventListener('click', () => { testiCurrent = (testiCurrent - 1 + testiItems.length) % testiItems.length; updateTesti(); });
    testiNext.addEventListener('click', () => { testiCurrent = (testiCurrent + 1) % testiItems.length; updateTesti(); });
    let testiAuto = setInterval(() => { testiNext.click(); }, 8000);
    document.getElementById('testi-wrapper').addEventListener('mouseenter', () => clearInterval(testiAuto));
    document.getElementById('testi-wrapper').addEventListener('mouseleave', () => testiAuto = setInterval(() => { testiNext.click(); }, 8000));

});
</script>
@endpush

@extends('layouts.layouts-landing')

@section('title', 'Our Blog')

@section('content')


<!-- Blog Cards Section -->
<section class="py-20 px-4 md:px-12 lg:px-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto mt-12">
        <!-- Section Header -->
        <h2 class="text-2xl font-bold text-black dark:text-white mb-6">Blogs</h2>

        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Blog Card 1 -->
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-sm overflow-hidden group flex flex-col h-full">
                <!-- Image -->
                <div
                    class="h-48 bg-gray-100 dark:bg-gray-700 overflow-hidden flex items-center justify-center flex-shrink-0">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9m0 0v3m0-3a2 2 0 012-2h2a2 2 0 012 2m-6 5v6m4-3H9">
                            </path>
                        </svg>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Web Development</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <!-- Meta Info -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <span>May 15, 2024</span>
                        <span class="mx-2">•</span>
                        <span>Web Development</span>
                    </div>

                    <!-- Title -->
                    <h3
                        class="text-xl font-semibold text-black dark:text-white mb-3 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors line-clamp-2">
                        The Future of Responsive Web Design
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed line-clamp-3 flex-grow">
                        Exploring the latest trends and techniques in creating websites that work seamlessly across
                        all devices
                        and platforms with modern approaches.
                    </p>

                    <!-- Read More Button -->
                    <div class="mt-auto">
                        <button
                            class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors whitespace-nowrap rounded-md">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-sm overflow-hidden group flex flex-col h-full">
                <!-- Image -->
                <div
                    class="h-48 bg-gray-100 dark:bg-gray-700 overflow-hidden flex items-center justify-center flex-shrink-0">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm8-16a4 4 0 00-4 4v12a4 4 0 004 4h4a2 2 0 002-2V5a2 2 0 00-2-2h-4z">
                            </path>
                        </svg>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">UI/UX Design</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <!-- Meta Info -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <span>April 28, 2024</span>
                        <span class="mx-2">•</span>
                        <span>UI/UX Design</span>
                    </div>

                    <!-- Title -->
                    <h3
                        class="text-xl font-semibold text-black dark:text-white mb-3 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors line-clamp-2">
                        Mastering User Experience Principles
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed line-clamp-3 flex-grow">
                        Learn how to create intuitive and engaging user experiences that keep visitors coming back
                        to your website
                        and applications.
                    </p>

                    <!-- Read More Button -->
                    <div class="mt-auto">
                        <button
                            class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors whitespace-nowrap rounded-md">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-sm overflow-hidden group flex flex-col h-full">
                <!-- Image -->
                <div
                    class="h-48 bg-gray-100 dark:bg-gray-700 overflow-hidden flex items-center justify-center flex-shrink-0">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Digital Marketing</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <!-- Meta Info -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <span>April 12, 2024</span>
                        <span class="mx-2">•</span>
                        <span>Digital Marketing</span>
                    </div>

                    <!-- Title -->
                    <h3
                        class="text-xl font-semibold text-black dark:text-white mb-3 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors line-clamp-2">
                        SEO Strategies
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed line-clamp-3 flex-grow">
                        Discover effective SEO techniques to improve visibility and drive organic traffic to your
                        website with
                        proven methods.
                    </p>

                    <!-- Read More Button -->
                    <div class="mt-auto">
                        <button
                            class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors whitespace-nowrap rounded-md">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Blog Card 4 -->
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-sm overflow-hidden group flex flex-col h-full">
                <!-- Image -->
                <div
                    class="h-48 bg-gray-100 dark:bg-gray-700 overflow-hidden flex items-center justify-center flex-shrink-0">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Mobile Development</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <!-- Meta Info -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <span>March 30, 2024</span>
                        <span class="mx-2">•</span>
                        <span>Mobile Development</span>
                    </div>

                    <!-- Title -->
                    <h3
                        class="text-xl font-semibold text-black dark:text-white mb-3 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors line-clamp-2">
                        Cross-Platform App Development Approaches
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed line-clamp-3 flex-grow">
                        Understanding the pros and cons of different methods for building apps across multiple
                        platforms
                        efficiently.
                    </p>

                    <!-- Read More Button -->
                    <div class="mt-auto">
                        <button
                            class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors whitespace-nowrap rounded-md">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Blog Card 5 -->
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-sm overflow-hidden group flex flex-col h-full">
                <!-- Image -->
                <div
                    class="h-48 bg-gray-100 dark:bg-gray-700 overflow-hidden flex items-center justify-center flex-shrink-0">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Technology</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <!-- Meta Info -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <span>March 18, 2024</span>
                        <span class="mx-2">•</span>
                        <span>Technology</span>
                    </div>

                    <!-- Title -->
                    <h3
                        class="text-xl font-semibold text-black dark:text-white mb-3 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors line-clamp-2">
                        AI in Modern Web Development
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed line-clamp-3 flex-grow">
                        How artificial intelligence is transforming website development and optimization processes
                        with smart
                        solutions.
                    </p>

                    <!-- Read More Button -->
                    <div class="mt-auto">
                        <button
                            class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors whitespace-nowrap rounded-md">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Blog Card 6 -->
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-sm overflow-hidden group flex flex-col h-full">
                <!-- Image -->
                <div
                    class="h-48 bg-gray-100 dark:bg-gray-700 overflow-hidden flex items-center justify-center flex-shrink-0">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Business</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <!-- Meta Info -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <span>March 5, 2024</span>
                        <span class="mx-2">•</span>
                        <span>Business</span>
                    </div>

                    <!-- Title -->
                    <h3
                        class="text-xl font-semibold text-black dark:text-white mb-3 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors line-clamp-2">
                        Building Strong Online Presence
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed line-clamp-3 flex-grow">
                        Essential steps to establish and grow your brand's digital footprint in today's competitive
                        market
                        environment successfully.
                    </p>

                    <!-- Read More Button -->
                    <div class="mt-auto">
                        <button
                            class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors whitespace-nowrap rounded-md">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <button
                class="px-8 py-4 bg-black dark:bg-white text-white dark:text-black text-lg font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors rounded-md">
                View All Articles
            </button>
        </div>
    </div>
</section>

@endsection
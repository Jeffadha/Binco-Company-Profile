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
                    About Our Company
                </h2>
                <p class="mx-auto text-xl text-gray-600 dark:text-gray-300 max-w-2xl">
                    We're passionate about creating innovative solutions that help businesses thrive in the
                    digital
                    age.
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Column -->
            <div class="space-y-8">
                <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }"
                    class="transition-all duration-1000 ease-out delay-200">
                    <h3 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">
                        Building Tomorrow's Solutions Today
                    </h3>
                    <p class="mb-6 text-lg text-gray-600 leading-relaxed dark:text-gray-300">
                        Founded in 2020, we've been at the forefront of digital transformation, helping over
                        10,000
                        businesses worldwide achieve their goals through innovative technology solutions.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed dark:text-gray-300">
                        Our team of expert developers, designers, and strategists work tirelessly to deliver
                        cutting-edge solutions that not only meet today's challenges but anticipate tomorrow's
                        opportunities.
                    </p>
                </div>

                <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }"
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
                </div>
            </div>

            <!-- Image Column -->
            <div class="relative">
                <div :class="{ 'opacity-100 scale-100': inView, 'opacity-0 scale-95': !inView }"
                    class="transition-all duration-1000 ease-out delay-300">
                    <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            alt="Our team at work" class="object-cover w-full h-[384px]" />
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

@endsection

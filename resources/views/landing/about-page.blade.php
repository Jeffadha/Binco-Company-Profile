@extends('layouts.layouts-landing')

@section('title', __('messages.about_title'))

@section('content')

<!-- Hero Section -->
<section class="py-20 bg-gradient-to-br from-emerald-50 to-white dark:from-gray-800 dark:to-gray-900 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16">
            <h2 class="mb-4 text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
                {{ __('messages.about_hero_title') }}
            </h2>
            <p class="mx-auto text-xl text-emerald-600 dark:text-emerald-400 font-semibold max-w-2xl">
                {{ __('messages.about_hero_subtitle') }}
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Column -->
            <div class="space-y-8">
                <div>
                    <h3 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">
                        {{ __('messages.about_hero_heading') }}
                    </h3>
                    <p class="mb-6 text-lg text-gray-600 leading-relaxed dark:text-gray-300">
                        {{ __('messages.about_hero_paragraph1') }}
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed dark:text-gray-300">
                        {{ __('messages.about_hero_paragraph2') }}
                    </p>
                </div>

                <div class="space-y-4">
                    <!-- Feature Items -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-emerald-600">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.about_feature1_title') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300">{{ __('messages.about_feature1_desc') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-emerald-600">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.about_feature2_title') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300">{{ __('messages.about_feature2_desc') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-emerald-600">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('messages.about_feature3_title') }}</h4>
                            <p class="text-gray-600 dark:text-gray-300">{{ __('messages.about_feature3_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                    <img src="images/greenhouse-inside.jpg"
                        alt="Coconut farming and processing" class="object-cover w-full h-[384px]" />
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="backdrop-blur-sm p-6 rounded-xl bg-white/90 dark:bg-gray-800/90 shadow-lg">
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-gray-900 dark:text-white">100%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('messages.about_stat1') }}</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900 dark:text-white">Eco</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('messages.about_stat2') }}</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900 dark:text-white">Quality</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('messages.about_stat3') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Vision -->
            <div class="bg-emerald-50 dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('messages.about_vision_title') }}</h3>
                </div>
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                    {{ __('messages.about_vision_text') }}
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-amber-50 dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-amber-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('messages.about_mission_title') }}</h3>
                </div>
                <ul class="space-y-4 text-gray-700 dark:text-gray-300">
                    <li class="flex items-start gap-3">
                        <span class="text-amber-600 mt-1">•</span>
                        <span>{{ __('messages.about_mission_point1') }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-600 mt-1">•</span>
                        <span>{{ __('messages.about_mission_point2') }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-600 mt-1">•</span>
                        <span>{{ __('messages.about_mission_point3') }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-600 mt-1">•</span>
                        <span>{{ __('messages.about_mission_point4') }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">{{ __('messages.about_products_title') }}</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                {{ __('messages.about_products_subtitle') }}
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Cocopeat -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6">
                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_product1_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    {{ __('messages.about_product1_desc') }}
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-1">
                    <li>• {{ __('messages.about_product1_point1') }}</li>
                    <li>• {{ __('messages.about_product1_point2') }}</li>
                    <li>• {{ __('messages.about_product1_point3') }}</li>
                </ul>
            </div>

            <!-- Cocopot -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6">
                <div class="w-12 h-12 bg-amber-100 dark:bg-amber-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_product2_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    {{ __('messages.about_product2_desc') }}
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-1">
                    <li>• {{ __('messages.about_product2_point1') }}</li>
                    <li>• {{ __('messages.about_product2_point2') }}</li>
                    <li>• {{ __('messages.about_product2_point3') }}</li>
                </ul>
            </div>

            <!-- Cocorope -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6">
                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_product3_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    {{ __('messages.about_product3_desc') }}
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-1">
                    <li>• {{ __('messages.about_product3_point1') }}</li>
                    <li>• {{ __('messages.about_product3_point2') }}</li>
                    <li>• {{ __('messages.about_product3_point3') }}</li>
                </ul>
            </div>

            <!-- Produk Pendukung -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6">
                <div class="w-12 h-12 bg-amber-100 dark:bg-amber-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_product4_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    {{ __('messages.about_product4_desc') }}
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-1">
                    <li>• {{ __('messages.about_product4_point1') }}</li>
                    <li>• {{ __('messages.about_product4_point2') }}</li>
                    <li>• {{ __('messages.about_product4_point3') }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Greenhouse & Tourism Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    {{ __('messages.about_greenhouse_title') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                    {!! __('messages.about_greenhouse_paragraph1') !!}
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                    {!! __('messages.about_greenhouse_paragraph2') !!}
                </p>

                <div class="bg-emerald-50 dark:bg-gray-800 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">{{ __('messages.about_greenhouse_activities_title') }}</h3>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                            <span>{{ __('messages.about_greenhouse_activity1') }}</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                            <span>{{ __('messages.about_greenhouse_activity2') }}</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                            <span>{{ __('messages.about_greenhouse_activity3') }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="images/greenhouse.jpg"
                        alt="Greenhouse and agricultural education" class="w-full h-96 object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">{{ __('messages.about_values_title') }}</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                {{ __('messages.about_values_subtitle') }}
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Kualitas -->
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-100 dark:bg-emerald-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_value1_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('messages.about_value1_desc') }}
                </p>
            </div>

            <!-- Keberlanjutan -->
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-100 dark:bg-emerald-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_value2_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('messages.about_value2_desc') }}
                </p>
            </div>

            <!-- Inovasi -->
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_value3_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('messages.about_value3_desc') }}
                </p>
            </div>

            <!-- Kemitraan -->
            <div class="text-center">
                <div class="w-16 h-16 bg-amber-100 dark:bg-amber-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ __('messages.about_value4_title') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('messages.about_value4_desc') }}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">{{ __('messages.about_contact_title') }}</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                {{ __('messages.about_contact_subtitle') }}
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">{{ __('messages.about_contact_info_title') }}</h3>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.about_contact_address_title') }}</h4>
                                <p class="text-gray-600 dark:text-gray-300">
                                    {{ __('messages.about_contact_address') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.about_contact_phone_title') }}</h4>
                                <p class="text-gray-600 dark:text-gray-300">{{ __('messages.about_contact_phone') }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.about_contact_email_title') }}</h4>
                                <p class="text-gray-600 dark:text-gray-300">{{ __('messages.about_contact_email') }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ __('messages.about_contact_social_title') }}</h4>
                                <p class="text-gray-600 dark:text-gray-300">{{ __('messages.about_contact_social') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Partnership -->
                <div class="bg-emerald-50 dark:bg-gray-800 rounded-xl p-6">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-4">{{ __('messages.about_partnership_title') }}</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        {{ __('messages.about_partnership_desc') }}
                    </p>
                    <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2">
                        <li>• {{ __('messages.about_partnership_point1') }}</li>
                        <li>• {{ __('messages.about_partnership_point2') }}</li>
                        <li>• {{ __('messages.about_partnership_point3') }}</li>
                        <li>• {{ __('messages.about_partnership_point4') }}</li>
                        <li>• {{ __('messages.about_partnership_point5') }}</li>
                    </ul>
                </div>
            </div>

            <!-- Map -->
            <div class="bg-gray-100 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6368799290462!2d110.91386257632885!3d-7.614432175278959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2300436b6877%3A0x204fd92a752c7413!2sPT.%20Binco%20Ran%20Nusantara!5e0!3m2!1sid!2sid!4v1762055271210!5m2!1sid!2sid"
                    class="w-full h-full min-h-[450px]" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection
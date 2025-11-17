@extends('layouts.layouts-landing')

@section('title', __('messages.partnership_title'))

@section('content')

<section class="py-20 bg-white dark:bg-gray-900">
    <!-- Header Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 ">
                {{ __('messages.partnership_title') }}
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto font-body">
                {{ __('messages.partnership_subtitle') }}
            </p>
            <div class="w-24 h-1 bg-emerald-500 rounded-full mx-auto mt-6"></div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <!-- Partnership Benefits -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                        {{ __('messages.partnership_benefits_title') }}
                    </h2>

                    <!-- Benefit Items -->
                    <div class="space-y-6">
                        <!-- Benefit 1 -->
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_benefit_1_title') }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mt-1">
                                    {{ __('messages.partnership_benefit_1_desc') }}
                                </p>
                            </div>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_benefit_2_title') }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mt-1">
                                    {{ __('messages.partnership_benefit_2_desc') }}
                                </p>
                            </div>
                        </div>

                        <!-- Benefit 3 -->
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_benefit_3_title') }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mt-1">
                                    {{ __('messages.partnership_benefit_3_desc') }}
                                </p>
                            </div>
                        </div>

                        <!-- Benefit 4 -->
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_benefit_4_title') }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mt-1">
                                    {{ __('messages.partnership_benefit_4_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Partnership Types -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 ">
                        {{ __('messages.partnership_types_title') }}
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Distributor -->
                        <div class="bg-white dark:bg-gray-800 border border-emerald-200 dark:border-emerald-800 rounded-xl p-6 hover:shadow-lg transition-shadow">
                            <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                {{ __('messages.partnership_type_1_title') }}
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                {{ __('messages.partnership_type_1_desc') }}
                            </p>
                        </div>

                        <!-- Reseller -->
                        <div class="bg-white dark:bg-gray-800 border border-amber-200 dark:border-amber-800 rounded-xl p-6 hover:shadow-lg transition-shadow">
                            <div class="w-12 h-12 bg-amber-100 dark:bg-amber-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                {{ __('messages.partnership_type_2_title') }}
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                {{ __('messages.partnership_type_2_desc') }}
                            </p>
                        </div>

                        <!-- Greenhouse Collaboration -->
                        <div class="bg-white dark:bg-gray-800 border border-amber-200 dark:border-amber-800 rounded-xl p-6 hover:shadow-lg transition-shadow">
                            <div class="w-12 h-12 bg-amber-100 dark:bg-amber-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                {{ __('messages.partnership_type_3_title') }}
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                {{ __('messages.partnership_type_3_desc') }}
                            </p>
                        </div>

                        <!-- OEM/Private Label -->
                        <div class="bg-white dark:bg-gray-800 border border-blue-200 dark:border-blue-800 rounded-xl p-6 hover:shadow-lg transition-shadow">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                {{ __('messages.partnership_type_4_title') }}
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                {{ __('messages.partnership_type_4_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partnership Form & Info -->
            <div class="space-y-8">
                <!-- Quick Contact -->
                <div class="bg-emerald-50 dark:bg-gray-800 rounded-2xl p-8">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white ">
                            {{ __('messages.partnership_contact_title') }}
                        </h2>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            {{ __('messages.partnership_contact_subtitle') }}
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                            <span class="text-gray-700 dark:text-gray-300">
                                {{ __('messages.partnership_contact_item1') }}
                            </span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                            <span class="text-gray-700 dark:text-gray-300">
                                {{ __('messages.partnership_contact_item2') }}
                            </span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                            <span class="text-gray-700 dark:text-gray-300">
                                {{ __('messages.partnership_contact_item3') }}
                            </span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                            <span class="text-gray-700 dark:text-gray-300">
                                {{ __('messages.partnership_contact_item4') }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/628985531212" target="_blank"
                            class="flex-1 inline-flex items-center justify-center px-4 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-all duration-300 transform hover:-translate-y-1">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.189-3.553-8.436"/>
                            </svg>
                            {{ __('messages.partnership_whatsapp') }}
                        </a>
                        <a href="mailto:bincoranindofarm@gmail.com"
                            class="flex-1 inline-flex items-center justify-center px-4 py-3 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-900 dark:text-white rounded-lg transition-all duration-300 transform hover:-translate-y-1 border border-gray-200 dark:border-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            {{ __('messages.partnership_email') }}
                        </a>
                    </div>
                </div>

                <!-- Process Info -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 ">
                        {{ __('messages.partnership_process_title') }}
                    </h3>
                    
                    <div class="space-y-6">
                        <!-- Step 1 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                1
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_step_1_title') }}
                                </h4>
                                <p class="text-gray-600 dark:text-gray-300 mt-1 text-sm">
                                    {{ __('messages.partnership_step_1_desc') }}
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                2
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_step_2_title') }}
                                </h4>
                                <p class="text-gray-600 dark:text-gray-300 mt-1 text-sm">
                                    {{ __('messages.partnership_step_2_desc') }}
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                3
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_step_3_title') }}
                                </h4>
                                <p class="text-gray-600 dark:text-gray-300 mt-1 text-sm">
                                    {{ __('messages.partnership_step_3_desc') }}
                                </p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                4
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">
                                    {{ __('messages.partnership_step_4_title') }}
                                </h4>
                                <p class="text-gray-600 dark:text-gray-300 mt-1 text-sm">
                                    {{ __('messages.partnership_step_4_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-emerald-600 to-green-600 rounded-2xl p-12 text-center">
            <h2 class="text-3xl font-bold text-white mb-4 ">
                {{ __('messages.partnership_cta_title') }}
            </h2>
            <p class="text-emerald-100 text-lg mb-8 max-w-2xl mx-auto">
                {{ __('messages.partnership_cta_subtitle') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/628985531212" target="_blank"
                    class="inline-flex items-center px-8 py-4 bg-white text-emerald-600 hover:bg-emerald-50 font-semibold rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.189-3.553-8.436"/>
                    </svg>
                    {{ __('messages.partnership_cta_button') }}
                </a>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white hover:bg-white hover:text-emerald-600 font-semibold rounded-lg transition-all duration-300 transform hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    {{ __('messages.partnership_cta_contact') }}
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
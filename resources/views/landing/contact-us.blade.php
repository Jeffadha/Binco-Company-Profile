@extends('layouts.layouts-landing')

@section('title', 'Contact Us')

@section('content')

<section class="py-20 px-4 md:px-12 lg:px-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto mt-12">
        <div class="text-center mb-16 px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-black dark:text-white mb-6">Contact Us</h2>
        </div>

        <div class="bg-white dark:bg-gray-900 p-8 sm:p-12 rounded-none shadow-lg">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-black dark:bg-gray-700 p-3 rounded-none mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-black dark:text-white mb-1">Phone</h4>
                                <p class="text-lg text-gray-600 dark:text-gray-300">+62 898 5531 212</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-black dark:bg-gray-700 p-3 rounded-none mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-black dark:text-white mb-1">Email</h4>
                                <p class="text-lg text-gray-600 dark:text-gray-300">bincoranindofarm@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-black dark:bg-gray-700 p-3 rounded-none mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-black dark:text-white mb-1">Office</h4>
                                <p class="text-lg text-gray-600 dark:text-gray-300">Suruh, Kayuapak, Kec. Polokarto,
                                    Kabupaten Sukoharjo,<br>Jawa Tengah 57555
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-black dark:bg-gray-700 p-3 rounded-none mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-black dark:text-white mb-1">Business Hours
                                </h4>
                                <p class="text-lg text-gray-600 dark:text-gray-300">Mon - Fri: 9:00 AM - 6:00
                                    PM<br>Sat: 10:00 AM -
                                    4:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-lg font-medium text-black dark:text-white mb-2">Full
                                    Name</label>
                                <input type="text" id="name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-none focus:outline-none focus:border-black text-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                    placeholder="Your name">
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-lg font-medium text-black dark:text-white mb-2">Email
                                    Address</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-none focus:outline-none focus:border-black text-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                    placeholder="your@email.com">
                            </div>
                        </div>

                        <div>
                            <label for="subject"
                                class="block text-lg font-medium text-black dark:text-white mb-2">Subject</label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-none focus:outline-none focus:border-black text-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                placeholder="What is this regarding?">
                        </div>

                        <div>
                            <label for="message"
                                class="block text-lg font-medium text-black dark:text-white mb-2">Message</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-none focus:outline-none focus:border-black text-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                placeholder="Tell us about your project..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full px-8 py-4 bg-black dark:bg-white text-white dark:text-black text-lg font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-16">
            <div class="bg-white dark:bg-gray-900 shadow-lg overflow-hidden h-[450px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6368799290462!2d110.91386257632885!3d-7.614432175278959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2300436b6877%3A0x204fd92a752c7413!2sPT.%20Binco%20Ran%20Nusantara!5e0!3m2!1sid!2sid!4v1762055271210!5m2!1sid!2sid"
                    class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" height="450"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection

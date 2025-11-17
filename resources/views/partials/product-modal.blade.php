<div id="productModal"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-75 transition-opacity p-4">

    <div class="relative w-full max-w-4xl rounded-lg bg-white p-5 md:p-8 shadow-xl dark:bg-gray-800">

        <button id="closeModalBtn"
            class="absolute -top-3 -right-3 z-10 rounded-full bg-white p-1 text-gray-500 hover:text-gray-800 dark:bg-gray-700 dark:text-gray-300 dark:hover:text-white">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

            <div>
                <div class="mb-4 h-64 md:h-96">
                    <img id="modalMainImage" src="" alt="Product" class="h-full w-full rounded-lg object-cover">
                </div>
                <div id="modalThumbnails" class="flex flex-wrap gap-2">
                </div>
            </div>

            <div class="flex flex-col">
                <h2 id="modalProductName" class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">
                    Memuat...
                </h2>

                {{-- <div class="my-2 flex items-center">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">(458 reviews)</span>
                </div>
                --}}
                <span id="modalProductPrice"
                    class="my-3 text-3xl font-bold text-emerald-600 dark:text-emerald-400">...</span>

                <p id="modalProductDescription" class="mt-4 text-gray-700 dark:text-gray-300 flex-1 whitespace-pre-line leading-tight">
                    ...
                </p>

                <div class="mt-auto pt-6">

                    <div class="flex gap-4">
                        {{-- <button
                            class="add-to-cart-btn flex-1 rounded-lg bg-emerald-500 py-3 px-6 text-white hover:bg-emerald-600 transition-colors">Add
                            to Cart</button>
                        <button
                            class="rounded-lg border border-gray-300 py-3 px-6 hover:bg-gray-100 dark:border-gray-600 dark:hover:bg-gray-700">Add
                            to Wishlist</button> --}}
                    </div>
                </div>
            </div>
        </div>

        <div id="modalLoader"
            class="absolute inset-0 z-20 flex hidden items-center justify-center bg-white bg-opacity-80 dark:bg-gray-800 dark:bg-opacity-80 rounded-lg">
            <svg class="h-10 w-10 animate-spin text-emerald-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
        </div>

    </div>
</div>
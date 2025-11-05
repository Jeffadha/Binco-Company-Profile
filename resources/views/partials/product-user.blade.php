<div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    @forelse ($products as $product)

    <div class="product-card flex flex-col bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 dark:bg-gray-800 dark:border-gray-700"
        data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-price="{{ $product->price }}"
        data-image="{{ $product->getPrimaryImage() }}" data-category="{{ $product->category->name }}">

        <div class="aspect-w-1 aspect-h-1">
            <img src="{{ $product->getPrimaryImage() }}" alt="{{ $product->name }}"
                class="w-full h-48 sm:h-72 object-cover rounded-t-lg" />
        </div>

        <div class="p-4 flex flex-col flex-1">

            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white line-clamp-2 min-h-[2.5rem]">{{
                    $product->name }}</h3>
                {{-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2 min-h-[2.5rem]">{{
                    $product->description }}</p> --}}
            </div>

            <div class="mt-auto pt-4 flex items-center justify-between">
                <span class="text-emerald-600 font-bold text-lg dark:text-emerald-400">Rp {{
                    number_format($product->price, 0, ',', '.') }}</span>

                <button
                    class="add-to-cart-btn bg-emerald-500 text-white p-2 rounded-lg hover:bg-emerald-600 transition-colors sm:px-4 sm:py-2">

                    <!-- Mobile: Ikon Saja -->
                    <span class="sm:hidden">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </span>

                    <!-- Desktop: Teks Saja -->
                    <span class="hidden sm:inline">
                        Add to Cart
                    </span>
                </button>
            </div>
        </div>
    </div>
    @empty
    <!-- No Results -->
    <div id="noResults" class="col-span-full text-center py-12">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">No products found</h3>
        <p class="mt-2 text-gray-500 dark:text-gray-400">Try adjusting your search terms or filters.</p>
    </div>
    @endforelse
</div>

{{-- Pagination --}}
@if ($products->hasPages())
<div class="mt-6">
    <nav class="justify-center flex-wrap gap-2" id="pagination-links">
        {{ $products->links() }}
    </nav>
</div>
@endif
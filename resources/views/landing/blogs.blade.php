@extends('layouts.layouts-landing')

@section('title', 'Our Blog')

@section('content')

<section class="py-20 px-4 md:px-12 lg:px-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto mt-12">

        <h2 class="text-2xl font-bold text-black dark:text-white mb-6">Blogs</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($posts as $post)
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-sm overflow-hidden group flex flex-col h-full">

                <!-- Image -->
                <div class="h-48 bg-gray-100 dark:bg-gray-700 overflow-hidden flex items-center justify-center flex-shrink-0">
                    @if($post->image)
                        <img src="{{ asset($post->image) }}" class="w-full h-full object-cover" alt="">
                    @else
                        <div class="text-gray-500 text-sm italic">No Image</div>
                    @endif
                </div>

                <div class="p-8 flex flex-col flex-grow">

                    <!-- Meta -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <span>{{ $post->created_at->format('F d, Y') }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ $post->category ?? 'Uncategorized' }}</span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-semibold text-black dark:text-white mb-3 line-clamp-2">
                        {{ $post->title }}
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed line-clamp-3 flex-grow">
                        {!! strip_tags($post->content) !!}
                    </p>

                    <!-- Read More -->
                    <div class="mt-auto">
                        <a href="{{ route('blog.show', $post->slug) }}"
                            class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors whitespace-nowrap rounded-md">
                            Read More
                        </a>
                    </div>

                </div>
            </div>
            @empty
            <p class="text-gray-500 dark:text-gray-300">No Blog Posts Available.</p>
            @endforelse

        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $posts->links() }}
        </div>

    </div>
</section>

@endsection

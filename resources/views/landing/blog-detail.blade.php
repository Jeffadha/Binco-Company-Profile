@extends('layouts.layouts-landing')

@section('title', $post->title)

@section('content')

<section class="py-20 px-4 md:px-12 lg:px-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-4xl mx-auto">
        <br>
        <!-- Title -->
        <h1 class="text-3xl font-bold text-black dark:text-white mb-4">
            {{ $post->title }}
        </h1>

        <!-- Meta -->
        <div class="text-gray-500 dark:text-gray-400 mb-6">
            {{ $post->created_at->format('F d, Y') }} • {{ $post->category ?? 'Uncategorized' }}
        </div>

        <!-- Image -->
        @if($post->image)
        <img src="{{ asset($post->image) }}" class="w-full rounded-lg mb-8">
        @endif

        <!-- Content -->
        <article class="prose dark:prose-invert max-w-none leading-relaxed">
            {!! $post->content !!}
        </article>

        <div class="mt-12">
            <a href="{{ route('blogs') }}"
                class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors rounded-md">
                Back to Blog
            </a>
        </div>

    </div>
</section>

@endsection

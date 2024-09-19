<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-6 max-w-screen-md">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['price'] }} | 330gr</a>
        </div>
        <p class="my-4 font-light">{{ $post['description'] }}</p>
        <a href="/posts" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Back to posts
        </a>
    </article>
</x-layout>
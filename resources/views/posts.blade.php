<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($posts as $post)
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post['title'] }}</h5>
            </a>
            <div class="text-base text-gray-500">
                <a href="/penciptas/{{ $post->pencipta->id }}" class="hover:underline">{{ $post->pencipta->name }} | {{ $post['price'] }} | 330gr</a>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post['description']), 100 }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
        @endforeach
    </div>
</x-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @foreach ($posts as $post)
                    <div class="font-bold">{{ $post->header; }}</div>
                    <div>{{ $post->body; }}</div>
                    <div class="mt-4 basis-1/6">
                        <img class="rounded-lg h-60 float-left" src="{{ '/images/'.$post->image }}" alt="image description">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

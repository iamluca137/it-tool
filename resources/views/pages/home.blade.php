@extends('layouts.app')
@section('title', 'IT Tools')
@section('content')
    <span class="flex items-center mb-3 mt-25">
        <span class="pr-6  font-medium text-gray-700">All the tools</span>
        <span class="h-px flex-1 bg-gray-800"></span>
    </span>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        @foreach ($categories as $category)
            @foreach ($category->subcategories as $item)
                <div
                    class="border-2 border-dashed border-gray-100 bg-white rounded-lg h-auto shadow-sm transition hover:shadow-lg p-6">

                    <div class="flex justify-between items-center mb-2">
                        <a href="{{ route('tools', $item->slug) }}" class="flex items-center">
                            <i class="{{ $item->icon }} text-2xl text-gray-700"></i>
                        </a>
                        <i class="fa-regular fa-bookmark text-gray-700"></i>
                        {{-- <i class="fa-solid fa-bookmark"></i> --}}
                    </div>

                    <a href="{{ route('tools', $item->slug) }}">
                        <h3 class="mt-0.5 text-lg font-medium text-gray-700">
                            {{ $item->name }}
                        </h3>
                    </a>

                    <a href="{{ route('tools', $item->slug) }}">
                        <p class="mt-2 text-sm/relaxed text-gray-500 overflow-hidden text-ellipsis"
                            style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                            {{ $item->description }}
                        </p>
                    </a>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection

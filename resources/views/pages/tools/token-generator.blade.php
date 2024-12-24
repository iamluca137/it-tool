@extends('layouts.app')
@section('title', "$tool->name - IT Tools")
@section('content')
    <div class="mx-auto max-w-lg text-center mb-5">
        <h2 class="text-2xl font-bold text-gray-700 md:text-3xl py-3">
            {{ $tool->name }}
        </h2>
        <hr>
        <p class="hidden text-gray-500 sm:mt-4 sm:block">
            {{ $tool->description }}
        </p>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4">
    </div>
@endsection

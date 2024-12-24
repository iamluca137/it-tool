<!doctype html>
<!-- dir="rtl" for RTL support -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="@yield('author')" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/iamluca.ico') }}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" type="text/css" />
    @yield('styles')
</head>

<body class="bg-[#e7e9ea]">
    <div class="antialiased bg-gray-50">
        @include('partials.sidebar')
        <main class="px-4 pb-12 md:ml-64 h-auto min-h-screen">
            @include('partials.header')
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>

</html>

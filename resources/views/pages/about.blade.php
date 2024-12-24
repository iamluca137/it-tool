@extends('layouts.app')
@section('title', 'About - IT Tools')
@section('content')
    <div class="mx-auto max-w-lg text-center mb-5">
        <h2 class="text-2xl font-bold text-gray-700 md:text-3xl py-3">
            About IT-Tools
        </h2>
        <hr>
        <p class="text-gray-500 sm:mt-4 text-start mt-4">
            This wonderful website, made with ❤ by Le Van Thanh, aggregates useful tools for developer and people
            working in IT. If you find it useful, please feel free to share it to people you think may find it useful too
            and don't forget to bookmark it in your shortcut bar! IT Tools is open-source (under the GPL-3.0 license) and
            free, and will always be, but it costs me money to host and renew the domain name. If you want to support my
            work, and encourage me to add more tools, please consider supporting by sponsoring me.
        </p>

        <h3 class="text-base font-bold text-gray-700 py-2 text-start">
            Found a bug? A tool is missing?
        </h3>
        <p class="text-gray-500 text-start">
            If you need a tool that is currently not present here, and you think can be useful, you are welcome to submit a
            feature request in the issues section in the GitHub repository. And if you found a bug, or something doesn't
            work as expected, please file a bug report in the issues section in the GitHub repository.
        </p>
    </div>
@endsection

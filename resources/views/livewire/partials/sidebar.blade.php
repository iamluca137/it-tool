<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0"
    aria-label="Sidenav" id="sidebar-menu">
    <div class="h-screen justify-between border-e bg-white">
        <div class="h-36 w-full flex items-center justify-center"
            style="background: url('{{ asset('images/background-sidebar.svg') }}'); background-size: cover; background-position: bottom;">
            <span class="grid h-10 w-full place-content-center rounded-lg text-2xl font-bold text-white"
                style="position: sticky; top: 0; margin-bottom: calc(100% / 4);">
                <a href="{{ route('home') }}" wire:navigate>IT Tools</a>
            </span>
        </div>
        <div class="p-4 pb-32 h-[calc(100%-8rem)] overflow-y-auto scrollbar-small">
            <div class="flex items-center justify-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse mb-3">
                <button type="button" data-dropdown-toggle="language-dropdown-menu"
                    class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100">
                    @foreach ($languages as $language)
                        @if ($language->is_active)
                            <img src="{{ asset('images/countries/' . $language->icon) }}" class="h-5" />
                            <span class="ps-2">{{ $language->name }} ({{ $language->code }})</span>
                        @endif
                    @endforeach
                </button>
                <!-- Dropdown -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
                    id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        @foreach ($languages as $language)
                            <li>
                                <a href="#" wire:navigate
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  " role="menuitem">
                                    <div class="inline-flex items-center">
                                        <img src="{{ asset('images/countries/' . $language->icon) }}" class="h-5" />
                                        <span class="ps-2">{{ $language->name }} ({{ $language->code }})</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @foreach ($categories as $category)
                <ul class="space-y-1">
                    <li>
                        <details class="group [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                <span class="text-sm font-medium"> {{ $category->name }} </span>

                                <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                    <i class="fa-regular fa-chevron-down text-sm"></i>
                                </span>
                            </summary>

                            <ul class="mt-2 space-y-1 px-4">
                                @foreach ($category->subcategories as $subCategory)
                                    <li>
                                        <a href="{{ route("tools.$subCategory->slug") }}" wire:navigate
                                            class="flex justify-start items-center rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                            <span class="shrink-0">
                                                <i class="{{ $subCategory->icon }}"></i>
                                            </span>
                                            <span class="ms-3 overflow-hidden text-ellipsis whitespace-nowrap"
                                                style="display: inline-block; max-width: 100%;">
                                                {{ $subCategory->name }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </details>
                    </li>
                </ul>
            @endforeach
            <div class="flex flex-col items-center justify-center gap-4 w-full mb-2 py-6">
                <div class="justify-center items-center gap-4 flex w-full">
                    <a class="block text-teal-600 text-lg font-medium" href="https://github.com/iamluca137/it-tool">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a class="block text-teal-600 text-lg font-medium" href="https://www.instagram.com/iamluca.137/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a class="block text-teal-600 text-lg font-medium" href="{{ route('about') }}" wire:navigate>
                        <i class="fa-regular fa-circle-info"></i>
                    </a>
                </div>
                <strong class="text-xs block font-medium">IT Tools <span
                        class="text-teal-600">v2024.12.24</span></strong>
            </div>
        </div>
    </div>
</aside>

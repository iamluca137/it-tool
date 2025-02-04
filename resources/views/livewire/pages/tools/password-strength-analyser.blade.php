<section>
    <div class="mx-auto max-w-lg text-center mb-5">
        <h2 class="text-2xl font-bold text-gray-700 md:text-3xl py-3">
            {{ $tool->name }}
        </h2>
        <hr>
        <p class="text-gray-500 mt-4">
            {{ $tool->description }}
        </p>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4 max-w-2xl mx-auto">
        <div class="rounded-md bg-white p-2 shadow-sm lg:col-span-3">
            <div>
                <input type="text" id="hashed-text" wire:model.live.debounce.0ms="password"
                       placeholder="Enter your password"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"/>
                @error('password')
                <p class="text-red-500 text-sm italic col-span-3 py-2">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4 max-w-2xl mx-auto">
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <div class="w-full">
                @foreach($score as $key => $value)
                    <div class="grid grid-cols-2">
                        <span
                            class="flex-shrink-0 z-10 inline-flex items-center justify-end p-1 text-sm text-gray-500 rounded-l-md focus:ring-0 col-span-1 my-1">
                            {{$key}}:
                        </span>
                        <span
                            class="flex-shrink-0 z-10 inline-flex items-center justify-start p-1 text-sm text-black rounded-l-md focus:ring-0 col-span-1 my-1">
                            {{$value}}
                        </span>
                    </div>
                @endforeach
                <div class="mt-4 flex justify-center items-center gap-3">
                    <button
                        class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-0 transition-all"
                        wire:click="refresh()">
                        Refresh
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

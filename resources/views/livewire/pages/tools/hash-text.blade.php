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
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <div class="space-y-4">
                <div>
                    <label for="text-hash" class="block mb-2 text-sm font-medium text-gray-900">Your text to
                        hash:</label>
                    <textarea id="text-hash" rows="3"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-teal-600 focus:border-teal-600"
                              placeholder="Your string to hash..." wire:model="text"></textarea>
                </div>
                <div class="flex justify-center items-center">
                    <button type="button" wire:click="hashText"
                            class="text-white bg-teal-600 hover:bg-teal-500 focus:ring-0 rounded-md text-sm px-5 py-2 text-center w-full font-bold">
                        Hash it!
                    </button>
                </div>
                <div class="py-4">
                    <hr>
                </div>
                <div>
                    <label for="encoding" class="block mb-2 text-sm font-medium text-gray-900">Digest
                        encoding</label>
                    <ul
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-md sm:flex">
                        @foreach ($formats as $format)
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                <button wire:click="changeSelectedFormat('{{ $format }}')"
                                        class="w-full py-2 text-sm text-black hover:bg-gray-100 hover:text-teal-600 {{$selectedFormat === $format ? "bg-gray-100 text-teal-600 font-bold" : ""}}">{{ $format }}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="w-full">
                    @foreach ($hashedResults as $algorithm => $result)
                        <div class="grid grid-cols-4">
                            <button
                                class="flex-shrink-0 z-10 inline-flex items-center py-1.5 px-4 text-sm  text-center text-black bg-gray-100 rounded-l-md focus:ring-0 col-span-1 my-1">{{ strtoupper($algorithm) }}</button>
                            <div class="relative w-full col-span-3 my-1 select-none">
                                <input id="{{ $algorithm }}" type="text"
                                       class="bg-white border border-gray-200 text-gray-500 text-sm rounded-r-md focus:ring-teal-600 focus:border-teal-600 block w-full p-2"
                                       value="{{ $result }}" disabled readonly>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

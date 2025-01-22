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
                              placeholder="Your string to hash..." wire:model.live="text"></textarea>
                </div>
                <div class="py-3">
                    <hr>
                </div>
                <div>
                    <label for="encoding" class="block mb-2 text-sm font-medium text-gray-900">Digest encoding:</label>
                    <select wire:model.live="selectedEncoding"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2">
                        @foreach ($formats as $format)
                            <option value="{{ $format }}">{{ $format }}</option>
                        @endforeach
                    </select>
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

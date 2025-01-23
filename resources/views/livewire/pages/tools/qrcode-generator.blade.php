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
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Your text:</label>
                    <input type="text" id="text" wire:model.live.debounce.0ms="text"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full py-1 px-2.5"
                           placeholder="Your text..."/>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="margin" class="block mb-2 text-sm font-medium text-gray-900">Qr Margin:</label>
                        <input type="number" id="margin" wire:model.live.debounce.0ms="margin" min="0" max="10"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full py-1 px-2.5"
                               placeholder="Qr Margin..."/>
                    </div>
                    <div>
                        <label for="encoding" class="block mb-2 text-sm font-medium text-gray-900">Style:</label>
                        <select wire:model.live.debounce.0ms="style"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full py-1 px-2.5">
                            @foreach ($styles as $style)
                                <option value="{{ $style }}">{{ ucfirst($style) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label for="foreground-color" class="block mb-2 text-sm font-medium text-gray-900">Foreground
                        color:</label>
                    <input type="color" id="foreground-color" wire:model.live.debounce.0ms="foregroundColor"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500 block w-full"/>
                </div>
                <div>
                    <label for="background-color" class="block mb-2 text-sm font-medium text-gray-900">Background
                        color:</label>
                    <input type="color" id="background-color" wire:model.live.debounce.0ms="backgroundColor"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500 block w-full"
                           value="#ffffff"/>
                </div>
                <div>
                    <label for="encoding" class="block mb-2 text-sm font-medium text-gray-900">Error Correction:</label>
                    <select wire:model.live.debounce.0ms="errorCorrection"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full py-1 px-2.5">
                        @foreach ($errorCorrections as $errorCorrection)
                            <option value="{{ $errorCorrection }}">{{ ucfirst($errorCorrection) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mx-auto text-center">
                    <div class="flex justify-center p-5">{!! $qrCode !!}</div>
                    <button type="button"
                            class="py-2 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-teal-600 focus:z-10 focus:ring-0" wire:click="downloadQrCode()">
                        Download qr-code
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mx-auto max-w-lg text-center mb-5">
        <h2 class="text-2xl font-bold text-gray-700 md:text-3xl py-3">
            {{ $tool->name }}
        </h2>
        <hr>
        <p class="text-gray-500 mt-4">
            {{ $tool->description }} (Click to title to copy)
        </p>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4 max-w-2xl mx-auto" wire:poll.5ms="convert">
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <div class="grid grid-cols-4">
                <select wire:model.live.debounce.0ms="selectedFormat" id="format" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2">
                    @foreach ($formats as $format)
                        <option value="{{ $format }}">{{ $format }}</option>
                    @endforeach
                </select>
                <div class="col-span-3">
                    <input type="text" id="quantity" wire:model.live.debounce.0ms="input"
                           placeholder="Put your date string here..." required
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2"/>
                </div>
            </div>
            <div class="grid grid-cols-4">
                <span></span>
                @error('input')
                <p class="text-red-500 text-xs italic col-span-3 py-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="py-3">
                <hr>
            </div>
            <div class="w-full">
                @foreach ($results as $type => $value)
                    <div class="grid grid-cols-4">
                        <button data-copy-to-clipboard-target="{{ $type }}"
                                class="flex-shrink-0 z-10 inline-flex items-center justify-end py-1.5 px-4 text-xs text-black rounded-l-md focus:ring-0 col-span-1 my-1">{{ $type }}</button>
                        <div class="relative w-full col-span-3 my-1 select-none">
                            <input id="{{ $type }}" type="text"
                                   class="bg-white border border-gray-200 text-gray-500 text-sm rounded-r-md focus:ring-teal-600 focus:border-teal-600 block w-full p-2"
                                   value="{{ $value }}" disabled readonly>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@script
<script>
    window.addEventListener('load', function () {
        const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'token');
        const $defaultMessage = document.getElementById('default-message');
        const $successMessage = document.getElementById('success-message');

        clipboard.updateOnCopyCallback((clipboard) => {
            $defaultMessage.classList.add('hidden');
            $successMessage.classList.remove('hidden');

            setTimeout(() => {
                $defaultMessage.classList.remove('hidden');
                $successMessage.classList.add('hidden');
            }, 2000);
        });
    })
</script>
@endscript


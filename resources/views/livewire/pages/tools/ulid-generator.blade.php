<section>
    <div class="mx-auto max-w-2xl text-center mb-5">
        <h2 class="text-2xl font-bold text-gray-700 md:text-3xl py-3">
            {{ $tool->name }}
        </h2>
        <hr>
        <p class="text-gray-500 mt-4">
            {{ $tool->description }}
        </p>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4 max-w-2xl mx-auto">
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <div class="space-y-4">
                <div>
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Quantity</label>
                    <input type="number" id="quantity" wire:model.live.debounce.0ms="quantity" min="1" max="100"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                           required/>
                </div>
                <div>
                    <label for="encoding" class="block mb-2 text-sm font-medium text-gray-900">Format</label>
                    <ul
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-md sm:flex">
                        @foreach ($formats as $format)
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                <button wire:click="changeSelectedFormat('{{ $format }}')"
                                        class="w-full py-2 text-sm text-black hover:bg-gray-100 hover:text-teal-600 {{ $selectedFormat === $format ? 'bg-gray-100 text-teal-600 font-bold' : '' }}">{{ $format }}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id="ulid-generator"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 w-full p-2.5 min-h-20 flex flex-col justify-center items-center">
                    {{-- Ulid list --}}
                    @if($selectedFormat === 'Raw')
                        @foreach($ulidLists as $ulid )
                            <pre class="py-0.5">{{ $ulid }}</pre>
                        @endforeach
                    @else
                        <pre>{{ $ulidLists }}</pre>
                    @endif
                </div>
                <div class="mt-4 flex justify-center items-center gap-3">
                    <button data-copy-to-clipboard-target="ulid-generator"
                            data-copy-to-clipboard-content-type="textContent"
                            class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-0 transition-all">
                        <span id="default-message">Copy</span>
                        <span id="success-message" class="hidden inline-flex items-center">Copied!</span>
                    </button>
                    <button
                        class="inline-block rounded px-8 py-2 text-sm font-medium bg-teal-600 hover:bg-teal-500 focus:outline-none focus:ring-0 transition-all text-white"
                        wire:click="generateUlid()">
                        Generate
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@script
<script>
    window.addEventListener('load', function () {
        const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'ulid-generator');
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

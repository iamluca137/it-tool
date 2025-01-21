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
    <div class="grid grid-cols-2 gap-4 mb-4 max-w-6xl mx-auto">
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-1 lg:p-12">
            <div class="space-y-4">
                <h3 class="flex whitespace-pre-wrap not-prose font-bold">Hash</h3>
                <div>
                    <label for="text-hash" class="block mb-2 text-sm font-medium text-gray-900">Your string:</label>
                    <input type="text" id="text-hash" wire:model="text"
                           value="{{ $text }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                           placeholder="Your string..." required/>
                </div>
                <div>
                    <label for="hashed-text" class="block mb-2 text-sm font-medium text-gray-900">Hashed text:</label>
                    <input type="text" id="hashed-text" disabled readonly value="{{ $hashedText }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"/>
                </div>
                <div class="mt-4 flex justify-center items-center gap-3">
                    <button data-copy-to-clipboard-target="hashed-text"
                            class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-0 transition-all">
                        <span id="default-message">Copy</span>
                        <span id="success-message" class="hidden inline-flex items-center">Copied!</span>
                    </button>
                    <button
                        class="inline-block rounded px-8 py-2 text-sm font-medium bg-teal-600 hover:bg-teal-500 focus:outline-none focus:ring-0 transition-all text-white"
                        wire:click="hashText()">
                        Hash
                    </button>
                </div>
            </div>
        </div>
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-1 lg:p-12">
            <div class="space-y-4">
                <h3 class="flex whitespace-pre-wrap not-prose font-bold">Compare string with hash</h3>
                <div>
                    <label for="string-check" class="block mb-2 text-sm font-medium text-gray-900">Your string:</label>
                    <input type="text" id="string-check" wire:model="stringCheck"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                           placeholder="Your string..." required/>
                </div>
                <div>
                    <label for="hash-check" class="block mb-2 text-sm font-medium text-gray-900">Your hash:</label>
                    <input type="text" id="hash-check" wire:model="hashCheck"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                           placeholder="Your hash..." required/>
                </div>
                <div class="mt-4 flex justify-center items-center gap-3">
                    <button
                        class="inline-block rounded px-8 py-2 text-sm font-medium bg-teal-600 hover:bg-teal-500 focus:outline-none focus:ring-0 transition-all text-white"
                        wire:click="compareHash()">
                        Compare
                    </button>
                    <button
                        class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100">
                        Do they match? <span class="{{ $isMatch ? 'text-green-500' : 'text-red-500' }}">{{ $isMatch ? 'Yes' : 'No' }}</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@script
<script>
    window.addEventListener('load', function () {
        const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'hashed-text');
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

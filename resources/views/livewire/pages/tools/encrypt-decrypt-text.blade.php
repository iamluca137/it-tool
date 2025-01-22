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
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-1">
            <div class="space-y-4">
                <h3 class="flex whitespace-pre-wrap not-prose font-bold">Encrypt</h3>
                <div>
                    <label for="text-hash" class="block mb-2 text-sm font-medium text-gray-900">Your secret key:</label>
                    <input type="text" id="text-hash" wire:model.live.debounce.0ms="secretKeyEnc"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                           placeholder="Your secret key..." required/>
                </div>
                <div>
                    <textarea
                        class="w-full rounded-md border-gray-200 p-3 text-sm bg-gray-50  border focus:ring-teal-500 focus:border-teal-500"
                        rows="4" wire:model.live.debounce.0ms="encryptText"
                        placeholder="The string to cypher..."></textarea>
                </div>
                <div>
                    <label for="encryptedText" class="block mb-2 text-sm font-medium text-gray-900">Your text
                        encrypted:</label>
                    <textarea
                        class="w-full rounded-md border-gray-200 p-3 text-sm bg-gray-50  border focus:ring-teal-500 focus:border-teal-500"
                        id="encryptedText" placeholder="Your encrypted text..."
                        disabled readonly rows="4" wire:model.live.debounce.0ms="encryptedText"></textarea>
                </div>
                <div class="mt-4 flex justify-center items-center gap-3">
                    <button data-copy-to-clipboard-target="encryptedText"
                            class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-0 transition-all">
                        <span id="default-message">Copy</span>
                        <span id="success-message" class="hidden inline-flex items-center">Copied!</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="rounded-md bg-white p-8 shadow-lg lg:col-span-1">
            <div class="space-y-4">
                <h3 class="flex whitespace-pre-wrap not-prose font-bold">Decrypt</h3>
                <div>
                    <label for="secretKeyDec" class="block mb-2 text-sm font-medium text-gray-900">Your secret
                        key:</label>
                    <input type="text" id="secretKeyDec" wire:model.live.debounce.0ms="secretKeyDec"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                           placeholder="Your secret key..." required/>
                </div>
                <div>
                    <textarea
                        class="w-full rounded-md border-gray-200 p-3 text-sm bg-gray-50  border focus:ring-teal-500 focus:border-teal-500"
                        rows="4" wire:model.live.debounce.0ms="decryptText"
                        placeholder="Your encrypted text..."></textarea>
                </div>
                <div>
                    <label for="decryptedText" class="block mb-2 text-sm font-medium text-gray-900">Your decrypted
                        text:</label>
                    <textarea
                        class="w-full rounded-md border-gray-200 p-3 text-sm bg-gray-50  border focus:ring-teal-500 focus:border-teal-500"
                        id="decryptedText" placeholder="Your decrypted text..."
                        disabled readonly rows="4" wire:model.live.debounce.0ms="decryptedText"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
@script
<script>
    window.addEventListener('load', function () {
        const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'encryptedText');
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

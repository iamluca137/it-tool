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
                <div class="grid grid-cols-2 gap-6">
                    <div class="grid grid-cols-1 gap-4">
                        <label class="flex justify-end items-center text-end cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Uppercase (ABC...)</span>
                            <input type="checkbox" value="" class="sr-only peer"
                                {{ $includeUppercase ? 'checked' : '' }} wire:click="updateIncludeUppercase()">
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-teal-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                        <label class="flex justify-end items-center text-start cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Lowercase (abc...)</span>
                            <input type="checkbox" value="" class="sr-only peer"
                                {{ $includeLowercase ? 'checked' : '' }} wire:click="updateIncludeLowercase()">
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  peer-focus:ring-2 peer-focus:ring-teal-600  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <label class="flex justify-start items-center text-start cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Numbers (123...)</span>
                            <input type="checkbox" value="" class="sr-only peer"
                                {{ $includeNumbers ? 'checked' : '' }} wire:click="updateIncludeNumbers()">
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  peer-focus:ring-2 peer-focus:ring-teal-600  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                        <label class="flex justify-start items-center text-start cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Symbols (!-;...)</span>
                            <input type="checkbox" value="" class="sr-only peer"
                                {{ $includeSpecialChars ? 'checked' : '' }} wire:click="updateIncludeSpecialChars()">
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  peer-focus:ring-2 peer-focus:ring-teal-600  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="mb-4 flex justify-start items-center w-full">
                        <label for="price-range" class="block text-gray-600 w-1/4 text-sm">Length
                            ({{ $length }})</label>
                        <input type="range" id="price-range" wire:click="updateLength($event.target.value)"
                            wire:model.live="length" class="w-full accent-teal-600 h-1 bg-gray-200 transition-all"
                            min="1" max="512" value="{{ $length }}">
                    </div>
                </div>
                <div>
                    <textarea
                        class="w-full rounded-md border-gray-200 p-3 text-sm bg-gray-50  border focus:ring-teal-500 focus:border-teal-500 text-center"
                        readonly rows="8" id="token" placeholder="The token...">{{ $generatedToken }}</textarea>
                </div>
                <div class="mt-4 flex justify-center items-center gap-3">
                    <button
                        class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-0 transition-all"
                        wire:click="copyToClipboard()">
                        Copy
                    </button>
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
@script
    <script>
        window.addEventListener('copy-to-clipboard', event => {
            /* Get the text field */
            const copyText = document.getElementById("token");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /*For mobile devices*/

            /* Copy the text inside the text field */
            document.execCommand("copy");
        });
    </script>
@endscript

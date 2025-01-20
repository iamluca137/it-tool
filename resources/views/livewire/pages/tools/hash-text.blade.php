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
                    <label for="text-hash" class="block mb-2 text-sm font-medium text-gray-900">Your text to hash:</label>
                    <textarea id="text-hash" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-teal-600 focus:border-teal-600"
                        placeholder="Your string to hash:"></textarea>
                </div>
                <div class="py-4">
                    <hr>
                </div>
                <div>
                    <label for="type-text-hash" class="block mb-2 text-sm font-medium text-gray-900">Digest
                        encoding</label>
                    <select id="type-text-hash"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-teal-600 focus:border-blue-500 block w-full p-1.5">
                        <option value="US">Binary (base 2)</option>
                        <option value="CA">Hexadecimal (base 16)</option>
                        <option value="FR">Base64 (base 64)</option>
                        <option value="DE">Base64url (base 64 with url safe chars)</option>
                    </select>
                </div>
                <div class="w-full">
                    @foreach ($typeEncrypts as $type)
                        <div class="flex items-center">
                            <button
                                class="flex-shrink-0 z-10 inline-flex items-center py-1.5 px-4 text-sm  text-center text-black bg-gray-200  border rounded-sm focus:ring-0 min-w-1/3">{{ $type }}</button>
                            <div class="relative w-full">
                                <input id="account-id" type="text"
                                    class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-md focus:ring-teal-600 focus:border-teal-600 block w-full p-1.5"
                                    value="fdasfdas" disabled readonly>
                                <button data-copy-to-clipboard-target="account-id"
                                    data-tooltip-target="tooltip-account-id"
                                    class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500  hover:bg-gray-100  rounded-md p-2 inline-flex items-center justify-center">
                                    <span id="default-icon-account-id">
                                        <i class="fa-regular fa-copy"></i>
                                    </span>
                                    <span id="success-icon-account-id" class="hidden inline-flex items-center">
                                        <i class="fa-regular fa-check"></i>
                                    </span>
                                </button>
                                <div id="tooltip-account-id" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-md shadow-sm opacity-0 tooltip ">
                                    <span id="default-tooltip-message-account-id">Copy to clipboard</span>
                                    <span id="success-tooltip-message-account-id" class="hidden">Copied!</span>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

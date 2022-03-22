<form wire:submit.prevent='approve'>
    <div class="overflow-hidden shadow sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6 pt-4">
                <div class="col-span-12 sm:col-span-6">
                    <label for="license"
                        class="block text-sm font-medium text-gray-700">
                    Vehicle License Number</label>
                    <input type="text" wire:model='license_number' name="license"
                        id="license" autocomplete="given-name"
                        class="block w-full h-12 px-3 py-2 mt-1 bg-white border border-gray-300 @error('name') border-red-500 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('license_number')
                        <span
                            class="flex items-center mt-1 ml-1 text-xs font-bold tracking-wide text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="expiry_date"
                        class="block text-sm font-medium text-gray-700">
                    License Expiry Date</label>
                    <input type="date" wire:model='expiry_date' name="expiry_date"
                        id="expiry_date" autocomplete=""
                        class="block w-full h-12 px-3 py-2 mt-1 bg-white border border-gray-300 @error('name') border-red-500 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('expiry_date')
                        <span
                            class="flex items-center mt-1 ml-1 text-xs font-bold tracking-wide text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="submit"
            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            Extend Expiry Date
        </button>
        <button @click="approve = false" type="button"
            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel
        </button>
    </div>
    </form>

<div class="container px-6 py-8 mx-auto">
    <h3 class="text-3xl font-bold text-gray-700">Change Vehicle Owner</h3>
    <form wire:submit.prevent='changeOwner'>
        <div class="p-6 space-y-6">

            <h3 class="pt-3 text-2xl font-bold text-gray-700">Owner's Details</h3>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First
                        Name</label>
                    <input wire:model='first_name' type="text" name="first-name" id="first-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="middle-name" class="block mb-2 text-sm font-medium text-gray-900">Middle
                        Name</label>
                    <input wire:model='middle_name' type="text" name="middle-name" id="middle-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last
                        Name</label>
                    <input wire:model='last_name' type="text" name="last-name" id="last-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input wire:model='email' type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900">Phone
                        Number</label>
                    <input wire:model='phone' type="number" name="phone-number" id="phone-number"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                    <select wire:model='gender' id="gender"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="dob" class="block mb-2 text-sm font-medium text-gray-900">Date of Birth</label>
                    <input wire:model='dob' type="date" name="dob" id="dob"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="marital-status" class="block mb-2 text-sm font-medium text-gray-900">Marital
                        Status</label>
                    <select wire:model='marital_status' id="marital-status"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                        <option value="">Select Marital Status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="religion" class="block mb-2 text-sm font-medium text-gray-900">Religion</label>
                    <input wire:model='religion' type="text" name="religion" id="religion"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900">Nationality</label>
                    <input wire:model='nationality' type="text" name="nationality" id="nationality"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                    <input wire:model='address' type="text" name="address" id="address"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="town" class="block mb-2 text-sm font-medium text-gray-900">Town</label>
                    <input wire:model='town' type="text" name="town" id="town"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="lga" class="block mb-2 text-sm font-medium text-gray-900">L.G.A
                    </label>
                    <input wire:model='lga' type="text" name="lga" id="lga"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="state" class="block mb-2 text-sm font-medium text-gray-900">State of Origin</label>
                    <input wire:model='state_of_origin' type="text" name="state" id="state"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="nin" class="block mb-2 text-sm font-medium text-gray-900">NIN
                    </label>
                    <input wire:model='national_id' type="text" name="nin" id="nin"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                </div>
            </div>
            <div class="text-right">
                {{-- <button
                    class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-200 font-lg rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">Register
                </button> --}}
                <button type="submit" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-base px-6 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Owner Details </button>
            </div>
        </div>
    </form>
</div>

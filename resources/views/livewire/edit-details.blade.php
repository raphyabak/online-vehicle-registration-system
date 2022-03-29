<div class="container px-6 py-8 mx-auto">
    <h3 class="text-3xl font-bold text-gray-700">Register Vehicle</h3>
    <form wire:submit.prevent='editDetails'>
        <div class="p-6 space-y-6">
            <h3 class="text-2xl font-bold text-gray-700 pt-3">Vehicle Details</h3>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="Vehicle_make" class="text-sm font-medium text-gray-900 block mb-2">Vehicle Make</label>
                    <input wire:model='vehicle_make' type="text" name="Vehicle_make" id="Vehicle_make"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('vehicle_make') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('vehicle_make')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="vehicle_model" class="text-sm font-medium text-gray-900 block mb-2">Vehicle
                        Model</label>
                    <input wire:model='vehicle_model' type="text" name="vehicle_model" id="vehicle_model"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('vehicle_model') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('vehicle_model')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="make_year" class="text-sm font-medium text-gray-900 block mb-2">Year of Make</label>
                    <input wire:model='make_year' type="text" name="make_year" id="make_year"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('make_year') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('make_year')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="chasis_number" class="text-sm font-medium text-gray-900 block mb-2">Vehicle Chasis
                        Number</label>
                    <input wire:model='chasis_number' type="text" name="chasis_number" id="chasis_number"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('chasis_number') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('chasis_number')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="engine_number" class="text-sm font-medium text-gray-900 block mb-2">Vehicle Engine
                        Number</label>
                    <input wire:model='engine_number' type="text" name="engine_number" id="engine_number"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('engine_number') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('engine_number')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="vehicle_color" class="text-sm font-medium text-gray-900 block mb-2">Vehicle
                        Color</label>
                    <input wire:model='vehicle_color' type="text" name="vehicle_color" id="vehicle_color"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('vehicle_color') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('vehicle_color')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Category</label>
                    <select wire:model='category' id="category"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('category') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                        <option value="">Select Category</option>
                        <option value="private">Private</option>
                        <option value="commercial">Commercial</option>
                    </select>
                    @error('category')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="vehicle_type" class="text-sm font-medium text-gray-900 block mb-2">Vehicle Type</label>
                    <select wire:model='vehicle_type' id="vehicle_type"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('vehicle_type') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                        <option value="">Select Vehicle Type</option>
                        <option value="bikes">Bikes</option>
                        <option value="muvs">MUVs</option>
                        <option value="cars">Cars</option>
                        <option value="vans">Vans</option>
                        <option value="buses">Buses</option>
                        <option value="caravans">Caravans</option>
                        <option value="trucks">Trucks</option>
                        <option value="public utility">Public Utility</option>
                        <option value="construction Machinery">Construction Machinery</option>
                        <option value="Agriculture Machinery">Agriculture Machinery</option>
                        <option value="Industrial Machinery">Industrial Machinery</option>
                        <option value="forklifts">Forklifts</option>
                    </select>
                    @error('vehicle_type')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="purchase_date" class="text-sm font-medium text-gray-900 block mb-2">Date of
                        Purchase</label>
                    <input wire:model='date_of_purchase' type="date" name="purchase_date" id="purchase_date"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('date_of_purchase') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('date_of_purchase')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-700 pt-3">Owner's Details</h3>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="text-sm font-medium text-gray-900 block mb-2">First
                        Name</label>
                    <input wire:model='first_name' type="text" name="first-name" id="first-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('first_name') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('first_name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="middle-name" class="text-sm font-medium text-gray-900 block mb-2">Middle
                        Name</label>
                    <input wire:model='middle_name' type="text" name="middle-name" id="middle-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('middle_name') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('middle_name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="text-sm font-medium text-gray-900 block mb-2">Last
                        Name</label>
                    <input wire:model='last_name' type="text" name="last-name" id="last-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('last_name') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('last_name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                    <input wire:model='email' type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('email') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="phone-number" class="text-sm font-medium text-gray-900 block mb-2">Phone
                        Number</label>
                    <input wire:model='phone' type="number" name="phone-number" id="phone-number"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('phone') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('phone')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="gender" class="text-sm font-medium text-gray-900 block mb-2">Gender</label>
                    <select wire:model='gender' id="gender"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('gender') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="dob" class="text-sm font-medium text-gray-900 block mb-2">Date of Birth</label>
                    <input wire:model='dob' type="date" name="dob" id="dob"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('dob') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('dob')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="marital-status" class="text-sm font-medium text-gray-900 block mb-2">Marital
                        Status</label>
                    <select wire:model='marital_status' id="marital-status"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('marital_status') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                        <option value="">Select Marital Status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select>
                    @error('marital_status')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="religion" class="text-sm font-medium text-gray-900 block mb-2">Religion</label>
                    <input wire:model='religion' type="text" name="religion" id="religion"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('religion') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('religion')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="nationality" class="text-sm font-medium text-gray-900 block mb-2">Nationality</label>
                    <input wire:model='nationality' type="text" name="nationality" id="nationality"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('nationality') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('nationality')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="address" class="text-sm font-medium text-gray-900 block mb-2">Address</label>
                    <input wire:model='address' type="text" name="address" id="address"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('address') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('address')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="town" class="text-sm font-medium text-gray-900 block mb-2">Town</label>
                    <input wire:model='town' type="text" name="town" id="town"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('town') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('town')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="state" class="text-sm font-medium text-gray-900 block mb-2">State of Origin</label>
                    <select wire:model='state' type="text" name="state" id="state"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('state') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                        <option value="">Select State of Origin</option>
                        @foreach ($states as $state)
                        <option value="{{$state->name}}">{{$state->name}}</option>
                        @endforeach
                    </select>
                    @error('state')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="lga" class="text-sm font-medium text-gray-900 block mb-2">L.G.A
                    </label>
                    <select wire:model='lga' type="text" name="lga" id="lga"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('lga') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                         required>
                         <option value="">Select LGA</option>
                        @foreach ($lgas  as $lga)
                        <option value="{{$lga->local_name}}">{{$lga->local_name}}</option>
                        @endforeach
                    </select>
                    @error('lga')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="nin" class="text-sm font-medium text-gray-900 block mb-2">NIN
                    </label>
                    <input wire:model='national_id' type="text" name="nin" id="nin"
                        class="shadow-sm bg-gray-50 border border-gray-300 @error('national_id') border-red-500 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="" required>
                    @error('national_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="text-right">
                {{-- <button
                    class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-200 font-lg rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">Register
                </button> --}}
                <button type="submit"
                    class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-base px-6 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Details</button>
            </div>
        </div>
    </form>
</div>

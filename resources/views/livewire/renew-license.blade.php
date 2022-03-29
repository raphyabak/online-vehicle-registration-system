<div class="container px-6 py-8 mx-auto">
    <div class="flex justify-between">
        <h3 class="text-3xl font-bold text-gray-700">Renew Licenses</h3>
        {{-- <a href="{{ url('register-vehicle') }}"
            class="px-6 py-2 text-xl font-medium text-white transition duration-500 ease-in-out transform bg-gray-600 rounded-lg shadow-md hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 ">Register
            Vehicle
        </a> --}}
    </div>
    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Vehicle License Number
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Vehicle Model
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Vehicle Color
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Make Year
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Engine Number
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                License Expiry Date
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @forelse ($vehicles as $vehicle)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">@if ( $vehicle->license !== null)
                                        {{ $vehicle->license->license_number }}
                                        @else
                            License not yet assigned
                                    @endif</div>

                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $vehicle->vehicle_model }}</div>

                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $vehicle->vehicle_color }}</div>

                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $vehicle->make_year }}</div>

                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $vehicle->engine_number }}</div>

                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">@if ($vehicle->license !== null)
                                        {{ date('M j, Y g:ia', strtotime($vehicle->license->expiry_date)) }}
                                 @else
                              Expiry date not yet assigned
                                    @endif</div>

                                </td>

                                <td
                                    class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                    @if ($vehicle->license !== null)
                                    @if ($vehicle->license->expiry_date > now() )
                                    <button
                                        class="text-white cursor-not-allowed bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900"
                                        disabled>License Active
                                    </button>
                                @elseif($vehicle->license->expiry_date > now() || $vehicle->license->renew_notify == 1)
                                <button
                                        class="text-white cursor-not-allowed bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900"
                                        disabled>License Renew Pending Approval
                                    </button>
                               @else
                                    <button wire:click='renew({{$vehicle->license->id}})'
                                        class="text-white bg-green-600 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-green-900">Renew License
                                    </button>
                                @endif
                                    @else
                                    <button
                                    class="text-white cursor-not-allowed bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900"
                                    disabled>Vehicle Pending Approval
                                </button>
                                    @endif


                                </td>
                            </tr>
                        @empty
                        <p> You have no License Expired</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


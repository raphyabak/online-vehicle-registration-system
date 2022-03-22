<div class="container px-6 py-8 mx-auto">
    <div class="flex justify-between">
        <h3 class="text-3xl font-bold text-gray-700">License Renew Requests</h3>
        {{-- <a href="{{url('register-vehicle')}}"
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
                                License Number
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                               Expired At
                            </th>

                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @forelse ($licenses as $license)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $license->license_number }}</div>

                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ date('M j, Y g:ia', strtotime($license->expiry_date)) }}</div>

                                </td>


                                <td
                                    class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">

                                    <div class="flex justify-between" x-data="{approve:false}" @click.away="approve = false"
                                    @close.stop="approve = false" @vehicle-approved.window="approve = false">

                                        <button @click="approve = true"
                                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Approve License Renewal</button>
                                        <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title"
                                            role="dialog" aria-modal="true" x-show="approve" x-cloak>
                                            <div
                                                class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                                <div @click="approve = ! approve"
                                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                                                    aria-hidden="true"></div>
                                                <!-- This element is to trick the browser into centering the modal contents. -->
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                    aria-hidden="true">&#8203;</span>

                                                <div
                                                    class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">

                                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                                        {{-- @include('addUser') --}}
                                                        @livewire('admin.approve-license-renew', ['license' => $license], key($license->id))
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <p> You have no license renew request</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

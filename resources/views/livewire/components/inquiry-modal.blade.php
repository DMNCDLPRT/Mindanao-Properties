@if (!Auth::check())
    {{-- un-authenticated user inquiry modal --}}
    <div x-show="isOpen" @click="isOpen = false" class="fixed inset-0 flex items-center justify-center z-50">
        <div @click="closeModal" class="fixed inset-0 bg-black opacity-50"></div> <!-- Background overlay -->
        <div @click.stop class="container mx-auto md:w-2/3 w-full p-2 relative">
            <div class="flex justify-center items-center py-12 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
                id="inquiryModal">
                <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                    <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">

                        <!-- Listor Details -->
                        <div class="flex justify-center gap-10 mb-6">
                            <!-- Lister Image -->
                            <div class="flex items-center">
                                <img src="{{ asset($property->user->profile_photo_url) }}" alt=""
                                    class="border-2 border-white w-20 h-20 rounded-full shadow-md">
                            </div>
                            <!-- Lister Details -->
                            <div>
                                <h5 class="pt-4 mb-2 text-lg font-normal">{{ $property->user->name }}</h5>
                                <p class="font-light text-base">Contact Person</p>
                            </div>

                        </div>
                        <div class="mt-10 mb-4">
                            <h1
                                class="flex justify-center text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                                Enter phone number to show inquire the listors number.</h1>
                        </div>

                        <label for="phone"
                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Phone
                            Number</label>
                        <div class="relative mb-5 mt-2">
                            <input class="border border-gray-300 rounded-lg" style="width: 430px; height:50px"
                                id="phone" name="phone" type="tel" placeholder="XXX-XXX-XXXX">
                        </div>

                        <div class="flex items-center justify-center w-full">
                            <button
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Submit</button>
                            {{-- <button @click="isOpen = false"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm">Cancel</button> --}}
                        </div>
                        <button @click="isOpen = false"
                            class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                            aria-label="close modal" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>

                        <!-- terms and condition -->

                        <div class="mt-4 text-xs overflow-wrap-break-word text-center">
                            <span>
                                By clicking Contact Seller, you are accepting Mindanao Properties
                            </span>
                            <br>
                            <a href="" style="color: #0cf">Terms and Condition</a>
                            <span>and</span>
                            <a href="" style="color: #0cf">Privacy Policy</a>
                            <span>page.</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- authenticated user inquiry modal --}}
    <div x-show="isOpen" @click="isOpen = false" class="fixed inset-0 flex items-center justify-center z-50">
        <div @click="closeModal" class="fixed inset-0 bg-black opacity-50"></div> <!-- Background overlay -->
        <div @click.stop class="container mx-auto md:w-2/3 w-full p-2 relative">

            <div class="flex justify-center items-center py-12 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 rounded-md"
                id="inquiryModal">
                <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                    <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">

                        <!-- Listor Details -->
                        <div class="flex justify-center gap-10 mb-6">
                            <!-- Lister Image -->
                            <div class="flex items-center">
                                <img src="/assets/images/logo.svg" alt=""
                                    class="border-2 border-white w-20 h-20 rounded-full shadow-md">
                            </div>
                            <!-- Lister Details -->
                            <div>
                                <h5 class="pt-4 mb-2 text-lg font-normal">{{ $property->user->name }}</h5>
                                <p class="font-light text-base">Contact Person</p>
                            </div>

                        </div>

                        <div class="flex justify-center mt-10 mb-6">
                            <span class="mr-12 text-xl font-bold">+639751005002</span>
                        </div>




                        <button @click="isOpen = false"
                            class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                            aria-label="close modal" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

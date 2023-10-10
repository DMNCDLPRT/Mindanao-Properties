<!-- Single Property -->
<section class="px-4 py-4 bg-gray-200 lg:px-20 lg:py-8">

    <div class="flex flex-wrap lg:space-x-12">

        <div class="lg:w-3/5">

            <h1
                class="mt-4 mb-4 leading-tight tracking-tight text-2xl font-medium text-center text-gray-900 lg:text-3xl">
                {{ $property->title }}</h1>


            {{--             
            <!-- property image display div -->
            <div class="img-display">
                <div class="img-showcase">
                   <!-- main image display -->
                    <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="property" class="w-full">
                    <img src="https://images.unsplash.com/photo-1448630360428-65456885c650?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=867&q=80"
                        alt="property" class="w-full">
                    <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                        alt="property" class="w-full">
                    <img src="https://images.unsplash.com/flagged/photo-1564767609342-620cb19b2357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                        alt="property" class="w-full">


                </div>

                <div class="flex mt-4 space-x-4 img-select">
                    <div class="img-item">
                        <a href="" data-id="1">
                            <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="" data-id="2">
                            <img src="https://images.unsplash.com/photo-1448630360428-65456885c650?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=867&q=80"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="" data-id="3">
                            <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="" data-id="4">
                            <img src="https://images.unsplash.com/flagged/photo-1564767609342-620cb19b2357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>

                </div>
            </div> --}}
            <div x-data="{ isOpen: false }" >
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-2">
                    <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
                        <img  @click="isOpen = true" class="h-full w-full object-cover cursor-pointer"
                            src="https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                            alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
                        <img @click="isOpen = true" class="h-full w-full object-cover  cursor-pointer"
                            src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1399&q=80"
                            alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <img  @click="isOpen = true" class="h-full w-full object-cover cursor-pointer"
                            src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <img  @click="isOpen = true" class="h-full w-full object-cover cursor-pointer"
                            src="https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt="">
                    </div>
                    <div class="relative overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        {{-- image modal --}}

                        <button @click="isOpen = true"
                            class="text-white text-xl absolute inset-0  bg-slate-900/80 flex justify-center flex-col items-center cursor-pointer">
                            <x-fas-image class="h-10"/>
                            <span class="mt-2">More Photos</span>
                        </button>

                        @livewire('components.image-modal')
                   
                     


                        <img class="h-full w-full object-cover "
                            src="https://images.unsplash.com/photo-1560393464-5c69a73c5770?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80"
                            alt="">
                    </div>
                </div>
            </div>









            <div class="mt-10">
                <!-- div for description -->
                <div>
                    <div id="description-container"
                        class="description-content overflow-hidden max-h-20 transition duration-300 ease-in-out">
                        <div id="content"></div>
                        <script>
                            // Get the content div
                            const contentDiv = document.getElementById('content');

                            // Your HTML string with tags (assuming $property->description contains the HTML content)
                            const htmlString = `{!! $property->description !!}`;

                            // Set the innerHTML of the contentDiv to your HTML string
                            contentDiv.innerHTML = htmlString;
                        </script>
                    </div>
                    <button id="read-more-btn"
                        class="flex justify-center w-full text-blue-500 hover:underline focus:outline-none">Read
                        More...</button>
                </div>

                <script>
                    const descriptionContainer = document.getElementById('description-container');
                    const readMoreBtn = document.getElementById('read-more-btn');

                    readMoreBtn.addEventListener('click', function() {
                        descriptionContainer.classList.toggle('max-h-20'); // Adjust the class based on your design
                        if (descriptionContainer.classList.contains('max-h-20')) {
                            readMoreBtn.textContent = 'Read More...';
                        } else {
                            readMoreBtn.textContent = 'Read Less';
                        }
                    });
                </script>

                {{-- add property details here --}}


                <div class="mt-10">
                    <h2 class="mb-4 text-2xl font-bold">Property Details</h2>
                    <!-- property details wrapper -->
                    @if ($property)
                        <div class="">
                            <!-- loop through labels and data -->

                            @foreach ([
        'Subdivision Name' => ['value' => $property->propertyInfo->subdivision_name],
        'Address' => ['value' => $property->propertyLocation->display_name],
        'Block and Lot/Unit Number' => ['value' => $property->block_lot_number],
        'Build year' => ['value' => $property->propertyInfo->build_year],
        'Car spaces' => ['value' => $property->propertyInfo->car_spaces],
        'Classification' => ['value' => $property->propertyInfo->classification],
        'Fully furnished' => ['value' => $property->propertyInfo->fully_furnished],
        'Beedrooms' => ['value' => $property->propertyInfo->bedrooms],
        'Bathrooms' => ['value' => $property->propertyInfo->bathrooms],
        'Floor area (m2)' => ['value' => $property->propertyInfo->floor_area],
        'Land size (m2)' => ['value' => $property->propertyInfo->land_size],
    ] as $label => $data)
                                @if ($data['value'])
                                    <div class="py-3 grid grid-cols-2 gap-5 border-t border-solid border-gray-300">
                                        <!-- Listing label -->
                                        <div class="flex items-center gap-8 min-w-0 text-sm">
                                            <!-- icons span -->
                                            {{-- @if ($label)
                                                <span class="icon">
                                                    <x-dynamic-component  :component="$data['icon']" />
                                                </span>
                                            @endif                                  --}}


                                            <span class="whitespace-no-wrap overflow-hidden overflow-ellipsis">
                                                {{ $label }}
                                            </span>
                                        </div>
                                        <div class="flex items-center text-sm font-bold">
                                            {{ $data['value'] }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div>No data available.</div>
                    @endif
                </div>


                {{-- features cards or aminities --}}
                {{-- <div class="flex flex-col">
                    <h2 class="mb-4 text-2xl font-bold">Property Features</h2>

                    <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>

                            <div class="ml-4">
                                <h2 class="font-semibold">574 Messages</h2>
                                <p class="mt-2 text-sm text-gray-500">Last opened 4 days ago</p>
                            </div>
                        </div>

                        <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>

                            <div class="ml-4">
                                <h2 class="font-semibold">1823 Users</h2>
                                <p class="mt-2 text-sm text-gray-500">Last checked 3 days ago</p>
                            </div>
                        </div>
                        <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-red-100 bg-red-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>

                            <div class="ml-4">
                                <h2 class="font-semibold">548 Posts</h2>
                                <p class="mt-2 text-sm text-gray-500">Last authored 1 day ago</p>
                            </div>
                        </div>
                        <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>

                            <div class="ml-4">
                                <h2 class="font-semibold">129 Comments</h2>
                                <p class="mt-2 text-sm text-gray-500">Last commented 8 days ago</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- features cards or aminities --}}
                {{-- {{dd($property)}} --}}

                <div class="rounded-lg bg-white p-8 shadow-md mt-10">
                    <h3 class="uppercase font-semibold text-base text-gray-800 mb-6">Property Features</h3>
                    <div class="grid grid-cols-6 gap-y-8">
                        <div class="flex items-center flex-col">
                            <!-- feature icon -->
                            <span></span>
                            <span class="text-gray-700 text-sm capitalize mt-2 text-center"></span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Inquire section -->
        <div class="lg:w-1/3 lg:mt-4 lg:mb-10 mx-auto sm:w-full">
            <div class="bg-white min-h-302 top-20 shadow-md rounded-md px-8 py-10 sticky">
                <div class="text-center mb-8 text-lg font-bold">
                    <h5>Ask About the Property?</h5>
                </div>

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
                <div class="flex flex-col items-center sm:flex-row sm:items-center justify-center gap-4 mb-10">
                    <span
                        class="mr-12 text-lg font-medium text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-white">+63975</span>

                    <!-- inquiry modal -->
                    <div x-data="{ isOpen: false }" class="z-40">
                        <!-- Inquire Button -->
                        <button @click="isOpen = true"
                            class="text-lg text-orange-500 hover:text-white font-bold cursor-pointer border border-solid border-orange-500 hover:bg-orange-500 px-8 py-2 rounded-md">
                            Inquire
                        </button>

                        <!-- inquiry modal content-->
                        @livewire('components.inquiry-modal', ['property' => $property])

                        <!-- Backdrop -->
                        <div x-show="isOpen" @click="isOpen = false" class="fixed inset-0 bg-black opacity-25"></div>
                    </div>
                </div>

                <form action="" method="">
                    <div class="mb-4">
                        <input id="name" name="name" type="text" placeholder="Full Name*"
                            class="border border-gray-300 rounded-lg w-full py-2 px-4 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <input id="email" name="email" type="email" placeholder="Email*"
                            class="border border-gray-300 rounded-lg w-full py-2 px-4 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <!-- <span class="text-lg font-bold mr-2">+63</span> -->
                        <input
                            class="border border-gray-300 w-full rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500"
                            id="phone" name="phone" type="tel" placeholder="Phone Number*">
                    </div>
                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="bg-blue-500 text-white rounded-lg py-2 px-4 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Contact Agent
                        </button>
                    </div>
                </form>
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
</section>
